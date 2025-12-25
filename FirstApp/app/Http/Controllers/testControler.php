<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class testControler extends Controller
{
    public function GetUsers($id){
        $users= User::where('id',$id)->get();
        return $users;
    }

    public function formdata(request $testdata)
{
return $testdata;
}
}
