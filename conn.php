<!-- @format -->
<?php
$servidor = "sql211.epizy.com";
$banco = "epiz_32210362_ProspCyn";
$usuario = "epiz_32210362";
$senha = "i9QDox2VNbrNe0";

$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conn){
    die("Conexão falou: ". mysqli_connect_error());
}
?>