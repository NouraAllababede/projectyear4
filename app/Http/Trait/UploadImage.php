<?php

namespace App\Http\Trait;

use Illuminate\Http\Request;


trait UploadImage
{
    public function uploadimage(Request $request ,$folderName)
    {
      $image = $request->file('file')->getClientOriginalName();
      $url = $request->file('file')->storeAs($folderName,$image,'public') ;
      return $url ;

    }
    

    public function upload($img ,$folderName)
    {
      $image = $img->getClientOriginalName();
      $url = $img->storeAs($folderName,$image,'public') ;
      return $url ;
    }

 
}


