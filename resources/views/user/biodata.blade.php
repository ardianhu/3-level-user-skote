@extends('layouts.dosenmaster')

@section('title') @lang('Data Dasar') @endsection

@section('body')
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
                    <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to
                        each
                        textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
    
                    <div class="mb-3 row">
                        <label for="usernidn" class="col-md-2 col-form-label">NIDN</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control @error('nidn') is-invalid @enderror" 
                            id="usernidn" value="{{ old('nidn') }}" name="nidn" autofocus required>
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
                            <input type="number" class="form-control @error('nip') is-invalid @enderror" 
                            id="usernip" value="{{ old('nip') }}" name="nip" autofocus required>
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
                            <input type="date" class="form-control @error('tmt_sk') is-invalid @enderror" 
                            id="usertmt_sk" value="{{ old('tmt_sk') }}" name="tmt_sk" autofocus required>
                            @error('tmt_sk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="usernama" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                            id="usernama" value="{{ old('nama') }}" name="nama" autofocus required>
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
                            <input type="text" class="form-control @error('gelar_depan') is-invalid @enderror" 
                            id="usergelar_depan" value="{{ old('gelar_depan') }}" name="gelar_depan" autofocus required>
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
                            <input type="text" class="form-control @error('gelar_belakang') is-invalid @enderror" 
                            id="usergelar_belakang" value="{{ old('gelar_belakang') }}" name="gelar_belakang" autofocus required>
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
                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" 
                            id="usertempat_lahir" value="{{ old('tempat_lahir') }}" name="tempat_lahir" autofocus required>
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
                            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" 
                            id="usertgl_lahir" value="{{ old('tgl_lahir') }}" name="tgl_lahir" autofocus required>
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
                            <select class="form-select" name="jenis_kelamin" >
                                <option value="">Select</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="useruniversitas" class="col-md-2 col-form-label">Perguruan Tinggi</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('universitas') is-invalid @enderror" 
                            id="useruniversitas" value="{{ old('universitas') }}" name="universitas" autofocus required>
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
                            <select class="form-select" name="pembinaan_pendidikan">
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
                        <label class="col-md-2 col-form-label">Jabatan Fungsional Terakhir</label>
                        <div class="col-md-10">
                            <select class="form-select" name="jafung_terakhir">
                                <option value="">Select</option>
                                <option value="Dosen PNS">Dosen PNS</option>
                                <option value="Dosen Yayasan">Dosen Yayasan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="userkum_jafung_terakhir" class="col-md-2 col-form-label">Kum Jabatan Fungsional Terakhir</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control @error('kum_jafung_terakhir') is-invalid @enderror" 
                            id="userkum_jafung_terakhir" value="{{ old('kum_jafung_terakhir') }}" name="kum_jafung_terakhir" autofocus required>
                            @error('kum_jafung_terakhir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="usertmt_jafung_terakhir" class="col-md-2 col-form-label">TMT Jabatan Fungsional Terakhir</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control @error('tmt_jafung_terakhir') is-invalid @enderror" 
                            id="usertmt_jafung_terakhir" value="{{ old('tmt_jafung_terakhir') }}" name="tmt_jafung_terakhir" autofocus required>
                            @error('tmt_jafung_terakhir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Pangkat Terakhir</label>
                        <div class="col-md-10">
                            <select class="form-select" name="pangkat_terakhir">
                                <option value="">Select</option>
                                <option value="Dosen PNS">Dosen PNS</option>
                                <option value="Dosen Yayasan">Dosen Yayasan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="usertmt_pangkat_terakhir" class="col-md-2 col-form-label">TMT Pangkat Terakhir</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control @error('tmt_pangkat_terakhir') is-invalid @enderror" 
                            id="usertmt_pangkat_terakhir" value="{{ old('tmt_pangkat_terakhir') }}" name="tmt_pangkat_terakhir" autofocus required>
                            @error('tmt_pangkat_terakhir')
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
                        <label for="masa_kerja" class="col-md-2 col-form-label">Masa Kerja</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('masa_kerja') is-invalid @enderror" 
                            id="usermasa_kerja" value="{{ old('masa_kerja') }}" name="masa_kerja" autofocus required>
                            @error('masa_kerja')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="usernip_pimpinan" class="col-md-2 col-form-label">NIP Pimpinan</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control @error('nip_pimpinan') is-invalid @enderror" 
                            id="usernip_pimpinan" value="{{ old('nip_pimpinan') }}" name="nip_pimpinan" autofocus required>
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
                            <input type="number" class="form-control @error('nidn_pimpinan') is-invalid @enderror" 
                            id="usernidn_pimpinan" value="{{ old('nidn_pimpinan') }}" name="nidn_pimpinan" autofocus required>
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
                            <input type="text" class="form-control @error('nama_pimpinan') is-invalid @enderror" 
                            id="usernama_pimpinan" value="{{ old('nama_pimpinan') }}" name="nama_pimpinan" autofocus required>
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
                            <input type="text" class="form-control @error('gelar_depan_pimpinan') is-invalid @enderror" 
                            id="usergelar_depan_pimpinan" value="{{ old('gelar_depan_pimpinan') }}" name="gelar_depan_pimpinan" autofocus required>
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
                            <input type="text" class="form-control @error('gelar_belakang_pimpinan') is-invalid @enderror" 
                            id="usergelar_belakang_pimpinan" value="{{ old('gelar_belakang_pimpinan') }}" name="gelar_belakang_pimpinan" autofocus required>
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
                            <input type="date" class="form-control @error('tmt_gol_terakhir_pimpinan') is-invalid @enderror" 
                            id="usertmt_gol_terakhir_pimpinan" value="{{ old('tmt_gol_terakhir_pimpinan') }}" name="tmt_gol_terakhir_pimpinan" autofocus required>
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