<?php
session_start();
include("conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);


if($btnLogin){
	$nick = filter_input(INPUT_POST, 'nick', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    
    if((!empty($nick)) AND (!empty($senha))){
		$result_usuario = "SELECT * FROM usuarios WHERE nick = '$nick' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
            ob_start();
            var_dump($row_usuario);
			echo($senha.'<br>');
			//echo($row_usuario['senha'].'<br>');			
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['nick'] = $row_usuario['nick'];
                $_SESSION['tipo'] = $row_usuario['tipo'];
                echo($_SESSION);


                //isso precisa mudar para permitir acessos a todos


                if($_SESSION['tipo'] == '00'){
                    header("Location:../scanlator/painel.php");
                }else{
                    header("Location:../scanlator/blog.php");
                }                
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				//header("Location: ../scanlator/login.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Você precisar inserir os dados de login!";
		//header("Location: ../scanlator/login.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	//header("Location: ../scanlator/login.php");
}
ob_end_flush();

