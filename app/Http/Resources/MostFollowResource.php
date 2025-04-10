<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MostFollowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $users_count =$this->users_count ? $this->users_count:0 ;
        
        $avarageRa=$this->reviewings_avg_rating;
        $averageRating = $avarageRa ? round($avarageRa ,2) : 0;
        

        return [
    
            'title'=>$this->title ,
            'image'=>$this->image ,
            'category'=>$this->category->title ,
            'rate'=>$averageRating, 
            'users_count'=> $users_count 
                ];
    }
}
