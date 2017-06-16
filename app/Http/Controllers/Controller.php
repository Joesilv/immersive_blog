<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use App\post;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function posts()
    {
        $someguy =post::all();
        return view('posts',compact('someguy'));
    }

 /*   public function editBio(){
        $user = Auth::user();
        dd($user);
        return view('editBio', compact('user'));
    }*/
}
