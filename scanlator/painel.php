<?php 
session_start();
include_once('../funcoes/conexao.php');
/*if(!$_SESSION['id']){
    $_SESSION['msg'] = "Sessão expirada";
	header("Location: ../scanlator/login.php");
}*/
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

    <div class="wrapper">

        <nav id="sidebar">

            <div class="sidebar-header col">
                <h3>Painel Joker</h3>
                <a class="text-decoration-none text-reset" href="../index.php"><button type="button"
                        class="btn btn-danger col">
                        Sair</button></a><br>
            </div>
            <ul class="list-unstyled components">

                <p>Acesso Nivel 2</p>
                <li>
                    <a href="?pg=nvprj">Projetos</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Cadastrar</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="?pg=nvprj">Novo Projeto</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Postar</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Postar Lançamento</a>
                        </li>
                        <li>
                            <a href="#">Postar Aviso</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#desesTressar" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Desestressar</a>
                    <ul class="collapse list-unstyled" id="desesTressar">
                        <li>
                            <a href="#">Xingar o Matsu</a>
                        </li>
                        <li>
                            <a href="#">Ver Foto de Deus</a>
                        </li>
                    </ul>
                </li>
                <li>

                </li>

            </ul>
        </nav>

        <?php
          //pegar 

        ?>


        <div id="content">

            <h2>Projetos:</h2>
            <div class="card" style="width: 18rem;">
                <img src="projetos/peerless_dad/capa_peerless.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Peerless Dad</h5>
                    <a href="projetos/peerless_dad/peerless_dad.php" class="btn btn-primary">Editar Projeto</a>
                </div>


            </div>





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

        <script>
        $(document).ready(function() {
            $("#sidebarCollapse").on('click', function() {
                $("#sidebar").toggleClass('active')
            });
        });
        </script>
</body>

</html>