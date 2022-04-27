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
        // $data = ['LoggedUserInfo'=>Admin::where('id', '=', session('LoggedUser'))->first()];
        $Movies = Http::get('https://api.themoviedb.org/3/movie/top_rated?api_key=42ee37e7cc29340133839d96681d2217')
        ->json()['results'];

        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=42ee37e7cc29340133839d96681d2217')
        ->json()['results'];

        $genresArray =  Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=42ee37e7cc29340133839d96681d2217')
        ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        } );

        dump($popularMovies);

         return view('admin.dashboard',
         [
             'data' => $Movies,
             'popularMovies' => $popularMovies,
             'genres' => $genres,
        
        ]);
  
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
        
        $Movies = Http::get('https://api.themoviedb.org/3/movie/top_rated?api_key=42ee37e7cc29340133839d96681d2217')
        ->json()['results'];

        dump($Movies);

        return view('admin.dashboard',['data' => $Movies]);
        
    }


   function show($id) {

      $movies = Http::get('https://api.themoviedb.org/3/movie/'.$id.'?api_key=42ee37e7cc29340133839d96681d2217')
        ->json();

    dump($movies);
        return view('movies.show', [
            'movie' => $movies,
        ]);
    }

    
}



