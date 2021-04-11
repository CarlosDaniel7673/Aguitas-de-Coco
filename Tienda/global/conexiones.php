<?php
$servidor="mysql_connect:bdname=".bd."host=".servidor;

try{
    $pdo= new PDO($servidor,usuario,password,
                array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
            );
    echo "<script>alert('Conectado...')</script>"; 
}catch(PDOException $e){

    echo "<script>alert('Error...')</script>";
}

?>