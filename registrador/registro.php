<?php 
session_start();
include_once '../funcoes/conexao.php';
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);

//var_dump($_SESSION);
//var_dump($_POST);

if($btnCadUsuario){
	//include_once '../conexao.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array('',$dados)){
		$erro = true;
		$_SESSION['msg'] = "Necessário preencher todos os campos";
	}elseif((strlen($dados['senha'])) < 6){
		$erro = true;
		$_SESSION['msg'] = "A senha deve ter no minímo 6 caracteres";
	}elseif(stristr($dados['senha'], "'")) {
		$erro = true;
		$_SESSION['msg'] = "Caracter ( ' ) utilizado na senha é inválido";
	}else{
		//var_dump($dados);
		$result_usuario = "SELECT id FROM usuarios WHERE nick ='". $dados['nick'] ."'";
		//echo($result_usuario);
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Esse nick já consta no sistema!";
		}
	}
	
	
	//var_dump($dados);
	if(!$erro){
		$tipo = 'not';
		//var_dump($dados);
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
		$result_usuario = "INSERT INTO usuarios (nick, senha, tipo) VALUES ('" .$dados['nick']. "','" .$dados['senha']. "','$tipo')";
		$resultado_usario = mysqli_query($conn, $result_usuario);
		if(mysqli_insert_id($conn)){
			$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
			//header("Location: index.php");
		}else{
			$_SESSION['msg'] = "Erro ao cadastrar o usuário";
		}
	
	}
	
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Faça seu cadastro</title>
    

	</head>
	<body><center>
		<h2>Cadastro</h2>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?><p>
		<form method="POST" action="">
			<label>Nick</label>
			<input type="text" name="nick" placeholder="Digite seu Nick">
			
			<label>Senha</label>
			<input type="password" name="senha" placeholder="Digite uma senha"/>


		<br>	
			<input type="submit" name="btnCadUsuario" value="Cadastrar"><br>
			
			Lembrou? <a href="index.php">Clique aqui</a> para logar
		
		</form></center>
	</body>
	
</html>