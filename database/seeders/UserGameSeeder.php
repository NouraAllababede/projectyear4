<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str ;
use App\Models\UserGame ;

class UserGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
    
       UserGame::create([
            'uuid'=>Str::uuid(),
            'user_id' => 3 ,
            'game_id'=> 30,
          
            
            ]);
            //

             //

             UserGame::create([
            'uuid'=>Str::uuid(),
            'user_id' => 6 ,
            'game_id'=> 21,
          
            
            ]);
            //+
 //
    UserGame::create([
    'uuid'=>Str::uuid(),
    'user_id' => 7 ,
    'game_id'=> 25,
  
    
    ]);
    //
     //

     Usergame::create([
        'uuid'=>Str::uuid(),
        'user_id' => 10 ,
        'game_id'=> 71,
      
        
        ]);
        //
         //

         UserGame::create([
            'uuid'=>Str::uuid(),
            'user_id' => 4 ,
            'game_id'=> 25,
          
            
            ]);
            //
             //

             UserGame::create([
            'uuid'=>Str::uuid(),
            'user_id' => 6 ,
            'game_id'=> 65,
          
            
            ]);
            //
             //

             UserGame::create([
            'uuid'=>Str::uuid(),
            'user_id' => 5 ,
            'game_id'=> 48,
          
            
            ]);
            //
             //

             UserGame::create([
            'uuid'=>Str::uuid(),
            'user_id' => 10 ,
            'game_id'=>41,
          
            
            ]);
            //
             //

             UserGame::create([
            'uuid'=>Str::uuid(),
            'user_id' =>5 ,
            'game_id'=>28,
          
            
            ]);
            //
             //

             UserGame::create([
            'uuid'=>Str::uuid(),
            'user_id' =>8 ,
            'game_id'=>28,
          
            
            ]);
            //
             //
             UserGame::create([
            'uuid'=>Str::uuid(),
            'user_id' =>5 ,
            'game_id'=>48,
          
            
            ]);
            //
             //

             UserGame::create([
            'uuid'=>Str::uuid(),
            'user_id' => 8 ,
            'game_id'=>65,
          
            
            ]);
    }
}
