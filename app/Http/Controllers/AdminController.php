<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }
    public function reg(){
        return view('admin.reg');
    }
    public function showuser(){
        $datas = User::all();
        $roles = Role::all();
        return view('admin.show', compact(['datas', 'roles']));
    }
    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|email|max:225',
            'password' => 'required|string|min:8|max:225',
            'dob' => 'required',
            'role_id' => 'required'
        ]);
        $data ['email_verified_at'] = now();
        $data ['password'] = Hash::make($request->input('password'));
        $data ['dob'] = date('Y-m-d', strtotime($request->input('dob')));
        if (request()->has('avatar')) { 
            $avatar = request()->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
            $data ['avatar'] = "/images/".$avatarName;
        }
        User::create($data);
        
        return redirect()->back();
    }
        
        /*
        if (request()->has('avatar')) {            
            $avatar = request()->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
            $verifikasi = now();
        }
        return User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'dob' => date('Y-m-d', strtotime($request->input('dob'))),
            'avatar' => "/images/" . $avatarName,
            'email_verified_at' => now(),
        ]);
        return redirect()->route('/');
        */
}
