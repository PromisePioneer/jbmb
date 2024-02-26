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
        Schema::create('table_motor', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('merkMotor');
            $table->string('transmisi');
            $table->year('tahun');
            $table->date('masaPajak');
            $table->string('kilometer');
            $table->text('deskripsi');
            $table->unsignedBigInteger('kondisi_id');
            $table->decimal('harga', 20, 2);
            $table->unsignedBigInteger('jenis_id');
            $table->boolean('status')->default(0);
            $table->string('foto');
            $table->timestamps();

            $table->foreign('kondisi_id')->references('id')->on('table_kondisi')->onDelete('cascade');
            $table->foreign('jenis_id')->references('id')->on('table_jenis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_motor');
    }
};
