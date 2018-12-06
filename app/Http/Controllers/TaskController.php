<?php

namespace App\Http\Controllers;

use App\Task;
use App\Group;
use App\Description;
use App\Question;
use App\Answer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $tasks = Task::all();
        $tasks = DB::table('descriptions')->get();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        return view('tasks.create', ['groups' => $groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*
        { test_name: 'asdfasdfasdf',
          teams: 'asdfasdfasdf',
          description: 'asdfasdfasdf',
          '1kerdes': 'sdfgsdfg',
          '1_valasz_1': 'sdfgsdfg',
          '1_valasz_2': 'sdfgsdfg',
          '1_jovagyrossz_2': 'on',
          '1valasz3': 'sdfg',
          '2kerdes': 'sdfgsdfg',
          '3kerdes': 'sdfgsdfg' }

*/

          $desc_id = DB::table('descriptions')->insertGetId(
            [
                'name' => $request->test_name,
                'type' => 0,
                'text' => $request->description,
                'group_id' => $request->teams 
            ]
          );

          $answers = array();
          $question_id = 0;
         
          foreach ($request->request as $key => $value) {
            if(preg_match("/\d+kerdes/", $key)){
                $question_id = DB::table('questions')->insertGetId(
                    [
                        'desc_id' => $desc_id,
                        'text' => $value
                    ]
                );
            }
            if(preg_match("/\d+_valasz_\d+/", $key)){
                    array_push($answers, [
                        'question_id' => $question_id,
                        'text' => $value,
                        'goodbad' => 0
                    ]);
            }
            if(preg_match("/\d+_jovagyrossz_\d+/", $key)){
                $answers[explode("_", $key)[2]-1]["goodbad"] = 1;
            }
        }

            DB::table('answers')->insert($answers);

            return redirect()->route('show_task',['task_id'=>$desc_id]);
    }


    public function show_task($task_id)
    {

        $description  = DB::table('descriptions')->where('id', $task_id)->first();
        $answers = array();
        $qs = DB::table('questions')->where('desc_id', $task_id)->get();
        foreach ($qs as $q) {
            $as = DB::table('answers')->where('question_id', $q->id)->get();
            $answers[$q->id] = $as;    
        }


        return view('tasks.show', ['description'=>$description, 'questions' => $qs, 'answers'=>$answers]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('tasks.show', ['task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', ['task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
