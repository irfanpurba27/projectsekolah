<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('kompetensi');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('no_telepon');
            $table->string('agama');
            $table->string('suku');
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            $table->string('no_kps');
            $table->string('asal_sekolah');
            $table->string('no_telepon_sekolah');
            $table->string('kota_sekolah');
            $table->string('tahun_lulus');
            $table->string('no_ijazah');
            $table->string('no_skhun');
            $table->string('nisn');
            $table->string('no_kis');
            $table->string('file');
            $table->string('id_user');
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
        Schema::dropIfExists('siswas');
    }
}
