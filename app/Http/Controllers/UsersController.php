<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $datas = Users::get();
        return view('auth.user', compact('datas'));
    }

    //select users.*, role.role_nama AS akses from users inner join role on role.id = users.id
    //ini join untuk profil
    //select users.*, karyawan.nama AS profil from users inner join karyawan on karyawan.id = users.karyawanid

     //$data_karyawan = Karyawan::where('id')->get();

    //select users.*, role.role AS akses from users inner join role on role.role = users.role
        $data_user = DB::table('users')
        ->join('role', 'role.id', '=', 'users.id')
        ->select('users.*', 'role.role_nama AS role')
        ->orderBy('id','desc')
        ->get();
        return view('users/index', compact('data_user'));

}
public function create()
    {
      return view('auth/register');
    }
    public function store(Request $request)
    {
     //tangkap request element2 form
        //Lalu panggil fungsi insert
        DB::table('users')->insert(
                [
                    'nama'=>$request->nama,
                    'email'=>$request->email,
                    'password'=> bcrypt(($request->input('password'))),
                                        
                    
                ]);
        //Landing page
        return redirect('user');
    }
