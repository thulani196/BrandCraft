<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\RegistersUsers;
use App\Users;
use App\Role;
use Auth;

class AdminsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->role == 1) {
            $users = Users::all();
            foreach($users as $user) {
                $roles = Role::whereId($user->role)->get();
            }
            
            return view('dashboard.admins',['users' => $users,'roles'=>$roles]);
        } elseif(Auth::user()->role == 2) {
            return redirect('home')->with('error','You do not have Superuser priviledges');
        } else {
            return redirect('/')->with('error','You do not have permission');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        if(Auth::user()->role == 1) {
            return view('dashboard.add',['roles'=>$roles]);
        } elseif(Auth::user()->role == 2) {
            return redirect('home')->with('error','You do not have Superuser priviledges');
        } else {
            return redirect('/')->with('error','You do not have permission');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'roles' => 'required',
        ]);
            
        $hash = bcrypt($request->input('password'));
        $user = new Users;
        $user->name = $request->input('fullname');
        $user->role = $request->input('roles');
        $user->email = $request->input('email');
        // $user->password = $request->input('password');
        $user->password = $hash;
        $user->save();
        
        return redirect('home/admins')->with('success','New admin successfully registered!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user = Users::find($id);
        if(Auth::user()->role == 1) {
            return view('dashboard.update',['user'=>$user,'roles'=>$roles]);
        } elseif(Auth::user()->role == 2) {
            return redirect('home')->with('error','You do not have Superuser priviledges');
        } else {
            return redirect('/')->with('error','You do not have permission');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'roles' => 'required',
        ]);
            
        $hash = bcrypt($request->input('password'));
        $user = Users::find($id);
        $user->name = $request->input('fullname');
        $user->role = $request->input('roles');
        $user->email = $request->input('email');
        // $user->password = $request->input('password');
        $user->password = $hash;
        $user->save();
        
        return redirect('home/admins')->with('success','Update Successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Users::find($id);
        $user->delete();
        return redirect('home/admins')->with("success","User successfully removed!");
    }
}
