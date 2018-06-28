<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ 
$cnpj = $_GET['cnpj'];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../javascript/jquery.min.js" type="text/javascript"></script>
        <title>Pesquisando</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                Seu CNPJ é <?= $cnpj?>
            </div>
        </div>
    </body>
</html>
