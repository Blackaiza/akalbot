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
        Schema::create('permainan', function (Blueprint $table) {
            $table->id();
            $table->string('tajuk');
            $table->string('permasalahan');
            $table->string('gambar_akalbot');
            $table->string('gambar_hasilkod');
            $table->string('uji_minda');
            $table->string('pautan_video');
                        $table->string('hello_test');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permainan');
    }
};
