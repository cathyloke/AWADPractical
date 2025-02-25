<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function index($user) {
        echo "Hello from index function in user controller";
        return view('aboutus', ['user'=>$user]);
    }

    function loadView($user) {
        return view('user', ['user'=>$user]);
    }

    function loadViews() {
        $data = ['Alice', 'Bob', 'Carson'];
        return view('user', ['usernames'=>$data]);
    }
}
