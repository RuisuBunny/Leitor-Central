<?php
session_start();
$_SESSION['projeto'] = 'yuru_camp';
include_once('../../../funcoes/conexao.php');
$pg = $_GET['pg'];
//var_dump($_SESSION);


if($pg == 'cadastrarcap'){?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Upload capitulo <?php echo $_SESSION['projeto'];?></title>
	</head>
	<body>

		<form enctype="multipart/form-data" method="POST" action="yuru_camp.php?pg=cadastrando">
			<label>Número do capitulo: </label>
			<input type="text" name="capitulo"><br><br>	
			<label>Volume do capitulo: </label>
			<input type="text" name="volume"><br><br>	
			<input type="file" name="arquivo[]" multiple="multiple" /><br><br>
			<input name="enviar" type="submit" value="Enviar">
	
		</form>
	
	</body>
</html>
<?php
}
if($pg == 'cadastrando'){
    $projeto = $_SESSION['projeto'];
	$capitulo = $_POST['capitulo'];
	$volume = $_POST['volume'];
    $_UP['pasta'] = $capitulo.'/';
    mkdir($_UP['pasta'], 0777);
	$diretorio = $capitulo.'/';
	
	$result = "INSERT INTO capitulos ( projeto, volume, numero, link) VALUES('yurucamp', $volume, $capitulo, 'projetos/yuru_camp/$diretorio')";
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
echo "<a href='../painel.php'>Voltar</a></br></br>";
}
if($pg == 'apagarcap'){ 
	echo'ainda falta fazer!!';
}


?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Painel <?php echo $_SESSION['projeto'];?></title>
	</head>
	<body>
		<?php
			echo "<a href='yuru_camp.php?pg=cadastrarcap'>Cadastrar novo capitulo</a></br></br>";
			echo "<a href='yuru_camp.php?pg=apagarcap'>Apagar capitulo</a></br></br>";
			echo "<a href='../../painel.php'>Voltar</a></br></br>";
		?>
	</body>
</html>





