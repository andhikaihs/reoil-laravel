<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Point;
use App\Models\Voucher;

class UserController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            $point = Point::where('user_id', Auth::user()['id'])->sum('point');
            $voucher = Voucher::where('user_id', Auth::user()['id'])->sum('point');
    
            $total = $point - $voucher;
            return view('home', ['point' => $total]);
        } else {
            return view('home');
        }
    }

    public function service()
    {
        if (Auth::check()) {
            $point = Point::where('user_id', Auth::user()['id'])->sum('point');
            $voucher = Voucher::where('user_id', Auth::user()['id'])->sum('point');
    
            $total = $point - $voucher;
            return view('service', ['point' => $total]);
        } else {
            return view('service');
        }
    }

    public function about()
    {
        if (Auth::check()) {
            $point = Point::where('user_id', Auth::user()['id'])->sum('point');
            $voucher = Voucher::where('user_id', Auth::user()['id'])->sum('point');
    
            $total = $point - $voucher;
            return view('about', ['point' => $total]);
        } else {
            return view('about');
        }
    }

    public function profile()
    {
        $user = User::find(Auth::user()['id']);
        $point = Point::where('user_id', Auth::user()['id'])->sum('point');
        $voucher = Voucher::where('user_id', Auth::user()['id'])->sum('point');

        $total = $point - $voucher;
        return view('profile', ['user' => $user, 'point' => $total]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            if (isset($request->rememberMe)) {
                // set cookie for 7 days
                setcookie('username', $request->username, time() + (86400 * 7), "/");
            }

            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors("Username atau password salah");
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->save();

        return redirect('/profile');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/login');
    }
}
