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
    
                    <h4 class="card-title">Kelengkapan Biodata</h4>
                    <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to
                        each
                        textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
    
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">NIDN</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="Artisanal kale" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">NIP</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="Artisanal kale" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">TMT SK Pengangkatan Dosen</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" id="example-datetime-local-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Gelar Depan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Gelar Belakang</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Tempat Lahir</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" id="example-datetime-local-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-10">
                            <select class="form-select">
                                <option>Select</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Perguruan Tinggi</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-search-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Fakultas</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-search-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Program Studi</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-search-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Jabatan Akademik Terakhir</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-search-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">TMT Terakhir</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" id="example-datetime-local-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Masa Kerja</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" id="example-search-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Jenis Pendidikan yang dibina</label>
                        <div class="col-md-10">
                            <select class="form-select">
                                <option>Select</option>
                                <option>D3</option>
                                <option>D4</option>
                                <option>S1</option>
                                <option>S2</option>
                                <option>S3</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Status Kepegawaian</label>
                        <div class="col-md-10">
                            <select class="form-select">
                                <option>Select</option>
                                <option>Dosen PNS</option>
                                <option>Dosen Yayasan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">TMT Jabatan Akademik Terakhir</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" id="example-datetime-local-input">
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
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