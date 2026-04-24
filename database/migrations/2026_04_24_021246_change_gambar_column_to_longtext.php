<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('barangs', function (Blueprint $table) {
            // Ubah kolom gambar dari VARCHAR(255) ke LONGTEXT (untuk Base64)
            $table->longText('gambar')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('barangs', function (Blueprint $table) {
            // Kembalikan ke VARCHAR(255) untuk path file
            $table->string('gambar', 255)->nullable()->change();
        });
    }
};
