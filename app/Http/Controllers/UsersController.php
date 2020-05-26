<?php
/**
 * Created by PhpStorm.
 * User: jojimdogo
 * Date: 26/08/2019
 * Time: 19:51
 */

namespace App\Http\Controllers;
use App\User;


class UsersController
{
    public function index()
    {
        return view('users');
    }
    public function getusers(){
        $users=User::all();
        return response()->json($users);

    }
}