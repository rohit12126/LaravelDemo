<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\Admin\UpdateAdminProfileRequest;
use App\Http\Requests\Admin\UpdatePasswordRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {   
       /*if (Gate::allows('admin-only', auth()->user())) {*/
          return view('admin.dashboard.dashboard');
       /*}*/
      //return 'You are not admin!!!!';
    }

    public function adminProfile() {   
      $user = Auth::user();
      $admin = User::where('id', $user->id)
                 ->where('role', 1)
                 ->first();
      return view('admin.dashboard.admin_profile', compact("admin"));
    }

    public function updateAdminProfile(UpdateAdminProfileRequest $request) {   
      $user = Auth::user();
      $name = $request->input('name');
      $email = $request->input('email');
      User::where('id', $user->id)
          ->update(['name' => $name,'email'=>$email]);
      session()->flash('success', __('message.admin_profile.success'));
      return redirect()->route('adminProfile');
    }

    public function changePassword() {   
      return view('admin.dashboard.change_password');  
    }

    public function updatePassword(UpdatePasswordRequest $request) {   
      $user = Auth::user();
      $password = $request->input('password');

      User::where('id', $user->id)
        ->update(['password' =>Hash::make($password)]);
      session()->flash('success', __('message.changePassword.success'));
      return redirect()->route('changePassword');   
    }
}
