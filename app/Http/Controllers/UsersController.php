<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
          


     public function getUserTodos(User $user)   
    {   
         $user = Auth::user();  
         return $todos = $user->todos()->get();
    }
}
