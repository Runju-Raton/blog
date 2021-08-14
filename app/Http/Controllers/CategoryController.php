<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function manage(){
        $category=Category::get();
        return view('category.manage-category',['categories'=>$category]) ;
    }
    public function createForm(){
        return view('category.create-category');
    }
    public function create(Request $request){
        $name = $request->name;
        $category= Category::create([
            'name' => $name,
            'slug' => Str::slug($name)
        ]);
        if($category==true){
            return "Category added successful!";
        }
    }
    public function updateForm(Category $category){
        return view('category.update-category',['category' => $category]);
        
    }
    public function update(Request $request){
        $id = $request->id;
       $category = Category::where('id','=',$id)->update([
            'name'  => $request->name,
            'slug'  => Str::slug($request->name)
        ]);
        if($category==true){
            return "Category updated successful!";
        }
    }
    public function delete(Request $request){
        $id = $request->id;
        $delete = Category::where('id','=',$id)->delete();
        if($delete==true){
            return "Category deleted successful!";
        }
    }
}
