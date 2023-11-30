<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GetTron - A Tecnologia ao Seu Alcance</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/logo/gettron-favicon.png" type="image/x-icon" />

    <!-- CSS -->
    <link rel="stylesheet" href="assets/styles/style.css" />
    <link rel="stylesheet" href="assets/styles/style-home.css" />
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
                    <li><a href="#" id="link-nav-pagina-atual">Início</a></li>
                    <li><a href="conta.php">Minha conta</a></li>
                </ul>
            </nav>
            <!-- Botões -->
            <div id="botoes-nav">
                <!-- Botão de pesquisar -->
                <button><a href=""><i class="fi fi-br-search"></i></a></button>
                <!-- Ícone de perfil -->
                <button><a href="conta.php"><i class="fi fi-ss-user"></i></a></button>
                <!-- Botão de pesquisar -->
                <button><a href=""><i class="fi fi-br-shopping-cart"></i></a></button>
            </div>
        </div>
    </header>

    <main>
        <!-- Capa do site -->
        <section id="capa" class="imagem-fundo fundo-fixo">
            <div class="mascara">
                <!-- Logo e título da capa -->
                <div class="titulo-capa">
                    <div>
                        <img src="assets/logo/gettron-logo.png" alt="Logo da GetTron">
                    </div>
                    <div class="titulo-capa-texto">
                        <h1>Get Tron</h1>
                        <p>A tecnologia ao seu alcance</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lista de categorias -->

        <!-- Principais produtos -->
        <section id="produtos-em-destaque">
            <h2>Produtos em Destaque</h2>
            <div>
                <?php
                $base = mysqli_connect('localhost', 'root', '', 'gettron') or die("erro de conexão");

                $regra1 = "SELECT * FROM produtos ORDER BY nome_produto";
                $res = mysqli_query($base, $regra1);

                while ($mostrar = mysqli_fetch_array($res)) {
                    echo "
                    <section class=\"produto\">
                        <img src=" . $mostrar['img_produto'] . " alt=\"\">
                        <h3>" . $mostrar['nome_produto'] . "</h3>
                        <p>" . $mostrar['descricao_produto'] . "</p>
                    <button>R$" . number_format($mostrar['preco_produto'], 2, ",", ".") . "</button>
                </section>";
                }
                ?>

            </div>
        </section>
    </main>

    <footer>
        <p>GetTron</p>
    </footer>
</body>

</html>