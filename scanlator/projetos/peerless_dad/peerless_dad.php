<?php
session_start();
$_SESSION['projeto'] = 'peerless_dad';
include_once('../../../funcoes/conexao.php');
$pg = $_GET['pg'];
//var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
     <div class='jumbotron  container'>
        <h1>Peerless Dad</h1>
        </br>
        <a class="text-decoration-none text-reset" href="?pg=cadastrarcap"><button type="button"
                class="btn btn-primary">Adicionar Capítulo</button></a>
        <a class="text-decoration-none text-reset" href="?pg=apagarcap"><button type="button"
                class="btn btn-primary">Remover Capítulo</button></a>
        <a class="text-decoration-none text-reset" href="?pg=editcap"><button type="button" class="btn btn-primary">Editar
                Capítulo</button></a>
        <a class="text-decoration-none text-reset" href="../../painel.php"><button type="button" class="btn btn-danger">
                Voltar</button></a>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>


</body>

<?php
if($pg == 'cadastrarcap'){?>
    <div class="content-fluid jumbotron">
        <form enctype="multipart/form-data" method="POST" action="peerless_dad.php?pg=cadastrando">
            <label>Número do capitulo: </label>
            <input type="text" name="capitulo"><br><br>
            <label>Volume do capitulo: </label>
            <input type="text" name="volume"><br><br>
            <input type="file" name="arquivo[]" multiple="multiple" /><br><br>
            <input name="enviar" type="submit" value="Enviar">

        </form>
    </div>
</center>
<?php
}
if($pg == 'cadastrando'){
    $projeto = $_SESSION['projeto'];
	$capitulo = $_POST['capitulo'];
	$volume = $_POST['volume'];
    $_UP['pasta'] = $capitulo.'/';
    mkdir($_UP['pasta'], 0777);
	$diretorio = $capitulo.'/';
	
	$result = "INSERT INTO capitulos ( projeto, volume, numero, link) VALUES('peerless', $volume, $capitulo, 'projetos/peerless_dad/.$diretorio)";

	if($resultado = mysqli_query($conn, $result)){
		echo 'Capitulo cadastrado no banco de dados';
	};
	

	if(!is_dir($diretorio)){ 
        echo "Pasta $diretorio nao existe";
    }else{
        $arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
        for ($controle = 0; $controle < count($arquivo['name']); $controle++){
            
            $destino = $diretorio."/".$arquivo['name'][$controle];
            if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
                echo "Upload realizado com sucesso<br>"; 
            }else{
                echo "Erro ao realizar upload";
            }      
        }
    }
echo "<a href='index.php'>Voltar</a></br></br>";
}
if($pg == 'apagarcap'){ 
    echo"<div class='content-fluid jumbotron'>";
    echo('ainda falta fazer!!');
    echo'</div>';
    echo'</center>';
}
if($pg == 'editcap'){ 
    echo"<div class='content-fluid jumbotron'>";
    echo('ainda falta fazer!!');
    echo'</div>';
    echo'</center>';
}