<?php

    // Conectando ao servidor
    $conexao = mysqli_connect("localhost", "root", "");

    if($conexao){
        echo "Conexão realizada com sucesso.";
    } else {
        echo "Conexão falhou.";
    }

    //Conectando ao BD criado
    $db = mysqli_select_db($conexao, "meusite");

    if($db){
        echo "Banco selecionado com sucesso.";
    } else {
        echo "Banco de dados não selecionado.";
    }

/*    $query = mysqli_query(
        
        $conexao, "CREATE TABLE faleconosco
        (
        id int PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(100),
        email VARCHAR(200),
        telefone int,
        assunto VARCHAR(50),
        mensagem text
        )" 
    );*/

/*    $query = mysqli_query(
        
        $conexao, "INSERT INTO faleconosco
        (nome, email, telefone, assunto, mensagem
        ) VALUES (
        'Eduardo',
        'edu.pasilva@gmail.com',
        123456,
        'Envio Fale conosco',
        'Envio via site...'
        )"
 
    );*/

        $dados = mysqli_query(
        
        $conexao, "SELECT * FROM faleconosco"
        );

        while($tabela = mysqli_fetch_array($dados)){
            
            echo $tabela['nome']."<br>";
            echo $tabela['email']."<br>";
            echo $tabela['telefone']."<br>";
            echo $tabela['assunto']."<br>";
            echo $tabela['mensagem']."<br>";
            
        }
    



?>