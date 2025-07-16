<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User ;
use App\Models\Game ;
use Illuminate\Support\Str ;



class UserGame extends Model
{
     use HasFactory;

    
    protected $table = "Usergame" ;

    protected $fillable = [
        'uuid',
        'user_id',
        'game_id'	
    ] ;

    public function user(){
        return $this->belongsTo(User::class,'user_id') ;
    }

    public function game(){
        return $this->belongsTo(Game::class,'game_id') ;
    }
}
