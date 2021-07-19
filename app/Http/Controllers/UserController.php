<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    public function pocet() {
        $users = DB::table('users')->count();
        return view("/status",compact('$users'));
    }
}
