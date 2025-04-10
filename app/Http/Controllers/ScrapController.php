<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game ;
use App\Models\Category ; 
use GuzzleHttp\Client ;
use Illuminate\Support\Str ;


class ScrapController extends Controller
{
   /* public function scrap(){
        $client =  new Client() ;
        $crawler = $client->get('http://api.rawg.io/api/games',['query'=>['key'=>'f26ec48d248446949aa88d9e65d66bd9']]) ;
        $gameData = json_decode($crawler->filter('body')->text(),true) ;
        foreach($gameData['results'] as $gameData){
            $category = Category::firstOrCreate(['title'=>$gameData['category']]) ;
            Game::create([
                'name'=>$gameData['name'],
                'size'=>$gameData['size'],
                'description'=>$gameData['description'] ,
                'image'=>json_encode('images'),
                'url_video'=> $gameData['url_video'],
                'category_id'=>$category->id,
                'price'=>$gameData['price'],
                'type'=>$gameData['type']
            ]);
        }  
              return response()->json(['message'=>'Games scrapped successfully']) ;

    }*/
//
   /* public function fetchGames(){
        $client = new Client() ;
        $apikey = 'f26ec48d248446949aa88d9e65d66bd9' ;
        $response = $client->request('GET','http://api.rawg.io/api/games',[
            'query'=>[
                'key'=>$apikey,
                'page_size'=>20,
            ]
            ]);
            $games = json_decode($response->getBody()->getContents(),true) ;
            foreach($games['results'] as $gameData){

                Game::create([
                    'uuid'=>'hgjhgkgjh',
                    'title'=>$gameData['name'],
                    'size'=>rand(100,500),
                    'description'=>$gameData['description_raw']??'',
                    'image'=>json_encode('images'),
                    'price'=>$gameData['price']??0.0,
                    'type'=>$gameData['genres'][0]['name']??'',
                    'category_id'=>1,
                    'type'=>'مجاني',
                    'url_video'=>'jkhjkjh',
               
                ]);
            }
            return response()->json(['message'=>'Games fetched and stored successfully']) ;

    }
   
    public function fetchGames(){
        $client = new Client() ;
        $apikey = 'f26ec48d248446949aa88d9e65d66bd9 ';
        $response = $client->request('GET','http://api.rawg.io/api/games',[
            'query'=>[
                'key'=>$apikey,
                'page_size'=>10,
            ]
            ]);
            $games = json_decode($response->getBody()->getContents(),true) ;
            foreach($games['results'] as $gameData){
                Game::create([
                    'title'=>$gameData['name'],
                    'size'=>rand(100,500),
                    'description'=>$gameData['description_raw']??'',
                    'price'=>rand(10,60),
                    'image'=>$gameData['background_image']??'',
                    'type'=>$gameData['genres'][0]['name']??'',
                    'file_path'=>'hkljhljkhlkj',
               
                ]);
            }
            return response()->json(['message'=>'Games fetched and stored successfully']) ;

    }

   public function importData()
   {
    $client = new Client() ;
    $apikey = '7c5ec03070944eabaf4c87695dcc1dd4';
    $response = $client->request('GET','https://api.rawg.io/api/genres?key='.$apikey) ;
    $categoriesData = json_decode($response->getBody(),true) ;
    foreach($categoriesData['results'] as $category)
    {
        Category::create([
        'uuid'=>Str::uuid() ,
            'title'=>$category['name']
            ]) ;

    }
    //سحب بيانات الالعاب 

     $response = $client->request('GET','https://api.rawg.io/api/genres?key='.$apikey) ;
     $gameData = json_decode($response->getBody(),true) ;
     foreach($gameData['results'] as $game){
        $categoryId = Category::where('title',$category['name'])->first()->id  ;
        Game::create([
            'uuid'=>Str::uuid() ,
            'title'=>$game['name'],
            'size'=>isset($game['size'])?$game['size'] :10 ,
            'description'=>$game['description']??'',
            'price'=>isset($game['price'])?$game['price']:0,
            'image'=>$game['images']??'https://upload.wikimedia.org/wikipedia/commons/4/42/YouTube_icon_%282013-2017%29.png',
            'type'=> isset($game['price']) && $game['price'] >0 ??'مدفوع','مجاني' ,
            'url_video'=> $game['slug'],
            'category_id'=>$categoryId
        ]);
     }
     return redirect()->back()->with('successs','complete fetch data successfully') ;
   }
   */
}
