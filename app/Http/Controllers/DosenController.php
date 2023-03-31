<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

class DosenController extends Controller
{
    //
    public function index()
    {
        return view('user.index');
    }
<<<<<<< Updated upstream
    public function biodata()
    {
        $user = User::find(auth()->id());
        $biodata = $user->biodata;
        return view('user.biodata', [
            'biodata' => $biodata
        ]);
    }
    public function updatebio(Request $request)
    {
        $user = User::find(auth()->id());
        $biodata = $user->biodata;

        $biodata->nidn = $request->input('nidn');
        $biodata->nip = $request->input('nip');
        $biodata->tmt_sk_pengangkatan_dosen = $request->input('tmt_sk_pengangkatan_dosen');
        $biodata->nama_lengkap = $request->input('nama_lengkap');
        $biodata->gelar_depan = $request->input('gelar_depan');
        $biodata->gelar_belakang = $request->input('gelar_belakang');
        $biodata->tempat_lahir = $request->input('tempat_lahir');
        $biodata->tanggal_lahir = $request->input('tanggal_lahir');
        $biodata->jenis_kelamin = $request->input('jenis_kelamin');
        $biodata->perguruan_tinggi = $request->input('perguruan_tinggi');
        /*$biodata->fakultas = $request->input('fakultas');
        $biodata->program_studi = $request->input('program_studi');*/
        $biodata->jabatan_akademik_terakhir = $request->input('jabatan_akademik_terakhir');
        $biodata->jenis_pendidikan_yang_dibina = $request->input('jenis_pendidikan_yang_dibina');
        $biodata->status_kepegawaian = $request->input('status_kepegawaian');
        $biodata->kum = $request->input('kum');
        $biodata->tmt_jabatan_akademik_terakhir = $request->input('tmt_jabatan_akademik_terakhir');
        $biodata->pangkat_akademik_terakhir = $request->input('pangkat_akademik_terakhir');
        $biodata->tmt_pangkat_akademik_terakhir = $request->input('tmt_pangkat_akademik_terakhir');
        $biodata->pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $biodata->nip_pimpinan = $request->input('nip_pimpinan');
        $biodata->nidn_pimpinan = $request->input('nidn_pimpinan');
        $biodata->nama_pimpinan = $request->input('nama_pimpinan');
        $biodata->gelar_depan_pimpinan = $request->input('gelar_depan_pimpinan');
        $biodata->gelar_belakang_pimpinan = $request->input('gelar_belakang_pimpinan');
        $biodata->jabatan_pimpinan = $request->input('jabatan_pimpinan');
        $biodata->jabatan_fungsional_pimpinan = $request->input('jabatan_fungsional_pimpinan');
        $biodata->golongan_pimpinan = $request->input('golongan_pimpinan');
        $biodata->tmt_golongan_terakhir_pimpinan = $request->input('tmt_golongan_terakhir_pimpinan');

        $biodata->save();
        return redirect()->back();
=======
    public function ripen()
    {
        return view('user.riwayat-pendidikan');
>>>>>>> Stashed changes
    }
}
