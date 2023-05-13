<?php 
$pwd = "SDTxZtw4ZdYCr9qiuOK7"; $user = "root"; $db_name = "railway";
$port = '7433';

try {
    $database = new PDO ("mysql://root:SDTxZtw4ZdYCr9qiuOK7@containers-us-west-74.railway.app:7433/railway:chartset=UTF-8");
    $database->exec("SET CHARACTER SET utf8");
    // $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un problema con la conexion: ".$e->getMessage();
}
?>

<!-- $database = new PDO ('mysql:host=containers-us-west-74.railway.app;por=7433;dbname='.$db_name, $user,$pwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); -->