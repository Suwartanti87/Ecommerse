<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TdeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('TDEE/index');
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
        $aktifitas = $request->input('aktifitas');
        $bb = $request->input('BB');
        $kb = 0;
        $tb = $request->input('TB');
        $u = $request->input('U');

        $rumuslalaki ='66' + ('13.7' * $bb) + ('5' * $tb ) - ('6.8' * $u);
        $rumusawewe ='655' + ('9.6' * $bb)+('1.8' * $tb)-('4.7'* $u);

        if ($request->gender == 'male') {
            $kb = $rumuslalaki * $aktifitas;
        } else {
            $kb = $rumusawewe * $aktifitas;
        }

        $request->session()->flash('kb', $kb);
        
        return redirect()->back();
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
