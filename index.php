<?php
   include("back-end/Connections/conexao.php");

   $nome_user = "Fabiano";
   $telefone_user = "(47)999999-5555";

   $insert = $conn->prepare(
        "INSERT INTO users (nome_user, telefone_user, status_user)
        VALUES (:nome_user,:telefone_user,:status_user)
        "
    );
    $insert->bindValue(":nome_user", $nome_user);
    $insert->bindValue(":telefone_user", $telefone_user);
    $insert->bindValue(":status_user", 1);

    echo $insert->execute();




?>