<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ 
header('Content-Type: application/json');

$jsonEntrada = json_decode(file_get_contents("https://www.receitaws.com.br/v1/cnpj/" . $_GET['cnpj']), TRUE);

$cnpj = $jsonEntrada['cnpj'];
$atualizacao = $jsonEntrada['ultima_atualizacao'];
$abertura = $jsonEntrada['abertura'];
$nome = $jsonEntrada['nome'];
$fantasia = $jsonEntrada['fantasia'];
$status = $jsonEntrada['status'];
$tipo = $jsonEntrada['tipo'];
$situacao = $jsonEntrada['situacao'];
$capitalsocial = $jsonEntrada['capital_social'];

$bairro = $jsonEntrada['bairro'];
$logradouro = $jsonEntrada['logradouro'];
$numero = $jsonEntrada['numero'];
$cep = $jsonEntrada['cep'];
$municipio = $jsonEntrada['municipio'];
$uf = $jsonEntrada['uf'];
$complemento = $jsonEntrada['complemento'];

$telefone = $jsonEntrada['telefone'];
$email = $jsonEntrada['email'];

$atividade = $jsonEntrada['atividade_principal']['0']['text'];
$code = $jsonEntrada['atividade_principal']['0']['code'];

$jsonSaida =  '{'
        . '"empresa": {'
        . '"cnpj": "' . $cnpj . '",'
        . '"ultima_atualizacao": "' . $atualizacao . '",'
        . '"abertura" : "' . $abertura . '",'
        . '"nome": "' . $nome . '",'
        . '"fantasia": "' . $fantasia . '",'
        . '"status": "' . $status . '",'
        . '"tipo": "' . $tipo . '",'
        . '"situacao": "' . $situacao . '",'
        . '"capital_social": "' . $capitalsocial . '",'
        . '"endereco": {'
        . '"bairro": "' . $bairro . '",'
        . '"logradouro": "' . $logradouro . '",'
        . '"numero": "' . $numero . '",'
        . '"cep": "' . $cep . '",'
        . '"municipio": "' . $municipio . '",'
        . '"uf": "' . $uf . '",'
        . '"complemento": "' . $complemento . '"'
        . '},'
        .'"contato": {'
        .'"telefone": "' . $telefone . '",'
        .'"email": "' . $email . '"'
        .'},'
        . '"atividade_principal": ['
        . '{'
        . '"text" :"' . $atividade . '",'
        . '"code" :"' . $code . '"'
        . '}'
        . ']'
        . '}'
        . '}';

echo $jsonSaida;