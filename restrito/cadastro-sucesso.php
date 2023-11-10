<?php
    include_once("validador.php");
    require_once("../model/Aluno.php");
    require_once("../controller/AlunoController.php");

    $aluno = new Aluno();
    $alunoControl = new AlunoController();

    $aluno->setNome($_POST['txtNome']);
    $aluno->setRg($_POST['txtRG']);
    $aluno->setTurma($_POST['slTurma']);

    if($alunoControl->validaCpf($_POST['txtCPF'])){
        $aluno->setCpf($_POST['txtCPF']);
    }else{
        header('Location: ./cpf-invalido.php');
    }

	date_default_timezone_set('America/Sao_Paulo');

    $data = date('d/m/y');
    $horario = date('G:i:s');
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SA - Cadastro Sucedido</title>
        <link rel="stylesheet" href="../css/reset.css">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link href="../css/estilo.css" rel="stylesheet">
        <link rel="icon" href="../images/icon.ico">
        <style>

            /*
                exibe confetes quando o cadastro é realizado
            */
            .overlay {
                position: absolute;
                background: url("../images/confetti.gif");
                background-size: cover;
                width: 100%;
                height: 100%;
                animation-name: confete;
                animation-duration: 4s;
                animation-fill-mode: forwards;
            }

            @keyframes confete {
                0%{
                    opacity: 0;
                }
                10%{
                    opacity:1;
                }
                100%{
                    opacity: 0;
                }
            }

        </style>

    </head>

    <body>

        <div class="overlay">
        </div>
        <div class="container-fluid" id="conteudo">
            <div class="tela-login border container mx-auto p-4">
                <div class="row">
                    <img src="../images/logo-sa.jpg" id="imagem" class="mx-auto">
                </div>
                <hr>
                <div>
                    <h4 class="text-center">Aluno cadastrado com sucesso!</h4>
                    <br>
                    <?php
                        echo('
                            <h5>Dados do aluno:</h5>
                            <p>Nome: '.$aluno->getNome().'</p>
                            <p>CPF: '.$aluno->getCpf().'</p>
                            <p>RG: '.$aluno->getRg().'</p>
                            <p>Turma: '.$aluno->getTurma().'</p>
                            <p>O aluno(a) '.$aluno->getNome().' foi cadastrado(a) às '.$horario.' do dia '.$data.'</p>
                        ');
                    ?>
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
        </div>
        <footer>
            <p>Sistema Acadêmico - © 2022  -  Todos os direitos reservados</p>
        </footer>

        <script src="../js/bootstrap.bundle.min.js"></script>
    </body>

</html>