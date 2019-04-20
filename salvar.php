<?php

$nome = $_GET['nome1'];
$datadenascimento = $_GET['datadenascimento1'];
$salario = $_GET['salario1'];

$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
$user = 'root'; //mysql usuario=root
$password = '';//sem senha
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$count = $dbh->exec("insert into exemplo1(nome, datadenascimento ,salario) 
                values('$nome', '$datadenascimento', '$salario') ");

echo "<p>$count registro foi incluído</p>";

echo "<br><br><a href=index.php>Voltar</a>  ";
?>

