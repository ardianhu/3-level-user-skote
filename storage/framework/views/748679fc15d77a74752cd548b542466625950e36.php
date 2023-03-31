

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Form_Wizard'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet"
        type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css')); ?>" rel="stylesheet"
        type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')); ?>" rel="stylesheet"
        type="text/css">
    <link href="<?php echo e(URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')); ?>" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="<?php echo e(URL::asset('/assets/libs/datepicker/datepicker.min.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Data Dasar
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Riwayat Pendidikan
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div id="basic-example">
                        <!-- Seller Details -->
                        <h5>Pendidikan</h5>
                        <section>
                            <h4 class="card-title mb-4">Daftar Butir Kegiatan</h4>

                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">

                                            <select class="form-select select2-search-disable">
                                                <option>Silahkan Pilih Tahun Pelajaran</option>
                                                <optgroup label="2020 - 2021">
                                                    <option value=""> 2020 / 2021 GANJIL</option>
                                                    <option value="">2020 / 2021 Genap</option>
                                                </optgroup>
                                                <optgroup label="2021 - 2022">
                                                    <option value=""> 2021 / 2022 GANJIL</option>
                                                    <option value="">2021 / 2022 GENAP</option>
                                                </optgroup>
                                                <optgroup label="2022 - 2023">
                                                    <option value=""> 2022 / 2023 GANJIL</option>
                                                    <option value="">2022 / 2023 GENAP</option>
                                                </optgroup>
                                            </select>
                                        </div>
                            </form>
                        </section>

                        <h5>Pelaksanaan Pendidikan</h5>
                        <section>
                            <form>
                                <div class="mb-3 row">
                                    <div class="col-lg-6">
                                        <div class="mb-9">
                                            <label for="basicpill-firstname-input">First name</label>
                                            <input type="text" class="form-control" id="basicpill-firstname-input"
                                                placeholder="Enter Your First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-lastname-input">Last name</label>
                                            <input type="text" class="form-control" id="basicpill-lastname-input"
                                                placeholder="Enter Your Last Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Phone</label>
                                            <input type="text" class="form-control" id="basicpill-phoneno-input"
                                                placeholder="Enter Your Phone No.">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Email</label>
                                            <input type="email" class="form-control" id="basicpill-email-input"
                                                placeholder="Enter Your Email ID">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="basicpill-address-input">Address</label>
                                            <textarea id="basicpill-address-input" class="form-control" rows="2" placeholder="Enter Your Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>

                        <h5>Pelaksanaan Penelitian</h5>
                        <section>
                            <form>
                                <div class="mb-3 row">
                                    <div class="col-lg-6">
                                        <div class="mb-9">
                                            <label for="basicpill-firstname-input">First name</label>
                                            <input type="text" class="form-control" id="basicpill-firstname-input"
                                                placeholder="Enter Your First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-lastname-input">Last name</label>
                                            <input type="text" class="form-control" id="basicpill-lastname-input"
                                                placeholder="Enter Your Last Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Phone</label>
                                            <input type="text" class="form-control" id="basicpill-phoneno-input"
                                                placeholder="Enter Your Phone No.">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Email</label>
                                            <input type="email" class="form-control" id="basicpill-email-input"
                                                placeholder="Enter Your Email ID">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="basicpill-address-input">Address</label>
                                            <textarea id="basicpill-address-input" class="form-control" rows="2" placeholder="Enter Your Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>

                        <h5>Pelaksanaan Pengabdian</h5>
                        <section>
                            <form>
                                <div class="mb-3 row">
                                    <div class="col-lg-6">
                                        <div class="mb-9">
                                            <label for="basicpill-firstname-input">First name</label>
                                            <input type="text" class="form-control" id="basicpill-firstname-input"
                                                placeholder="Enter Your First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-lastname-input">Last name</label>
                                            <input type="text" class="form-control" id="basicpill-lastname-input"
                                                placeholder="Enter Your Last Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-phoneno-input">Phone</label>
                                            <input type="text" class="form-control" id="basicpill-phoneno-input"
                                                placeholder="Enter Your Phone No.">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-email-input">Email</label>
                                            <input type="email" class="form-control" id="basicpill-email-input"
                                                placeholder="Enter Your Email ID">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="basicpill-address-input">Address</label>
                                            <textarea id="basicpill-address-input" class="form-control" rows="2" placeholder="Enter Your Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>


                        <!-- Company Document -->
                        <h5>Penunjang Tugas Dosen</h5>
                        <section>
                            <form>
                                <div class="mb-3 row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-pancard-input">PAN Card</label>
                                            <input type="text" class="form-control" id="basicpill-pancard-input"
                                                placeholder="Enter Your PAN No.">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-vatno-input">VAT/TIN No.</label>
                                            <input type="text" class="form-control" id="basicpill-vatno-input"
                                                placeholder="Enter Your VAT/TIN No.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-cstno-input">CST No.</label>
                                            <input type="text" class="form-control" id="basicpill-cstno-input"
                                                placeholder="Enter Your CST No.">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-servicetax-input">Service Tax No.</label>
                                            <input type="text" class="form-control" id="basicpill-servicetax-input"
                                                placeholder="Enter Your Service Tax No.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-companyuin-input">Company UIN</label>
                                            <input type="text" class="form-control" id="basicpill-companyuin-input"
                                                placeholder="Enter Your Company UIN">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-declaration-input">Declaration</label>
                                            <input type="text" class="form-control" id="basicpill-Declaration-input"
                                                placeholder="Declaration Details">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>

                        <!-- Bank Details -->
                        <h5>Upload File Pendukung</h5>
                        <section>
                            <div>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-namecard-input">Name on Card</label>
                                                <input type="text" class="form-control" id="basicpill-namecard-input"
                                                    placeholder="Enter Your Name on Card">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label>Credit Card Type</label>
                                                <select class="form-select">
                                                    <option selected>Select Card Type</option>
                                                    <option value="AE">American Express</option>
                                                    <option value="VI">Visa</option>
                                                    <option value="MC">MasterCard</option>
                                                    <option value="DI">Discover</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-cardno-input">Credit Card
                                                    Number</label>
                                                <input type="text" class="form-control" id="basicpill-cardno-input"
                                                    placeholder="Credit Card Number">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-card-verification-input">Card
                                                    Verification
                                                    Number</label>
                                                <input type="text" class="form-control"
                                                    id="basicpill-card-verification-input"
                                                    placeholder="Credit Verification Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="basicpill-expiration-input">Expiration
                                                    Date</label>
                                                <input type="text" class="form-control"
                                                    id="basicpill-expiration-input" placeholder="Card Expiration Date">
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="table-responsive">
        <table class="table mb-0">

            <thead class="table-light">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>SEMESTER</th>
                    <th>TAHUN AJARAN</th>
                    <th>URL</th>
                    <th>ANGKA KREDIT</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>

    </div>

    </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('/assets/libs/select2/select2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/datepicker/datepicker.min.js')); ?>"></script>

    <!-- form wizard init -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/form-wizard.init.js')); ?>"></script>

    <!-- jquery step -->
    <script src="<?php echo e(URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dosenmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\3-level-user-skote\resources\views/user/riwayat-pendidikan.blade.php ENDPATH**/ ?>