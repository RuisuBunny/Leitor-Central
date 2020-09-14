<?php 
session_start();
include_once('../funcoes/conexao.php');
if(!$_SESSION['id']){
    $_SESSION['msg'] = "Sessão expirada";
	header("Location: ../scanlator/login.php");
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogg Joker</title>
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
                <h3>Moderação Joker</h3>
                <button type="button " id="sidebarCollapse" class="btn btn-danger col " href="#">
                    Sair
                </button><br>
            </div>
            <ul class="list-unstyled components">

                <p>Acesso nivel 1</p>
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
                            <a href="#">Ver Foto de Deus</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="painel.php">Administração</a>
                </li>

            </ul>
        </nav>

        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-ligth">






                <div class="position-relative float-left">

                </div>


            </nav>

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