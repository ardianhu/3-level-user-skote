@extends('layouts.adminmaster')

@section('title') @lang('translation.Form_Editors') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Forms @endslot
        @slot('title') Form Editors @endslot
    @endcomponent

    <div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Floating labels</h5>
                <p class="card-title-desc">Create beautifully simple form labels that float over your input fields.</p>

                <form>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingnameInput" placeholder="Enter Name">
                        <label for="floatingnameInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingnameInput" placeholder="Enter Name">
                        <label for="floatingnameInput">Username</label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingemailInput" placeholder="Enter Email address">
                                <label for="floatingemailInput">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingemailInput" placeholder="Enter Email address">
                                <label for="floatingemailInput">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating input-group mb-3" id="datepcker1">
                        <input type="text" class="form-control" id="floatingnameInput" data-date-format="dd-mm-yyyy" data-date-container='#datepicker1' data-date-end-date="0d" data-provide="datepicker" name="dob" placeholder="dd-mm-yy" autofocus>
                        <label for="floatingnameInput">Date of Birth</label>
                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingemailInput" placeholder="Enter Email address">
                                <label for="floatingemailInput">Email address</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelectGrid">Works with selects</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="floatingCheck">
                            <label class="form-check-label" for="floatingCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    

@endsection
@section('script')
   <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
@endsection
