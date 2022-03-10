<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    // function storeM(Request $req)
    // {
        // $data = $req->input('user');
        // $req->session()->put('user',$data);
        // $data=$req->input('user');
        // $req->session()->flash('user',$data);
        // return redirect('store');
        
    // }
    // function index(Request $req)
    //     {
    //         return $req->file('file')->storeAs('img','xyz.jpg');
    //     }
    // function addData(Request $req)
    // {
    //     $blogpost=new BlogPost;
    //     $blogpost->title=$req->title;
    //     $blogpost->content=$req->content;
    //     $blogpost->save();
    // }
    // function show()  
    // {
    //     $blogpost=BlogPost::paginate(5);
    //     return view('list',['member'=>$blogpost]);
 
    // }
    // function delete($id)
    // {
    //     $blogpost=BlogPost::find($id);
    //     $blogpost->delete();
    //     return redirect('list');
    // }
    // function edit($id)
    // {
    //     $blogpost=BlogPost::find($id);
    //     return view('edit',['blogpost'=>$blogpost]);
    // }
    // function update(Request $req)
    // {
    //     $blogpost=BlogPost::find($req->id);
    //     {
    //         $blogpost->title=$req->title;
    //         $blogpost->content=$req->content;
    //         $blogpost->save();
    //         return redirect('list');
    //     }
    // }
    function dboperation()
    {
        // DB::table('blog_posts')->orderBy('id')->chunk(100,function($blogpost){
        //     foreach($blogpost as $user)
        //     {
        //         echo $user->title;
        //         echo $user->id;
        //     }
        // });
        
        // ->where('title','gaurav')
        // ->get();
        // return view('dbop',['users'=>$users]);
        // foreach($users as $user)
        // {
        //     echo $user->title;
        // }
        // return $users->title;
        // DB:table('blog_posts')->where('active',false)
        // ->chunkById(100,function($blogpost) {
        //     foreach ($blogpost as $user){
        //     DB::table('users')
        //         ->where('id',$blogpost->id)
        //         ->update(['active'=>true]);
        //     }
        // });
    }
}
