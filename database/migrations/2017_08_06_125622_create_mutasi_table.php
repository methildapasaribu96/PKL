<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()   
  
  

    {
        Schema::create('mutasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->biginteger('no_rek_baru')->nullable();
            $table->string('kantor_bayar_baru')->nullable();
            $table->string('alamat_baru')->nullable();
            $table->string('desa_baru')->nullable();
            $table->string('kecamatan_baru')->nullable();
            $table->string('kabupaten_baru')->nullable();
            $table->biginteger('no_telp_baru')->nullable();
            $table->string('status')->default('Belum Diverifikasi');
            $table->biginteger('no_rek_lama')->nullable();
            $table->string('kantor_bayar_lama')->nullable();
            $table->string('alamat_lama')->nullable();
            $table->string('desa_lama')->nullable();
            $table->string('kecamatan_lama')->nullable();
            $table->string('kabupaten_lama')->nullable();
            $table->biginteger('no_telp_lama')->nullable();
            $table->string('komentar')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('sk')->nullable();
            $table->string('ktp')->nullable();
            $table->string('buku_rekening')->nullable();
            $table->integer('bulan_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onCreate('cascade');
            $table->foreign('bulan_id')->references('id')->on('bulans')->onDelete('cascade')->onCreate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mutasis');
    }
}
