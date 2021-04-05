<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kategori;
use App\Menu;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select kategori.*, menu.idmenu AS menu from kategori inner join menu on menu.idmenu = kategori.idjenis
        // $ar_kategori = DB::table('kategori')->get();
        $ar_kategori = DB::table('kategori')
        ->join('menu','menu.idmenu', '=', 'kategori.idjenis')
        ->select('kategori.*', 'menu.idmenu as kategori')
        ->orderBy('idjenis','desc')
        ->get();
        return view('kategori/index', compact('ar_kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori/create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('kategori')->insert(
            [
            'idjenis'=>$request->get('idjenis'),
            'kategori'=>$request->get('kategori'),
        ]);

         return redirect('/kategori');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idmenu)
    {
        // $show = DB::table('kategori')->select('kategori')->get('idmenu');

        //select kategori.*, menu.idmenu AS menu from kategori inner join menu on menu.idmenu = kategori.idjenis

        // $kategori = DB::table('kategori')
        // ->join('menu','menu.idmenu','=','kategori.idjenis')
        // ->select('kategori.*','menu.idmenu AS kategori')
        // ->where('kategori.idjenis','=', $idjenis)
        // ->get();
        // return view('kategori.show', compact('kategori'));
        
         $data1 = \App\Menu::where('idmenu',$idmenu)->get();
        //return $data1;
       return view('kategori/show',array('data'=>$data1));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::where('id',$id)->get();
        return view('kategori/update', compact('kategori'));
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
        DB::table('kategori')->where('id',$id)->update([
            'idjenis'=>$request->idjenis,
            'kategori'=>$request->kategori,
        ]);
        return redirect('/kategori'.'/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kategori')->where('id',$id)->delete();
        return redirect('/kategori');
    }
}
