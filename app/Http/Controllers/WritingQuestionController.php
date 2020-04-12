<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\writing_question;
use Illuminate\Support\Facades\DB;


class WritingQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $WQuestion = DB::select('select * from writing_questions');
        return view('AllWquestions')->with('data',$WQuestion);
    }
    public function display()
    {
        // $Wpage = DB::select('select * from writing_questions where date_format(created_at, "%Y-%m-%d") = date_format(now(),"%Y-%m-%d") ');
        $Wpage = DB::select('select * FROM writing_questions WHERE CURRENT_DATE BETWEEN created_at AND DATE_ADD(created_at, INTERVAL 7 DAY)' );
        return view('writing')->with('data',$Wpage);
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
