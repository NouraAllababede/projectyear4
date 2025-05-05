<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category ;
use Illuminate\Support\Str ;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'uuid'=>Str::uuid(),
            'title' =>'Action RPG' ,
            ]);

        Category::create([
             'uuid'=>Str::uuid(),
             'title' =>'Action Shooter' ,
                ]);

         Category::create([
              'uuid'=>Str::uuid(),
              'title' =>'Action MMORPG' ,
                 ]);

         Category::create([
                'uuid'=>Str::uuid(),
                'title' =>'Action' ,
                  ]);
        Category::create([
                'uuid'=>Str::uuid(),
                 'title' =>'MMO Shooter' ,
                  ]);
         Category::create([
                 'uuid'=>Str::uuid(),
                 'title' =>'MMO' ,
                 ]);
          Category::create([
                 'uuid'=>Str::uuid(),
                 'title' =>'Social Simulation' ,
                 ]);
          Category::create([
                'uuid'=>Str::uuid(),
                'title' =>'Card Game' ,
                 ]);
         Category::create([
                'uuid'=>Str::uuid(),
                'title' =>'Battle Royale' ,
                 ]);
         Category::create([
               'uuid'=>Str::uuid(),
               'title' =>'Tactical Shooter' ,
                 ]);
         Category::create([
                'uuid'=>Str::uuid(),
                'title' =>'Shooter FPS' ,        
                  ]);

        /* Category::create([
               'uuid'=>Str::uuid(),
                'title' =>'Card Game' ,
                   ]);*/
         Category::create([
                'uuid'=>Str::uuid(),
                'title' =>'Action MOBA' ,
                   ]);
          Category::create([
                'uuid'=>Str::uuid(),
                'title' =>'Strategy' ,
                    ]);
          Category::create([
                'uuid'=>Str::uuid(),
                'title' =>'Fighting' ,
                     ]);
          Category::create([
               'uuid'=>Str::uuid(),
               'title' =>'Action FBS' ,
                     ]);
          Category::create([
              'uuid'=>Str::uuid(),
              'title' =>'Action Horror' ,
                     ]);
          Category::create([
              'uuid'=>Str::uuid(),
              'title' =>'MOBA ' ,
                      ]);
          Category::create([
              'uuid'=>Str::uuid(),
              'title' =>'FPS' ,
                       ]);
         Category::create([
              'uuid'=>Str::uuid(),
              'title' =>'CCG' ,
                       ]);
         Category::create([
             'uuid'=>Str::uuid(),
             'title' =>'Racing' ,
                      ]);

    }
}
