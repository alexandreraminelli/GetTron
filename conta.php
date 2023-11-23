<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faça o login ou crie uma conta</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/logo/gettron-favicon.png" type="image/x-icon" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/styles/style.css" />
    <link rel="stylesheet" href="assets/styles/style-login.css" />

    <!-- Javascript -->
    <script src="assets/scripts/login.js"></script>
</head>

<body>
    <header>
        <div>
            <div id="logo-header">
                <div class="logo-imagem"><img src="assets/logo/gettron-logo.png" alt="Logo do GetTron"></div>
                <div class="logo-texto">
                    <h1>Get Tron</h1>
                    <p>A Tecnologia ao Seu Alcance</p>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="">Loja</a></li>
                    <li><a href="#" id="link-nav-pagina-atual">Minha conta</a></li>
                </ul>
            </nav>
            <!-- Botões -->
            <div id="botoes-nav">
                <!-- Botão de pesquisar -->
                <button><a href=""><i class="fi fi-br-search"></i></a></button>
                <!-- Ícone de perfil -->
                <button><a href=""><i class="fi fi-ss-user"></i></a></button>
                <!-- Botão de pesquisar -->
                <button><a href=""><i class="fi fi-br-shopping-cart"></i></a></button>
            </div>
        </div>
    </header>

    <main>
        <section id="selecionar-conta">
            <button>
                <i class="fi fi-ss-user"></i>Entrar
            </button>
            <button>
                <i class="fi fi-ss-user-add"></i>Cadastro
            </button>
        </section>

        <section id="entrar">
            <form action="minha-conta.php" method="post">
                <div class="campos">
                    <div class="campo">
                        <label for="usuario">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="campo">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" required>
                    </div>
                </div>

                <div class="enviar">
                    <input type="submit" value="Entrar">
                    <input type="reset" value="Limpar">
                </div>
            </form>
        </section>

    </main>

</body>

</html>