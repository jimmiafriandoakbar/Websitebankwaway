<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('verifikasi_download', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 150);
            $table->string('email', 150);
            $table->string('no_telp', 50);
            $table->string('instansi', 150);
            $table->text('keperluan');
            $table->boolean('agree')->default(0);
            $table->string('file', 255)->nullable();
            $table->string('ip_address', 50)->nullable();
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('verifikasi_download');
    }
};
