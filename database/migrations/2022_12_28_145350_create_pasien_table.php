<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pasiens', function (Blueprint $table) {
            $table->id('id_pasien', 8);
            $table->string('nama_pasien', 255);
            $table->string('email_pasien', 255);
            $table->string('password_pasien', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_pasiens');
    }
};
