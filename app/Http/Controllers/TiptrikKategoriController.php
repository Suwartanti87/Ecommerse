<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\TiptrikKategori;
use \App\Tiptrik;

class TiptrikKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select _tiptrik_kategori.*, _tiptrik.idkategori AS kategori from _tiptrik_kategori inner join _tiptrik on _tiptrik.idkategori = _tiptrik_kategori.idkategori
        // $data = DB::table('_tiptrik_kategori')->get();
        $data = DB::table('_tiptrik_kategori')->join('_tiptrik', '_tiptrik.idkategori', '=', '_tiptrik_kategori.idkategori')->select('_tiptrik_kategori.*', '_tiptrik.idkategori as kategori')->orderBy('idkategori','desc')->get();
        // return $data;
        return view('TiptrikKategori/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TiptrikKategori/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('_tiptrik_kategori')->insert([
            'idkategori'=>$request->get('idkategori'),
            'kategori'=>$request->get('kategori'),
        ]);
        return redirect('/KategoriTipsTrik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idkategori)
    {
         $data1 = \App\Tiptrik::where('idkategori',$idkategori)->get();
        //return $data1;
       return view('TiptrikKategori/show',array('data'=>$data1));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tips = TiptrikKategori::where('id',$id)->get();
        return view('TiptrikKategori/update', compact('tips'));
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
        DB::table('_tiptrik_kategori')->where('id', $id)->update([
            'idkategori'=>$requet->idkategori,
            'kategori'=>$request->kategori,
        ]); 
        return redirect('/KategoriTipsTrik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('_tiptrik_kategori')->where('id',$id)->delete();
        return redirect('/KategoriTipsTrik');
    }
}
