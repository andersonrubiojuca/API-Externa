<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="javascript/jquery.min.js" type="text/javascript"></script>
        <script src="javascript/index.js" type="text/javascript"></script>
        <title>Pesquisar CNPJ</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    <h1>Consulte o CNPJ</h1>
                </div>
                    
            </div>
            <div class="row">
                <form method="GET" action="php/dados_do_cnpj.php" class="col-lg-6 rota1">
                    <fieldset>
                        <legend><b>Dados do CNPJ</b></legend>
                        <label>CNPJ</label>
                        <input type="text" name="cnpj" id="cnpj" placeholder="Apenas números!">
                        <button type="submit" class="btn btn-primary">
                            Consultar
                        </button>
                    </fieldset>
                </form>
                <form method="POST" action="php/frete.php" class="col-lg-6 rota2">
                    <fieldset>
                        <legend><b>Calcule o frete</b></legend>
                        <p><label>CEP</label>
                            <input type="text" name="cep" id="cep"></p>
                        <h3>Volumes</h3>
                        <p><label>Tipo</label>
                            <input type="text" name="tipo" id="tipo"></p>
                        <p><label>Quantidade</label>
                            <input type="text" name="quantidade" id="quantidade"></p>
                        <p><label>Peso</label>
                            <input type="text" name="peso" id="peso"></p>
                        <p><label>Valor</label>
                            <input type="text" name="valor" id="valor"></p>
                        <p><label>Sku</label>
                            <input type="text" name="sku" id="sku"></p>
                        <p><label>Altura</label>
                            <input type="text" name="altura" id="altura"></p>
                        <p><label>Largura</label>
                            <input type="text" name="largura" id="largura"></p>
                        <p><label>Comprimento</label>
                            <input type="text" name="comprimento" id="comprimento"></p>
                        <p>
                            <input type="hidden" name="items" id="items">
                            <button type="button" class="btn btn-primary" 
                                    onclick="adicionar()">Adicionar Volume</button>
                            <button type="submit" class="btn btn-primary">
                            Calcular
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>
