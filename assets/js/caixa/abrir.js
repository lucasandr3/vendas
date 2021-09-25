function openCaixa() {

  let value = $("#open-venda-v").val();
  let data_open = $("#data-open-c").val();

  if (value === "") {
    Swal.fire({
      title: 'Aviso!',
      text: 'Você precisa informar um valor',
      icon: 'info',
      customClass: {
        confirmButton: 'btn btn-primary'
      },
      buttonsStyling: false
    });
    return;
  }

  $.ajax({
    type: "POST",
    url: "http://localhost/vendas/ajax/abrir_caixa",
    data: { amount: value, data_open },
    dataType: "Json",
    beforeSend: function () {
      $("#btn-open-pos").html(
        '<i class="fa fa-refresh fa-spin"></i> &nbsp&nbspAguarde...'
      );
    },
    success: function (res) {
      if (res.code == 0) {
        $("#btn-open-pos").html("Sucesso!");
        Swal.fire({
          title: 'Sucesso!',
          text: res.msg,
          icon: 'success',
          customClass: {
            confirmButton: 'btn btn-success'
          },
          buttonsStyling: false
        });
        window.location.reload(true);
      } else {
        $("#btn-open-pos").html("Tente Novamente");
        Swal.fire({
          title: 'Aviso!',
          text: res.msg,
          icon: 'info',
          customClass: {
            confirmButton: 'btn btn-primary'
          },
          buttonsStyling: false
        });
      }
    },
  });
}