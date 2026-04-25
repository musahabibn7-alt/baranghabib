<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::latest()->get();
        $kategoris = Kategori::all();
        return view('barangs.index', compact('barangs', 'kategoris'));
    }

    /**
     * Display public listing.
     */
    public function publicIndex()
    {
        $barangs = Barang::latest()->get();
        $kategoris = Kategori::all();
        return view('welcome', compact('barangs', 'kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     * Simpan gambar sebagai Base64 di database (bukan file storage)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Konversi gambar ke Base64 untuk disimpan di database
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $imageData = base64_encode(file_get_contents($file->getRealPath()));
            $mimeType = $file->getMimeType();
            $validated['gambar'] = "data:{$mimeType};base64,{$imageData}";
        }

        Barang::create($validated);

        return redirect()->route('admin.index')->with('success', 'Barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('barangs.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('barangs.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     * Update gambar sebagai Base64 di database
     */
    public function update(Request $request, string $id)
    {
        $barang = Barang::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Konversi gambar baru ke Base64
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $imageData = base64_encode(file_get_contents($file->getRealPath()));
            $mimeType = $file->getMimeType();
            $validated['gambar'] = "data:{$mimeType};base64,{$imageData}";
        }

        $barang->update($validated);

        return redirect()->route('admin.index')->with('success', 'Barang berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     * Hapus data barang (gambar sudah di database, tidak perlu hapus file)
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);
        
        // Gambar disimpan di database sebagai Base64,
        // jadi cukup hapus record saja
        $barang->delete();

        return redirect()->route('admin.index')->with('success', 'Barang berhasil dihapus');
    }
}
