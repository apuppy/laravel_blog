<?php

namespace App\Http\Controllers;

use App\DB\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $request = $request->all();
        var_dump($request);
        $users = User::all();
        var_dump($users);
        foreach ($users as $user){
            echo $user->id;
            echo $user['name'];
            echo "\n";
        }
    }
}
