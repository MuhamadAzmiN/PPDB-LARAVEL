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
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            $table->string('umur');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('jurusan');
            $table->string('tinggal');
            $table->string('nis')->unique()->nullable();
            $table->string('asal_sekolah');
            $table->string('tanggal_lahir');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftars');
    }
};
