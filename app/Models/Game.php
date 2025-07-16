<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserGame ;
use App\Models\Reviewing ;
use App\Models\User ;
use Illuminate\Database\Eloquent\SoftDeletes ;
use Illuminate\Support\Str ;

class Game extends Model
{
    use HasFactory;
    //use SoftDeletes ;
    
    protected $fillable = [
        'uuid',
       'title',
       'size',
       'description',
       'image',
       'url_video',
       'category_id',
       'price',
       	'type',
      'url_download',
      'long_description',
      'Memory',
      'Storage' ,
      'Developed_by',
      'Platform',
      'status',
      'publisher',
      'Graphics',
      'Genre',
      'ReleasedOn'
    ] ;

    protected $casts = ['image'=> 'array'] ; 
    
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
    
    public function users(){
        return $this->belongsToMany(User::class,'Usergame') ;
    }

    public function UserGame(){
        return $this->hasMany(UserGame::class,) ;
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id') ;
    }

    public function reviewings(){
        return $this->hasMany(Reviewing::class) ;
    }

   
}
