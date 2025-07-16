<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AllGameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
    
            'title'=>$this->title ,
            'image'=>$this->image ,
            'size'=>$this->size ,
            'description'=>$this->description ,
            'url_download'=>$this->url_download ,
            'url_video'=>$this->url_video ,
            'price'=>$this->price ,
            'category'=>$this->category->title ,
            'type'=>$this->type ,
            'long_description'=>$this->long_description,
            'Memory'=>$this->Memory,
            'Storage'=>$this->Storage,
            'Developed_by'=>$this->Developed_by,
            'Platform'=>$this->Platform,
            'status'=>$this->status,
           'publisher'=>$this->publisher,
           'Graphics'=>$this->Graphics,
          //'Genre'=>$this->Genre,
           'ReleasedOn'=>$this->ReleasedOn
                ];
    }
}
