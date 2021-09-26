<?php $this->layout('template', ['title' => 'Vendas']) ?>

<?php $this->unshift('styles') ?>
    <link rel="stylesheet" type="text/css" href="<?= url('assets/app/vendors/css/forms/wizard/bs-stepper.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= url('assets/app/css/core/menu/menu-types/vertical-menu.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= url('assets/app/css/plugins/forms/form-validation.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= url('assets/app/css/plugins/forms/form-wizard.css') ?>">
<?php $this->end() ?>

    <!-- Modern Horizontal Wizard -->
    <section class="modern-horizontal-wizard">
        <div class="bs-stepper wizard-modern modern-wizard-example">
            <div class="bs-stepper-header justify-content-between" style="margin-top: -30px;margin-bottom: 85px;">
                <div class="step" data-target="#account-details-modern">
                    <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="file-text" class="font-medium-3"></i>
                                    </span>
                        <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Produtos</span>
                                        <span class="bs-stepper-subtitle">informe os produtos da venda</span>
                                    </span>
                    </button>
                </div>
                <div class="line">
                    <i data-feather="chevron-right" class="font-medium-2"></i>
                </div>
                <div class="step" data-target="#personal-info-modern">
                    <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="user" class="font-medium-3"></i>
                                    </span>
                        <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Dados da Venda</span>
                                        <span class="bs-stepper-subtitle">informe os dados da venda</span>
                                    </span>
                    </button>
                </div>

                <div class="line">
                    <i data-feather="chevron-right" class="font-medium-2"></i>
                </div>
                <div class="step" data-target="#social-links-modern">
                    <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="link" class="font-medium-3"></i>
                                    </span>
                        <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Pagamento</span>
                                        <span class="bs-stepper-subtitle">informe os dados de pagamento</span>
                                    </span>
                    </button>
                </div>
            </div>
            <div class="card mb-1" style="position: fixed;z-index: 999;top: 140px;left: 288px;right: 28px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary btn-prev">
                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Voltar</span>
                    </button>
                    <div>
                        <strong>Subtotal: <span class="text-success" id="subtotal-step-1">R$ 0,00</span></strong>
                    </div>
                    <div>
                        <strong>Desconto: <span class="text-danger" id="desconto-step-1">R$ - 0,00</span></strong>
                    </div>
                    <div>
                        <strong>Total: <span class="text-success" id="total-step-1">R$ 0,00</span></strong>
                    </div>
                    <div id="val-restante-venda">
                        <strong>Restante: <span class="text-danger" id="total-table-venda-modal-calc">R$ - 0,00</span></strong>
                    </div>
                    <button class="btn btn-primary btn-next">
                        <span class="align-middle d-sm-inline-block d-none">Próximo</span>
                        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                    </button>
                </div>
            </div>
            <form action="<?= url('nova/venda'); ?>">
                <div class="bs-stepper-content">
                    <div id="account-details-modern" class="content">
                        <div class="row">
                            <div class="form-group form-password-toggle col-md-12">
                                <input type="text" id="add_prod-v" data-type="busca_prods" class="form-control"
                                       placeholder="Digite o código ou o nome do produto">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <table class="table table-bordered " width="100%" id="table_id">
                                    <thead>
                                    <tr>
                                        <th>Excluir</th>
                                        <th>Código do produto</th>
                                        <th>Produto</th>
                                        <th>Preço</th>
                                        <th>Quantidade</th>
                                    </tr>
                                    </thead>

                                    <tbody id="products_table_v">

                                    </tbody>

                                    <tfoot id="totalF">

                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="personal-info-modern" class="content">
                        <div class="row">
                            <div class="form-group form-password-toggle col-6">
                                <label>Informe o Cliente</label>
                                <select class="select2 form-control form-control-lg" name="cliente_venda">
                                    <option value="00">Informe o cliente</option>
                                    <option value="0">Cliente Padrão</option>
                                    <?php foreach ($clientes as $cliente): ?>
                                        <option value="<?= $cliente->id_cliente; ?>"><?= $cliente->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group form-password-toggle col-6">
                                <label>Informe o Vendedor</label>
                                <select class="select2 form-control form-control-lg" name="vendedor_venda">
                                    <option value="0">Informe o vendedor</option>
                                    <?php foreach ($vendedores as $vendedor): ?>
                                        <option value="<?= $vendedor->id_user; ?>"><?= $vendedor->nome_user; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-password-toggle col-6">
                                <label>Teve indicação ? quem ?</label>
                                <select class="select2 form-control form-control-lg" name="parceiro_venda">
                                    <option value="0">Tem indicação ?</option>
                                    <?php foreach ($parceiros as $parceiro): ?>
                                        <option value="<?= $parceiro->id_parceiro; ?>"><?= $parceiro->nome_parc; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group col-6">
                                <label>Data da Venda:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control pull-right"
                                           value="<?= date('Y-m-d') ?>" name="data_venda" id=""
                                           placeholder="00/00/0000">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-12">
                                <label>Observação:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                    <textarea class="form-control" name="observacao"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="social-links-modern" class="content">
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label>Cartão de Crédito</label>
                                <input type="text" class="form-control caixa-open" value=""
                                       placeholder="Cartão de Crédito"
                                       name="cartao_credito_one" onFocusOut="calcVenda(this.value, 'Loja')"/>
                            </div>
                            <div class="col-md-6">
                                <label>Parcelas e Taxa</label>
                                <select class="form-control" name="cartao_credito_bandeira_one">
                                    <option value="0">Escolha uma Taxa</option>
                                    <?php foreach ($taxas as $taxa): ?>
                                        <?php if ($taxa['op'] == 'credito' && $taxa['who'] == 'loja'): ?>
                                            <optgroup label="<?= $taxa['brand']; ?>">
                                                <?php foreach ($taxa['bandeiras'] as $bandeira): ?>
                                                    <option value="<?= bandeirasValueCartao($bandeira).",".$taxa['brand']; ?>"><?= bandeirasCartao($bandeira); ?></option>
                                                <?php endforeach; ?>
                                            </optgroup>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label>2º Cartão de Crédito</label>
                                <input type="text" class="form-control caixa-open" value=""
                                       placeholder="2º Cartão de Crédito"
                                       name="cartao_credito_two" onFocusOut="calcVenda(this.value, 'Loja')" />
                            </div>
                            <div class="col-md-6">
                                <label>Parcelas e Taxa</label>
                                <select class="form-control" name="cartao_credito_bandeira_two">
                                    <option value="0">Escolha uma Taxa</option>
                                    <?php foreach ($taxas as $taxa): ?>
                                        <?php if ($taxa['op'] == 'credito' && $taxa['who'] == 'loja'): ?>
                                            <optgroup label="<?= $taxa['brand']; ?>">
                                                <?php foreach ($taxa['bandeiras'] as $bandeira): ?>
                                                    <option value="<?= bandeirasValueCartao($bandeira).",".$taxa['brand']; ?>"><?= bandeirasCartao($bandeira); ?></option>
                                                <?php endforeach; ?>
                                            </optgroup>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label>Cartão de Débito</label>
                                <input type="text" class="form-control caixa-open" value=""
                                       placeholder="Cartão de Débito"
                                       name="cartao_debito_one" onFocusOut="calcVenda(this.value, 'Loja')"/>
                            </div>
                            <div class="col-md-6">
                                <label>Parcelas e Taxa</label>
                                <select class="form-control" name="cartao_debito_bandeira_one">
                                    <option value="0">Escolha uma Taxa</option>
                                    <?php foreach ($taxas as $taxa): ?>
                                        <?php if ($taxa['op'] == 'debito' && $taxa['who'] == 'loja'): ?>
                                            <optgroup label="<?= $taxa['brand']; ?>">
                                                <?php foreach ($taxa['bandeiras'] as $bandeira): ?>
                                                    <option value="<?= bandeirasValueCartao($bandeira).",".$taxa['brand']; ?>"><?= bandeirasCartao($bandeira); ?></option>
                                                <?php endforeach; ?>
                                            </optgroup>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label>2º Cartão de Débito</label>
                                <input type="text" class="form-control caixa-open" value=""
                                       placeholder="2º Cartão de Débito"
                                       name="cartao_debito_two" onFocusOut="calcVenda(this.value, 'Loja')" />
                            </div>
                            <div class="col-md-6">
                                <label>Parcelas e Taxa</label>
                                <select class="form-control" name="cartao_debito_bandeira_two">
                                    <option value="0">Escolha uma Taxa</option>
                                    <?php foreach ($taxas as $taxa): ?>
                                        <?php if ($taxa['op'] == 'debito' && $taxa['who'] == 'loja'): ?>
                                            <optgroup label="<?= $taxa['brand']; ?>">
                                                <?php foreach ($taxa['bandeiras'] as $bandeira): ?>
                                                    <option value="<?= bandeirasValueCartao($bandeira).",".$taxa['brand']; ?>"><?= bandeirasCartao($bandeira); ?></option>
                                                <?php endforeach; ?>
                                            </optgroup>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label>Cartão de Crédito (Fornecedor)</label>
                                <input type="text" class="form-control caixa-open" value=""
                                       placeholder="Cartão de Crédito (Fornecedor)"
                                       name="cartao_credito_fornecedor_one" onFocusOut="calcVenda(this.value, 'Fornecedor')" />
                            </div>

                            <div class="col-md-6">
                                <label>2º Cartão de Crédito (Fornecedor)</label>
                                <input type="text" class="form-control caixa-open" value=""
                                       placeholder="2º Cartão de Crédito (Fornecedor)"
                                       name="cartao_credito_fornecedor_two" onFocusOut="calcVenda(this.value, 'Fornecedor')" />
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label>Cartão de Dédito (Fornecedor)</label>
                                <input type="text" class="form-control caixa-open" value=""
                                       placeholder="Cartão de Dédito (Fornecedor)" name="cartao_debito_fornecedor_one" onFocusOut="calcVenda(this.value, 'Fornecedor')" />
                            </div>

                            <div class="col-md-6">
                                <label>2º Cartão de Dédito (Fornecedor)</label>
                                <input type="text" class="form-control caixa-open" value=""
                                       name="cartao_debito_fornecedor_two"
                                       placeholder="2º Cartão de Dédito (Fornecedor)" onFocusOut="calcVenda(this.value, 'Fornecedor')" />
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label>PicPay</label>
                                <input type="text" class="form-control caixa-open" value=""
                                       placeholder="2º Cartão de Débito"
                                       name="picapay" onFocusOut="calcVenda(this.value, 'PicPay')" />
                            </div>
                            <div class="col-md-6">
                                <label>Parcelas e Taxa</label>
                                <select class="form-control" name="picpay_taxa">
                                    <option value="0">Escolha uma Taxa</option>
                                    <?php foreach ($taxas as $taxa): ?>
                                        <?php if ($taxa['op'] == 'picpay' && $taxa['who'] == 'picpay'): ?>
                                            <optgroup label="<?= $taxa['brand']; ?>">
                                                <?php foreach ($taxa['bandeiras'] as $bandeira): ?>
                                                    <option value="<?= bandeirasValueCartao($bandeira).",".$taxa['brand']; ?>"><?= bandeirasCartao($bandeira); ?></option>
                                                <?php endforeach; ?>
                                            </optgroup>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label>Crediário Loja</label>
                                <input type="text" class="form-control caixa-open" value="" placeholder="Crediario loja"
                                       name="crediario_loja" onFocusOut="calcVenda(this.value, 'Crediario Loja')" />
                            </div>
                            <div class="col-md-4">
                                <label>Quantidade de Parcela</label>
                                <select class="form-control" name="crediario_loja_parcela">
                                    <option value="0">Escolha a quantidade de parcelas</option>
                                    <option value="1">1 Parcela</option>
                                    <option value="2">2 Parcelas</option>
                                    <option value="3">3 Parcelas</option>
                                    <option value="4">4 Parcelas</option>
                                    <option value="5">5 Parcelas</option>
                                    <option value="6">6 Parcelas</option>
                                    <option value="7">7 Parcelas</option>
                                    <option value="8">8 Parcelas</option>
                                    <option value="9">9 Parcelas</option>
                                    <option value="10">10 Parcelas</option>
                                    <option value="11">11 Parcelas</option>
                                    <option value="12">12 Parcelas</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label>Vencimento</label>
                                <input type="date" class="form-control pull-right"
                                       value="" name="crediario_vencimento" id=""
                                       placeholder="00/00/0000">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label>Pix</label>
                                <input type="text" class="form-control caixa-open" value="" name="pix"
                                       placeholder="Pix" onFocusOut="calcVenda(this.value, 'Pix')" />
                            </div>

                            <div class="col-md-6">
                                <label>Dinheiro</label>
                                <input type="text" class="form-control caixa-open" value="" name="dinheiro"
                                       placeholder="Dinheiro" onFocusOut="calcVenda(this.value, 'Dinheiro')" />
                            </div>

                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <div id="desconto-false">
                                                <span class="btn btn-primary btn-flat btn-block"
                                                      id="ajax-request-desconto">Autorizar Desconto</span>
                                </div>
                                <div id="desconto-true" style="display:none;">
                                    <label>Desconto:</label>
                                    <input type="text" class="form-control caixa-open" value="0" id="desc-sale-sld"
                                           onchange="updateTotalv()" name="desconto"
                                           placeholder="Digite o valor Ex: 5"/>
                                </div>
                            </div>
                            <input type="hidden" class="form-control pull-right venda-val" name="total_venda">
                            <div class="col-md-6">
                                <button class="btn btn-success btn-block">Finalizar Venda</button>
                            </div>
                        </div>

            </form>
        </div>
        </div>
        </div>
    </section>
    <!-- /Modern Horizontal Wizard -->

<?php $this->push('scripts') ?>
    <script src="<?= url('assets/app/vendors/js/forms/wizard/bs-stepper.min.js') ?>"></script>
    <script src="<?= url('assets/app/vendors/js/forms/select/select2.full.min.js') ?>"></script>
    <script src="<?= url('assets/app/vendors/js/forms/validation/jquery.validate.min.js') ?>"></script>
    <script src="<?= url('assets/app/js/scripts/forms/form-wizard.js') ?>"></script>
    <script src="<?= url('assets/js/desconto.js') ?>"></script>
    <script src="<?= url('assets/js/venda.js') ?>"></script>
<?php $this->end() ?>