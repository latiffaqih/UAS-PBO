<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('restable', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('jumlah_orang');
            $table->timestamp('tanggal_reservasi');
            $table->string('email_telefon');
            $table->timestamps();
        });
    }

    /**

Reverse the migrations.*
@return void*/
public function down(){Schema::dropIfExists('restable');}
};
