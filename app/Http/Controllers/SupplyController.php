<?php

namespace App\Http\Controllers;

use App\Supply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplies = Supply::all();
        return view('supplies.index', ['supplies' => $supplies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplies.create');
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
        { supplies_name: 'wetrwegr',
          supplies_teams: 'sdfgsdfg',
          supplies_desc: 'sdfgsdfgsdfg',
          '0_desc': 'sdfgsdfgsdfg',
          '1_pic': 'Screenshot_1543786051.png',
          '2_youtube_url': 'http://www.youtube.com/embed/tbuInY22oK8',
          '3_desc':
           'asdfasdf éldfkgjioáij kjsadféishf opifgj apdfogij asőoidf ,odsfj kn éelk rjoaifj asdofkj lkj qweáotj aásojgdf aésdlkgj éij aéskdhf éoiauewtoiupiweroiu kjdahfgkjan ksjdfhaésidfj' }
*/  

        // type --> 0 = task, 1 = supply
        $desc_id = DB::table('descriptions')->insertGetId(
            [
                'name' => $request->supplies_name,
                'type' => 1,
                'text' => $request->supplies_desc,
                'group_id' => 1 ///TODO
            ]
        );

        $components = array();
        $sequence_num;
        $type;
        $type_value;
        foreach ($request as $key => $value) {
            if(preg_match("/\d+_.+/", $key)){
                $sequence_num = explode("_", $key)[0];
                $type_value = $value;
                if(preg_match("/\d+_desc/", $key)){
                    $type=0;
                }
                if(preg_match("/\d+_pic/", $key)){
                    $type=1;
                }
                if(preg_match("/\d+_youtube_url/", $key)){
                    $type=2;
                }
                array_push($components, [
                    'desc_id' => $desc_id, 
                    'type' => $type, 
                    'type_value' => $type_value,
                    'sequence_num' => $sequence_num
                ]);
            }
        }

        $group_ids = array(); //?????
        

        DB::table('components')->insert(
            $components
        );
        

        return redirect()->route('show_supply',['supply_id'=>$desc_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function show_supply($supply_id)
    {

        $description  = DB::table('descriptions')->where('id', $supply_id)->get();
        $components = DB::table('components')->where('desc_id', $supply_id)->get();
        
        return [$description, $components];
        return view('supplies.show', ['supply'=>$supply]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function edit(Supply $supply)
    {
        return view('supplies.edit', ['supply'=>$supply]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supply $supply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supply $supply)
    {
        //
    }
}
