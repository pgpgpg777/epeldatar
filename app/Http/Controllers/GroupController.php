<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $groups = Group::all();
        $users = array();
        $user_ids = array();
        foreach ($groups as $group) {
            $gr_u = DB::table('groupuser')->where('group_id', $group->id)->get();
            $users[$group->id] = array();
            foreach ($gr_u as $gru) {
                $u = User::find($gru->user_id)->first();
                array_push($users[$group->id], $u);
            }
        }
    
        return view('groups.index', ['groups' => $groups, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('groups.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $group = new Group;

        $group->group_name = $request->group_name;
        $group->description = $request->description;

        $group->save();

        $u_id = array();
        foreach ($request->request as $key => $value) {
            if(preg_match("/users\d+/", $key)){
                array_push($u_id, [
                    'user_id' => $value,
                    'group_id' => $group->id
                ]);
            }
        }

        DB::table('groupuser')->insert($u_id);
        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        $user_ids = DB::table('groupuser')->where('group_id', $group->id)->get();

        $users = array();
        
        foreach($user_ids as $uid)
            array_push($users, User::find($uid->user_id)->get());
        return view('groups.show', ['group'=>$group, 'users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        
        return view('groups.edit', ['group'=>$group]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $request->validate([
            'group_name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
        ]);

        $group->group_name = $request->group_name;
        $group->description = $request->description;

        $group->save();

        return redirect()->route('groups.show',[$group]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
