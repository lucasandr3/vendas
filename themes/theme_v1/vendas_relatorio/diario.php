<?php $this->layout('template', ['title' => 'Vendas']) ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row">
        <div class="col-md-12" style="color:#555;margin-bottom:-20px;">
            <ul class="breadcrumb">
                <li><a href="<?= BASE_URL ?>" style="color:#555;">Receitas</a></li>
                <li><a href="" style="color:#555;">Nova Receita</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="modern-horizontal-wizard">
    <!-- Default box -->

    <div class="card">
        <div class="card-header justify-content-end">
            <form method="get" style="display: flex !important;">
            <div class="col-8">
                    <input type="date" name="filter_date" class="form-control"
                           value="<?= ($dataFiltro !== "") ? $dataFiltro : date('Y-m-d') ?>" />
            </div>
                <button type="submit" class="btn btn-success mr-2">Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped mb-1" width="100%">
                <thead>
                <tr>
                    <th colspan="9" class="td-total-gray">Resumo financeiro Loja do dia
                        - <?= ($dataFiltro === "") ? date('d/m/Y') : date('d/m/Y', strtotime($dataFiltro)) ?></th>
                </tr>
                <tr>
                    <th width="400">Operação</th>
                    <th width="100">Montante</th>
                    <th width="100">Montante C/Tax</th>
                    <th width="100">Total Tax</th>
                </tr>
                <tr>
                    <td colspan="">Venda em Dinheiro</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Cartão de Crédito Loja</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Cartão de Débito Loja</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Pix</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">PicPay</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <th class="td-total-gray">Total</th>
                    <td class="td-total-gray">R$ 0,00</td>
                    <td class="td-total-gray">R$ 0,00</td>
                    <td class="td-total-gray">R$ 0,00</td>
                </tr>
                </thead>
            </table>

            <table class="table table-bordered table-striped dt-responsive mb-1" width="100%">
                <thead>
                <tr>
                    <th colspan="11" class="td-total-gray">Resumo Financeiro Fornecedor do dia
                        - <?= ($dataFiltro === "") ? date('d/m/Y') : date('d/m/Y', strtotime($dataFiltro)) ?></th>
                </tr>
                <tr>
                    <th width="400">Operação</th>
                    <th width="100">Montante</th>
                    <th width="100">Montante C/Tax</th>
                    <th width="100">Total Tax</th>
                </tr>
                <tr>
                    <td colspan="">Cartão de Crédito Fornecedor</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Cartão de Dédito Fornecedor</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <th class="td-total-gray">Total</th>
                    <td class="td-total-gray"></td>
                    <td class="td-total-gray"></td>
                    <td class="td-total-gray"></td>
                </tr>
                </thead>
            </table>


            <table class="table table-bordered table-striped dt-responsive mb-1" width="100%">
                <thead>
                <tr>
                    <th colspan="9" class="td-total-gray">Bandeiras Cartão de Crédito Loja
                        - <?= ($dataFiltro === "") ? date('d/m/Y') : date('d/m/Y', strtotime($dataFiltro)) ?></th>
                </tr>
                <tr>
                    <th width="400">Bandeira</th>
                    <th width="100">Montante</th>
                    <th width="100">Montante C/Tax</th>
                    <th width="100">Total Taxa</th>
                </tr>
                <tr>
                    <td colspan="">Mastercard</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Visa</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Hipercard</td>
                    <td>R$ 0,00</td>
                    <td class="text-success"></td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Elo</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Cabal Vale</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Amex</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <th class="td-total-gray">Total</th>
                    <td class="td-total-gray">R$ 0,00</td>
                    <td class="td-total-gray">R$ 0,00</td>
                    <td class="td-total-gray">R$ 0,00</td>
                </tr>
                </thead>
            </table>

            <table class="table table-bordered table-striped dt-responsive mb-1" width="100%">
                <thead>
                <tr>
                    <th colspan="9" class="td-total-gray">Bandeiras Cartão de Débito Loja
                        - <?= ($dataFiltro === "") ? date('d/m/Y') : date('d/m/Y', strtotime($dataFiltro)) ?></th>
                </tr>
                <tr>
                    <th width="400">Bandeira</th>
                    <th width="100">Montante</th>
                    <th width="100">Montante C/Tax</th>
                    <th width="100">total Taxa</th>
                </tr>
                <tr>
                    <td colspan="">Mastercard</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Visa</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Hipercard</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Elo</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Cabal Vale</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <td colspan="">Amex</td>
                    <td>R$ 0,00</td>
                    <td class="text-success">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>
                <tr>
                    <th class="td-total-gray">Total</th>
                    <td class="td-total-gray">R$ 0,00</td>
                    <td class="td-total-gray">R$ 0,00</td>
                    <td class="td-total-gray">R$ 0,00</td>
                </tr>
                </thead>
            </table>

            <table class="table table-bordered table-striped dt-responsive mb-1" width="100%">
                <thead>
                <tr>
                    <th colspan="11" class="td-total-gray">Despesas do dia
                        - <?= ($dataFiltro === "") ? date('d/m/Y') : date('d/m/Y', strtotime($dataFiltro)) ?></th>
                </tr>
                <tr>
                    <th width="300">Operação</th>
                    <th width="150">Montante</th>
                </tr>

                <tr>
                    <td colspan="">R$ 0,00</td>
                    <td class="text-danger">R$ 0,00</td>
                </tr>

                <tr>
                    <th class="td-total-gray">Total</th>
                    <td class="td-total-gray">R$ 0,00</td>
                </tr>
                </thead>
            </table>

            <table class="table table-bordered table-striped dt-responsive mb-1" width="100%">
                <thead>
                <tr>
                    <th colspan="2" class="td-total-gray">Fechamento do dia
                        - <?= ($dataFiltro === "") ? date('d/m/Y') : date('d/m/Y', strtotime($dataFiltro)) ?></th>
                </tr>
                <tr>
                    <th width="345">Operação</th>
                    <th width="150">Montante</th>
                </tr>
                <tr>
                    <td>Abriu Caixa Com</td>
                    <td class="text-success" style="font-weigth:bold;">R$ 0,00</td>
                </tr>
                <tr>
                    <td>Total em Vendas</td>
                    <td class="text-success" style="font-weigth:bold;">R$ 0,00</td>
                </tr>
                <tr>
                    <td>Total em vendas com Taxa</td>
                    <td class="text-success" style="font-weigth:bold;">R$ 0,00</td>
                </tr>
                <tr>
                    <td>Total de Taxa</td>
                    <td class="text-danger" style="font-weigth:bold;">R$ 0,00</td>
                </tr>
                <tr>
                    <td>Total Custo Vendido</td>
                    <td class="text-success" style="font-weigth:bold;">R$ 0,00</td>
                </tr>
                <tr>
                    <td>Total Bruto Vendido</td>
                    <td class="text-success" style="font-weigth:bold;">R$ 0,00</td>
                </tr>
                <tr>
                    <td>Total de Desconto</td>
                    <td class="text-danger" style="font-weigth:bold;"> R$ 0,00</td>
                </tr>
                <tr>
                    <td>Despesas</td>
                    <td class="text-danger" style="font-weigth:bold;">R$ 0,00</td>
                </tr>
                <tr>
                    <td>Fechou Caixa Com</td>
                    <td class="text-success" style="font-weigth:bold;">R$ 0,00</td>
                </tr>
                <tr>
                    <td class="td-total" style="text-align:left;">Fechamento do Caixa</td>
                    <td class="td-total" style="text-align:left;">R$ 0,00</td>
                </tr>
                </thead>
            </table>

            <table class="table table-bordered table-striped dt-responsive mb-1" width="100%">
                <thead>
                <tr>
                    <th colspan="2">Abriu Caixa Com <i class="fa fa-arrow-down"></i></th>
                    <th colspan="">Total em vendas<i class="fa fa-arrow-down"></i></th>
                    <th colspan="">Total em vendas com Taxa <i class="fa fa-arrow-down"></i></th>
                    <th colspan="">Total de Taxa <i class="fa fa-arrow-down"></i></th>
                    <th colspan="">Fechou Caixa com <i class="fa fa-arrow-down"></i></th>
                    <th colspan="">Imprimir <i class="fa fa-arrow-down"></i></th>
                </tr>
                <tr>
                    <td colspan="2" class="td-total">R$ 0,00</td>
                    <td class="td-total">R$ 0,00</td>
                    <td class="td-total">R$ 0,00</td>
                    <td class="td-total">R$ 0,00</td>
                    <td class="td-total">R$ 0,00</td>
                    <td class="td-total" style="padding:0px;">
                        <?php if ($dataFiltro): ?>
                            <a href="<?= url('relatorios/imprimir_reduzido/' . $dataFiltro) ?>" target="_blank"
                               class="btn btn-primary btn-xs btn-block btn-flat" style="padding:9px;"><i
                                        class="fa fa-print"></i> imprimir</a>
                        <?php else: ?>
                            <a href="<?= url('relatorios/imprimir_reduzido/' . date('Y-m-d')) ?>" target="_blank"
                               class="btn btn-primary btn-xs btn-block btn-flat" style="padding:9px;"><i
                                        class="fa fa-print"></i> imprimir</a>
                        <?php endif; ?>
                    </td>
                </tr>
                </thead>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="overlay hide" id="load">
            <i class="fa fa-refresh fa-spin"></i>
        </div>
    </div>
    <!-- /.box -->

</section>

<style>
    .td-total {
        background-color: #0080009c;
        color: white;
        font-weight: bold;
    }

    .td-total-gray {
        background-color: #ccc;
        color: black;
        font-weight: bold;
    }
</style>