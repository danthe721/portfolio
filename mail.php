<?php

    if($_SERVER['REQUEST_METHOD'] != 'POST' ){
        header("location: index.html" );
    }
    /*
    if( ! isset($_POST['name'] ) ){
        header("location: index.html" );
    }
    */
    $name = $_POST['name'];
    $email = $_POST['email'];
    $idea = $_POST['idea'];
    //REMITENTE (NOMBRE/APELLIDO -EMAIL)
    //ASUNTO 
    //CUERPO
    $rta = mail('hdge2001@gmail.com', "cliente: $name email: $email", $idea);
    var_dump($rta);