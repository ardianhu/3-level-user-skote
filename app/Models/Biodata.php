<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $fillable = [
        'nidn',
        'nip',
        'tmt_sk_pengangkatan_dosen',
        'nama_lengkap',
        'gelar_depan',
        'gelar_belakang',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'perguruan_tinggi',
        /*'fakultas',
        'program_studi',*/
        'jabatan_akademik_terakhir',
        'jenis_pendidikan _yang_dibina',
        'status_kepegawaian',
        'kum',
        'tmt_jabatan_akademik_terakhir',
        'pangkat_akademik_terakhir',
        'tmt_pangkat_akademik_terakhri',
        'pendidikan_terakhir',
        'nip_pimpinan',
        'nidn_pimpinan',
        'nama_pimpinan',
        'gelar_depan_pimpinan',
        'gelar_belakang_pimpinan',
        'jabatan_pimpinan',
        'jabatan_fungsional_pimpinan',
        'golongan_pimpinan',
        'tmt_golongan_terakhir_pimpinan'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
