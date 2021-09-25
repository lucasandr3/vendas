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

<!-- Multilingual -->
<section id="multilingual-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <button class="btn btn-primary">Novo Cliente</button>
                </div>
                <div class="card-datatable">
                    <table class="dt-multilingual table tabela-res table-striped">
                        <thead>
                        <tr>
                            <th>Código Cliente</th>
                            <th>Nome</th>
                            <th>Cliente Desde</th>
                        </tr>
                        </thead>
                        <?php foreach($clientes as $cliente): ?>
                        <tbody>
                            <td><?=$cliente->id_cliente;?></td>
                            <td><?=$cliente->name;?></td>
                            <td><?=date('d/m/Y', strtotime($cliente->date_create));?></td>

                        </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Multilingual -->

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
<!--    <script src="--><?//=url('assets/js/pages/vendas/table.js')?><!--"></script>-->
    <script src="<?=url('assets/js/data.js')?>"></script>
    <!-- END: Page Vendor JS-->
<?php $this->end() ?>