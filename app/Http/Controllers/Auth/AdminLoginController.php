<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
  
    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        return view('Admin.adminLogin');
    }
    public function guard()
    {
        return auth()->guard('admin');
    }

    public function login(Request $request){
        // Validate the form data
         $this->validate($request, [
           'email'   => 'required|email',
           'password' => 'required|min:6'
         ]);
   
         // Attempt to log the user in
         if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
           // if successful, then redirect to their intended location
           session(['key' => $request->email]);
           return redirect()->intended(route('admin.dashboard'));
         }
         else {
   
           // if unsuccessful, then redirect back to the login with the form data;
         return redirect()->back()->with('alert','Password atau Email, Salah !')->withInput($request->only('email', 'remember'));
   
         }
     }
}
