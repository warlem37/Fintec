<?php
    if(isset($_POST['submit'])){
        //print_r('Username: '. $_POST['username']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Password: ' . $_POST['password']);
        //print_r('<br>');
        //print_r('Confirmpassword: ' . $_POST['Confirmpassword']);

        include_once('config.php');

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST[''];
        $confirmpassword = $_POST[''];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(username,email,senha,confirmsenha) Values('$username','$email','$password','$confirmpassword')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/cadastro.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

        <link rel="icon" href="../IMAGEM/LogoBackdoor.png" type="image/png">
        <title>Backdoor: Segurança, confiabilidade e suporte | Cadastro de usuário</title>
    </head>

    <body>

        <header>
            <article id="TituloInicio">
                <a href="./index.html" id="LogoEmpresa"><img src="../IMAGEM/LogoTransp.png" alt="Logo" style="height: 30px; width: 30px;"></a>
                <h1 id="NomeEmpresa">Backdoor</h1>
            </article>

            <div class="bloco4"></div>
            <div class="bloco positivo"></div>
            <div class="bloco2 positivo"></div>
            <div class="bloco3 positivo"></div>
            

            <ul id="BtnInicio">
                <a href="./login.html" class="SubTituloInicio"><li>Login</li></a>
                <a href="./cadastro.html" class="SubTituloInicio"><li>Cadastro</li></a> 
            </ul>
        </header>

        <div class="container">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastre-se</h1>
                </div>

                <div class="login-button">
                    <p>já tem uma conta?</p>
                    <button><a href="./login.html">Entrar</a></button>
                </div>

            </div>

            <form action="cadastro.php" method="POST">
                <div class="input-group">

                    <div class="input-box">
                        <label for="username">Nome de usuário</label>
                        <input id="username" type="text" name="username" value="" placeholder="Digite seu nome de usuário" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" value="" placeholder="Digite seu email" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" value="" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="Confirmpassword">Confirme sua senha</label>
                        <input id="Confimpassword" type="password" name="Confirmpassword" value="" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <div class="continue-button">
                    <button><a href="#">Continuar</a></button>
                </div>
            </form>
        </div>

        <footer>
            
            <div id="RodapeCima">
                    <h2 id="TituloRodape">Siga-nos</h2>

                <div id="SegmentoRodape">
                    <a href="https://www.instagram.com/backdoor_3ipi?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="RedeSocial">
                        <img src="../IMAGEM/LogoIG.png" alt="Instagram" style="width: 33px; height: 30px;">
                        <p class="SubTituloRodape">@backdoor_3ipi</p>
                    </a>

                    <div class="RedeSocial">
                        <img src="../IMAGEM/gmaillogo.png" alt="Email" style="width: 26px; height: 25px; margin-left: 5px;">
                        <p class="SubTituloRodape" style="margin-left: 16px;">backdoor3ipi@gmail.com</p>
                    </div>
                </div>
            </div>

            <hr>

            <div id="RodapeBaixo">
                <img src="../IMAGEM/default-monochrome.png" alt="Logo" id="RodapeLogo">

                <p id="RodapeBaixoTexto">
                    © Backdoor Todo o conteúdo, marcas, nomes e logotipos de terceiros são 
                    usados sob licença e permanecem propriedade de seus respectivos donos. Todos os direitos reservados.
                </p>

                <div id="Vazio">

                </div>
            </div>
        </footer>
    </body>
</html>
