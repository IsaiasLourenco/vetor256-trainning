$(document).ready(function () {
    $("#form-config").submit(function () {
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "editar-config.php",
            type: 'POST',
            data: formData,
            success: function (mensagem) {
                $('#msg-config').text('');
                $('#msg-config').removeClass('text-danger text-success')
                if (mensagem.trim() == "Editado com Sucesso") {
                    $('#btn-fechar-config').click();
                    location.reload();
                } else {
                    $('#msg-config').addClass('text-danger')
                    $('#msg-config').text(mensagem)
                }
            },
            cache: false,
            contentType: false,
            processData: false,
        });
    });
});