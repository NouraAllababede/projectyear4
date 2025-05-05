<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User_game ;
use Illuminate\Support\Str ;



class User_gameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $table = "user-games" ;

    public function run(): void
    {
        //
        
        //

        User_game::create([
            'uuid'=>Str::uuid(),
            'user_id' => 3 ,
            'game_id'=> 30,
          
            
            ]);
            //

             //

             User_game::create([
            'uuid'=>Str::uuid(),
            'user_id' => 6 ,
            'game_id'=> 21,
          
            
            ]);
            //+
 //

 User_game::create([
    'uuid'=>Str::uuid(),
    'user_id' => 7 ,
    'game_id'=> 25,
  
    
    ]);
    //
     //

     User_game::create([
        'uuid'=>Str::uuid(),
        'user_id' => 10 ,
        'game_id'=> 71,
      
        
        ]);
        //
         //

         User_game::create([
            'uuid'=>Str::uuid(),
            'user_id' => 4 ,
            'game_id'=> 25,
          
            
            ]);
            //
             //

             User_game::create([
            'uuid'=>Str::uuid(),
            'user_id' => 6 ,
            'game_id'=> 65,
          
            
            ]);
            //
             //

             User_game::create([
            'uuid'=>Str::uuid(),
            'user_id' => 5 ,
            'game_id'=> 48,
          
            
            ]);
            //
             //

             User_game::create([
            'uuid'=>Str::uuid(),
            'user_id' => 10 ,
            'game_id'=>41,
          
            
            ]);
            //
             //

             User_game::create([
            'uuid'=>Str::uuid(),
            'user_id' =>5 ,
            'game_id'=>28,
          
            
            ]);
            //
             //

             User_game::create([
            'uuid'=>Str::uuid(),
            'user_id' =>8 ,
            'game_id'=>28,
          
            
            ]);
            //
             //

             User_game::create([
            'uuid'=>Str::uuid(),
            'user_id' =>5 ,
            'game_id'=>48,
          
            
            ]);
            //
             //

             User_game::create([
            'uuid'=>Str::uuid(),
            'user_id' => 8 ,
            'game_id'=>65,
          
            
            ]);
            //
    }
}
