<?php

namespace App\Http\Trait;

use Illuminate\Http\Request;


trait UploadVoice
{
    public function uploadvoice(Request $request ,$folderName)
    {
      $path = $request->file('voice')->store($folderName,'public') ;
      return $path ;

    }

 
}


