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
        Schema::create('invetasriskantor', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('subtitle');
            $table->string('background');
            $table->enum('status', ['show', 'notshow'])->default(('notshow'));
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invetasriskantor');
    }
};
