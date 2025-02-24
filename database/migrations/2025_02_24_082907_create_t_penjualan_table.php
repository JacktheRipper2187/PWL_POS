<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->id('penjualan_id'); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key ke user
            $table->string('pembeli', 50); // Pembeli
            $table->string('penjualan_kode', 20); // Kode penjualan
            $table->dateTime('penjualan_tanggal'); // Tanggal penjualan
            $table->timestamps(); // created_at dan updated_at

            // Foreign key constraint
            $table->foreign('user_id')->references('user_id')->on('m_user')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_penjualan');
    }
};