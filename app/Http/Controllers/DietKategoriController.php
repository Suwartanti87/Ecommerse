<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\MenuDiet;
use \App\DietKategori;

class DietKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::table('_kategori_diet')->get();
        //select _kategori_diet.*, _menu_diet.idmenu AS kategori from _kategori_diet inner join _menu_diet on _menu_diet.idmenu = _kategori_diet.idkategori

        $kategori = DB::table('_kategori_diet')
        ->join('_menu_diet', '_menu_diet.idmenu', '=', '_kategori_diet.idkategori')->select('_kategori_diet.*', '_menu_diet.idmenu as Kategori')->get();
        return view('dietKategori/index', compact('kategori'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dietKategori/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('_kategori_diet')->insert(
            [
            'idkategori'=>$request->get('idkategori'),
            'kategori'=>$request->get('kategori'),
        ]);

         return redirect('/KategorimenuDiet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idmenu)
    {
        $data1 = \App\MenuDiet::where('idmenu',$idmenu)->get();
      
       return view('dietKategori/show',array('data'=>$data1));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DietKategori::where('id', $id)->get();
        return view('dietKategori.update', compact('data'));
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
        DB::table('_kategori_diet')->where('id',$id)->update([
            'idkategori'=>$request->idkategori,
            'kategori'=>$request->kategori,
        ]);
        return redirect('/KategorimenuDiet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('_kategori_diet')->where('id',$id)->delete();
        return redirect('/KategorimenuDiet');
    }
}
