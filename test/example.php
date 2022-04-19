<html>

<head>
    <title></title>
    <link href="../css/sweetalert.css" rel="stylesheet">
    <script src="../js/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row col-md-6">
            <div class="form-group col-md-12">
                <label class="control-label">CEP</label>
                <input type="tel" required="required" class="form-control" id="cep" name="cep" />
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Endereço</label>
                <input type="text" required="required" class="form-control" id="rua" name="rua" />
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Nº</label>
                <input type="text" required="required" class="form-control" id="numero" name="numero" maxlength="4" />
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Bairro</label>
                <input type="text" required="required" class="form-control" id="bairro" name="bairro" />
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Cidade</label>
                <input type="text" required="required" class="form-control" id="cidade" name="cidade" />
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Estado</label>
                <input type="text" required="required" class="form-control" id="estado" name="estado" />
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" />
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/jquery.mask.js"></script>
<script src="../src/get-address-info-by-zip-code.js"></script>