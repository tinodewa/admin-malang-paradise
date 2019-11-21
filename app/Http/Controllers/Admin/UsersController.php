<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        // mengambil data dari table user
        $users = DB::table('user')->get();

        // mengirim data user ke view index
        return view('admin/users/index', ['users' => $users]);
    }

    public function tambah()
    {
        return view('admin/users/tambah');
    }

    public function simpan(Request $request)
    {
        // insert data ke table user
        DB::table('user')->insert([
            'username' => $request->username,
            'password' => $request->password,
            'name' => $request->name
        ]);
        // alihkan halaman ke halaman user
        return redirect()->route('admin.user')
            ->with([
                'success' => 'User berhasil ditambahkan'
            ]);
    }

    public function edit($id)
    {
        // mengambil data user berdasarkan id yang dipilih
        $users = DB::table('user')->where('id', $id)->get();

        // passing data user yang didapat ke view edit.blade.php
        return view('admin/users/edit', ['users' => $users]);
    }

    public function update(Request $request)
    {
        // update data user
        DB::table('user')->where('name', $request->name)->update([
            'username' => $request->username,
            'password' => $request->password,
            'name' => $request->name
        ]);
        // alihkan halaman ke halaman user
        return redirect()->route('admin.user');
    }

    public function hapus($id)
    {
        // menghapus data user berdasarkan id yang dipilih
        DB::table('user')->where('id', $id)->delete();

        // alihkan halaman ke halaman user
        return redirect()->route('admin.user')
            ->with([
                'success' => 'User berhasil dihapus'
            ]);
    }
}
