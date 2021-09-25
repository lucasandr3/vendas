<?php $this->layout('template', ['title' => 'Vendas']) ?>

<div class="misc-inner p-2 p-sm-3">
    <div class="w-100 text-center"><h2 class="mb-1"> Caixa Fechado </h2>
        <p class="mb-3"> Informe o valor da abertura do caixa para realizar vendas </p>
        <div class="row justify-content-center m-0 mb-2 form-inline">
            <input id="open-venda-v" type="text" name="valor" placeholder="informe um valor Ex: 0,00" class="caixa-open col-2 col-md-3 mb-1 mr-md-2 form-control"/>
            <input id="data-open-c" type="date" value="<?=date('Y-m-d');?>" name="day" class="mb-1 mr-md-2 form-control"/>
            <button class="btn mb-1 btn-sm-block btn-primary" onclick="openCaixa()" id="btn-open-pos"> Abrir Caixa</button>
        </div>
        <img src="<?=url('assets/app/images/pages/coming-soon.svg');?>" style="width:380px;">
    </div>
</div>

<?php $this->push('scripts') ?>
    <script src="<?=url('assets/js/caixa/abrir.js')?>"></script>
<?php $this->end() ?>
