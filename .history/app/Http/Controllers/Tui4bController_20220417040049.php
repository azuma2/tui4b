<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use App\Models\Tui4;
use App\Models\Like;

class Tui4bController extends Controller
{


    
class Tui4Controller extends Controller
{
    public function index(Request $request)
    {
        $items = Tui4::all();
        $likes = Like::all();
        $comments = Come2::all();
        $data = $request->session()->get('txt');

        $user = Auth::user();
        $items = Tui4::paginate(4);
        $param = ['items' => $items, 'user' =>$user];
        return view('index', ['items' => $items,'likes'=>$likes,'data'=>$data, $param,'comments' => $comments]);
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