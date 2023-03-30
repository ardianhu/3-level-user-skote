@extends('layouts.dosenmaster')

@section('title') @lang('Data Dasar') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Data Dasar @endslot
@slot('title') Perubahan Biodata Dosen @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Perubahan Biodata Dosen</h4>

                <div id="basic-example">
                    <!-- Pendidikan -->
                    <h3>Riwayat Pendidikan</h3>
                    <section>
                        <form>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Jenjang Pendidikan</label>
                                <div class="col-md-10">
                                        <select class="form-select">
                                            <option selected>Silahkan Pilih Jenjang Pendidikan</option>
                                            <option value="D3">D3</option>
                                            <option value="D4">D4</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">Tanggal Lulus</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" id="example-search-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">Dokumen Pendukung</label>
                                    <div class="col-md-10">
                                    <input type="file" class="form-control" id="resume">
                                </div>
                                </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                            <div class="card overflow-hidden">
                                    <div class="bg-info  bg-soft">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-black p-3">
                                                <h5 class="text-black-bold">Peringatan!</h5>
                                                <p> Bagi anda yang <strong> sudah memiliki </strong> fungsional dan pangkat maka <strong> wajib </strong> untuk mengisi histori jabatan fungsional dan
                                                    pangkat. Silahkan isi pada menu <strong> Data Dasar -> Perubahan Data Dosen -> Pilih bagian jabatan fungsional (bagi anda yang ingin 
                                                    mengisi histori jabatan fungsional) atau pilih pada bagian pangkat (bagi anda yang ingin mengisi histori pangkat)</strong></p>
                                                </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Jabatan Fungsional -->
                    <h3>Jabatan Fungsional</h3>
                    <section>
                        <form>
                            <<div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Jabatan Fungsional</label>
                                <div class="col-md-10">
                                        <select class="form-select">
                                            <option selected>Silahkan Pilih Jabatan Fungsional</option>
                                            <option value="Lektor">Lektor</option>
                                            <option value="Dekan">Dekan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">TMT</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" id="example-search-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">Masa Kerja</label>
                                    <div class="col-md-10">
                                <div class="repeater" enctype="multipart/form-data">
                                    {{-- <div data-repeater-list="group-a"> --}}
                                        {{-- <div data-repeater-item class="row"> --}}
                                            <div class="col-md-3">
                                                <label class="col-form-label">Bulan</label>
                                                <input type="text" id="month" class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="col-form-label">Tahun</label>
                                                <input type="number" id="year" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">Dokumen Pendukung</label>
                                    <div class="col-md-10">
                                    <input type="file" class="form-control" id="resume">
                                </div>
                                
                        </form>
                    </section>

                    <!-- Pangkat -->
                    <h3>Pangkat</h3>
                    <section>
                        <div>
                            <form>
                                <<div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">Pangkat</label>
                                    <div class="col-md-10">
                                            <select class="form-select">
                                                <option selected>Silahkan Pilih Pangkat</option>
                                                <option value="Lektor">Lektor</option>
                                                <option value="Dekan">Dekan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label">TMT</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="date" id="example-search-input">
                                        </div>
                                    </div><div class="mb-3 row">
                                        <label class="col-md-2 col-form-label">Masa Kerja</label>
                                        <div class="col-md-10">
                                    <div class="repeater" enctype="multipart/form-data">
                                        {{-- <div data-repeater-list="group-a"> --}}
                                            {{-- <div data-repeater-item class="row"> --}}
                                                <div class="col-md-3">
                                                    <label class="col-form-label">Bulan</label>
                                                    <input type="text" id="month" class="form-control"/>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="col-form-label">Tahun</label>
                                                    <input type="number" id="year" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label">Dokumen Pendukung</label>
                                        <div class="col-md-10">
                                        <input type="file" class="form-control" id="resume">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>

                    <!-- Confirm Details -->
                    <h3>Data Tersimpan</h3>
                    <section>
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="text-center">
                                        <div class="card">
                                            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">

                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>JABATAN FUNGSIONAL</th>
                                    <th>KUM</th>
                                    <th>TMT</th>
                                    <th>BULAN</th>
                                    <th>TAHUN</th>
                                    <th>STATUS</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Asisten Ahli</td>
                                    <td>150</td>
                                    <td>1 November 2016</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>Belum Diproses</td>
                                    <td>
                                        <button type="button" class="btn bx bx-pencil"></button>
                                        <button type="button" class="btn bx bx-trash"></button>
                                        <button type="button" class="btn bx bxs-file-image"></button>
                                        </div>
                                    </td>
                                </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>                
                <h3>Confirm Detail</h3>
                <section>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center">
                                <div class="mb-4">
                                    <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                </div>
                                <div>
                                    <h5>Confirm Detail</h5>
                                     <p class="text-muted">If several languages coalesce, the grammar of the resulting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
<!-- end card body -->
</div>
<!-- end card -->
</div>
<!-- end col -->
</div>
<!-- end row -->

@endsection
@section('script')
<!-- jquery step -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

<!-- form wizard init -->
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
@endsection