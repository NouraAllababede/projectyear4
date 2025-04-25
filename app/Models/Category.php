<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game ;
use Illuminate\Support\Str ;


class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'title',
    ] ;

    protected static function boot(){
        parent::boot() ;
        static::creating(function($model){
            $model->uuid = Str::uuid() ;
        });
        static::updating(function($model){
            if(empty($model->uuid)){
                $model->uuid = Str::uuid() ;
            }
        });
    } 

    public function games(){
        return $this->hasMany(Game::class) ;
    }
}
