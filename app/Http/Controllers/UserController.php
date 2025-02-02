<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = User::get();
        // return $user;

        // $user = User::select('name','city')->get();
        // return $user;

        // $user = User::select('name','city')
        // ->where('city','Delhi')
        // ->get();
        // return $user;

        // not using select
        // $user = User::where('city','Delhi')
        // ->get(['name','email','city']);
        // return $user;

        // using all method
        // $user = User::all('name','email');
        // return $user;

        // toarray method
        // $user = User::all('name','email')->toArray();
        // return $user;

        // plunk method //not show dublicate value
        // $user = User::pluck('name','city');
        // return $user;


        // pluck with where
        // $user = User::where('city','Delhi')
        // ->pluck('name','city');
        // return $user;

        // find method
        // $user = User::find(1);
        // $user = User::find(1)->email;
        // $user = User::where('city','Delhi')->first()->email;
        // $user = User::where('city','Delhi')->value('email');

        // $user = User::find(1,['name','email']);
        // return $user;

        // findorfail
        // $user = User::findorfail(1,['name','email']);
        // return $user;

        // return data with relactionship
        // $post= Post::with('user')->get();
        // $post= Post::with('user')->get(['title','description','user_id']);
        // return $post;

        // $post= Post::with('user:name,email,id')->get(['title','description','user_id']);
        // return $post;

        // with rename
        // $post= Post::with('user:name as User name,email as User email,id')->get(['title','description','user_id']);
        // return $post;

        // $post=Post::with(['user'=>function($query){
        //     $query->select('id','name','email');
        // }])->get();
        // return $post;

        // with select method 1
        // $post=Post::select(['title','description','user_id'])->with(['user'=>function($query){
        //     $query->select('id','name','email');
        // }])->get();
        // return $post;

        // if have mutiple table
        // $post=Post::select(['title','description','user_id'])->with
        // ([
        //     'user'=> function($query){
        //     $query->select('id','name','email');
        // },
        // 'comments'=> function($query){
        //              $query->select('post_id','detail');
        //             }
        // )]->get();
        // return $post;

        // with select method 2
        // $post=Post::select(['title','description','user_id'])->withWhereHas('user',function($query){
        //     $query->select('id','name','email')->where('city','Delhi');
        // })->get();
        // return $post;

        // get method
        // $post=Post::with(['user'=>function($query){
        //     $query->select('id','name','email');
        // }])->get(['title','description','user_id']);
        // return $post;


        // select specipic column by model
        // $post=Post::with('user')->get();
        // return $post;

        // $user=User::with('post')->get();
        // return $user;

        // $post=Post::with('user')->get();
        // return $post;

        // for model not need to using with
        // $post=Post::get();
        // return $post;

        // $post = Post::find(2);
        // return $post;

        // without method
        // $post = Post::without('user')->find(2);
        // return $post;

        // all data show
        // $post = Post::without('user')->get();
        // return $post;

        // with out only method
        // $post = Post::withOnly('user')->get();
        // return $post;

        //   $user = User::all();
        // return $user;

        // load method
          $user = User::all();
        return $user->load('post');


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
