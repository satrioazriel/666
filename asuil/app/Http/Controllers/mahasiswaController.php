<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use Illuminate\Http\Request;
use Alert;

class mahasiswaController extends Controller
{
public function index()
{
    $mahasiswa = mahasiswa::all();
    return view('mahasiswa.index', compact('mahasiswa'));
}
public function create()
{
    return view('mahasiswa.tambah');
}
public function store(Request $request)
{
    mahasiswa::create($request->all());
    return redirect()->route('mahasiswa');
}

public function edit($id)
{
    $mahasiswa = mahasiswa::find($id);
    return view('mahasiswa.edit', compact('mahasiswa'));
}
public function update(Request $request, $id)
{
    $mahasiswa = mahasiswa::find($id);
    $mahasiswa->update($request->all());
    return redirect()->route('mahasiswa');

}
public function destroy($id)
{
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa');

}

}
