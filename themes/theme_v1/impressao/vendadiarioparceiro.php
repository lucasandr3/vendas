
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Relatório</title>
</head>
<body>

    <div class="row">
        <div class="col-md-12 text-center">
            <h1>SLD Nutrição Esportiva</h1>
            <h5>Relatório de Venda do dia <?=dataFormatada($dataFiltro)?></h5>
        </div>
    </div>

<!-- Main content -->

    <section class="modern-horizontal-wizard">
        <!-- Default box -->
        <div class="card">
            <div class="card-body">

                <table class="table table-bordered table-striped dt-responsive mb-1" width="100%">
                    <thead>
                    <tr>
                        <th colspan="4" class="td-total-gray">Resumo Financeiro Parceiro do dia
                            - <?= ($dataFiltro === "") ? date('d/m/Y') : date('d/m/Y', strtotime($dataFiltro)) ?></th>
                    </tr>
                    <tr>
                        <th width="150" style="vertical-align: inherit;">Operação</th>
                        <th width="70">
                            Montante<br/>
                            <small class="badge badge-light-dark bdg">descontado a taxa</small>
                        </th>
                        <th width="70">
                            Montante<br/>
                            <small class="badge badge-light-dark bdg">Sem desconto da taxa</small>
                        </th>
                        <th width="130">
                            Total Tax<br/>
                            <small class="badge badge-light-dark bdg">Total de taxa pago</small>
                        </th>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Cartão de Crédito Fornecedor</td>
                        <td><?=$totalGeral->cartao_credito_parceiro;?></td>
                        <td class="text-success"> + <?=$totalGeral->cartao_credito_parceiro;?></td>
                        <td class="text-danger">- R$ 0,00</td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Cartão de Dédito Fornecedor</td>
                        <td><?=$totalGeral->cartao_debito_parceiro;?></td>
                        <td class="text-success"> + <?=$totalGeral->cartao_debito_parceiro;?></td>
                        <td class="text-danger"> - R$ 0,00</td>
                    </tr>
                    <tr>
                        <th class="td-total-gray">Total</th>
                        <td class="td-total-gray"><?=$totalGeral->total_fornecedor_credito;?></td>
                        <td class="td-total-gray"><?=$totalGeral->total_fornecedor_debito;?></td>
                        <td class="td-total-gray">R$ 0,00</td>
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
    .bdg {
        border-radius: 3px !important;
        background-color: #eee !important;
        color: #333 !important;
        border: 1px solid #ddd !important;
    }
</style>

</body>
</html>