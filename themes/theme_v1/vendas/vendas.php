<?php $this->layout('template', ['title' => 'Vendas']) ?>

<div class="card">
    <div class="card-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=url('')?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Vendas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Todas Vendas</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card">
    <div class="card-header with-border">
        <h3 class="card-title"><i data-feather="corner-up-right"></i> <b>Ação</b></h3>
    </div>
    <div class="card-body">
    <div class="row">
                <div class="col-md-12">
                    <a href="<?=BASE_URL?>estoque/entrada" class="btn btn-relief-secondary">
                        <i data-feather="log-in"></i> Entrada estoque
                    </a>
                    <a href="<?=BASE_URL?>estoque/saida" class="btn btn-relief-secondary">
                        <i data-feather="log-out"></i> Saída manual estoque
                    </a>
                    <a href="<?=BASE_URL?>produtos" class="btn btn-relief-secondary">
                        <i data-feather="package"></i> Ir para Produtos
                    </a>
                </div>
            </div>
    </div>
</div>

<!-- Basic table -->
<section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <table class="table-bordered table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Código da venda</th>
                                            <th>Total da venda</th>
                                            <th>Data da venda</th>
                                            <th class="text-center">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($vendas as $venda): ?>
                                            <tr>
                                                <td class="text-danger font-weight-bold">#<?=$venda['id_venda'];?></td>
                                                <td><?=moeda($venda['total']);?></td>
                                                <td><?=dataFormatada($venda['data_venda']);?></td>
                                                <td class="text-center d-flex justify-content-around">
                                                    <a href="<?=url('ver/venda/' . $venda['id_venda']);?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detalhes da Venda">
                                                        <i data-feather="file-text" class="font-medium-3"></i>
                                                    </a>
                                                    <a href="<?=url('ver/venda/' . $venda['id_venda']);?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Produtos da Venda">
                                                        <i data-feather="package" class="font-medium-3"></i>
                                                    </a>
                                                    <a href="<?=url('ver/venda/' . $venda['id_venda']);?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Excluir Venda">
                                                        <i data-feather="trash-2" class="font-medium-3 text-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Modal to add new record -->
                    <div class="modal modal-slide-in fade" id="modals-slide-in">
                        <div class="modal-dialog sidebar-sm">
                            <form class="add-new-record modal-content pt-0">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="form-group">
                                        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="basic-icon-default-post">Post</label>
                                        <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="basic-icon-default-email">Email</label>
                                        <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                                        <small class="form-text text-muted"> You can use letters, numbers & periods </small>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                        <input type="text" class="form-control dt-date" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="form-label" for="basic-icon-default-salary">Salary</label>
                                        <input type="text" id="basic-icon-default-salary" class="form-control dt-salary" placeholder="$12000" aria-label="$12000" />
                                    </div>
                                    <button type="button" class="btn btn-primary data-submit mr-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!--/ Basic table -->

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