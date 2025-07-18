<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Trait\GeneralTrait;
use App\Models\Category ;
use App\Http\Resources\CategoryResource ;
class CategoryController extends Controller
{
    use GeneralTrait;

    public function index(){
        $categories = Category::all(); 
        return CategoryResource::collection($categories);
            }
                      
}