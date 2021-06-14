<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnggotaKeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_keluargas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_keluarga')->constrained('keluargas')->nullable();
            $table->string('nik',30)->unique();
            $table->string('nama',100);
            $table->string('hub_keluarga',50);
            $table->date('tgl_lahir');
            $table->integer('jenis_kelamin');
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
        Schema::dropIfExists('anggota_keluargas');
    }
}
