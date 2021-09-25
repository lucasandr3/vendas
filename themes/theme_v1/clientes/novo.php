<?php $this->layout('template', ['title' => 'Vendas']) ?>

<div class="card">
    <div class="card-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=url('')?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ativos</li>
            </ol>
        </nav>
    </div>
</div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Multiple Column</h4>
        </div>
        <div class="card-body">
            <form class="form">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="first-name-column">First Name</label>
                            <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="last-name-column">Last Name</label>
                            <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="city-column">City</label>
                            <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="country-floating">Country</label>
                            <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="company-column">Company</label>
                            <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Company">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="email-id-column">Email</label>
                            <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="reset" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php $this->push('scripts') ?>
    <!-- BEGIN: Page Vendor JS-->
    <script src="<?=url('assets/app/vendors/js/tables/datatable/jquery.dataTables.min.js')?>"></script>
    <script src="<?=url('assets/app/vendors/js/tables/datatable/datatables.bootstrap4.min.js')?>"></script>
    <script src="<?=url('assets/app/vendors/js/tables/datatable/dataTables.responsive.min.js')?>"></script>
    <script src="<?=url('assets/app/vendors/js/tables/datatable/responsive.bootstrap4.js')?>"></script>
    <script src="<?=url('assets/app/vendors/js/tables/datatable/datatables.checkboxes.min.js')?>"></script>
    <script src="<?=url('assets/app/vendors/js/tables/datatable/datatables.buttons.min.js')?>"></script>
    <script src="<?=url('assets/app/vendors/js/tables/datatable/jszip.min.js')?>"></script>
    <script src="<?=url('assets/app/vendors/js/tables/datatable/pdfmake.min.js')?>"></script>
    <script src="<?=url('assets/app/vendors/js/tables/datatable/vfs_fonts.js')?>"></script>
    <script src="<?=url('assets/app/vendors/js/tables/datatable/buttons.html5.min.js')?>"></script>
    <script src="<?=url('assets/app/vendors/js/tables/datatable/buttons.print.min.js')?>"></script>
    <script src="<?=url('assets/app/vendors/js/tables/datatable/dataTables.rowGroup.min.js')?>"></script>
    <script src="<?=url('assets/app/vendors/js/pickers/flatpickr/flatpickr.min.js')?>"></script>
    <script src="<?=url('assets/js/pages/vendas/table.js')?>"></script>
    <!-- END: Page Vendor JS-->
<?php $this->end() ?>