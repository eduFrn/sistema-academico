<?php
    session_start();
    unset($_SESSION['login-sessao']);
    unset($_SESSION['senha-sessao']);
    session_destroy();

    //toda vez que o usuário ir para a index, a sessão é automaticamente finalizada, e ele não consegue pular páginas.

?>

<!doctype html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SA - Login</title>
        <link rel="stylesheet" href="css/reset.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link href="css/estilo.css" rel="stylesheet">
        <link rel="icon" href="images/icon.ico">

        <style>

            /*
                realiza uma animação na div .tela-login
                fazendo ela descer até o centro da página
            
            */
            .tela-login{
                animation: descer;
                animation-duration: 1.9s;
                animation-fill-mode: forwards;
                animation-delay: 0s;
            }
            @keyframes descer{
                from{
                    top:-150%; 
                    opacity: 0;
                }
                50%{
                    opacity: 0.6;
                }
                100%{
                    opacity: 1;
                }

                to{
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }
            }
        </style>

    </head>
    <body>
        <div class="container-fluid" id="conteudo">
            <div class="tela-login border border-3 mx-auto p-4">
                <div class="row">
                    <img src="images/logo-sa.jpg" id="imagem" class="mx-auto">
                </div>
                <hr>
                <div class="row">
                    <form action="autentica-academico.php" method="post">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="text" name="txtLogin" class="form-control" placeholder="Login" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" name="txtSenha" class="form-control" placeholder="Senha" required>
                        </div>
                        <hr>
                        <div class="d-grid col-6 mx-auto">
                            <input class="btn botao" type="submit" value="ACESSAR">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <p>Sistema Acadêmico - © 2022  -  Todos os direitos reservados</p>
        </footer>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

</html>