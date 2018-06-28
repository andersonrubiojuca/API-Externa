<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header('Content-Type: application/json');
$dados = $_POST;

$url = 'https://freterapido.com/sandbox/api/external/embarcador/v1/quote-simulator';
$cnpj_remetente = '17.184.406/0001-74';
$token = '2ff525e2d71540700b7949a65491121c';
$codigo = '588604ab3';

$cep = $dados['cep'];

$volumes = $dados['items'];
$tvolume = strlen($volumes);
$volumes2 = substr($volumes,0, $tvolume-1);

$jsonEntrada = '{'
        . '"remetente": {'
        . '"cnpj": "17184406000174"'
        . '},'
        . ''
        . '"destinatario": {'
        . '"tipo_pessoa": "1",'
        . '"endereco": {'
        . '"cep": "'.$cep.'"'
        . '}'
        . '},'
        . '"volumes": ['
        . $volumes2.
        '],'
        . '"codigo_plataforma": "588604ab3",'
        . '"token": "2ff525e2d71540700b7949a65491121c"'
        . '}';


$contexto = stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type: application/json',
        'content' => $jsonEntrada
    )
));

$resultado = json_decode(file_get_contents($url, FALSE, $contexto), TRUE);

echo '{'
        . '"transportadoras": [';

$contagem = count($resultado['transportadoras']);

for($i = 0; $i < $contagem; $i++){
    echo '{'
            . '"nome": "' . $resultado['transportadoras'][$i]['nome'].'",'
            .'"servico": "' . $resultado['transportadoras'][$i]['servico']. '",'
            .'"prazo_entrega": "' . $resultado['transportadoras'][$i]['prazo_entrega']. '",'
            .'"preco_frete": "' . $resultado['transportadoras'][$i]['preco_frete']. '"';
    
            if ($i == ($contagem - 1)) {
        echo '}';
    } else{
        echo'},';
    }
    
}

echo ']'
        . '}';