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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('nidn')->nullable();
            $table->integer('nip')->nullable();
            $table->date('tmt_sk_pengangkatan_dosen')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('gelar_depan')->nullable();
            $table->string('gelar_belakang')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('perguruan_tinggi')->nullable();
            //$table->string('fakultas')->nullable();
            //$table->string('program_studi')->nullable();
            $table->string('jabatan_akademik_terakhir')->nullable();
            $table->string('jenis_pendidikan_yang_dibina')->nullable();
            $table->string('status_kepegawaian')->nullable();
            $table->integer('kum')->nullable();
            $table->date('tmt_jabatan_akademik_terakhir')->nullable();
            $table->string('pangkat_akademik_terakhir')->nullable();
            $table->date('tmt_pangkat_akademik_terakhir')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->integer('nip_pimpinan')->nullable();
            $table->integer('nidn_pimpinan')->nullable();
            $table->string('nama_pimpinan')->nullable();
            $table->string('gelar_depan_pimpinan')->nullable();
            $table->string('gelar_belakang_pimpinan')->nullable();
            $table->string('jabatan_pimpinan')->nullable();
            $table->string('jabatan_fungsional_pimpinan')->nullable();
            $table->string('golongan_pimpinan')->nullable();
            $table->string('tmt_golongan_terakhir_pimpinan')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodatas');
    }
};
