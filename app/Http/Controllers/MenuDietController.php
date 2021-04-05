<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\MenuDiet;

class MenuDietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select _menu_diet.*, _kategori_diet.kategori AS kategori from _menu_diet inner join _kategori_diet on _kategori_diet.idkategori = _menu_diet.idmenu
        // $data = DB::table('_menu_diet')->get();
        // return $data;
        
        $data = DB::table('_menu_diet')
        ->join('_kategori_diet','_kategori_diet.idkategori', '=', '_menu_diet.idmenu')
        ->select('_menu_diet.*', '_kategori_diet.kategori as kategori')
        ->get();
        return view('Diet.index',compact('data') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Diet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'idmenu'=>'required|string',
            'kode' => 'required|string',
            'nama'=>'required|string',
            
        ]);
        $file = $request->file('foto');
        $nama_file = time().'.'.$file->getClientOriginalName();

        $tujuan_upload = 'img/menu';
        $file->move($tujuan_upload,$nama_file);

        DB::table('_menu_diet')->insert(
            [
            'idmenu'=>$request->get('idmenu'),
            'kode'=>$request->get('kode'),
            'nama'=>$request->get('nama'),
            'foto'=>$nama_file,
            'keterangan'=>$request->get('keterangan'),
        ]);

         return redirect('/MenuDiet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data1 = \App\MenuDiet::where('id',$id)->get();
      
       return view('Diet.show',array('data'=>$data1));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = MenuDiet::where('id', $id)->get();
        return view('Diet.update', compact('data'));
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
         DB::table('_menu_diet')->where('id',$id)->update([
            'idmenu'=>$request->idmenu,
            'kode'=>$request->kode,
            'nama'=>$request->nama, 
            'foto'=>$request->foto,
            'keterangan'=>$request->keterangan,
        ]);
          return redirect('/MenuDiet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('_menu_diet')->where('id',$id)->delete();
        return redirect('/MenuDiet');
    }
}
