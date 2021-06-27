<?php

namespace App\Http\Controllers;

use App\matkul;
use Illuminate\Http\Request;
Use Alert;

class matkulController extends Controller
{
    public function index()
    {
        $matkul = matkul::all();
        return view('matkul.index', compact('matkul'));
    }

public function create()
{
    return view('matkul.create');
}

public function store(Request $request)
{
    Matkul::create($request->all());
    alert()->success('Sukses','Data Berhasil Disimpan');
    return redirect()->route('matkul');
}

public function edit($id)
{
    $matkul = Matkul::find($id);
    return view('matkul.edit', compact('matkul'));
}
public function update(Request $request, $id)
{
    $matkul = matkul::find($id);
    $matkul->update($request->all());
    toast('Yeay Berhasil Mengedit Data','success');
    return redirect()->route('matkul');

}
public function destroy($id)
{
        $matkul = matkul::find($id);
        $matkul->delete();
        toast('Yeay Berhasil Menghapus Data','success');
        return redirect()->route('matkul');
}
}