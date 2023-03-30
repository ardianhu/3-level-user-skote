@extends('layouts.dosenmaster')

@section('title') @lang('translation.Basic_Tables') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Data Dasar @endslot
        @slot('title') Dokumen Dosen @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 class="card-title">Daftar File yang Harus Diupload</h4>
                       
                        <p><div class="table-responsive">
                            <table class="table align-middle mb-0">

                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama File</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Scan asli/legalisir sertifikat pendidik (bagi dosen lolos serdos)</td>
                                        <td>(Belum Diproses)</td>
                                        <td>
                                            <button type="button" class="btn bx bxs-file-doc"></button>
                                            <button type="button" class="btn bx bx-shuffle"></button>
                                            <button type="button" class="btn bx bx-image-add"></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Scan asli/legalisir surat keputusan sebagai dosen tetap yayasan, disahkan oleh pejabat yang berwenang (yayasan)
                                             atau diketahui oleh pimpinan perguruan tinggi (bagi dosen tetap yayasan yang pertama kali usul pangkat/jabatan fungsional dosen)
                                        </td>
                                        <td>Belum Upload</td>
                                        <td>
                                            <button type="button" class="btn bx bxs-file-doc"></button>
                                            <button type="button" class="btn bx bx-shuffle"></button>
                                            <button type="button" class="btn bx bx-image-add"></button>
                                        </td>
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end row -->
@endsection
