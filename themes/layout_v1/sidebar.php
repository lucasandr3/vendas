<div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="navigation-header" style="margin-top: 10px;"><span>Seção Home</span><i data-feather="more-horizontal"></i>
                <li class="nav-item active" >
                    <a class="d-flex align-items-center" href="<?=url('')?>">
                        <i data-feather="layout"></i>
                        <span class="menu-title text-truncate">Painel</span>
                    </a>
                </li>

                <li class=" navigation-header"><span>Seção Vendas</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="shopping-cart"></i><span class="menu-title text-truncate">Vendas</span></a>
                    <ul class="menu-content">
                        <li>
                            <a class="d-flex align-items-center" href="<?=url('pdv');?>">
                                <i data-feather="circle"></i>
                                <span class="menu-title text-truncate">Nova Venda</span>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="<?=url('vendas');?>">
                                <i data-feather="circle"></i>
                                <span class="menu-title text-truncate">Vendas</span>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="<?=url('relatorio/venda/diario');?>">
                                <i data-feather="circle"></i>
                                <span class="menu-item">Relatório Diário</span>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="<?=url('relatorio/venda/mensal');?>">
                                <i data-feather="circle"></i>
                                <span class="menu-item">Relatório Mensal</span>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="<?=url('novo/cliente');?>">
                                <i data-feather="circle"></i>
                                <span class="menu-item">Relatório Vendedor</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="layers"></i><span class="menu-title text-truncate">Pedidos</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item">Pedidos Pendentes</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Pedidos em Trânsito</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Pedidos Finalizados</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i data-feather="circle"></i><span class="menu-item">Pedidos Cancelados</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header"><span>Seção Cadastro</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="users"></i><span class="menu-title text-truncate">Clientes</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="<?=url('clientes');?>"><i data-feather="circle"></i><span class="menu-item">Ver Clientes</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="<?=url('novo/cliente');?>"><i data-feather="circle"></i><span class="menu-item">Novo Cliente</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="<?=url('clientes/inativos');?>"><i data-feather="circle"></i><span class="menu-item">Clientes Inativos</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="users"></i><span class="menu-title text-truncate">Fornecedores</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item">Ver Fornecedores</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Novo Fornecedor</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Forn. Inativos</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather="truck"></i>
                        <span class="menu-title text-truncate">Taxa Entrega</span>
                    </a>
                </li>

                <li class=" navigation-header"><span>Seção Produtos</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="package"></i><span class="menu-title text-truncate">Produtos</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item">Todos Produtos</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Categorias</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Novo Produto</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Editar Produto</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Opções do Produto</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Opções</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="server"></i><span class="menu-title text-truncate">Estoque</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item">Saldo do Estoque</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Entrada Produto</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Saída Manual</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Todas Saídas</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header"><span>Seção Financeiro</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-plus"></i><span class="menu-title text-truncate">Receitas</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item">Contas a Receber</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Receber Parcelado</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-minus"></i><span class="menu-title text-truncate">Despesas</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item">Contas a Pagar</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Pagar Parcelado</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather="percent"></i>
                        <span class="menu-title text-truncate">Comissão</span>
                    </a>
                </li>

                <li class=" navigation-header"><span>Seção Relatórios</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate">Relatórios</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item">Todos Produtos</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Categorias</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Novo Produto</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Editar Produto</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Opções do Produto</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item">Opções</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="<?=url('sair')?>"><i data-feather="log-out"></i><span class="menu-title text-truncate">Sair do sistema</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->