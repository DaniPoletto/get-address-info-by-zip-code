<html>

<head>
    <title></title>
    <link href="css/sweetalert.css" rel="stylesheet">
    <script src="js/sweetalert.min.js"></script>
</head>

<body>
    <div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="control-label">CEP</label>
                <input type="tel" required="required" class="form-control" id="cep" name="cep" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label class="control-label">Endereço</label>
                <input type="text" required="required" class="form-control" id="rua" name="rua" />
            </div>
            <div class="form-group col-md-2">
                <label class="control-label">Nº</label>
                <input type="text" required="required" class="form-control" id="numero" name="numero" maxlength="4" />
            </div>
            <div class="form-group col-md-4">
                <label class="control-label">Bairro</label>
                <input type="text" required="required" class="form-control" id="bairro" name="bairro" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label class="control-label">Cidade</label>
                <input type="text" required="required" class="form-control" id="cidade" name="cidade" />
            </div>
            <div class="form-group col-md-1">
                <label class="control-label">Estado</label>
                <input type="text" required="required" class="form-control" id="estado" name="estado" />
            </div>
            <div class="form-group col-md-5">
                <label class="control-label">Complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" />
            </div>
        </div>
    </div>
</body>

</html>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/get-address-info-by-zip-code.js"></script>