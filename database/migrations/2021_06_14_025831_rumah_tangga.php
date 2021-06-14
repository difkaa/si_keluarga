<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RumahTangga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumah_tanggas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('provinsi',100);
            $table->string('kabupaten',100);
            $table->string('kecamatan',100);
            $table->string('desa',100);
            $table->text('alamat');
            $table->string('nm_kepala_rt',100);
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
        Schema::dropIfExists('rumah_tangga');
    }
}
