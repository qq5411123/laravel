<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use App\Flight;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function index()
    {
        $flights = \App\Flight::where('id', 1)
            ->orderBy('name', 'desc')
            ->take(10)
            ->get();

//        $flights = \App\Flight::find([1, 2]);
        return $flights;
//        print_r($flights);
//        exit;

//        return view('user.index', ['users' => $users]);

//        return "It's user index";
        return 111;
    }

    /**
     * 显示指定用户的简介.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return Auth::user();

//        return view()->first(['custom.admin', 'admin'], $data);
//        return view('greeting', ['name' => 'hahah']);
//        return view()->first(['greeting', 'admin'], ['name' => 'hahah']);
//        return View::first(['greeting', 'admin'],  ['name' => 'hahah']);
//        return view('greeting')->with('name', 'Victoria')->with('name2', 'Victoria22');
    }

    public function age($age)
    {
//        return view('greeting', ['name' => 'hahah']);
//        return view()->first(['greeting', 'admin'], ['name' => 'hahah']);
//        return View::first(['greeting', 'admin'],  ['name' => 'hahah']);
        return "------".$age."------";
    }

    public function index2()
    {

    }


}
