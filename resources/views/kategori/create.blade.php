@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto py-10 bg-white p-6 rounded shadow">

    <h2 class="text-xl font-bold mb-4">Tambah Kategori</h2>

    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf

        <input type="text" name="nama" 
               class="w-full border p-2 mb-4 rounded"
               placeholder="Nama kategori">

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Simpan
        </button>
    </form>

</div>

@endsection