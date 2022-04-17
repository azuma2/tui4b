<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use App\Models\Tui4;
use App\Models\Like;

class Tui4bController extends Controller
{


    

    public function index(Request $request)
    {

        $data = $request->session()->get('txt');
        $text = 'text';

        $user = Auth::user();
        $user = Auth::user();
        $items = Author::paginate(4);
        $param = ['items' => $items, 'user' =>$user];

        return view('index', ['data'=>$data,'text'=>$text]);
    }





    public function check(Request $request)
    {
    $text = ['text' => 'ログインして下さい。'];
    return view('auth', $text);
    }

    public function checkUser(Request $request)
    {
    $email = $request->email;
    $password = $request->password;
    if (Auth::attempt(['email' => $email,
            'password' => $password])) {
        $text =   Auth::user()->name . 'さんがログインしました';
    } else {
        $text = 'ログインに失敗しました';
    }
    return view('auth', ['text' => $text]);
    }

  }