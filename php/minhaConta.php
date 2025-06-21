<?php
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['nome_completo'])) {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/minhaConta.css" />
    <title>Document</title>
</head>
<body>
    <header id="meuHeader">
    <div class="animacoes">
      <img src="../imgs/bars-solid.svg" alt="menu" class="img-menu">
      <img src="../imgs/ORBIA.png" alt="" style="margin-right: 40px;width: 190px;">
      <div class="pesquise">
        <input type="text" name="" id="" placeholder=" Pesquise no Orbia" class="campoPesquisa">
      </div>
      <div class="login">
        <img src="../imgs/user-solid.svg" alt="user-login" class="user-login">
        <?php if (isset($_SESSION['nome_completo'])): ?>
  <div class="user-logado">
    <div class="menu-container">
      <span class="menu-toggle">
        <div class="" style="color:gray;">Olá, <?= htmlspecialchars(explode(' ',$_SESSION['nome_completo'])[0]) ?></div>
        <small><strong style="color:gray;">MINHA CONTA</strong></small>
      </span>
      <div class="dropdown-menu" style="z-index:1111;">
        <a href="minhaConta.php">🏠 Minha Conta</a>
        <a href="#">📦 Meus pedidos</a>
        <a href="#">👤 Meus dados</a>
        <a href="#">💰 Carteira</a>
        <a href="#">📋 Protocolos</a>
        <a href="#">👍 Avaliações</a>
        <a href="#">🎁 Sorteios</a>
        <a href="logout.php">🚪 Sair</a>
      </div>
    </div>
  </div>
<?php else: ?>
  <div class="login-opcoes">
    <span class="login-opcoes-titulo-ou">
      <a style="text-decoration: none;" href="php/login.php" class="login-opcoes-titulo">ENTRE</a> ou
    </span>
    <span class="login-opcoes2">
      <a style="text-decoration: none;" href="php/cadastro.php">CADASTRE-SE</a>
    </span>
  </div>
<?php endif; ?>
      </div>
      <div class="carrinho">
        <a href="php/carrinho.php"><img src="../imgs/carrinho.svg"></a>
      </div>
      <div class="favoritos">
        <a href="php/favoritos.php"><img src="../imgs/coracao.svg"></a>
      </div>
      <div class="doacao">
        <a href="php/sorteio.php"><img src="../imgs/presente.svg"></a>
      </div>
    </div>
  </header>

  <main class="main">
    <div class="dados">
        <div class="dados2">
            <img src="../imgs/circle-user-regular.svg" alt="" height="100%">
            <div class="">
                <p class="dadosBemVindo">Bem-Vindo, <?= htmlspecialchars($_SESSION['nome_completo']) ?></p>
                <p class="dadosEmail"><img src="../imgs/envelope-solid.svg" alt="envelope" class="envelope"><?= htmlspecialchars($_SESSION['email']) ?></p>
            </div>
        </div>
     
        <button class="editarDados">
            <img src="../imgs/pencil-solid.svg" alt="" class="dadosPensilRoxo">
            <img src="../imgs/pencil-solid-cinza.svg" alt="" class="dadosPencil">
            EDITAR DADOS
        </button>
    </div>
  </div>
    <div class="menu">
      <div class="meuspedidos">
        <img src="../imgs/basket-shopping-solid.svg" alt="" width="40px">
        <div class="inforMenu">
          <span>MEUS PEDIDOS</span>
          <small>Veja Históricos e acompanhe suas compras.</small>
        </div>
      </div>
      <div class="meusDados">
        <img src="../imgs/user-solid-roxo-vibrante.svg" alt="" width="40px">
        <div class="inforMenu">
          <span>MEUS DADOS</span>
          <small>altere seus dados cadastrais, endereços ou cadastre um novo endereço.</small>
        </div>
      </div>
      <div class="carteira">
        <img src="../imgs/wallet-solid.svg" alt="" width="40px">
        <div class="inforMenu">
          <span>CARTEIRA</span>
          <small>Gerencie seus cartões, créditos e resgate gift card</small>
        </div>
      </div>
      <div class="chamados">
        <img src="../imgs/clipboard-list-solid.svg" alt="" width="40px">
        <div class="inforMenu">
          <span>CHAMADOS</span>
          <small>Veja Históricos e acompanhe suas compras</small>
        </div>
      </div>
      <div class="avaliacoes">
        <img src="../imgs/like.svg" alt="" width="40px">
        <div class="inforMenu">
          <span>AVALIAÇÕES</span>
          <small>Veja Históricos e acompanhe suas compras</small>
        </div>
      </div>
      <div class="favorito">
        <img src="../imgs/heart-roxo.svg" alt="" width="40px">
        <div class="inforMenu">
          <span>FAVORITOS</span>
          <small>Veja Históricos e acompanhe suas compras</small>
        </div>
      </div>
    </div>
    
    <section class="ultimosPedidos">
      <div class="dfsdf">
        <img src="../imgs/cart-roxo.svg" alt="" width="20px">
        <span style="font-weight:bold;margin-left:8px;">RESUMO DO SEU ULTIMO PEDIDO</span>
    </div>
        <a href="" class="xgnzdf">IR PARA MEUS PEDIDOS</a>
    </section>
    <img src="../imgs/promoProcessadores.png" alt="" width="70%">

    <div class="ultimaCompra">
      <div class="numPedido">
        <span style="font-weight:bold;">Pedido:<span style="font-weight:normal;margin-right:8px;">54354545</span>-<span style="font-weight:normal;margin-left:8px;">29/05/2025</span></span>
        <div class=""><input type="button" value="GERENCIAR PEDIDO">
        <input type="button" value="VER DETALHES"></div>
      </div>
      <div class="status">Pendente.</div>
      <div class="formaPagamento">Pagamento via <span>Cartão de crédito</span></div>
      <div class="produto">
        <div class="imgProduto">
          <img src="../imgs/foto_wc_15.png" alt="" width="80px">
        </div>
        <div class="informacaoProduto">
          <div class="vendidoEntregue"><span>
            <span>Vendido e entregue por: </span>
            <span class="orbia">Orbia!</span></span>
          </div>
          <div class="nomeProduto">
            <span>Water Cooler Gamer Rise Mode Aura Ice, ARGB, 360mm, AMD/Intel, Branco - RM-WAI-03-ARGB</span>
          </div>
          <div class="quantidadeProduto"><span>Quantidade: <span style="font-weight:bold;">1</span></span></div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="footer">
      <div class="atendimento">
      <div class="atendimentoTitulo">Atendimento</div><div class="">Horário de atendimento:</div>08:00 às 20:00 - <br>Segunda a Sexta,<br>09:00 às 15:00 - <br>Sabado, <br>horário de Brasília <br>(Exceto domingo e feriados) <div class="">Endereço:</div> Rua Carlos Gomes, 1321 - <br>9° andar - Centro <br>Limeira/SP - CEP: 13480-010
    </div>

    <div class="midiaSociais">
      <div class="midiatitulo">
        Mídias sociais
      </div>
    </div>
    </div>
  </footer>
</body>
</html>