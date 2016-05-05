<?php

namespace App\Http\Controllers;
use Auth;
use Hash;
use Validator;
use App\User;
use App\Todo;

use Illuminate\Http\Request;

use App\Http\Requests;

class TodoController extends Controller
{
    public function get_login() {
    	return view('todo.login');
    }

    public function post_login(Request $request) {
    	if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
    		return redirect()->route('get_account')
    				->with('success', 'Logged in successfully');
    	} 
    }


    public function get_signup() {
    	return view('todo.signup');
    }

    // User creation route control
    public function post_signup(Request $request) {
    	// return $request->all();

    	// create a new user instance
    	$user = new User;

    	// Assign the value to the instance
    	$user->email = $request->get('email');
    	$user->password = Hash::make($request->get('password'));
    	
    	// Save the instance
    	if ($user->save()) {
    		return redirect()->route('get_login')
    				->with('success', 'Your account is created. Now login');
    	}
    	// return to the login page with success
    }

    public function get_home() {
    	return view('todo.index');
    }

    public function get_account(Request $request) {

    	if($request->has('delete_id')) {
    		$todo = Todo::find($request->get('delete_id'));
    		$todo->is_removed = 1;
    		$todo->save();
    	}

    	$items = Todo::where('user_id', Auth::user()->id)
    				->where('is_removed', 0)
    				->get();

    	return view('todo.dashboard', ['items' => $items]);
    }


    public function post_account(Request $request) {
    	$item = new Todo;
    	$item->title = $request->get('title');
    	$item->user_id = Auth::user()->id;
    	$item->save();

    	return redirect()->route('get_account')
    			->with('success', 'Added item');
    }

    public function get_logout() {

    	Auth::logout();

    	return redirect()->route('get_login')
    			->with('success', 'Logged out');
    }
}
