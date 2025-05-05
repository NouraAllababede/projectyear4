<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User ;
use Illuminate\Support\Str ;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'uuid'=>Str::uuid(),
            'name' =>'NisreenAlZein' ,
            'email'=>'nisreen@gmail.com',
            'password'=> '123456789',
           'age' => 20,
            'gender'=>'fmale',
            'type'=>'admin'
            
            ]);

            //
            User::create([
                'uuid'=>Str::uuid(),
                'name' =>'yara ali' ,
                'email'=>'yara125@gmail.com',
                'password'=> '123456789',
               'age' => 17,
                'gender'=>'fmale',
                'type'=>'player'
                
                ]);
                //
                 //
            User::create([
                'uuid'=>Str::uuid(),
                'name' =>'Sami Dala' ,
                'email'=>'sami5654f@gmail.com',
                'password'=> '65471238',
               'age' => 33,
                'gender'=>'male',
                'type'=>'player'

                ]);
                //
                 //
            User::create([
                'uuid'=>Str::uuid(),
                'name' =>'Noura lababedi' ,
                'email'=>'nour123kl@gmail.com',
                'password'=> '96874125',
               'age' => 24,
                'gender'=>'fmale',
                'type'=>'player'

                
                ]);
                //
                 //
            User::create([
                'uuid'=>Str::uuid(),
                'name' =>'Adham Dakak' ,
                'email'=>'adham545frv@gmail.com',
                'password'=> '9571136548',
               'age' => 20,
                'gender'=>'male',
                'type'=>'player'

                
                ]);
                //
                 //
            User::create([
                'uuid'=>Str::uuid(),
                'name' =>'solaf rami' ,
                'email'=>'sad55l@gmail.com',
                'password'=> '1587249',
               'age' => 22,
                'gender'=>'fmale',
                'type'=>'player'

                ]);
                //
                 //
            User::create([
                'uuid'=>Str::uuid(),
                'name' =>'Amir yasin' ,
                'email'=>'amir11ya@gmail.com',
                'password'=> '35711598',
               'age' => 18,
                'gender'=>'male',
                'type'=>'player'

                
                ]);
                //
                 //
            User::create([
                'uuid'=>Str::uuid(),
                'name' =>'ramia ali' ,
                'email'=>'ramia55al@gmail.com',
                'password'=> '3698454',
               'age' => 38,
                'gender'=>'fmale',
                'type'=>'player'

                
                ]);
                //
                 //
            User::create([
                'uuid'=>Str::uuid(),
                'name' =>'wael kord' ,
                'email'=>'wael55ko@gmail.com',
                'password'=> '6565959',
               'age' => 40,
                'gender'=>'male',
                'type'=>'player'

                ]);
                //
                 //
            User::create([
                'uuid'=>Str::uuid(),
                'name' =>'rana louz' ,
                'email'=>'rana55ll@gmail.com',
                'password'=> '55959494',
               'age' => 39,
                'gender'=>'fmale',
                'type'=>'player'

                
                ]);
                //


           
    }
}
