<?php

namespace App\Http\Controllers;

use App\Supply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
          supplier_desc: 'sdfgsdfgsdfg',
          '0_desc': 'sdfgsdfgsdfg',
          '1_pic': 'Screenshot_1543786051.png',
          '2_youtube_url': 'http://www.youtube.com/embed/tbuInY22oK8',
          '3_desc':
           'asdfasdf éldfkgjioáij kjsadféishf opifgj apdfogij asőoidf ,odsfj kn éelk rjoaifj asdofkj lkj qweáotj aásojgdf aésdlkgj éij aéskdhf éoiauewtoiupiweroiu kjdahfgkjan ksjdfhaésidfj' }
*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function show(Supply $supply)
    {

        
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
