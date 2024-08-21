<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Cart;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    //Đăng nhâp
    public function formLogin()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // if(Auth::check()){
        //     Auth::logout();
        //     return redirect('/login');
        // }
        $user = $request->all([
            'email',
            'password',
        ]);
        if (Auth::attempt($user)) {
            if (Auth::user()->role_id === 1) {
                if(!Cart::where('user_id', Auth::user()->id)->exists()){
                    cart::create(['user_id' => Auth::user()->id]);
                }
                return redirect()->intended('/');
            } elseif (Auth::user()->role_id === 2) {
                return redirect()->intended('/admin');
            }
        } else {
            return redirect()->back()->withErrors([
                'error' => 'Email hoặc mật khẩu không đúng',
            ])->withInput();
        }
    }

    // Đăng ký
    public function formRegister()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        $user = User::create($data);
        $cart['user_id'] = $user->id;
        Cart::create($cart);
        Auth::login($user);


        return redirect()->intended('/');

    }

    // Đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
    }
}
