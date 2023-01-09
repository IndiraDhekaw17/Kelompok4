<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('tanggal_lahir');
            $table->string('alamat');
            $table->string('agama');
            $table->integer('no_tlp');
            $table->string('jenis_kelamin');
            $table->string('pendidikan_terakhir');
            $table->string('fakultas_satu');
            $table->string('program_studisatu');
            $table->string('fakultas_dua');
            $table->string('program_studidua');
            $table->string('email');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('alamat_orangtua');
            $table->integer('no_tlpnortu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
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
        Schema::dropIfExists('table_pendaftaran');
    }
}
