@extends('layouts.dosenmaster')

@section('title') @lang('Data Dasar') @endsection

@section('body')


<body data-sidebar="dark">
    @endsection

    <body data-sidebar="dark">
        @endsection

        @section('content')

        @component('components.breadcrumb')
        @slot('li_1') Data Dasar @endslot
        @slot('title') Biodata Dosen @endslot
        @endcomponent

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Biodata Pokok Dosen</h4>
                        <p class="card-title-desc">Lengkapi biodata anda di sini.</p>
                        <form method="POST" action="bio-update">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="usernidn" class="col-md-2 col-form-label">NIDN</label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control @error('nidn') is-invalid @enderror" id="usernidn" value="{{ $biodata->nidn }}" name="nidn">
                                    @error('nidn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usernip" class="col-md-2 col-form-label">NIP</label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control @error('nip') is-invalid @enderror" id="usernip" value="{{ $biodata->nip }}" name="nip">
                                    @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usertmt_sk" class="col-md-2 col-form-label">TMT SK Pengangkatan Dosen</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control @error('tmt_sk') is-invalid @enderror" id="usertmt_sk" value="{{ $biodata->tmt_sk_pengangkatan_dosen }}" name="tmt_sk_pengangkatan_dosen" autofocus>
                                    @error('tmt_sk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usernama" class="col-md-2 col-form-label">Nama Lengkap</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="usernama" value="{{ $biodata->nama_lengkap }}" name="nama_lengkap" autofocus>
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usergelar_depan" class="col-md-2 col-form-label">Gelar Depan</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('gelar_depan') is-invalid @enderror" id="usergelar_depan" value="{{ $biodata->gelar_depan }}" name="gelar_depan" autofocus>
                                    @error('gelar_depan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usergelar_belakang" class="col-md-2 col-form-label">Gelar Belakang</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('gelar_belakang') is-invalid @enderror" id="usergelar_belakang" value="{{ $biodata->gelar_belakang }}" name="gelar_belakang" autofocus>
                                    @error('gelar_belakang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usertempat_lahir" class="col-md-2 col-form-label">Tempat Lahir</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="usertempat_lahir" value="{{ $biodata->tempat_lahir }}" name="tempat_lahir" autofocus>
                                    @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usertgl_lahir" class="col-md-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="usertgl_lahir" value="{{ $biodata->tanggal_lahir }}" name="tanggal_lahir" autofocus>
                                    @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="jenis_kelamin">
                                        <option value="">Select</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="useruniversitas" class="col-md-2 col-form-label">Perguruan Tinggi</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('perguruan_tinggo') is-invalid @enderror" id="useruniversitas" value="{{ $biodata->perguruan_tinggi }}" name="perguruan_tinggi" autofocus>
                                    @error('universitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!--
                        <div class="mb-3 row">
                            <label for="useruniversitas" class="col-md-2 col-form-label">Fakultas</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('fakultas') is-invalid @enderror" id="useruniversitas" value="{{ $biodata->fakultas }}" name="fakultas" autofocus required>
                                @error('universitas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="useruniversitas" class="col-md-2 col-form-label">Program Studi</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('program_studi') is-invalid @enderror" id="useruniversitas" value="{{ $biodata->program_studi }}" name="program_studi" autofocus required>
                                @error('universitas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
-->
                            <div class="mb-3 row">
                                <label for="useruniversitas" class="col-md-2 col-form-label">Jabatan Akademik Terakhir</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('jabatan_akademik_terakhir') is-invalid @enderror" id="useruniversitas" value="{{ $biodata->jabatan_akademik_terakhir }}" name="jabatan_akademik_terakhir" autofocus>
                                    @error('universitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Jenis Pendidikan yang dibina</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="jenis_pendidikan_yang_dibina">
                                        <option value="">Select</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Status Kepegawaian</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="status_kepegawaian">
                                        <option value="">Select</option>
                                        <option value="Dosen PNS">Dosen PNS</option>
                                        <option value="Dosen Yayasan">Dosen Yayasan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="useruniversitas" class="col-md-2 col-form-label">KUM Terakhir</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('kum') is-invalid @enderror" id="useruniversitas" value="{{ $biodata->kum }}" name="kum" autofocus readonly>
                                    @error('universitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="useruniversitas" class="col-md-2 col-form-label">TMT Jabatan Akademik Terakhir</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control @error('tmt_jabatan_akademik_terakhri') is-invalid @enderror" id="useruniversitas" value="{{ $biodata->tmt_jabatan_akademik_terakhir }}" name="tmt_jabatan_akademik_terakhir" autofocus>
                                    @error('universitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="useruniversitas" class="col-md-2 col-form-label">Pangkat Akademik Terakhir</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('pangkat_akademik_terakhir') is-invalid @enderror" id="useruniversitas" value="{{ $biodata->pangkat_akademik_terakhir }}" name="pangkat_akademik_terakhir" autofocus>
                                    @error('universitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="useruniversitas" class="col-md-2 col-form-label">TMT Pangkat Akademik Terakhir</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control @error('tmt_pangkat_akademik_terakhir') is-invalid @enderror" id="useruniversitas" value="{{ $biodata->tmt_pangkat_akademik_terakhir }}" name="tmt_pangkat_akademik_terakhir" autofocus>
                                    @error('universitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Pendidikan Terakhir</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="pendidikan_terakhir">
                                        <option value="">Select</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usernip_pimpinan" class="col-md-2 col-form-label">NIP Pimpinan</label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control @error('nip_pimpinan') is-invalid @enderror" id="usernip_pimpinan" value="{{ $biodata->nip_pimpinan }}" name="nip_pimpinan" autofocus>
                                    @error('nip_pimpinan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usernidn_pimpinan" class="col-md-2 col-form-label">NIDN Pimpinan</label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control @error('nidn_pimpinan') is-invalid @enderror" id="usernidn_pimpinan" value="{{ $biodata->nidn_pimpinan }}" name="nidn_pimpinan" autofocus>
                                    @error('nidn_pimpinan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usernama_pimpinan" class="col-md-2 col-form-label">Nama Pimpinan</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('nama_pimpinan') is-invalid @enderror" id="usernama_pimpinan" value="{{ $biodata->nama_pimpinan }}" name="nama_pimpinan" autofocus>
                                    @error('nama_pimpinan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usergelar_depan_pimpinan" class="col-md-2 col-form-label">Gelar Depan Pimpinan</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('gelar_depan_pimpinan') is-invalid @enderror" id="usergelar_depan_pimpinan" value="{{ $biodata->gelar_depan_pimpinan }}" name="gelar_depan_pimpinan" autofocus>
                                    @error('gelar_depan_pimpinan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usergelar_belakang_pimpinan" class="col-md-2 col-form-label">Gelar Belakang Pimpinan</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('gelar_belakang_pimpinan') is-invalid @enderror" id="usergelar_belakang_pimpinan" value="{{ $biodata->gelar_belakang_pimpinan }}" name="gelar_belakang_pimpinan" autofocus>
                                    @error('gelar_belakang_pimpinan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Jabatan Pimpinan</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="jabatan_pimpinan">
                                        <option value="">Select</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Jabatan Fungsional Pimpinan</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="jafung_terakhir_pimpinan">
                                        <option value="">Select</option>
                                        <option value="Lektor">Lektor</option>
                                        <option value="Dekan">Dekan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Golongan Pimpinan</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="gol_pimpinan">
                                        <option>Select</option>
                                        <option value="Penata Tk.i">Penata Tk.I</option>
                                        <option value="Penata Tk.II">Penata Tk.II</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usertmt_gol_terakhir_pimpinan" class="col-md-2 col-form-label">TMT Golongan Terakhir Pimpinan</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control @error('tmt_gol_terakhir_pimpinan') is-invalid @enderror" id="usertmt_gol_terakhir_pimpinan" value="{{ $biodata->tmt_golongan_terakhir_pimpinan }}" name="tmt_golongan_terakhir_pimpinan" autofocus>
                                    @error('tmt_gol_terakhir_pimpinan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary w-md">SIMPAN</button>
                            </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        @endsection

        @section('script')
        <!-- apexcharts -->
        <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- dashboard init -->
        <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
        @endsection