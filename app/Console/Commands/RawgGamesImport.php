<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Game;
use App\Models\Category;
use Illuminate\Support\Facades\Http;

class RawgGamesImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rawg:import-games';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
        
            public function handle()
            {
                $apiKey = config('rawg.api_key');
                $apiUrl = "https://api.rawg.io/api/games?key={$apiKey}";
        
        
        
                $page = 1;
                $pageSize = 40; // عدد الألعاب في كل صفحة. تحقق من الحد الأقصى المسموح به في وثائق RAWG
        
                do {
                    $response = Http::get($apiUrl, ['page' => $page, 'page_size' => $pageSize]);
        
        
                    if ($response->successful()) {
                        $data = $response->json();
                        $gamesData = $data['results'];
        
                        foreach ($gamesData as $gameData) {
                            // معالجة التصنيفات
                            foreach ($gameData['genres'] as $genreData) {
                                $category = Category::firstOrCreate(['title' => $genreData['name']]);
        
        
                                 Game::create([
                                    'title' => $gameData['name'],
                                    'size' => null, // RAWG لا يوفر حجم اللعبة مباشرة
                                    'image' => $gameData['background_image'],
                                    'url_video' => $this->getFirstVideoUrl($gameData), // دالة مساعدة لاستخراج الفيديو
                                     'category_id' => $category->id,
                                ]);
        
                            }
        
                        }
        
                        $page++; // انتقل للصفحة التالية
        
        
        
                    } else {
        
                        $this->error('Failed to fetch data from RAWG API: ' . $response->status());
                        break; // توقف عن التكرار في حالة وجود خطأ
                    }
        
        
                } while ($gamesData !== null && count($gamesData) > 0 && $page * $pageSize <= 500 ); // تحديد 500 لعبة كحد أقصى. غيره إذا لزم الأمر
        
        
        
                $this->info('Games imported successfully.');
        
        
            }
        
        
            // دالة مساعدة لاستخراج أول رابط فيديو من البيانات
        
            private function getFirstVideoUrl(array $gameData): ?string
            {
        
        
               if (isset($gameData['clip']) && isset($gameData['clip']['clips']['full'])) {
                      return $gameData['clip']['clips']['full'];
        
                }
        
        
                return null;
        
        
            }
        
        }
        
           
    


