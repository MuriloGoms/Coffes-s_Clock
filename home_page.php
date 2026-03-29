<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home_page.css">
    <title>Coffe's Clock</title>
</head>

<body>

    <header>
        <div class="header-bar">
            <div class="logo">
                <img src="img/Gemini_Generated_Image_1ldnb81ldnb81ldn.png" alt="logo-type" height="119" width="129">
            </div>

            <div class="bar-options">
                <li><a href="cardapio_page.php">Cardápio</a></li>
                <li>Lojas</li>
                <li>Impacto Social</li>
                <li><a href="https://youtu.be/dQw4w9WgXcQ?si=KOn6qFJ-Z_Gn_Iwp" target="_blank"></a>+55 (11) 95500-7814</li>
            </div>

            <div class="btnLogin" onclick="abrirLogin(), enviar()">
                <?php if (isset($_SESSION['usuario_nome'])): ?>

                    <a href="php/logout.php">
                        <img src="img/user-svgrepo-com.png" class="user-icon">
                        <?php echo $_SESSION['usuario_nome']; ?>
                    </a>

                <?php else: ?>

                    <a href="#">
                        <img src="img/user-svgrepo-com.png" alt="user" class="user-icon">
                        login
                    </a>

                <?php endif; ?>
            </div>
        </div>
    </header>

    <div class="image-section">
        <div class="image-container">

            <div class="first-coffee">
                <img src="img/coffee3.png" alt="first coffee">
            </div>

            <div class="second-coffee">
                <img src="img/Untitled_design.png" alt="second coffee">
            </div>

            <div class="third-coffee">
                <img src="img/coffee2.png" alt="third coffee">
            </div>
        </div>

        <div class="double-image">
            <img src="img/body_coffee1.png" alt="body coffee1">
            <img src="img/body_coffee2.png" alt="body coffee2">
        </div>

        <div class="double-image2">
            <img src="img/body_coffee3.png" alt="body coffee3">
            <img src="img/body_coffee4.png" alt="body coffee4">
        </div>

    </div>

    <footer>
        <div class="footer-left-links">
            <h2>Sobre Nós</h2>
            <a href="#">Nossa Empresa</a><br><br>
            <a href="#">Nosso Café</a><br><br>
            <a href="#">Atendimento ao Cliente</a><br><br>
            <a href="#">Canal de Denúncias</a><br><br>
            <a href="#">Código de Conduta Zamp</a><br><br>
        </div>
        <div class="footer-center-links">
            <h2>Carreira</h2>
            <a href="#">Trabalhe Conosco</a><br>
        </div>
        <div class="footer-right-links">
            <h2>Impacto Social</h2>
            <a href="#">Comunidade</a><br><br>
            <a href="#">Meio Ambiente</a><br><br>
            <a href="#">Fornecimento Ético</a><br><br>
            <a href="#">Histósria Coffee's Clock</a><br><br>
        </div>
    </footer>

    <div class="overlay" id="overlay" onclick="fecharLogin()"></div>

    <div class="login-container" id="login-container">
        <div class="login-buttons">
            <div class="login-btn ativo" id="loginBtn" onclick="mostrarLogin(); ativarLogin()">Login</div>
            <div class="cadastrar-btn" id="cadastroBtn" onclick="mostrarCadastro(); ativarCadastro()">Cadastrar</div>
        </div>

        <!--Login form-->
        <form action="POST">
            <div class="login-form" id="login">
                <input type="text" name="user-name" id="user-name" placeholder="Nome"><br><br>
                <input type="password" name="user-password" id="user-password" placeholder="Senha"><br><br>
                <span class="error-msg"></span>
                
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox">
                        Lembrar
                    </label>
                    <a href="#">Esqueci a senha</a>
                </div>
            </div>
        </form>

        <!--Cadastro form-->
        <form action="POST">
            <div class="cadastro-form" id="cadastro" style="display: none;">
                <input type="text" name="user-name" id="user-name" placeholder="Nome"><br><br>
                <input type="email" name="user-email" id="user-email" placeholder="Email"><br><br>
                <input type="password" name="user-password" id="user-pass" placeholder="Senha"><br>
                <span class="error-msg">Erro ao cadastrar o usuário</span>

                <div class="remember-forgot">
                    <label>
                        <input type="checkbox">
                        Lembrar
                    </label>
                    <a href="#">Esqueci a senha</a>
                </div>
            </div>
        </form>


        <button type="submit" class="confirm" onclick="fecharLogin(), Enviar()">Confirmar</button>

        <div class="line"></div>

        <div class="another-way">
            <a href="#">Entrar de outra forma</a>
        </div>
    </div>
    <script src="js/homePage.js"></script>
</body>

</html>