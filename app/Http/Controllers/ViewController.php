<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ts = $request->input('task');
        $TView = DB::select("select * from tutorials where SubType = '$ts' ");
        return view('ViewTask')->with('data',$TView);
    }

    public function getTasks()
    {
        $datas = DB::select("select distinct SubType as types from tutorials where task_id = 3 ");
        return view('writingT1')->with('data',$datas);
    }

    public function getWTL()
    {
        $data2 = DB::select("select distinct SubType as types from tutorials where task_id = 4 ");
        return view('writingT1GT')->with('data',$data2);
    }

    public function getWTE()
    {
        $data1 = DB::select("select distinct SubType as types from tutorials where task_id = 2 ");
        return view('writingT2')->with('data',$data1);
    }

    public function getSpeak()
    {
        $data3 = DB::select("select distinct SubType as types from tutorials where task_id = 6 ");
        return view('speaking')->with('data',$data3);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
