@extends('layouts.dosenmaster')

<<<<<<< Updated upstream
@section('title') @lang('Beranda') @endsection
=======
@section('title')
    @lang('translation.Dashboards')
@endsection
>>>>>>> Stashed changes

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Beranda
        @endslot
        @slot('title')
            Beranda Dosen
        @endslot
    @endcomponent

<<<<<<< Updated upstream
@component('components.breadcrumb')
@slot('li_1') Beranda @endslot
@slot('title') Beranda Dosen @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12">
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
                        <p><a href="perubahan">Perubahan Data Dosen</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card overflow-hidden">
            <div class="bg-info bg-soft">
                <div class="row">
                    <div class="col-12">
                        <div class="text-black p-3">
                        <h5 class="text-black-strong">Lengkap!</h5>
                        <p> Terima kasih telah melengkapi biodata diri anda. Saat ini sistem mendeteksi semua biodata diri anda yang disyaratkan sudah lengkap,
                            jika terjadi perubahan atau penambahan pengisian biodata diri maka sistem akan mengingatkan anda kembali untuk melakukan pengisian data.
                            Silahkan lanjutkan isi riwayat Tri Dharma Perguruan Tinggi anda. </p>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

=======
    <!-- end modal -->
>>>>>>> Stashed changes
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection
