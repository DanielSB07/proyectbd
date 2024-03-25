<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=proyecto','root','1234');
    $pdo->query("INSERT INTO usuario(usuario_nombre,usuario_apellido,usuario_correo)
    VALUES('Daniel','Becerra','xd')");
    
    

