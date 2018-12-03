<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('groups.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $students = array();

        foreach ($request as $key => $value) {
            if(preg_match("/\d+diak/", $key))
                array_push($students, $value);
        }

        //TODO: e-mail alapján létrehozni a groupuser bejegyzéseket

        //TODO
        $request->validate([
            'group_name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
        ]);

/**
        { group_name: '',
          description: '',
          '1diak': 'asd@sdfg.hu',
          '2diak': 'sdffsdf@asdf.hu',
          '3diak': 'ydfasdf@dfgdfgh.hu' }
*/

        $group = new Group;

        $group->group_name = $request->group_name;
        $group->description = $request->description;

        $group->save();

        return redirect()->route('groups.show',[$group]);
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
            array_push($users, User::find($uid)->get());
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
