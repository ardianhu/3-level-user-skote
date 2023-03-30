<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
use App\Models\Biodata;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Role::create([
            'role_name' => 'dosen',
        ]);
        Role::create([
            'role_name' => 'admin',
        ]);
        Role::create([
            'role_name' => 'operator',
        ]);
        User::create([
            'name' => 'dosen',
            'email' => 'dosen@garuda.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'dob' => '02/02/02',
            'role_id' => '1',
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@garuda.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'dob' => '02/02/02',
            'role_id' => '2',
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'operator',
            'email' => 'operator@garuda.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'dob' => '02/02/02',
            'role_id' => '3',
            'remember_token' => Str::random(10)
        ]);
        Biodata::create([
            'user_id' => '1',
            'nidn' => '1902510008',
            'nip' => '1038261129',
            'tmt_sk_pengangkatan_dosen' => '02/02/02',
            'nama_lengkap' => 'Moh. Ardian Hasanal Umam',
            'gelar_depan' => 'Ir.',
            'gelar_belakang' => 'S.T.',
            'tempat_lahir' => 'Kyoto',
            'tanggal_lahir' => '02/02/02',
            'jenis_kelamin' => 'laki-laki',
            'perguruan_tinggi' => 'Harvard University',
            /*'fakultas' => 'Science Technology',
            'program_studi' => 'Alchemy',*/
            'jabatan_akademik_terakhir' => 'Professor',
            'jenis_pendidikan_yang_dibina' => 'Sarjana 1',
            'status_kepegawaian' => 'none',
            'kum' => '900',
            'tmt_jabatan_akademik_terakhir' => '02/02/02',
            'pangkat_akademik_terakhir' => 'Doctor',
            'tmt_pangkat_akademik_terakhir' => '02/02/02',
            'pendidikan_terakhir' => 'Magister',
            'nip_pimpinan' => '9863992',
            'nidn_pimpinan' => '93629287',
            'nama_pimpinan' => 'Fukada',
            'gelar_depan_pimpinan' => 'Ms.',
            'gelar_belakang_pimpinan' => 'BA.',
        ]);
    }
}
