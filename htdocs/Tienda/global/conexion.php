<?php
class Database{
private $host;
private $db;
private $user;
private $password;
private $charset;
    public function __construct(){
    $this->host = 'localhost';
    $this->db = 'tienda';
    $this->user = 'root'; //Normalmente el usuario es root, pero si tienes otro usuario para la DB, lo puedes poner ahí, solo cambias el root por el usuario que tengas.
    $this->password = ''; //si tienes una contraseña para la DB, la puedes poner ahí, si no lo puedes dejar sin nada.
    $this->charset = 'utf8mb4';
}
function connect(){
    try{
    $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $pdo = new PDO($connection, $this->user, $this->password, $options);
    return $pdo;

    }catch(PDOException $e){
    print_r('Error connection: ' . $e->getMessage());
}
}
}
?>
