<?php

    $nome = $_REQUEST['nome'];
    $idade = $_REQUEST['idade'];
    $bebida = $_REQUEST['bebida'];

    if(empty($nome)empty($idade)empty($bebida)){
        
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'There are unfilled fields.'
        );
    
    } else {

        switch(){
            case '1' : $dados = array(
                "tipo" => 'pincher.jpg',
                "mensagem" => 'Hello'.$nome.', we know that your favorite animal is a dog'
            );
            break;
            case '2' : $dados = array(
                "tipo" => 'picapau.jpg',
                "mensagem" => 'Hello '.$nome.', we know that your favorite animal is a bird'
            );
            break;
            case '3' : $dados = array(
                "tipo" => 'mbappe.jpg',
                "mensagem" => 'Hello '.$nome.', we know that your favorite animal is a turtle'
            );
            break;
        }

    }

    echo json_encode($dados); 