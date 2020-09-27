$(document).ready(function () {
    $(".navbar-toggle").click(function () {
        $(".menu").toggleClass("menu-open");

    });

    $("#select_cliente").change(function () {
        $("#select_eventos").attr('disabled', false);
        console.log('teste');
        $.ajax({
            url: '/acompanhamentos/getEvento/',
            type: 'get',
            dataType: 'JSON',
            success: function (response) {
                alert($rsEventos);
            }
        });

    });


    $("#Conf_FormaPGTO_01").click(function () {
        $("#Text_FormaPGTO_01").attr('disabled', true);
        document.getElementById('Text_FormaPGTO_01').textContent = ("Formas de Pagamento Conferidas!");

    });


    $("#Alter_FormaPGTO_01").click(function () {
        $("#Text_FormaPGTO_01").attr('disabled', false);

    });



    $("#Conf_FormaPGTO_02").click(function () {
        $("#Text_FormaPGTO_02").attr('disabled', true);
        document.getElementById('Text_FormaPGTO_02').textContent = ("Formas de Pagamento Conferidas!");

    });


    $("#Alter_FormaPGTO_02").click(function () {
        $("#Text_FormaPGTO_02").attr('disabled', false);

    });


    $("#Conf_FormaPGTO_03").click(function () {
        $("#Text_FormaPGTO_03").attr('disabled', true);
        document.getElementById('Text_FormaPGTO_03').textContent = ("Formas de Pagamento Conferidas!");

    });


    $("#Alter_FormaPGTO_03").click(function () {
        $("#Text_FormaPGTO_03").attr('disabled', false);

    });


    $("#Conf_FormaPGTO_04").click(function () {
        $("#Text_FormaPGTO_04").attr('disabled', true);
        document.getElementById('Text_FormaPGTO_04').textContent = ("Formas de Pagamento Conferidas!");

    });


    $("#Alter_FormaPGTO_04").click(function () {
        $("#Text_FormaPGTO_04").attr('disabled', false);

    });






});





function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
    document.getElementById('uf').value = ("");
    document.getElementById('ibge').value = ("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value = (conteudo.logradouro);
        document.getElementById('bairro').value = (conteudo.bairro);
        document.getElementById('cidade').value = (conteudo.localidade);
        document.getElementById('uf').value = (conteudo.uf);
        document.getElementById('ibge').value = (conteudo.ibge);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value = "...";
            document.getElementById('bairro').value = "...";
            document.getElementById('cidade').value = "...";
            document.getElementById('uf').value = "...";
            document.getElementById('ibge').value = "...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }

};
