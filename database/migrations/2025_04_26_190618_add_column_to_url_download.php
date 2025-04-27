<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('games', function (Blueprint $table) {
           $table->string('url_download') ;
            $table->text('long_description') ; 
            $table->integer('Memory') ;
            $table->integer('Storage') ;
             $table->string('Developed_by') ;
             $table->string('Platform') ;
             $table->enum('status',['Live','NotLive'])->default('Live') ;
             $table->string('publisher') ;
             $table->string('Graphics') ;
             $table->string('Genre') ;




        


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('games', function (Blueprint $table) {
            //
        });
    }
};
