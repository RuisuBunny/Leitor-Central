<?php
session_start();
chdir('testeleitor/');
//o local será trazido por meio da sessão
//chdir("session['local']");
$arquivos = glob("{*.png,*.jpg,*.jpeg,*.bmp,*.gif}", GLOB_BRACE);?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Projeto x cap x</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</head>

<body class='bg-secondary'>
    <center>

        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img class="img-thumbnail" src="src/projetos/peerless_dad/capa_peerless.jpg" width="120" height="150"
                    alt="">
            </a>
            <div class="mx-auto form-group col-md-4">
                <label for="inputState">Capitulo</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </nav>


        <div class='container'>


            <ul class="list-group"><?php
foreach($arquivos as $img) echo "<li class='list-group-item'><canvas class='img-fluid' src='testeleitor/".$img."'></canvas></li>";
?>
            </ul>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    </center>
</body>

</html>