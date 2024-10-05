<?php
    require_once("conexao.php");

    $con = new database();
    $link = $con->getConexao();

    $smtm = $link -> prepare("select * from contas");
    $smtm ->execute();

    $data = $smtm->fetchAll();

    print_r($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


    <!--Estilo Css-->
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <header>
        <a href="" id="icone"><i>Icone</i></a>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Historia</a></li>
            <li><a href="">Contato</a></li>
            <button class="btn">Login</button>
        </ul>
    </header>

    <DIV class="container">
        <button class="btn " id="close"><ion-icon name="close-circle-outline" ></ion-icon></button>
        <form action="conexao.php" class="box" method="post">
            
            <h1>Login</h1>
            <div class="input-box">
                <input type="text"  placeholder="Username"required>
            </div>
            <div class="input-box">
                <input type="text"  placeholder="Password"required>
            </div>
            <div class="esqueceuSenha">
                <label for=""><a href="">Lembrar de mim</a></label>
                <input type="checkbox">
            </div>
            <button class="button">Log in</button>
            <div class="registrar">
                <p> <a>Registre-se</a></p>
            </div>
        </form>
        
    </DIV>























<script src="script.js"></script>

<!--IONICS-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!--BOOTSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>
</html>