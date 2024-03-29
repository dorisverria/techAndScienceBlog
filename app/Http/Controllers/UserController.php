<?php


namespace App\Http\Controllers;

// User Controller that implements functions dealing with user operations

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Auth;


class UserController extends Controller
{
    public function getSignup() {     // function when request is get
        return view('user.signup');     // the view returned by the function
    }

    public function postSignup(Request $request) {    // function when request is post
      $this->validate($request, [                     // user validation for email. Email is a required field, unique, and of type email
        'email' => 'email|required|unique:users',     // user validation for password. Password is a required field, and should consist of at least 4 characters
        'password' => 'required|min:4',
        'firstName' => 'required',
        'lastName' => 'required'
      ]);

      $user = new User([                          // create new User object
        'email' => $request->input('email'),      // email property equal to inputted email
        'password' => bcrypt($request->input('password')),   // password property equal to the inputed password's hash as computed by the bcrypt function
        'firstName' => $request->input('firstName'),
        'lastName' => $request->input('lastName')
      ]);

      $user->save();    // user instance saved to database
      Auth::login($user);   // user logged in via the login method of Authenticatable class
      return redirect()->route('application.index');    // redirection to product catalogue
    }

    public function getLogin() {
        return view('user.signin');   // return empty signin form
    }

    public function postLogin(Request $request) {
      $this->validate($request, [
        'email' => 'email|required',
        'password' => 'required|min:4'
      ]);
      if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {    // use attmept() method of Authenticatable class
        return redirect()->route('application.index');
      }
      return redirect()->back()->withInput()->with('loginStatus','Invalid credentials!');  // redirected to login page using sticky form
    }

    public function getLogout(Request $request) {
        Auth::logout();
        return redirect()->route('application.landing_page');
    }

    public function getUserList() {
      $users = User::all();
      return view('user.userList', ['users'=>$users]);
    }
}