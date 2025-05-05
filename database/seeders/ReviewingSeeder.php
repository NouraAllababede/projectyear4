<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str ;
use App\Models\Reviewing ;

class ReviewingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Reviewing::create([
            'uuid'=>Str::uuid(),
            'user_id' =>7 ,
            'game_id'=>37,
            'rating'=> 4,
           'comment' => 'its anice game',
           
            
            ]);

            //

            Reviewing::create([
                'uuid'=>Str::uuid(),
                'user_id' => 10,
                'game_id'=> 30,
                'rating'=> 2,
               'comment' => 'its not bad',
               
                
                ]);
            //

            Reviewing::create([
                'uuid'=>Str::uuid(),
                'user_id' =>9 ,
                'game_id'=> 5,
                'rating'=> 5,
               'comment' => 'its avery nice game and interested',
               
                
                ]);
            //

            Reviewing::create([
                'uuid'=>Str::uuid(),
                'user_id' =>6 ,
                'game_id'=> 30,
                'rating'=> 5,
               'comment' => 'very good',
               
                
                ]);
            //
            Reviewing::create([
                'uuid'=>Str::uuid(),
                'user_id' => 4,
                'game_id'=> 20,
                'rating'=> 4,
               'comment' => 'no comment',
               
                
                ]);
            //
            Reviewing::create([
                'uuid'=>Str::uuid(),
                'user_id' =>3 ,
                'game_id'=> 54,
                'rating'=> 3,
               'comment' => 'its agood game',
               
                
                ]);
            //
            Reviewing::create([
                'uuid'=>Str::uuid(),
                'user_id' =>7 ,
                'game_id'=> 20,
                'rating'=> 5,
               'comment' => '',
               
                
                ]);
            //
            Reviewing::create([
                'uuid'=>Str::uuid(),
                'user_id' =>4 ,
                'game_id'=> 3,
                'rating'=> 4,
               'comment' => 'its interested and funny',
               
                
                ]);
            //
            Reviewing::create([
                'uuid'=>Str::uuid(),
                'user_id' => 9,
                'game_id'=> 41,
                'rating'=> 1,
               'comment' => 'not good',
               
                
                ]);
            //
            Reviewing::create([
                'uuid'=>Str::uuid(),
                'user_id' =>2 ,
                'game_id'=> 21,
                'rating'=> 5,
               'comment' => 'its a wonderfule game ',
               
                
                ]);
            //
            Reviewing::create([
                'uuid'=>Str::uuid(),
                'user_id' => 9,
                'game_id'=> 29,
                'rating'=> 3,
               'comment' => 'its good',
               
                
                ]);
            //

            
    }
}
