


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