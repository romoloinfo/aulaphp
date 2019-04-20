<?php

$nome = $_GET['nome'];
$datadenascimento = $_GET['datadenascimento'];
$salario = $_GET['salario'];
$id = $_GET['id'];

$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
$user = 'root'; //mysql usuario=root
$password = '';//sem senha
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

$sql=
$count = $dbh->exec("update exemplo1 set
                nome='$nome',   
                datadenascimento='$datadenascimento' ,
                salario='$salario'
                where id=$id ");

echo "<p>$count registro foi alterado</p>";

echo "<br><br><a href=index.php>Voltar</a>  ";
?>

