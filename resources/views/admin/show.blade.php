@extends('layouts.adminmaster')

@section('title') @lang('Data User') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Admin @endslot
        @slot('title') Daftar User @endslot
    @endcomponent

<!--  @foreach($datas as $data)
<li>{{$data->id}}</li>
<li>{{$data->email}}</li>
@endforeach -->
<div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                    <h4 class="card-title">Table head</h4>
                    <p class="card-title-desc">Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear
                        light or dark gray.</p>
                        </div>
                        <button type="button" style="height: 40px;" class="mb-3 p-2 btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">Tambahkan User</button>
                        </div>

                <!-- Scrollable modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambahkan Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                        <form method="POST" class="form-horizontal" action="/daftar-user" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail"
                                            value="{{ old('email') }}" name="email" placeholder="Enter email" autofocus required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" id="username" name="name" autofocus required
                                                placeholder="Enter username">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                                                                <div class="mb-3">
                                                                                    <label for="userdob">Date of Birth</label>
                                                                                    <div class="input-group" id="datepicker1">
                                                                                        <input type="text" class="form-control @error('dob') is-invalid @enderror" placeholder="dd-mm-yyyy"
                                                                                            data-date-format="dd-mm-yyyy" data-date-container='#datepicker1' data-date-end-date="0d" value="{{ old('dob') }}"
                                                                                            data-provide="datepicker" name="dob" autofocus required>
                                                                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                                        @error('dob')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>

                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" name="password"
                                                placeholder="Enter password" autofocus required>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="avatar">Profile Picture</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="inputGroupFile02" name="avatar" autofocus>
                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                            </div>
                                            @error('avatar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                    <label class="col-md-2 col-form-label text-center">Level</label>
                    <div class="col-md-10">
                        <select class="form-select text-capitalize" name="role_id">
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}" class="text-capitalize">{{ $role->role_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                                        <!--<div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="formCheck1" name="email_verified_at" value="1" checked>
                                <label class="form-check-label" for="formCheck1">
                                    Email sudah diverifikasi
                                </label>
                                
                            </div>-->

                                        
                                      
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
</form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                    <div class="table-responsive">
                        <table class="table mb-0">

                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Name</th>
                                    <th>Date of Birth</th>
                                    <th>Level</th>
                                    <th>Avatar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $data => $user)
                                <tr>
                                    <th scope="row">{{$data +1}}</th>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->dob}}</td>
                                    <td>{{$user->role->role_name}}</td>
                                    <td>
                                        <img src="{{$user->avatar}}" class="rounded-circle object-fit-cover" style="width: 30px; height: 30px;">
                                    </td>
                                    <td>

                                     <a href="" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".update-profile">Edit</a>
                                     
                                    <!-- center modal -->
                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#deleteModal{{$user->id}}">Delete</button>

                    <div id="deleteModal{{$user->id}}" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form action="{{route('delete', $user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <div class="modal-header">
                                    <h5 class="modal-title">Center modal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apa anda yakin untuk menghapus akun ini?</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-danger">Hapus</button>
                                </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    <!-- end row -->

    

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>   
<!-- profile init -->
<script src="{{ URL::asset('/assets/js/pages/profile.init.js') }}"></script>

<script>
    $('#update-profile').on('submit', function(event) {
        event.preventDefault();
        var Id = $('#data_id').val();
        let formData = new FormData(this);
        $('#emailError').text('');
        $('#nameError').text('');
        $('#dobError').text('');
        $('#avatarError').text('');
        $.ajax({
            url: "{{ url('update-profile') }}" + "/" + Id,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#emailError').text('');
                $('#nameError').text('');
                $('#dobError').text('');
                $('#avatarError').text('');
                if (response.isSuccess == false) {
                    alert(response.Message);
                } else if (response.isSuccess == true) {
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                }
            },
            error: function(response) {
                $('#emailError').text(response.responseJSON.errors.email);
                $('#nameError').text(response.responseJSON.errors.name);
                $('#dobError').text(response.responseJSON.errors.dob);
                $('#avatarError').text(response.responseJSON.errors.avatar);
            }
        });
    });
</script>
@endsection
