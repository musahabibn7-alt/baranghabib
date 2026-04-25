@extends('layouts.app')

@section('title', 'Senkay Project')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white/95 backdrop-blur-sm shadow-sm fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Senkay Project</span>
                </div>

                <!-- Login Button -->
                <a href="{{ route('login') }}" class="group flex items-center space-x-2 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-2.5 px-6 rounded-full transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                    </svg>
                    <span>Login Admin</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Overlay Text -->
    <section class="relative h-[500px] mt-16 overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=1920&h=500&fit=crop" alt="Furniture Premium" class="w-full h-full object-cover">
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
            <div class="max-w-2xl text-white space-y-6">
                <div class="inline-flex items-center space-x-2 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    <span class="text-sm font-medium">Koleksi Terbaru 2024</span>
                </div>

                <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                    Temukan <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Furniture Impian</span> Anda
                </h1>

                <p class="text-xl text-gray-200 max-w-lg">
                    Koleksi funiture premium berkualitas tinggi untuk ruang tamu, kantor, dan ruang kerja Anda. Desain modern dengan harga terjangkau.
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#produk" class="inline-flex items-center space-x-2 bg-white text-gray-900 font-semibold py-3 px-8 rounded-full hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <span>Lihat Produk</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>

                    <div class="flex items-center space-x-4 text-white/90">
                        <div class="flex -space-x-2">
                            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-sm font-bold border-2 border-white">5K+</div>
                        </div>
                        <span class="text-sm">Pelanggan Puas</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-gray-50 to-transparent"></div>
    </section>

    <!-- Features Banner -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="flex items-center space-x-4 p-4 rounded-2xl bg-gradient-to-br from-blue-50 to-blue-100">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Kualitas Premium</h3>
                        <p class="text-sm text-gray-600">Bahan berkualitas tinggi</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4 p-4 rounded-2xl bg-gradient-to-br from-purple-50 to-purple-100">
                    <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Pengiriman Cepat</h3>
                        <p class="text-sm text-gray-600">1-3 hari kerja</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4 p-4 rounded-2xl bg-gradient-to-br from-green-50 to-green-100">
                    <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Garansi 1 Tahun</h3>
                        <p class="text-sm text-gray-600">Jaminan kepuasan</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4 p-4 rounded-2xl bg-gradient-to-br from-orange-50 to-orange-100">
                    <div class="w-12 h-12 bg-orange-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Layanan 24/7</h3>
                        <p class="text-sm text-gray-600">Siap membantu Anda</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <main id="produk" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <span class="inline-block px-4 py-1.5 bg-blue-100 text-blue-700 font-semibold rounded-full text-sm mb-4">
                Koleksi Kami
           <!-- KATEGORI (CLEAN CHIP STYLE) -->
<div class="mb-12 text-center">

    <h3 class="text-2xl font-bold text-gray-900 mb-6">
        Kategori
    </h3>

    <div class="flex flex-wrap justify-center gap-3">
        @foreach($kategoris as $kategori)
            <a href="#"
               class="px-5 py-2 bg-gray-100 text-gray-700 rounded-full 
                      hover:bg-blue-600 hover:text-white 
                      transition duration-300 font-medium shadow-sm hover:shadow-md">
                
                {{ $kategori->nama }}
            </a>
        @endforeach
    </div>

</div>
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Daftar Produk Furniture</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Pilih dari berbagai koleksi furniture berkualitas untuk melengkapi ruang Anda
            </p>
        </div>

        @if($barangs->isEmpty())
            <!-- Empty State -->
            <div class="text-center py-20 bg-white rounded-3xl shadow-sm">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum Ada Produk</h3>
                <p class="text-gray-500">Silakan login admin untuk menambahkan produk Furniture.</p>
            </div>
        @else
            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($barangs as $index => $barang)
                    <div class="group bg-white rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100 transform hover:-translate-y-2">
                        <!-- Image Container -->
                        <div class="relative h-56 overflow-hidden">
                            @if($barang->gambar)
                                <!-- Gambar dari database sebagai Base64 -->
                                <img src="{{ $barang->gambar }}" alt="{{ $barang->nama }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            @endif

                            <!-- Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/90 backdrop-blur-sm text-gray-800 text-xs font-bold px-3 py-1.5 rounded-full">
                                    {{ $barang->created_at->diffForHumans() }}
                                </span>
                            </div>

                            <!-- Hover Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4 right-4">
                                    <button class="w-full bg-white text-gray-900 font-semibold py-2.5 rounded-xl hover:bg-gray-100 transition-colors">
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors line-clamp-1">
                                {{ $barang->nama }}
                            </h3>

                            <p class="text-gray-600 text-sm mb-4 line-clamp-2 leading-relaxed">
                                {{ $barang->deskripsi ?? 'Furniture berkualitas dengan desain modern dan bahan premium.' }}
                            </p>

                            <!-- Price & Action -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div>
                                    <p class="text-xs text-gray-500 mb-1">Harga</p>
                                    <p class="text-xl font-bold text-blue-600">
                                        Rp {{ number_format($barang->harga, 0, ',', '.') }}
                                    </p>
                                </div>

                                <button class="w-10 h-10 bg-blue-50 hover:bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Stats Footer -->
            <div class="mt-16 text-center">
                <div class="inline-flex items-center space-x-2 bg-white px-6 py-3 rounded-full shadow-sm">
                    <span class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></span>
                    <span class="text-gray-600">Menampilkan</span>
                    <span class="font-bold text-gray-900">{{ $barangs->count() }}</span>
                    <span class="text-gray-600">produk tersedia</span>
                </div>
            </div>
        @endif
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <div class="w-8 h-8 bg-gradient-to-br from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <span class="font-bold text-gray-900">Senkay Project</span>
                </div>
                <p class="text-gray-500 text-sm">
                    &copy; {{ date('Y') }} Senkay Project. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</div>
@endsection
