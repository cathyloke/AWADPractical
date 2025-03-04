<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    //

    function index() {
        
        // $data = User::user();
        $data = User::paginate();
        
        return view('index', ['users'=>$data]);
        
        // return User::all();                             //use the model to retrieve all the data from database
        // return DB::select("select * from users");
    }

    function showAddUserForm() {
        return view('addUserForm');
    }

    function addUser(Request $req) {
        // $user = new User;
        // $user->name = $req->name;
        // $user->email = $req->email;
        // $user->password = $req->password;
        // $user->save();
        // return redirect('index');


        User::create($req->all());
        return redirect('index');
    }

    function deleteUser($id) {
        $data = User::find($id);
        $data -> delete();
        return redirect('index');
    }

    function showEditUserForm($id) {
        $data = User::find($id);

        return view('editUserForm', ['user'=>$data]);
    }

    function editUser(Request $req) {
        $data = User::find($req -> id);

        $data -> update($req->all());
        return redirect('index');
    }
}
