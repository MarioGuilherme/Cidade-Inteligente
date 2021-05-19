$(document).ready(() => {
    $('.btn-entrar').click((e) => {
        e.preventDefault()
        $("input[type='checkbox']").is(':checked') == true ? conectado = 1 : conectado = 0
        $.ajax({
            url: 'src/usuario/model/login.php',
            type: 'POST',
            dataType: 'json',
            data: {
                email: $("input[type='email']").val(),
                senha: $("input[type='password']").val(),
                conectado: conectado
            }
        }).done((retorno) => {
            var confirmar = true
            var janela = true
            if (retorno.icone == 'success') {
                $('.input[name="email"],[name="senha"]').val('')
                confirmar = false
                janela = false
                setInterval(() => {
                    $('.carregando').append('.')
                }, 600)
                setTimeout(() => {
                    $(location).attr('href', 'menu.html')
                }, 2000)
            }
            Swal.fire({
                icon: retorno.icone,
                html: '<h2 class="carregando" style="color:white; font-weight:bold;">' + retorno.msg + '</h2>',
                background: 'rgb(31 50 51)',
                allowOutsideClick: janela,
                showConfirmButton: confirmar
            })
        })
    })
})