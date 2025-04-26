<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.admin');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'role' => 'required|in:Super Admin,Kasir',
        ]);

        // Simpan atau proses data di sini
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
