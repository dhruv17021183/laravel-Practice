<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\company;
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
    // function dboperation()
    // {
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
        // $min = DB::table('blog_posts')->min('id');
        // $max = DB::table('blog_posts')->max('id');
        // return "min - " . $min . " max - " . $max;
        // $users=DB::table('employee')
        //           ->select('first_name','birth_day','salary')
        //           ->get();
        // $users=DB::table('employee')
        //           ->select(DB::raw('count(*) as user_count,sex'))
        //           ->where('sex','<>','M')
        //           ->groupBy('sex')
        //           ->get();
        //    $users=DB::table('employee')
        //              ->select('first_name',DB::raw('SUM(salary) as total_salary'))
        //              ->groupBy('sex')
        //              ->havingRaw('SUM(salary) > ?',[2500])
        //              ->get();
        //    $users=DB::table('employee')
        //           ->rightjoin('works_with','employee.emp_id',"=",'works_with.emp_id')
        //   ->get();
        //   $users1=DB::table('employee')
        //   ->rightjoin('works_with','employee.emp_id',"=",'works_with.emp_id')
        //   ->get();


        // echo $users;
        // echo $users1;

        // $users = DB::table('employee')
        //         ->orderByRaw('updated_at DESC')
        //         ->get();
        // echo $users;
        // DB::table('employee')->where('sex', 'M')
        //     ->chunkById(200, function ($employee) {
        //         foreach ($employee as $user) {
        //             DB::table('employee')
        //                 ->where('emp_id', $user->emp_id)
        //                 ->update(['sex' => 'Male']);
        //         }
        //     });
        // $users = DB::table('employee')
        //         ->selectRaw('salary * ? as price_with_tax', [2])
        //         ->get();
        // echo $users;
        // $query=DB::table('employee')->select('first_name');

        // $user=$query->addSelect('age')->get();
        // echo $user;
        // }
    function index(){
        // return BlogPost::all();
        // $member=new BlogPost;
        // $member->name="John";
        // $member->address="Londan";
        // $member->save();
            return BlogPost::find(1)->getCompany;
        
    }
}
