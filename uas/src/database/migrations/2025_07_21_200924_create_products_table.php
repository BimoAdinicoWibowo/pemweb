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
<<<<<<<< HEAD:uts/src/database/migrations/2025_05_19_192253_create_murids_table.php
        Schema::create('murids', function (Blueprint $table) {
            $table->id();
            $table->String('nama');
            $table->String('kelas');
            $table->String('nisn');
            $table->String('tanggal_lahir');
            $table->String('alamat');
========
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama produk
            $table->text('description')->nullable(); // Deskripsi, bisa null
            $table->decimal('price', 10, 2); // Harga
            $table->unsignedInteger('stock')->default(0); // Stok produk
>>>>>>>> 469162c (Simpan perubahan lokal sebelum pull):uas/src/database/migrations/2025_07_21_200924_create_products_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:uts/src/database/migrations/2025_05_19_192253_create_murids_table.php
        Schema::dropIfExists('murids');
========
        Schema::dropIfExists('products');
>>>>>>>> 469162c (Simpan perubahan lokal sebelum pull):uas/src/database/migrations/2025_07_21_200924_create_products_table.php
    }
};
