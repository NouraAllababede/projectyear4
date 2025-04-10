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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->uuid() ;
            $table->string('title') ;
            $table->double('size') ;
            $table->string('description') ;
            $table->json('image') ;
            $table->string('url_video') ;
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->decimal('price',10,2)->nullable() ;
            $table->enum('type',['freement','payment'])->default('freement') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
