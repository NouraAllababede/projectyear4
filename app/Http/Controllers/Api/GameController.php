<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game ;
use App\Models\User ;
use App\Models\Category ;
use App\Http\Resources\GameResource ;
use App\Http\Trait\GeneralTrait;
use App\Http\Resources\AllGameResource ;
use App\Http\Resources\MostFollowResource ;
use App\Http\Resources\GameResource2 ;


class GameController extends Controller
{
    use GeneralTrait;


    public function index(){
        $games = Game::withAvg('reviewings', 'rating')->get(); 
        return GameResource2::collection($games);
            }

    public function latestGames(){
       $games = Game::withAvg('reviewings', 'rating')
       ->orderBy('created_at','DESC')
       ->take(50)
       ->get(); 
    return GameResource2::collection($games);}

   public function MostFollow(){
   $mostFollows = Game::withCount('users')
    ->withAvg('reviewings', 'rating')
    ->orderBy('users_count','DESC')->get() ;
         return  MostFollowResource::collection($mostFollows) ;}

   public function show(request $request) {
      $game = Game::where('uuid',$request->uuid)->first() ;
       return new AllGameResource($game) ;
     }
    
     public function getGamesByCategory(request $request) {

       $uuid = Category::where('title',$request->title)->get()->pluck('uuid') ; 
  

         $category = Category::with('games')->where('uuid', $uuid)->first();
         if (!$category) {
             return response()->json(['message' => 'Category not found'], 404);
         }
         return AllGameResource::collection($category->games);
        
        }
     




         
public function search(Request $request) {

    $gender = $request->input('gender');
    $age = $request->input('age');
    $minRating = $request->input('min_rating');
    $maxRating = $request->input('max_rating');

    $query = Game::query();

    if ($gender) {
        $query->whereHas('users', function ($q) use ($gender) {
            $q->where('gender', $gender);
        });
    }

    if ($age) {
        // تحقق مما إذا كان العمر ضمن الفئات المحددة
        if ($age >= 6 && $age <= 12) {
            $query->whereHas('users', function ($q) {
                $q->whereBetween('age', [6, 12]);
            });
        } elseif ($age >= 12 && $age <= 19) {
            $query->whereHas('users', function ($q) {
                $q->whereBetween('age', [12, 19]);
            });
        } elseif ($age >= 20 && $age <= 25) {
            $query->whereHas('users', function ($q) {
                $q->whereBetween('age', [20, 25]);
            });
        } elseif ($age >= 25 && $age <= 40) {
            $query->whereHas('users', function ($q) {
                $q->whereBetween('age', [25, 40]);
            });
        }
    }

    // إضافة شرط التقييم
    if ($minRating || $maxRating) { 
        $query->whereHas('reviewings', function ($q) use ($minRating, $maxRating) {
            if ($minRating) {
                $q->where('rating', '>=', $minRating);
            }
            if ($maxRating) {
                $q->where('rating', '<=', $maxRating);
            }
        });
    }

    $games = $query->get();
    return response()->json($games);
}


        
     }
    
