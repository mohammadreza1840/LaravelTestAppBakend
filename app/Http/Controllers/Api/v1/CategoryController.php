<?php

namespace App\Http\Controllers\Api\v1;
use App\Http\Resources\Ver1\Category as CategoryResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\Ver1\CategoryCollection;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all()->where('isActive',1);
        return new CategoryCollection($categories);
    }
    public function single(Category $category){
        return new CategoryResource($category);
    }
    //
}
