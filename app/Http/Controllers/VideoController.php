<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('video')->get();
        // return $data;
        return view('video/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function see()
    {
        $data = DB::table('video')->get();
        // return $data;
        return view('video/see');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Video/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('nama')) {
            $file = $request->file('nama');
            $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $nama = $fileName.'-'.uniqid().'.'.$file->getClientOriginalExtension();
            
            $path = public_path('video');
            $target = $nama;
            $file->move($path, $target);
        }
        
        // $vid = $request->file('nama');
        // $getRealName =str_replace('.mp4', "", $file->getClientOriginalName());
        // $filename = $getRealName.'-'.time().'.'.$file->getClientOriginalExtension();
        // $location = public_path('video', $filename);
        // $vid->move($location);
        


        DB::table('video')->insert([
            'link'=>$request->get('link'),
            'nama'=>$nama,
            'judul'=>$request->get('judul'),
            'deskripsi'=>$request->get('deskripsi'),
        ]);
        return redirect('/vid');
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
        $data = Video::where('id',$id)->get();
        return view('video/update', compact('data'));
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
        $data = Video::where('id', $id)->get();
        foreach($data as $value){
            $nama = $value->nama;
        }
        if(!empty(request()->nama) && !empty($nama)){
            unlink('video'.$nama);
        }
        // request()->validate([
        //     'nama'=>'video|mimes:mp4|max:2000',]);
        if (!empty(request()->foto)){
            $fileName =request()->nama->move(public_path('video'), $fileName);
            DB::table('video')->where('id', $id)->update([
                'link'=>$request->link,
                'nama'=>$fileName,
                'judul'=>$request->judul,
                'deskripsi'=>$request->deskrips,
            ]);
        }else{

            DB::table('video')->insert([
                'link'=>$request->link,
                'nama'=>$request->nama,
                'judul'=>$request->judul,
                'deskripsi'=>$request->deskripsi,
            ]);
        }
        return redirect('/vid');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('video')->where('id',$id)->delete();
        return redirect('/vid');
    }
    
}
