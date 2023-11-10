<?php include_once('validador.php') ?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SA - Cadastro de Alunos</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="../css/estilo.css" rel="stylesheet">
    <link rel="icon" href="../images/icon.ico">
</head>

<body>
    <div class="tela-login border container mx-auto p-4">
        <div class="row">
            <img src="../images/logo-sa.jpg" id="imagem" class="mx-auto">
        </div>
        <hr>
        <div>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">ERRO NO CADASTRO</h4>
            <hr>
            <p>O CPF inserido é inválido.</p>
        </div>
            <hr>
            <div class="row">
                <div class="d-grid col-4 mx-auto">
                    <a href="../logout.php" class="btn botao">Sair</a>
                </div>
                <div class="d-grid col-6 mx-auto">
                    <a href="cadastro.php" class="btn botao">Voltar ao cadastro</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>Sistema Acadêmico - 2022 - Todos os direitos reservados</p>
    </footer>


    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/mascara.js"></script>
</body>

</html>