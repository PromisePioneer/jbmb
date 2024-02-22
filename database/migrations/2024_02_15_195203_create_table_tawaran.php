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
        Schema::create('table_tawaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('motor_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('hargaTawar', 20, 2);
            $table->timestamps();

            $table->foreign('motor_id')->references('id')->on('table_motor')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('table_status')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_tawaran');
    }
};
