<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class UsersController extends Controller
{
    public function user($id){
        $user = User::find($id);
        $posts = $user->posts();
        
        $data=[
            'user' => $user,
            'posts' => $posts,
            ];
    }
    
    public function index()
    {
    return view('/', [
            'users' => $users,
        ]);
    }
    
    public function users(){
        $user = User::find($user->id);
    }
}
