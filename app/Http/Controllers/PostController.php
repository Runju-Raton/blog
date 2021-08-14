<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function manage(){
        $post=Post::get();
        return view('post.manage-post',['posts'=>$post]) ;
    }
    public function createForm(){
        return view('Post.create-post');
    }
    public function updateForm(Post $Post){
        return view('Post.update-Post',['Post' => $Post]);
        
    }
    public function delete(Request $request){
        $id = $request->id;
        $delete = Post::where('id','=',$id)->delete();
        if($delete==true){
            return "post deleted successful!";
        }
    }
    
}
