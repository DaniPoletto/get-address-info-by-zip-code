<html>

<head>
    <title></title>
</head>

<body>

    <label for="cep">CEP</label>
    <input type="text" id="cep">
    <button onclick="BuscaCEP()">Pesquisar</button>
    <div>
        <span id="info"></span>
    </div>
</body>

</html>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/jquery.mask.js"></script>
<script>
    $('#cep').mask('00000-000');

    function BuscaCEP() {
        //Nova variável "cep" somente com dígitos.
        var cep = $("#cep").val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        $("#info").text(
                            dados.logradouro + " , " +
                            dados.bairro + " , " +
                            dados.localidade + " , " +
                            dados.uf
                        );
                    } else {
                        //CEP pesquisado não foi encontrado.
                        $("#info").text(
                            "CEP não encontrado!"
                        );
                    }
                });
            } else {
                //cep é inválido.
                $("#info").text(
                    "CEP com formato inválido!"
                );
            }
        } else {
            //cep sem valor, limpa formulário.
            $("#info").text(
                "Digite o CEP, por favor!"
            );
        }
    }
</script>