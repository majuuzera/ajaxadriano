<?php

$nome = $_REQUEST['nome'];
$bebida = $_REQUEST['bebida'];
$data = $_REQUEST['data'];

$anoatual = date('Y');
$anonasci = date("Y", strtotime($data));
$idade = $anoatual - $anonasci;

if(empty($nome && $bebida && $data)){​​    
    $dados = array(        
        "tipo" => 'error',        
        "mensagem" => 'campos não definidos.'    
    );
}​​

 else {    
    if($idade >= 18){        
        $dados = array(            
            "mensagem" =>  'olá ' . $nome . ' sua bebida favorita é ' .$bebida . '<br> Sua idade é ' . $idade . ', portanto você é de maior '        
        );    }
        else {        
            $dados = array(            
                "mensagem" =>  'olá ' . $nome . ' sua bebida favorita é ' .$bebida . '. Sua idade é ' . $idade. ', portanto você é de menor '        
            );    
        }           }
        
        echo json_encode($dados);

