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
            $table->string('nama');
            $table->string('nik_ktp');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('agama');
            $table->string('status_kawin');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan1');
            $table->string('kecamatan1');
            $table->string('provinsi1');
            $table->string('kota/kabupaten1');
            $table->string('kode_pos');
            $table->string('kewarganegaraan');
            $table->string('ukuran_almet');
            $table->string('foto');
            $table->string('upload_ktp');
            $table->string('vaksin_covid19');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('alamat_orangtua');
            $table->string('keluarahan2');
            $table->string('kecamatan2');
            $table->string('provinsi2');
            $table->string('kota/kabupaten2');
            $table->string('nomor_handphone');
            $table->string('pekerjaan_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('nama_sekolah');
            $table->string('jenis_sekolah');
            $table->string('tahun_lulus');
            $table->string('jurusan');
            $table->string('no_ijazah');
            $table->string('nilai_UN');
            $table-> foreign('id_pendaftar')->references('id')->on('pendaftars');
            $table->bigInteger('id_pendaftar')->unsigned();
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
        Schema::dropIfExists('biodatas');
    }
};
