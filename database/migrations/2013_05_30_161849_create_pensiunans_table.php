<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePensiunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pensiunans', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('nip')->unique();
            $table->string('nama_pensiunan'); 
            $table->string('tmpt_lahir');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('golongan_darah');
            $table->string('status_pernikahan');
            $table->string('status_kepegawaian');
            $table->date('tgl_kenaikan_pangkat');
            $table->date('tgl_kenaikan_gaji');
            $table->string('alamat');
            $table->biginteger('no_telp');
            $table->string('email');
            $table->string('foto')->nullable();     
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
        Schema::dropIfExists('pensiunans');
    }
}