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
            
            ]);
    }
}
