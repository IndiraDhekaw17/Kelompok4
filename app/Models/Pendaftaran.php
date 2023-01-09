<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Pendaftaran extends Model
{
    protected $table = 'table_pendaftaran';

    protected $fillable = ['nama_lengkap', 'tanggal_lahir', 'alamat', 'agama', 'no_tlp',
   'jenis_kelamin',
    'pendidikan_terakhir',
   'fakultas_satu',
    'program_studisatu',
    'fakultas_dua',
    'program_studidua',
    'email',
    'nama_ayah',
    'nama_ibu',
    'alamat_orangtua',
    'no_tlpnortu',
    'pekerjaan_ayah',
    'pekerjaan_ibu'];
}