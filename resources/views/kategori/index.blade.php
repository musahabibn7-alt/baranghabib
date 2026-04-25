@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto py-10">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Kelola Kategori</h1>

        <a href="{{ route('kategori.create') }}" 
           class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
           + Tambah
        </a>
    </div>

    <div class="bg-white shadow rounded-lg p-6">

        @foreach($kategoris as $k)
        <div class="flex justify-between items-center border-b py-3">

            <span class="font-semibold">{{ $k->nama }}</span>

            <div>
                <a href="{{ route('kategori.edit', $k->id) }}" 
                   class="text-blue-600 mr-3">Edit</a>

                <form action="{{ route('kategori.destroy', $k->id) }}" 
                      method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600">Hapus</button>
                </form>
            </div>

        </div>
        @endforeach

    </div>

</div>

@endsection