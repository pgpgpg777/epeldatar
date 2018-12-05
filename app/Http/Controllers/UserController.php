<?php

namespace App\Http\Controllers;

use App\User;
use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class UserController extends Controller
{

    public function profile(){
       // return view('profile', array('user' => Auth::user()) );

        $group_ids = DB::table('groupuser')->where('user_id', Auth::user()->id)->get();
        $groups = array();
       // $tasks = array();

        foreach($group_ids as $gid){
            $gr = Group::find($gid->group_id);
            array_push($groups, $gr);
            $tasks = DB::table('descriptions')->where('group_id', $gid->group_id)->get();
        }

        return view('profile', ['user'=>Auth::user(), 'groups' => $groups, 'tasks' => $tasks]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        $groups = array();
/*
        foreach ($users as $key => $user) {
            $groupids =  DB::table('groupuser')->where('user_id', $user->id)->get();
            $groups[$user->id] = array();
            foreach ($groupids as $gid) {
                $gr = Group::find($gid);
                alert($gr->group_name);
                array_push($groups[$user->id], $gr);
            }
        }
*/
        return view('users.index', ['users' => $users/*, 'groups' => $groups*/]);
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

        $group_ids = DB::table('groupuser')->where('user_id', $user->id)->get();
        $groups = array();
/*
        foreach($group_ids as $gid)
            array_push($groups, Group::find($gid));
*/
        return view('users.show', ['user'=>$user/*, 'groups' => $groups*/]);
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
