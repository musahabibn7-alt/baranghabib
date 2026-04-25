@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto py-10 bg-white p-6 rounded shadow">

    <h2 class="text-xl font-bold mb-4">Edit Kategori</h2>

    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="nama" 
               value="{{ $kategori->nama }}"
               class="w-full border p-2 mb-4 rounded">

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>

</div>

@endsection