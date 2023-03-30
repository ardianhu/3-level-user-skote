<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;

class DosenController extends Controller
{
    //
    public function index(){
        return view('user.index');
    }
    public function biodata(){
        return view('user.biodata');
    }
    public function store(Request $request){
        $data = $request->validate([
            'nidn' => 'required',
            'nip' => 'required',
            'tmt_sk' => 'required|date',
            'nama' => 'required|string|max:225',
            'gelar_depan' => 'required|string|max:225',
            'gelar_belakang' => 'required|string|max:225',
            'tempat_lahir' => 'required|string|max:225',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:225',
            'universitas' => 'required|string|max:225',
            'pembinaan_pendidikan' => 'required|string|max:225',
            'status_kepegawaian' => 'required|string|max:225',
            'jafung_terakhir' => 'required|string|max:225',
            'kum_jafung_terakhir' => 'required',
            'tmt_jafung_terakhir' => 'required|date',
            'pangkat_terakhir' => 'required|string|max:225',
            'tmt_pangkat_terakhir' => 'required|date',
            'pendidikan_terakhir' => 'required|string|max:225',
            'masa_kerja' => 'required|string|max:225',
            'nip_pimpinan' => 'required',
            'nidn_pimpinan' => 'required',
            'nama_pimpinan' => 'required|string|max:225',
            'gelar_depan_pimpinan' => 'required|string|max:225',
            'gelar_belakang_pimpinan' => 'required|string|max:225',
            'jabatan_pimpinan' => 'required|string|max:225',
            'jafung_terakhir_pimpinan' => 'required|string|max:225',
            'gol_pimpinan' => 'required|string|max:225',
            'tmt_gol_terakhir_pimpinan' => 'required|date',
        ]);
        $avatar = request()->file('avatar');
        $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
        $avatarPath = public_path('/images/');
        $avatar->move($avatarPath, $avatarName);
        $data ['email_verified_at'] = now();
        $data ['password'] = Hash::make($request->input('password'));
        $data ['dob'] = date('Y-m-d', strtotime($request->input('dob')));
        $data ['avatar'] = "/images/".$avatarName;
        User::create($data);

        return redirect()->back();
    }
    public function kelengkapan(){
        return view('user.kelengkapan');
    }
    public function perubahan(){
        return view('user.perubahan');
    }
    public function dokumen(){
        return view('user.dokumen');
    }
    public function pendidikan(){
        return view('user.pendidikan');
    }
}
