<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(Request $request){
        if($request->hasFile('foto')){
            $resorce       = $request->file('foto');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/image", $name);
            $save = DB::table('admin')->insert([
                'nama' => $request->nama,
                'tempat' => $request->tempat,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_klamin' => $request->jenis_klamin,
                'alamat' => $request->alamat,
                'jabatan' => $request->jabatan,
                'opd' => $request->opd,
                'hp' => $request->hp,
                'foto' => $name]);
                return redirect('/admin');
    }
}
    public function admin()
    {
        $data_admin =\App\admin::all();
        return view('admin/admin',['admin' => $data_admin]);
    }

    public function delete($id)
    {
        $data_admin = \App\admin::find($id);
        $data_admin->delete($data_admin);
        return redirect('/admin');
    }

    public function edit($id)
    {
        $admin = \App\admin::find($id);
        return view('admin/edit',['admin' => $admin]);
    }

    public function update(Request $request,$id)
    {
        $admin = \App\admin::find($id);
        $admin->update($request->all());
        if($request->hasFile('foto')){
            $resorce       = $request->file('foto');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/image", $name);
            $save = DB::table('admin')->insert([
                'nama' => $request->nama,
                'tempat' => $request->tempat,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_klamin' => $request->jenis_klamin,
                'alamat' => $request->alamat,
                'jabatan' => $request->jabatan,
                'opd' => $request->opd,
                'hp' => $request->hp,
                'foto' => $name]);
        return redirect('/admin');
            }
    }
}
