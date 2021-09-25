var ajax = $('#ajax-request-desconto');
var user = $('#user-desconto').val();

if (ajax.length) {
    ajax.on('click', function () {
        Swal.fire({
            title: 'Informe a senha para dar desconto',
            input: 'password',
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-outline-secondary ml-1'
            },
            buttonsStyling: false,
            inputAttributes: {
                autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'Confirmar',
            cancelButtonText: 'Cancelar',
            showLoaderOnConfirm: true,
            preConfirm: function (senha) {
                return fetch('ajax/verificaDesconto/' + senha)
                    .then(function (response) {
                        if (!response.ok) {
                            throw new Error(response.statusText);
                        }
                        return response.json();
                    })
                    .catch(function (error) {
                        Swal.showValidationMessage('Verifique a senha.');
                    });
            },
            allowOutsideClick: function () {
                !Swal.isLoading();
            }
        }).then(function (result) {
            $('#ajax-request-desconto').hide();
            $('#desconto-true').show();
        });
    });
}