<?php 
//Diretório/pasta dos arquivos
$filepath = __DIR__."/apesc.xlsx";
$filepath = explode("\\", $filepath);
$filepath = implode("/", $filepath);
//Diretório/pasta dos arquivos

//verificando os arquivos da pasta e identificando o banco de dados
$query = "LOAD DATA LOCAL INFILE '{$filepath}' INTO TABLE APESC";
$query = "FIELDS TERMINATED BY ';' OPTIONALLY ENCLOSED BY ' " . ' " ' . " ' LINES TERMINATED BY '\n' ";
//Diretório/pasta dos arquivos

$pdo = new PDO("mysql:host=localhost", "root", "", [
    PDO::MYSQL_ATTR_LOCAL_INFILE => true
]);

$resultado = $pdo->prepare($query);
$resultado->execute();
?>
