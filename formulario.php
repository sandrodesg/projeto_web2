<!DOCTYPE html>
<html lang="pt-br">
	<title>sandrowebdesigner</title>
	<head>
	<body>
<?php
$nome =     $_POST['nome'];
$telefone = $_POST['telefone'];
$email =    $_POST['email'];
$mesagem =  $_POST['mesagem'];
?>

<?php
 $to = "sandrogomesyohan@gmail.com"
 $message = 
  "<h4>Nome:</h4> $nome <br>
  <h4>Telefone:</h4> $telefone <br>
  <h4>Email:</h4> $email <br>
  <h4>Mensagem</h4> $mensagem <br>";	
  $header = "MINE-version:1.0\n";
  $header = "Content-type: text/html;charset-iso-8859-1\n";
  $header = "From:$email\n";
  mail($to,$message,$header);
  echo "Mensagem enviada com sucesso"
?>

	</body>
</html>