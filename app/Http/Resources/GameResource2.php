<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource2 extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        
        $avarageRa=$this->reviewings_avg_rating;
        $averageRating = $avarageRa ? round($avarageRa ,2) : 0;
        
          return [
             
              'title' => $this->title,
              'image' => $this->image,
              'description'=>$this->description,
              'rate'=>$averageRating,
              'category'=>$this->category->title ,
          ];
      }
    }

