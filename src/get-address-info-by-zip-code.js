$('#cep').mask('00000-000');

function limpa_formulário_cep() {
    // Limpa valores do formulário de cep.
    $("#rua").val("");
    $("#complemento").val("");
    $("#bairro").val("");
    $("#cidade").val("");
    $("#estado").val("");
    $("#numero").val("");
}

//Quando o campo cep perde o foco.
$("#cep").blur(function() {

    //deixa cep somente com digitos
    var cep = $(this).val().replace(/\D/g, '');

    //Se cep for vazio
    if (cep == "") {
        limpa_formulário_cep();
        return false;
    }

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Se formato do cep for inválido
    if(!validacep.test(cep)) {
        limpa_formulário_cep();
        swal({
            title: "",
            text: "Formato de CEP inválido.",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ok",
        });
        return false;
    }

    //Preenche os campos com "..." enquanto consulta webservice.
    $("#rua").val("...");
    $("#bairro").val("...");
    $("#cidade").val("...");
    $("#estado").val("...");

    //Consulta o webservice viacep.com.br/
    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

        //caso o cep não seja encontrado
        if ("erro" in dados) {
            limpa_formulário_cep();
            swal({
                title: "",
                text: "CEP não encontrado.",
                type: "warning",
                showCancelButton: false,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "ok",
            });
            return false;
        }
        
        //Atualiza os campos com os valores da consulta.
        $("#rua").val(dados.logradouro);
        $("#bairro").val(dados.bairro);
        $("#cidade").val(dados.localidade);
        $("#estado").val(dados.uf);
    });
        
});