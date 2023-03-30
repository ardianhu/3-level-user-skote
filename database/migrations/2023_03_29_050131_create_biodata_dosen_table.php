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
        Schema::create('biodata_dosen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nidn')->unique();
            $table->unsignedBigInteger('nip');
            $table->date('tmt_sk');
            $table->string('nama');
            $table->string('gelar_depan');
            $table->string('gelar_belakang');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('universitas');
            $table->string('pembinaan_pendidikan');
            $table->string('status_kepegawaian');
            $table->string('jafung_terakhir');
            $table->unsignedBigInteger('kum_jafung_terakhir');
            $table->date('tmt_jafung_terakhir');
            $table->string('pangkat_terakhir');
            $table->date('tmt_pangkat_terakhir');
            $table->string('pendidikan_terakhir');
            $table->string('masa_kerja');
            $table->unsignedBigInteger('nip_pimpinan');
            $table->unsignedBigInteger('nidn_pimpinan');
            $table->string('nama_pimpinan');
            $table->string('gelar_depan_pimpinan');
            $table->string('gelar_belakang_pimpinan');
            $table->string('jabatan_pimpinan');
            $table->string('jafung_terakhir_pimpinan');
            $table->string('gol_pimpinan');
            $table->date('tmt_gol_terakhir_pimpinan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata_dosen');
    }
};
