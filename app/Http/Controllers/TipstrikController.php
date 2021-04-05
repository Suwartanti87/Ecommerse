<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tiptrik;

class TipstrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = DB::table('_tiptrik')->get();
        // return $data;
        return view('Tipstrik.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tipstrik/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('_tiptrik')->insert(
            [
            'idkategori'=>$request->get('idkategori'),
            'nama'=>$request->get('nama'),
            'foto'=>$request->get('foto'),
            'keterangan'=>$request->get('keterangan'),
        ]);

         return redirect('/tips-and-trik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
         $data = \App\Tiptrik::where('id',$id)->get();
       // return $data;
       return view('Tipstrik.show', compact('data'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data1 = DB::table('_tiptrik')->where('id',$id)->get();
        return view('Tipstrik/update', compact('data1'));
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
          DB::table('_tiptrik')->where('id',$id)->update([
            'idkategori'=>$request->idkategori,
            'nama'=>$request->nama,
            'foto'=>$request->foto,
            'keterangan'=>$request->keterangan,
        ]);
          return redirect('/tips-and-trik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('_tiptrik')->where('id',$id)->delete();
        return redirect('/tips-and-trik');
    }


  
}
