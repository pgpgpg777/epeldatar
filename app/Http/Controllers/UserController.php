<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{

    public function profile(){
        return view('profile', array('user' => Auth::user()) );
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::sortable()->paginate(10);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'user_firstname' => 'required|string|max:255',
            'user_lastname' => 'required|string|max:255',
            'user_email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        //
        $user = new User;
        $user->user_firstname = $request->user_firstname;
        $user->user_lastname = $request->user_lastname;
        $user->user_email = $request->user_email;
        $user->password = bcrypt($request->password);
        $user->user_status = 1;
        $user->save();

        return redirect()->route('users.show',[$user]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', ['user'=>$user]);
        //return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user'=>$user]);
        //return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $request->validate([
            'user_firstname' => 'required|string|max:255',
            'user_lastname' => 'required|string|max:255',
            'user_email' => 'required|string|email|max:255|unique:users,user_email,'.$user->id,
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        $user->user_firstname = $request->user_firstname;
        $user->user_lastname = $request->user_lastname;
        $user->user_email = $request->user_email;
        if($request->password != "" ){
            $user->password = bcrypt($request->password);
        }
        //$user->password = $request->password;

        $user->save();

        //PUT method
        return redirect()->route('users.show',[$user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //DELETE method
    }
}
