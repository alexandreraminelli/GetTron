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
        <!-- Botões para escolher a conta -->
        <section id="selecionar-conta">
            <button onclick="mostrarEntrar()">
                <i class="fi fi-ss-user"></i>Entrar
            </button>
            <button onclick="mostrarCriarConta()">
                <i class="fi fi-ss-user-add"></i>Cadastro
            </button>
        </section>

        <!-- Form de login -->
        <section id="entrar">
            <h2>Login</h2>
            <form action="minha-conta.php" method="post">
                <div class="campos">
                    <div class="campo">
                        <label for="usuario">Email</label>
                        <input type="email" name="email" id="email-login" required>
                    </div>
                    <div class="campo">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha-login" required>
                    </div>
                </div>

                <div class="enviar">
                    <input type="submit" value="Entrar">
                    <input type="reset" value="Limpar">
                </div>
            </form>
        </section>

        <!-- Criar Conta -->
        <section id="criar-conta">
            <h2>Criar Conta</h2>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <div class="campos">
                    <div class="campo">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome-criar" required autocomplete="name">
                    </div>
                    <div class="campo">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email-criar" required autocomplete="email">
                    </div>
                    <div class="campo">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" id="endereco-criar" required>
                    </div>
                    <div class="campo">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha-criar" required>
                    </div>
                </div>
                <div class="enviar">
                    <input type="submit" value="Entrar">
                    <input type="reset" value="Limpar">
                </div>
            </form>
        </section>

        <?php
        // Arquivo de conexão
        require_once 'conexao.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verifica se o formulário foi submetido
            if (isset($_POST['nome'], $_POST['email'], $_POST['endereco'], $_POST['senha'])) {
                // Obtém os valores do formulário
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $endereco = $_POST['endereco'];
                $senha = $_POST['senha'];

                // Prepara e executa a query para inserir os dados na tabela 'clientes'
                $query = "INSERT INTO clientes (nome, email, endereco, senha) VALUES ('$nome', '$email', '$endereco', '$senha')";

                if (mysqli_query($conexao, $query)) {
                    echo "Dados cadastrados com sucesso!";
                } else {
                    echo "Erro ao cadastrar os dados: " . mysqli_error($conexao);
                }
            } else {
                echo "Por favor, preencha todos os campos do formulário.";
            }
        }
        ?>


    </main>

    <!-- Javascript -->
    <script>
        let entrar = window.document.getElementById("entrar")
        let criarConta = window.document.getElementById("criar-conta")

        function mostrarEntrar() {
            entrar.style.display = "flex"
            criarConta.style.display = "none"
        }

        function mostrarCriarConta() {
            entrar.style.display = "none"
            criarConta.style.display = "flex";
        }
    </script>

</body>

</html>