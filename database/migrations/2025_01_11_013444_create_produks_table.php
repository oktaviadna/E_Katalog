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
        Schema::create('produks', function (Blueprint $table) {
            $table->id('id_produk'); // Primary Key
            $table->string('nama_produk', 100);
            $table->text('deskripsi')->nullable();
            $table->foreignId('id_kategori')->constrained('kategoris')->onDelete('cascade'); // Foreign Key
            $table->decimal('harga', 10, 2);
            $table->string('url_gambar', 255)->nullable();
            $table->integer('jumlah_stok')->default(0);
            $table->integer('create_id')->nullable();
            $table->timestamp('create_datetime')->nullable();
            $table->integer('update_id')->nullable();
            $table->timestamp('update_datetime')->nullable();
            $table->timestamps(); // created_at & updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
