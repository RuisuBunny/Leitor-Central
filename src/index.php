<?php 
error_reporting(0);
session_start();
include_once('conexao.php');

?>
<html>
<head>
        <title>Painel de Projetos</title>
        <meta charset="utf-8"/>
</head>
<body>
    
    <label for="projeto">Projetos:</label></br>
    <?php
	    echo "<a href='projetos/peerless_dad/index.php'>Peerles Dad</a></br>";
		echo "<a href='projetos/yuru_camp/index.php''>Yuru Camp</a></br></br>";
		echo "<a href='../../index.php'>Voltar</a></br></br>";
	?>
       
</body>
</html>
<?php

