<?php

$nome = $_REQUEST['nome'];
$bebida = $_REQUEST['bebida'];
$data = $_REQUEST['data'];

$anoatual = date('Y');
$anonasci = date("Y", strtotime($data));
$idade = $anoatual - $anonasci;

if(empty($nome && $bebida && $data)){
    $dados = array(
        "tipo" => 'error',
        "mensagem" => 'campos vazios'
    );
}


 else {
    if($idade >= 18){
           $dados = array(
            "mensagem" => 'bem-vindo ' . $nome . ' sua bebida é ' . $bebida . ' sua idade é ' . $idade . ' voce é de maior'
        );
    } else{
        $dados = array(
            "mensagem" => 'bem-vindo ' . $nome . ' sua bebida é ' . $bebida . 'sua idade é ' . $idade . 'voce é de menor'
        )
    }


   echo json_encode($dados);
        
