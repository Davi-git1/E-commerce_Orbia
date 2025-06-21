<?php
session_start();
// ... após a validação do usuário

// Redireciona se já estiver logado
if (isset($_SESSION['email']) && isset($_SESSION['nome_completo'])) {
    header("Location: ../index.php");
    exit();
}

// Inicializa variável de erro
$erro = "";

// Simples proteção contra força bruta
if (!isset($_SESSION['tentativas_login'])) {
    $_SESSION['tentativas_login'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = trim(strtolower($_POST['email']));
        $senha = $_POST['senha'];

        // Limita tentativas a 5
        if ($_SESSION['tentativas_login'] >= 5) {
            $erro = "Muitas tentativas. Tente novamente em alguns minutos.";
        } else {
            // Conexão com o banco
            include 'conexao.php';

            $stmt = $conn->prepare("SELECT nome_completo, senha FROM clientes WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $usuario = $result->fetch_assoc();
                $senha_hash = $usuario['senha'];

                if (password_verify($senha, $senha_hash)) {
                    $_SESSION['email'] = $email;
                    $_SESSION['nome_completo'] = $usuario['nome_completo'];
                    $_SESSION['tentativas_login'] = 0; // zera tentativas
                    header("Location: ../index.php");
                    exit();
                } else {
                    $_SESSION['tentativas_login']++;
                    $erro = "Senha incorreta.";
                }
            } else {
                $_SESSION['tentativas_login']++;
                $erro = "E-mail não encontrado.";
            }

            $stmt->close();
            $conn->close();
        }
    } else {
        $erro = "Preencha todos os campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
  <header>    
    <!-- <div class="animacoes"> -->
      <img src="../imgs/bars-solid.svg" alt="menu" class="img-menu" />
      <a href="../index.php"><img src="../imgs/www.orbia.com.br.jpg" alt="" style="margin-right: 40px;width: 190px;"></a>
      <div class="pesquise">
        <input type="text" placeholder=" Pesquise no Orbia" class="campoPesquisa" style="display: none;" />
      </div>
      <div class="login">
        <img src="../imgs/user-solid.svg" alt="user-login" class="user-login" />
        <div class="login-opcoes">
          <span class="login-opcoes-titulo-ou">
            <a style="text-decoration: none;color:#9b7fb6;" href="login.php" class="login-opcoes-titulo">ENTRE</a>
            <span style="color:#9b7fb6;">ou</span>
          </span>
          <span class="login-opcoes2">
            <a style="text-decoration: none;color:#9b7fb6;" href="cadastro.php">CADASTRE-SE</a>
          </span>
        </div>
        
      </div>
      <div class="carrinho" style="display: none;"><img src="../imgs/carrinho.svg" /></div>
      <div class="favoritos" style="display: none;"><img src="../imgs/coracao.svg" /></div>
      <div class="doacao" style="display: none;"><img src="../imgs/presente.svg" /></div>
    <!-- </div> -->
  </header>

  <main class="main">
    <div  class="formLogin">
      <form action="" method="post">
        <h2 align="center" style="padding-bottom:40px;color:#f7f7f7;">Recuperar Senha</h2>
      <div class="area">
        <input type="text" name="cpf" required class="campoCadastro input" placeholder="Digite o CPF. Obs: Apenas números" minlength="11" maxlength="11"/>
        <div class="labelline">CPF*</div>
      </div>
      <div class="btnEnviar">
        <input type="submit" value="ENVIAR" class="campoCadastro btnEnviar2" />
      </div>
    </form>
    </div>
  </main>
</body>
</html>
