<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game ;
use Illuminate\Support\Str ;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            'uuid'=>Str::uuid(),
            'title' =>'ماريوو' ,
            'size'=>'5.2',
            'description'=> 'لعبة جميلة وسهلة وممتعة ',
           'image' => json_encode(['url' => 'https://example.com/image.jpg']),
            'url_video'=>'https://nbddy.com',
            'category_id'=>'1',
            'price'=>'100',
            'type'=>'freement',
            ]);
            Game::create([
                'uuid'=>Str::uuid(),
                'title' =>'سبونجبوب' ,
                'size'=>'3.4',
                'description'=> 'لعبة جميلة وسهلة وممتعة ',
               'image' => json_encode(['url' => 'https://exam.com/image.jpg']),
                'url_video'=>'https://nby.com',
                'category_id'=>'1',
                'price'=>'200',
                'type'=>'freement',
                ]);
                Game::create([
                    'uuid'=>Str::uuid(),
                    'title' =>'سيارات' ,
                    'size'=>'3.1',
                    'description'=> 'لعبة جميلة وسهلة وممتعة ',
                   'image' => json_encode(['url' => 'https://exam.com/image.jpg']),
                    'url_video'=>'https://nby.com',
                    'category_id'=>'1',
                    'price'=>'20',
                    'type'=>'freement',
                    ]);

                    Game::create([
                        'uuid'=>Str::uuid(),
                        'title' =>'cars' ,
                        'size'=>'5.1',
                        'description'=> 'this is a good for playing ',
                       'image' => json_encode(['url' => 'https://exam.com/imvdvage.jpg']),
                        'url_video'=>'https://nby.com',
                        'category_id'=>'1',
                        'price'=>'200',
                        'type'=>'payment',
                        ]);

                        Game::create([
                            'uuid'=>Str::uuid(),
                            'title' =>'busboy' ,
                            'size'=>'5.1',
                            'description'=> 'this is a good for playing ',
                           'image' => json_encode(['url' => 'https://exam.com/imvdvage.jpg']),
                            'url_video'=>'https://nby.com',
                            'category_id'=>'1',
                            'price'=>'200',
                            'type'=>'payment',
                            ]);
                            Game::create([
                                'uuid'=>Str::uuid(),
                                'title' =>'nnnnn' ,
                                'size'=>'2.1',
                                'description'=> 'this is a good for playing ',
                               'image' => json_encode(['url' => 'https://exam.com/imvdvage.jpg']),
                                'url_video'=>'https://nby.com',
                                'category_id'=>'1',
                                'price'=>'200',
                                'type'=>'payment',
                                ]);
                                Game::create([
                                    'uuid'=>Str::uuid(),
                                    'title' =>'wonder' ,
                                    'size'=>'1.5',
                                    'description'=> 'this is a good for playing ',
                                   'image' => json_encode(['url' => 'https://exam.com/imvdvage.jpg']),
                                    'url_video'=>'https://nby.com',
                                    'category_id'=>'1',
                                    'price'=>'200',
                                    'type'=>'payment',
                                    ]);

    }
}
