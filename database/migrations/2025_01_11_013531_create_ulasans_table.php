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
        Schema::create('ulasans', function (Blueprint $table) {
            $table->id('id_ulasan'); // Primary Key
            $table->foreignId('id_produk')->constrained('produks')->onDelete('cascade'); // Foreign Key
            $table->integer('rating')->default(0);
            $table->text('komentar')->nullable();
            $table->date('tanggal_ulasan')->nullable();
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
        Schema::dropIfExists('ulasans');
    }
};
