<?php

namespace App\Http\Controllers;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
   
    public function index()
    {

        $prodi = Prodi::all();
        return view('prodi.index', compact('prodi'));
    }

   
    public function create()
    {
        $prodi = Prodi::all();
        return view('prodi.create', compact('prodi'));

    }

    
    public function store(Request $request)
    {
         //validasi
         $validated = $request->validate([
            'prodi' => 'required',
        ]);

        $prodi = new Prodi();
        $prodi->prodi = $request->prodi;
        $prodi->save();
        return redirect()->route('prodi.index')
            ->with('success', 'Data berhasil dibuat!');
    }

   
    public function show($id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('prodi.show', compact('prodi'));
    }

   
    public function edit($id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('prodi.edit', compact('prodi'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'prodi' => 'required',
           
        ]);

        $prodi = Prodi::findOrFail($id);
        $prodi->prodi = $request->prodi;
        $prodi->save();
        return redirect()->route('prodi.index')
            ->with('success', 'Data berhasil diedit!');
    }

    public function destroy($id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();
        return redirect()->route('prodi.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
