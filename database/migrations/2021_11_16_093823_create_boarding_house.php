<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardingHouse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boarding_house', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            
            $table->longText('description');
            $table->float('price');
            $table->float('discount')->nullable();
            $table->bigInteger('rating_id');
            $table->bigInteger('jenis_id');
            $table->bigInteger('type_id');
            
            $table->bigInteger('kelas_id');
            $table->bigInteger('peraturan_id');
            $table->bigInteger('pengelola_id');
            $table->bigInteger('foto_kos_id');
            $table->bigInteger('foto_kamar_id');
            $table->bigInteger('fasilitas_id');
            $table->bigInteger('chat_id');
            $table->bigInteger('years');
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
        Schema::dropIfExists('boarding_house');
    }
}
