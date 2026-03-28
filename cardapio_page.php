<?php session_start();?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cardapio_page.css">
    <title>Cardápio</title>
</head>

<body>

    <header>
        <div class="header-bar">
            <div class="logo">
                <img src="img/Gemini_Generated_Image_1ldnb81ldnb81ldn.png" alt="logo-type" height="119" width="129">
            </div>

            <div class="bar-options">
                <li><a href="home_page.php">Home</a></li>
                <li>Lojas</li>
                <li>Impacto Social</li>
                <li><a href="https://youtu.be/dQw4w9WgXcQ?si=KOn6qFJ-Z_Gn_Iwp" target="_blank">+55 (11) 95500-7814</a>
                </li>
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

                <?php endif;?>
            </div>
        </div>
    </header>

    <div class="overlay" id="overlay" onclick="fecharLogin()"></div>

    <div class="login-container" id="login-container">
        <div class="login-buttons">
            <div class="login-btn ativo" id="loginBtn" onclick="mostrarLogin(); ativarLogin()">Login</div>
            <div class="cadastrar-btn" id="cadastroBtn" onclick="mostrarCadastro(); ativarCadastro()">Cadastrar</div>
        </div>

        <div class="login-form" id="login">
            <input type="text" name="user-name" id="user-name" placeholder="Nome"><br><br>
            <input type="password" name="user-password" id="user-password" placeholder="Senha"><br><br>
            <div class="remember-forgot">
                <label>
                    <input type="checkbox">
                    Lembrar
                </label>
                <a href="#">Esqueci a senha</a>
            </div>
        </div>

        <div class="cadastro-form" id="cadastro" style="display: none;">
            <input type="text" name="user-name" id="user-name" placeholder="Nome"><br><br>
            <input type="email" name="user-email" id="user-email" placeholder="Email"><br><br>
            <input type="password" name="user-password" id="user-pass" placeholder="Senha"><br>
            <div class="remember-forgot">
                <label>
                    <input type="checkbox">
                    Lembrar
                </label>
                <a href="#">Esqueci a senha</a>
            </div>
        </div>

        <button type="submit" class="confirm" onclick="fecharLogin()">Confirmar</button>

        <div class="line"></div>

        <div class="another-way">
            <a href="#">Entrar de outra forma</a>
        </div>
    </div>

    <!--Product discont-->
    <div class="image-section">
        <h2 class="destaque">Em destaque</h2>
        <div class="image-container">

            <div class="product-card">
                <div class="description">
                    <h3>Cappuccino com Canela</h3>
                    <p>Cappuccino clássico, com uma camada espessa de espuma polvilhada com canela me pó, servido em um
                        pires com um pau de canela inteiro ao lado.</p>

                    <div class="addCart">
                        <button class="btn-cart" onclick="">
                            <img src="img/add-to-cart-svgrepo-com.png" alt="cart" class="cart-icon">
                            R$25,85
                        </button>
                    </div>
                </div>

                <div class="cappuccino">
                    <img src="img/Cappuccino.png" alt="Cappuccino">
                </div>
            </div>

            <div class="product-card">
                <div class="description">
                    <h3>Café Americano</h3>
                    <p>Café tradicional ou Café Ameriacano servido em uma xícara de vidro transparente com uma fina
                        camada de creme. O ideal pra vc quer não quer largar o café mas também quer algo mais leve.</p>

                    <div class="addCart">
                        <button class="btn-cart" onclick="">
                            <img src="img/add-to-cart-svgrepo-com.png" alt="cart" class="cart-icon">
                            R$20,99
                        </button>
                    </div>
                </div>
                <div class="americanCoffee">
                    <img src="img/Café-Americano.png" alt="americanCoffee">
                </div>
            </div>

            <div class="product-card">
                <div class="description">
                    <h3>Chá Gelado com Limão e Hortelã</h3>
                    <p>Chá gelado servido em uma xícara de vidro com gelo, rodela de limão siciliano e folhas frescas de
                        Hortelã.</p>

                    <div class="addCart">
                        <button class="btn-cart" onclick="">
                            <img src="img/add-to-cart-svgrepo-com.png" alt="cart" class="cart-icon">
                            R$35,99
                        </button>
                    </div>
                </div>
                <div class="cha">
                    <img src="img/Chá-Gelado.png" alt="Cha">
                </div>
            </div>

            <div class="product-card">
                <div class="description">
                    <h3>Café com Leite Tradicional</h3>
                    <p>Café com Leite tradicional com uma leve espuma com canela em pó, servido em uma xicara de vidro
                        ideal pra quem gosta de algo mais leve e saboroso. </p>

                    <div class="addCart">
                        <button class="btn-cart" onclick="">
                            <img src="img/add-to-cart-svgrepo-com.png" alt="cart" class="cart-icon">
                            R$18,80
                        </button>
                    </div>
                </div>
                <div class="coffeeMilk">
                    <img src="img/Café-com-leite.png" alt="coffeeMilk">
                </div>
            </div>
        </div>

        <!--Second body container-->
        <div class="underline"></div>

        <h2 class="bebidas">Bebidas & Refeição</h2>
        <div class="second-image-container">

            <div class="product-card">
                <div class="description">
                    <h3>Café Latte</h3>
                    <p>Leite vaporizado com um splash de dose de espresso.</p>

                    <div class="addCart">
                        <button class="btn-cart" onclick="">
                            <img src="img/add-to-cart-svgrepo-com.png" alt="cart" class="cart-icon">
                            R$24,90
                        </button>
                    </div>
                </div>

                <div class="Cappuccino">
                    <img src="img/latteCoffee.png" alt="latteCoffee">
                </div>
            </div>

            <div class="product-card">
                <div class="description">
                    <h3>Chocolate Quente</h3>
                    <p>Leite vaporizado, essencia de baunilha e calda de chocolate finalizado com chantilly e cobertura
                        de chocolate.</p>

                    <div class="addCart">
                        <button class="btn-cart" onclick="">
                            <img src="img/add-to-cart-svgrepo-com.png" alt="cart" class="cart-icon">
                            R$14,90
                        </button>
                    </div>
                </div>

                <div class="cappuccino">
                    <img src="img/warmChocolate.png" alt="Cappuccino">
                </div>
            </div>

            <div class="product-card">
                <div class="description">
                    <h3>Achocolatado com Amendoa</h3>
                    <p>Achocolatado quente com calda de caramelo, e pedaçoes de Amendoa triturada com essencia de
                        baunilha.</p>

                    <div class="addCart">
                        <button class="btn-cart" onclick="">
                            <img src="img/add-to-cart-svgrepo-com.png" alt="cart" class="cart-icon">
                            R$28,90
                        </button>
                    </div>
                </div>

                <div class="cappuccino">
                    <img src="img/chocolateAmendoa.png" alt="Cappuccino">
                </div>
            </div>

            <div class="product-card">
                <div class="description">
                    <h3>Chocolate com caramelo</h3>
                    <p>Café com leite coberto com calda de caramelo e chocolate com uma generosa camada de chantilly.
                    </p>

                    <div class="addCart">
                        <button class="btn-cart" onclick="">
                            <img src="img/add-to-cart-svgrepo-com.png" alt="cart" class="cart-icon">
                            R$24,90
                        </button>
                    </div>
                </div>

                <div class="cappuccino">
                    <img src="img/chocolateCaramelo.png" alt="Cappuccino">
                </div>
            </div>

            <div class="product-card">
                <div class="description">
                    <h3>Achocolatado com canela</h3>
                    <p>Leite vaporizado e café, aromatizado com canela.</p>

                    <div class="addCart">
                        <button class="btn-cart" onclick="">
                            <img src="img/add-to-cart-svgrepo-com.png" alt="cart" class="cart-icon">
                            R$15,90
                        </button>
                    </div>
                </div>

                <div class="cappuccino">
                    <img src="img/leiteCanela.png" alt="Cappuccino">
                </div>
            </div>

            <div class="product-card">
                <div class="description">
                    <h3>Café Frappé</h3>
                    <p>Camadas ricas e uma generosa cobertura de chantilly e cobertura de chocolate.</p>

                    <div class="addCart">
                        <button class="btn-cart" onclick="">
                            <img src="img/add-to-cart-svgrepo-com.png" alt="cart" class="cart-icon">
                            R$14,90
                        </button>
                    </div>
                </div>

                <div class="cappuccino">
                    <img src="img/warmChocolate.png" alt="Cappuccino">
                </div>
            </div>

            <div class="product-card">
                <div class="description">
                    <h3>Pão de Queijo</h3>
                    <p>Um pão de queijo tradicional.</p>

                    <div class="addCart">
                        <button class="btn-cart" onclick="">
                            <img src="img/add-to-cart-svgrepo-com.png" alt="cart" class="cart-icon">
                            R$4,90
                        </button>
                    </div>
                </div>

                <div class="cappuccino">
                    <img src="img/paoDeQueijo.png" alt="Cappuccino">
                </div>
            </div>

            <div class="product-card">
                <div class="description">
                    <h3>Café com Pão na chapa</h3>
                    <p>Café com pão na chapa do jeito brasileiro.</p>

                    <div class="addCart">
                        <button class="btn-cart" onclick="">
                            <img src="img/add-to-cart-svgrepo-com.png" alt="cart" class="cart-icon">
                            R$12,90
                        </button>
                    </div>
                </div>

                <div class="cappuccino">
                    <img src="img/breadWithCoffee.png" alt="Cappuccino">
                </div>
            </div>

        </div>

        <div class="underline"></div>
    </div>

    <!--Footer-->
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

    <script src="js/cardapio_page.js"></script>
</body>

</html>