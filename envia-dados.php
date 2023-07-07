<!doctype html>
<html lang="pt-br"> 
<head> 

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
  <title>Zuchetti - Desafios</title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="shortcut icon" href="img/icon.jpeg">
  <meta http-equiv="refresh" content="0; calc-media.html">

</head>

  <br>
  <br>
  <br>
  <br>
  <br> 
  <br>
  <br>
   
<?php
    $hostname = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "calc_media2";

    $conn = mysqli_connect($hostname, $username, $password) or die("html>script language='JavaScript'>alert('Unable to connect to the database! Please try again later.'),history.go(-1)/script>/html>");
    mysqli_select_db($conn, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    echo "Conexão bem-sucedida" . "<br/>";

        $media = $_POST['media'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];
        $nota5 = $_POST['nota5'];
        $situacao = $_POST['situacao'];
        $nome = $_POST['nome'];

        $media = $media;
        $nota1 = $nota1;
        $nota2 = $nota2;
        $nota3 = $nota3;
        $nota4 = $nota4;
        $nota5 = $nota5;
        $situacao = $situacao;
        $nome = $nome;

        $sql = "INSERT INTO notas_alunos (ID_ALUNO, ALUNO, NOTA01, NOTA02, NOTA03, NOTA04, NOTA05, MEDIA, SITUACAO)VALUES (NULL, '$nome', '$nota1', '$nota2', '$nota3', '$nota4', '$nota5', '$media', '$situacao')";


    if ($conn->query($sql) === true) {
        echo "Dados inseridos com sucesso <br/>";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }

    $conn->close();

?>

</html>