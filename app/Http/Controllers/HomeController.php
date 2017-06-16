<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $someguy =post::all();
        return view('posts',compact('someguy'));
    }

    public function edit(){
        //$userId = Auth::user()->id;
        return view('editBio');
    }

    public function editInfo(Request $request){
        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $userId = Auth::user()->id;

        User::where('id',$userId)->update(['name' => "$name",
                                            'user_name' => "$username",
                                            'email' => "$email"]);


        return view('edit_values');
    }

    public function createPost(){
        return view('edit_post');
    }



}
