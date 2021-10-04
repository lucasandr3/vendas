
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

                <table class="table table-bordered table-striped mb-1" width="">
                            <thead>
                            <tr>
                                <th colspan="4" class="td-total-gray">Resumo financeiro Loja do dia
                                    - <?=$dataFiltro;?></th>
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
                                <td class="font-weight-bold">Venda em Dinheiro</td>
                                <td><?=$totalGeral->dinheiro;?></td>
                                <td class="text-success"> + <?=$totalGeral->dinheiro;?></td>
                                <td class="text-danger"> - R$ 0,00</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Cartão de Crédito Loja</td>
                                <td><?=$totalGeral->cartao_credito_loja;?></td>
                                <td class="text-success"> + <?=$totalGeral->cartao_credito_loja_historico;?></td>
                                <td class="text-danger"> - <?=$totalGeral->total_taxa_paga_credito;?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Cartão de Débito Loja</td>
                                <td><?=$totalGeral->cartao_debito_loja;?></td>
                                <td class="text-success"> + <?=$totalGeral->cartao_debito_loja_historico;?></td>
                                <td class="text-danger"> - <?=$totalGeral->total_taxa_paga_debito;?></td>
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
                                <td class="font-weight-bold">Pix</td>
                                <td><?=$totalGeral->pix;?></td>
                                <td class="text-success"> + <?=$totalGeral->pix;?></td>
                                <td class="text-danger"> - R$ 0,00</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">PicPay</td>
                                <td><?=$totalGeral->picpay;?></td>
                                <td class="text-success"> + <?=$totalGeral->picpay_historico;?></td>
                                <td class="text-danger"> - <?=$totalGeral->total_taxa_paga_picpay;?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Crediario Loja</td>
                                <td><?=$totalGeral->crediario_loja;?></td>
                                <td class="text-success"> + <?=$totalGeral->crediario_loja;?></td>
                                <td class="text-danger"> - R$ 0,00</td>
                            </tr>
                            <tr>
                                <th class="td-total-gray">Total</th>
                                <td class="td-total-gray"><?=$totalGeral->total_descontado_taxa;?></td>
                                <td class="td-total-gray"><?=$totalGeral->total_sem_desconto_taxa;?></td>
                                <td class="td-total-gray"><?=contaSimples($totalGeral->total_descontado_taxa, $totalGeral->total_sem_desconto_taxa);?></td>
                            </tr>
                            </thead>
                        </table>

                <table class="table table-bordered table-striped dt-responsive mb-1" width="100%">
                    <thead>
                    <tr>
                        <th colspan="4" class="td-total-gray">Resumo Financeiro Fornecedor do dia
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


                <table class="table table-bordered table-striped dt-responsive mb-1" width="100%">
                    <thead>
                    <tr>
                        <th colspan="4" class="td-total-gray">Bandeiras Cartão de Crédito Loja
                            - <?= ($dataFiltro === "") ? date('d/m/Y') : date('d/m/Y', strtotime($dataFiltro)) ?></th>
                    </tr>
                    <tr>
                        <th width="150" style="vertical-align: inherit;">Bandeiras</th>
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
                        <td colspan="">Mastercard</td>
                        <td><?=$mastercard->total_credito_master;?></td>
                        <td class="text-success"> + <?=$mastercard->total_historico_credito_master;?></td>
                        <td class="text-danger"> - <?=$mastercard->total_desc_credito_taxa_master;?></td>
                    </tr>
                    <tr>
                        <td colspan="">Visa</td>
                        <td><?=$visa->total_credito_visa;?></td>
                        <td class="text-success"> + <?=$visa->total_historico_credito_visa;?></td>
                        <td class="text-danger"> - <?=$visa->total_desc_credito_taxa_visa;?></td>
                    </tr>
                    <tr>
                        <td colspan="">Hipercard</td>
                        <td><?=$hipercard->total_credito_hipercard;?></td>
                        <td class="text-success"> + <?=$hipercard->total_historico_credito_hipercard;?></td>
                        <td class="text-danger"> - <?=$hipercard->total_desc_credito_taxa_hipercard;?></td>
                    </tr>
                    <tr>
                        <td colspan="">Elo</td>
                        <td><?=$elo->total_credito_elo;?></td>
                        <td class="text-success"> + <?=$elo->total_historico_credito_elo;?></td>
                        <td class="text-danger"> - <?=$elo->total_desc_credito_taxa_elo;?></td>
                    </tr>
                    <tr>
                        <td colspan="">Cabal Vale</td>
                        <td><?=$cabal->total_credito_cabal;?></td>
                        <td class="text-success"> + <?=$cabal->total_historico_credito_cabal;?></td>
                        <td class="text-danger"> - <?=$cabal->total_desc_credito_taxa_cabal;?></td>
                    </tr>
                    <tr>
                        <td colspan="">Amex</td>
                        <td><?=$amex->total_credito_amex;?></td>
                        <td class="text-success"> + <?=$amex->total_historico_credito_amex;?></td>
                        <td class="text-danger"> - <?=$amex->total_desc_credito_taxa_amex;?></td>
                    </tr>
                    <tr>
                        <th class="td-total-gray">Total</th>
                        <td class="td-total-gray"><?=$totalBandeiras->total_bandeiras_credito_taxa;?></td>
                        <td class="td-total-gray"><?=$totalBandeiras->total_bandeiras_credito_sem_taxa;?></td>
                        <td class="td-total-gray"><?=$totalBandeiras->total_bandeiras_credito_taxa_paga;?></td>
                    </tr>
                    </thead>
                </table>

                <table class="table table-bordered table-striped dt-responsive mb-1" width="100%">
                    <thead>
                    <tr>
                        <th colspan="4" class="td-total-gray">Bandeiras Cartão de Débito Loja
                            - <?= ($dataFiltro === "") ? date('d/m/Y') : date('d/m/Y', strtotime($dataFiltro)) ?></th>
                    </tr>
                    <tr>
                        <th width="150" style="vertical-align: inherit;">Bandeiras</th>
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
                        <td colspan="">Mastercard</td>
                        <td><?=$mastercard->total_debito_master;?></td>
                        <td class="text-success"> + <?=$mastercard->total_historico_debito_master;?></td>
                        <td class="text-danger"> - <?=$mastercard->total_desc_debito_taxa_master;?></td>
                    </tr>
                    <tr>
                        <td colspan="">Visa</td>
                        <td><?=$visa->total_debito_visa;?></td>
                        <td class="text-success"> + <?=$visa->total_historico_debito_visa;?></td>
                        <td class="text-danger"> - <?=$visa->total_desc_debito_taxa_visa;?></td>
                    </tr>
                    <tr>
                        <td colspan="">Hipercard</td>
                        <td><?=$hipercard->total_debito_hipercard;?></td>
                        <td class="text-success"> + <?=$hipercard->total_historico_debito_hipercard;?></td>
                        <td class="text-danger"> - <?=$hipercard->total_desc_debito_taxa_hipercard;?></td>
                    </tr>
                    <tr>
                        <td colspan="">Elo</td>
                        <td><?=$elo->total_debito_elo;?></td>
                        <td class="text-success"> + <?=$elo->total_historico_debito_elo;?></td>
                        <td class="text-danger"> - <?=$elo->total_desc_debito_taxa_elo;?></td>
                    </tr>
                    <tr>
                        <td colspan="">Cabal Vale</td>
                        <td><?=$cabal->total_debito_cabal;?></td>
                        <td class="text-success"> + <?=$cabal->total_historico_debito_cabal;?></td>
                        <td class="text-danger"> - <?=$cabal->total_desc_debito_taxa_cabal;?></td>
                    </tr>
                    <tr>
                        <td colspan="">Amex</td>
                        <td><?=$amex->total_debito_amex;?></td>
                        <td class="text-success"> + <?=$amex->total_historico_debito_amex;?></td>
                        <td class="text-danger"> - <?=$amex->total_desc_debito_taxa_amex;?></td>
                    </tr>
                    <tr>
                        <th class="td-total-gray">Total</th>
                        <td class="td-total-gray"><?=$totalBandeiras->total_bandeiras_debito_taxa;?></td>
                        <td class="td-total-gray"><?=$totalBandeiras->total_bandeiras_debito_sem_taxa;?></td>
                        <td class="td-total-gray"><?=$totalBandeiras->total_bandeiras_debito_taxa_paga;?></td>
                    </tr>
                    </thead>
                </table>

                <table class="table table-bordered table-striped dt-responsive mb-1" width="100%">
                    <thead>
                    <tr>
                        <th colspan="2" class="td-total-gray">Despesas do dia
                            - <?= ($dataFiltro === "") ? date('d/m/Y') : date('d/m/Y', strtotime($dataFiltro)) ?></th>
                    </tr>
                    <tr>
                        <th width="150">Descrição</th>
                        <th width="100">Montante</th>
                    </tr>
                    <?php foreach ($despesas as $despesa): ?>
                        <tr>
                            <td colspan=""><?=$despesa['descricao'];?></td>
                            <td class="text-danger"> - <?=$despesa['valor'];?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <th class="td-total-gray">Total</th>
                        <td class="td-total-gray"><?=$totalDespesa;?></td>
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
                        <th width="345">Descrição</th>
                        <th width="150">Montante</th>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Abriu Caixa Com</td>
                        <td style="font-weigth:bold;"><?=$abriuCaixa;?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Total em Vendas - Bruto</td>
                        <td class="text-success" style="font-weigth:bold;"> + <?=$totalGeral->total_sem_desconto_taxa;?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Total em vendas - Liquido</td>
                        <td class="text-success" style="font-weigth:bold;"> + <?=$totalGeral->total_descontado_taxa;?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Total Custo Vendido - Bruto</td>
                        <td class="text-success" style="font-weigth:bold;"> + <?=$custoBruto;?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Total de Taxa Pago</td>
                        <td class="text-danger" style="font-weigth:bold;"> - <?=contaSimples($totalGeral->total_descontado_taxa, $totalGeral->total_sem_desconto_taxa);?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Total de Desconto</td>
                        <td class="text-danger" style="font-weigth:bold;"> - <?=$totalGeral->total_desconto;?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Despesas</td>
                        <td class="text-danger" style="font-weigth:bold;"> - <?=$totalDespesa;?></td>
                    </tr>
                    </thead>
                </table>

                <table class="table table-bordered table-striped dt-responsive mb-1" width="100%">
                    <thead>
                    <tr>
                        <th>
                            <div>
                                Total em vendas<br/>
                                <small class="badge badge-light-dark bdg" style="margin-top: 3px;">Total Bruto em Vendas</small>
                            </div>
                        </th>
                        <th>
                            <div>
                                Total em vendas <br/>
                                <small class="badge badge-light-dark bdg" style="margin-top: 3px;">Total Liquido em Vendas</small>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <td class="td-total"><?=$totalGeral->total_sem_desconto_taxa;?></td>
                        <td class="td-total"><?=$totalGeral->total_descontado_taxa;?></td>
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