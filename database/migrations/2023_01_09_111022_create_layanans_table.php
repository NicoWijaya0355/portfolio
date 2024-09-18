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
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_lembaga');
            $table->string('nama_layanan');       
            $table->time('senin_kamis')->format('H:i');
            $table->time('kamis');
            $table->time('jumat');
            $table->time('jumat2');
            $table->string('jenis_lembaga');
            $table->string('gambar1');
            $table->string('denah');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layanans');
    }
};
