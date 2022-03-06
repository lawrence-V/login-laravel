<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    function login() {
        return view('auth.login');
    }

    function register() {
        return view('auth.register');
    }
    function save(Request $request) {
        
        // validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|max:12',
        ]);

        // Insert data into database
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success','New user have been successfully created');
        }else {
            return back()->with('error','Something went wrong try again');
        }
    }

    function check(Request $request) {
        // validate request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);

        $userInfo = Admin::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('error', ' we do not recognize your email address');
        }
        else {
            // ceheck password
            if(Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            }else {
                return back()->with('error', 'Incorrect password');
            }
        }
    }

    function logout() {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard() {
        $data = ['LoggedUserInfo'=>Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }

    function settings() {
        $data = ['LoggedUserInfo'=>Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.settings', $data);
    }

    function profile() {
        $data = ['LoggedUserInfo'=>Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.profile', $data);
    }

    function staff() {
        
        $datas = Http::get('https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=98f5210265e94c499db61894975633b4');
       
        return view('admin.staff',['datas' => $datas['articles']]);
        
    }

    
}



