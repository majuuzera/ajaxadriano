<?php

    $nome = $_REQUEST['nome'];
    $animal = $_REQUEST['animal'];

    if(empty($nome)){
        
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'There are unfilled fields.'
        );
    
    } else {

        switch($animal){
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