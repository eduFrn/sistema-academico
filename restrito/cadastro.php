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
        <div class="container-fluid" id="conteudo">
            <div class="tela-login border border-3 mx-auto p-4">
                <div class="row">
                    <img src="../images/logo-sa.jpg" id="imagem" class="mx-auto">
                </div>
                <hr>
                <div class="row">
                    <form action="cadastro-sucesso.php" method="post">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="text" name="txtNome" id="txtNome" class="form-control" placeholder="Nome" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                            <input type="text" name="txtCPF" id="txtCPF" class="form-control" oninput="mascara(this)" placeholder="CPF" maxlength="14" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                            <input type="text" name="txtRG" id="txtRG" class="form-control" placeholder="RG" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-people-fill"></i></span>
                            <select class="form-select" name="slTurma" id="slTurma" required>
                                <option value="1">1º A</option>
                                <option value="2">1º B</option>
                                <option value="3">2º A</option>
                                <option value="4">3º A</option>
                            </select>
                        </div>
                        <br>
                        <div class="d-grid col-6 mx-auto">
                            <input class="btn botao" type="submit" value="CADASTRAR">
                        </div>
                    </form>
                </div>
                <hr>
                <div class="row">
                    <div class="d-grid col-6 mx-auto">
                        <a href="../logout.php" class="btn botao">SAIR</a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p>Sistema Acadêmico - 2022  -  Todos os direitos reservados</p>
        </footer>

        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/mascara.js"></script>
    </body>
</html>