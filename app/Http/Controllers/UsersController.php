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
        $user_id=auth('api')->user()->id;
        $users=User::where('id',$user_id)->get();
        return response()->json($users);
    }



}
