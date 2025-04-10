<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Category;
use Illuminate\Support\Facades\Http;

class FetchController extends Controller
{
    

public function fetchGames()
{
    // جلب البيانات من API
    $response = Http::get('https://www.freetogame.com/pc');

    if ($response->successful()) {
        $gamesData = $response->json();

        foreach ($gamesData as $gameData) {
            // تحقق مما إذا كانت الفئة موجودة، وإذا لم تكن، قم بإنشائها
            //$category = Category::firstOrCreate(['name' => $gameData['category']]);

            // تخزين اللعبة في قاعدة البيانات
            Game::create([
                'title' => $gameData['title'],
               // 'size' => $gameData['size'],
               // 'image' => $gameData['image'],
                //'url_video' => $gameData['url_video'],
                //'category_id' => $category->id,
            ]);
        }

        return redirect()->back()->with('success', 'تم جلب الألعاب بنجاح!');
    } else {
        return redirect()->back()->withErrors('فشل في جلب البيانات');
    }
}

}
