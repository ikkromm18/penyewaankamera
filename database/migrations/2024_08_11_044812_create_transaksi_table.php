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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('name');
            $table->string('nohp');
            $table->string('jenis_acara');
            $table->string('alamat');
            $table->time('waktu');
            $table->integer('drone')->default(null);
            $table->integer('jimijib')->default(null);
            $table->enum('status', ['diterima', 'ditolak', 'belum direspon'])->default('belum direspon');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
