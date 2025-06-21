<?php
session_start();
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <title>OrBia! | Ofertas em Tech e Gamer? Só se for no Orbia!</title>
</head>

<body>
  <header id="meuHeader">
    <div class="animacoes">
      <img src="imgs/bars-solid.svg" alt="menu" class="img-menu">
      <img src="imgs/www.orbia.com.br.jpg" alt="" style="margin-right: 40px;width: 190px;">
      <div class="pesquise">
        <input type="text" name="" id="" placeholder=" Pesquise no Orbia" class="campoPesquisa">
      </div>
      <div class="login">
        <img src="imgs/user-solid.svg" alt="user-login" class="user-login">
        <?php if (isset($_SESSION['nome_completo'])): ?>
        <div class="user-logado">
          <div class="menu-container">
            <span class="menu-toggle">
              <div class="" style="color:gray;">Olá,
                <?= htmlspecialchars(explode(' ',$_SESSION['nome_completo'])[0]) ?>
              </div>
              <small><strong style="color:gray;">MINHA CONTA</strong></small>
            </span>
            <div class="dropdown-menu" style="z-index:1111;">
              <a href="php/minhaConta.php">🏠 Minha Conta</a>
              <a href="#">📦 Meus pedidos</a>
              <a href="#">👤 Meus dados</a>
              <a href="#">💰 Carteira</a>
              <a href="#">📋 Protocolos</a>
              <a href="#">👍 Avaliações</a>
              <a href="#">🎁 Sorteios</a>
              <a href="php/logout.php">🚪 Sair</a>
            </div>
          </div>
        </div>
        <?php else: ?>
        <div class="login-opcoes">
          <span class="login-opcoes-titulo-ou">
            <a style="text-decoration: none;color:#9b7fb6;" href="php/login.php" class="login-opcoes-titulo">ENTRE</a>
            <span style="color:#9b7fb6;">ou</span>
          </span>
          <span class="login-opcoes2">
            <a style="text-decoration: none;color:#9b7fb6;" href="php/cadastro.php">CADASTRE-SE</a>
          </span>
        </div>
        <?php endif; ?>
      </div>
      <div class="carrinho">
        <a href="php/carrinho.php"><img src="imgs/carrinho.svg"></a>
      </div>
      <div class="favoritos">
        <a href="php/favoritos.php"><img src="imgs/coracao.svg"></a>
      </div>
      <div class="doacao">
        <a href="php/sorteio.php"><img src="imgs/presente.svg"></a>
      </div>
    </div>
  </header>
  <nav>
    <div class="navegacao">
      <div class="produtos">Produtos</div>
      <div class="monte-sua-maquina">Monte seu PC</div>
      <div class="cupons">Cupons</div>
      <div class="computadores">Computadores</div>
      <div class="outros">Outros</div>
    </div>
  </nav>

  <main>
    <div class="te">     
      <div class="swiperCarousel">       
        <div class="swiper-wrapper">        
          <div class="swiper-slide">
            <div>
              <img src="imgs/Banner Mês do Consumidor - E-commerce 2.png" alt="" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <img src="imgs/orbiatecnology@gmail.com.jpg" alt="" width="100%">
            </div>
          </div>
          <div class="swiper-slide">
            <div>
              <img src="imgs/Banner Mês do Consumidor - E-commerce.png" alt="" width="100%">
            </div>
          </div>
        </div>    
        <div class="swiper-pagination"></div> 
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>

    <section>
      <div class="section1">
        
        <div class="swiper">
          
          <div class="swiper-wrapper">
            
            <div class="swiper-slide">
              <div class="caixa1">
                <div class="tipo-avaliacoes">
                  <div class="avaliacao-estrelas">
                    <img src="imgs/carrinho2.svg" class="carrinho2">
                    <img src="imgs/coracao2.svg" class="favorito2">

                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-regular.svg" width="14px">
                    </div>
                  </div>
                  <div class="avaliacaoQuantidade">(362)</div>
                </div>
                <div class="foto-produto">
                  <img src="imgs/ps5.png" alt="">
                </div>
                <div class="textos">
                  <div class="titulo-produto">
                    <span>Console PlayStation 5 Slim Sony, SSD 1TB, Com Controle Sem Fio DualSense</span>
                  </div>
                  <div class="preco-normal-estoque">
                    <span style="text-decoration: line-through;">R$ 4.499,00</span><span>Restam 48 Unid.</span>
                  </div>
                  <div class="preco-vista">
                    <span class="preco">R$ 3.626,07</span> <span class="desconto">-2%</span>
                  </div>
                  <div class="forma-pagamento">
                    <span class="forma-pagamento-vista">À vista no PIX</span><span class="forma-pagamento-parcelado">ou
                      até
                      <span style="font-weight: bold;">10x de R$ 389,90</span></span>
                  </div>
                  <input type="button" value="COMPRAR" class="btn-comprar">
                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="caixa2">
                <div class="tipo-avaliacoes">
                  <div class="avaliacao-estrelas">
                    <img src="imgs/carrinho2.svg" class="carrinho2">
                    <img src="imgs/coracao2.svg" class="favorito2">
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-regular.svg" width="14px">
                    </div>
                  </div>
                  <div class="avaliacaoQuantidade">(362)</div>
                </div>
                <div class="foto-produto">
                  <img src="imgs/rtx5090.png" alt="">
                </div>
                <div class="textos">
                  <div class="titulo-produto">
                    <span>Placa de Video Gainward NVIDIA GeForce RTX 5090 Phantom 32GB GDDR7</span>
                  </div>
                  <div class="preco-normal-estoque">
                    <span style="text-decoration: line-through;">R$ 24.499,00</span><span>Restam 4 Unid.</span>
                  </div>
                  <div class="preco-vista">
                    <span class="preco">R$ 20.626,07</span> <span class="desconto">-3%</span>
                  </div>
                  <div class="forma-pagamento">
                    <span class="forma-pagamento-vista">À vista no PIX</span><span class="forma-pagamento-parcelado">ou
                      até
                      <span style="font-weight: bold;">10x de R$ 2.062,00</span></span>
                  </div>
                  <input type="button" value="COMPRAR" class="btn-comprar">
                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="caixa3">
                <div class="tipo-avaliacoes">
                  <div class="avaliacao-estrelas">
                    <img src="imgs/carrinho2.svg" class="carrinho2">
                    <img src="imgs/coracao2.svg" class="favorito2">
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-regular.svg" width="14px">
                    </div>
                  </div>
                  <div class="avaliacaoQuantidade">(67)</div>
                </div>
                <div class="foto-produto">
                  <img src="imgs/ps5-pro-dualsense-image-block-01-en-16aug24.webp" alt="" width="104%">
                </div>
                <div class="textos">
                  <div class="titulo-produto">
                    <span>Console PlayStation 5 Pro Sony, SSD 2TB, Com Controle Sem Fio DualSense, Branco</span>
                  </div>
                  <div class="preco-normal-estoque">
                    <span style="text-decoration: line-through;">R$ 6.999,86</span><span>Restam 48 Unid.</span>
                  </div>
                  <div class="preco-vista">
                    <span class="preco">R$ 6.137,07</span> <span class="desconto">-2%</span>
                  </div>
                  <div class="forma-pagamento">
                    <span class="forma-pagamento-vista">À vista no PIX</span><span class="forma-pagamento-parcelado">ou
                      até
                      <span style="font-weight: bold;">10x de R$ 389,90</span></span>
                  </div>
                  <input type="button" value="COMPRAR" class="btn-comprar">
                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="caixa4">
                <div class="tipo-avaliacoes">
                  <div class="avaliacao-estrelas">
                    <img src="imgs/carrinho2.svg" class="carrinho2">
                    <img src="imgs/coracao2.svg" class="favorito2">
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-regular.svg" width="14px">
                    </div>
                  </div>
                  <div class="avaliacaoQuantidade">(362)</div>
                </div>
                <div class="foto-produto">
                  <img src="imgs/notebook_aspire_5_front_lg.png" alt="" width="75%">
                </div>
                <div class="textos">
                  <div class="titulo-produto">
                    <span>Notebook Acer Aspire 5 AMD Ryzen7-5700U, 16GB RAM, SSD 512GB, 15.6" FHD IPS</span>
                  </div>
                  <div class="preco-normal-estoque">
                    <span style="text-decoration: line-through;">R$ 4.499,00</span><span>Restam 48 Unid.</span>
                  </div>
                  <div class="preco-vista">
                    <span class="preco">R$ 3.199,00</span> <span class="desconto">-2%</span>
                  </div>
                  <div class="forma-pagamento">
                    <span class="forma-pagamento-vista">À vista no PIX</span><span class="forma-pagamento-parcelado">ou
                      até
                      <span style="font-weight: bold;">10x de R$ 389,90</span></span>
                  </div>
                  <input type="button" value="COMPRAR" class="btn-comprar">
                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="caixa5">
                <div class="tipo-avaliacoes">
                  <div class="avaliacao-estrelas">
                    <img src="imgs/carrinho2.svg" class="carrinho2">
                    <img src="imgs/coracao2.svg" class="favorito2">
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-regular.svg" width="14px">
                    </div>
                  </div>
                  <div class="avaliacaoQuantidade">(362)</div>
                </div>
                <div class="foto-produto">
                  <img src="imgs/iphone-15-pro-titanio-azul-700x700.webp" alt="" width="54.5%">
                </div>
                <div class="textos">
                  <div class="titulo-produto">
                    <span>Iphone 15 Apple, 128GB, Preto, Tela De 6,1 Polegadas, 5g E Câmera De 48 Mp</span>
                  </div>
                  <div class="preco-normal-estoque">
                    <span style="text-decoration: line-through;">R$ 6.349,97</span><span>Restam 48 Unid.</span>
                  </div>
                  <div class="preco-vista">
                    <span class="preco">R$ 5.426,22</span> <span class="desconto">-2%</span>
                  </div>
                  <div class="forma-pagamento">
                    <span class="forma-pagamento-vista">À vista no PIX</span><span class="forma-pagamento-parcelado">ou
                      até
                      <span style="font-weight: bold;">10x de R$ 542,62</span></span>
                  </div>
                  <input type="button" value="COMPRAR" class="btn-comprar">
                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="caixa5">
                <div class="tipo-avaliacoes">
                  <div class="avaliacao-estrelas">
                    <img src="imgs/carrinho2.svg" class="carrinho2">
                    <img src="imgs/coracao2.svg" class="favorito2">
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-regular.svg" width="14px">
                    </div>
                  </div>
                  <div class="avaliacaoQuantidade">(362)</div>
                </div>
                <div class="foto-produto">
                  <img src="imgs/iphone-15-pro-titanio-azul-700x700.webp" alt="" width="54.5%">
                </div>
                <div class="textos">
                  <div class="titulo-produto">
                    <span>Iphone 15 Apple, 128GB, Preto, Tela De 6,1 Polegadas, 5g E Câmera De 48 Mp</span>
                  </div>
                  <div class="preco-normal-estoque">
                    <span style="text-decoration: line-through;">R$ 6.349,97</span><span>Restam 48 Unid.</span>
                  </div>
                  <div class="preco-vista">
                    <span class="preco">R$ 5.426,22</span> <span class="desconto">-2%</span>
                  </div>
                  <div class="forma-pagamento">
                    <span class="forma-pagamento-vista">À vista no PIX</span><span class="forma-pagamento-parcelado">ou
                      até
                      <span style="font-weight: bold;">10x de R$ 542,62</span></span>
                  </div>
                  <input type="button" value="COMPRAR" class="btn-comprar">
                </div>

              </div>
            </div>
          </div>
          
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div> 
      </div>
    </section>
    <section>
      <div class="imgBanners">
        <div class="banner1">
          <img src="imgs/Captura de tela 2025-05-31 103848.png" alt="Banner 1"
            style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="banner2">
          <img src="imgs/Captura de tela 2025-05-31 103939.png" alt="Banner 2"
            style="width: 100%; height: 100%; object-fit: cover;">
        </div>
      </div>
    </section>
    <div class="te">
      <!-- Slider main container -->
      <div class="swiperButtonOferta">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="tes">
              <span>Áudio</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Automação</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Periféricos</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>TV</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              5
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tes">
              <span>Video Game</span>
            </div>
          </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    
    <section>
      <div class="section1">
        
        <div class="swiper">
          
          <div class="swiper-wrapper">
            
            <div class="swiper-slide">
              <div class="caixa1">
                <div class="tipo-avaliacoes">
                  <div class="avaliacao-estrelas">
                    <img src="imgs/carrinho2.svg" class="carrinho2">
                    <img src="imgs/coracao2.svg" class="favorito2">

                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-regular.svg" width="14px">
                    </div>
                  </div>
                  <div class="avaliacaoQuantidade">(362)</div>
                </div>
                <div class="foto-produto">
                  <img src="imgs/ps5.png" alt="">
                </div>
                <div class="textos">
                  <div class="titulo-produto">
                    <span>Console PlayStation 5 Slim Sony, SSD 1TB, Com Controle Sem Fio DualSense</span>
                  </div>
                  <div class="preco-normal-estoque">
                    <span style="text-decoration: line-through;">R$ 4.499,00</span><span>Restam 48 Unid.</span>
                  </div>
                  <div class="preco-vista">
                    <span class="preco">R$ 3.626,07</span> <span class="desconto">-2%</span>
                  </div>
                  <div class="forma-pagamento">
                    <span class="forma-pagamento-vista">À vista no PIX</span><span class="forma-pagamento-parcelado">ou
                      até
                      <span style="font-weight: bold;">10x de R$ 389,90</span></span>
                  </div>
                  <input type="button" value="COMPRAR" class="btn-comprar">
                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="caixa2">
                <div class="tipo-avaliacoes">
                  <div class="avaliacao-estrelas">
                    <img src="imgs/carrinho2.svg" class="carrinho2">
                    <img src="imgs/coracao2.svg" class="favorito2">
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-regular.svg" width="14px">
                    </div>
                  </div>
                  <div class="avaliacaoQuantidade">(362)</div>
                </div>
                <div class="foto-produto">
                  <img src="imgs/rtx5090.png" alt="">
                </div>
                <div class="textos">
                  <div class="titulo-produto">
                    <span>Placa de Video Gainward NVIDIA GeForce RTX 5090 Phantom 32GB GDDR7</span>
                  </div>
                  <div class="preco-normal-estoque">
                    <span style="text-decoration: line-through;">R$ 24.499,00</span><span>Restam 4 Unid.</span>
                  </div>
                  <div class="preco-vista">
                    <span class="preco">R$ 20.626,07</span> <span class="desconto">-3%</span>
                  </div>
                  <div class="forma-pagamento">
                    <span class="forma-pagamento-vista">À vista no PIX</span><span class="forma-pagamento-parcelado">ou
                      até
                      <span style="font-weight: bold;">10x de R$ 2.062,00</span></span>
                  </div>
                  <input type="button" value="COMPRAR" class="btn-comprar">
                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="caixa3">
                <div class="tipo-avaliacoes">
                  <div class="avaliacao-estrelas">
                    <img src="imgs/carrinho2.svg" class="carrinho2">
                    <img src="imgs/coracao2.svg" class="favorito2">
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-regular.svg" width="14px">
                    </div>
                  </div>
                  <div class="avaliacaoQuantidade">(67)</div>
                </div>
                <div class="foto-produto">
                  <img src="imgs/ps5-pro-dualsense-image-block-01-en-16aug24.webp" alt="" width="104%">
                </div>
                <div class="textos">
                  <div class="titulo-produto">
                    <span>Console PlayStation 5 Pro Sony, SSD 2TB, Com Controle Sem Fio DualSense, Branco</span>
                  </div>
                  <div class="preco-normal-estoque">
                    <span style="text-decoration: line-through;">R$ 6.999,86</span><span>Restam 48 Unid.</span>
                  </div>
                  <div class="preco-vista">
                    <span class="preco">R$ 6.137,07</span> <span class="desconto">-2%</span>
                  </div>
                  <div class="forma-pagamento">
                    <span class="forma-pagamento-vista">À vista no PIX</span><span class="forma-pagamento-parcelado">ou
                      até
                      <span style="font-weight: bold;">10x de R$ 389,90</span></span>
                  </div>
                  <input type="button" value="COMPRAR" class="btn-comprar">
                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="caixa4">
                <div class="tipo-avaliacoes">
                  <div class="avaliacao-estrelas">
                    <img src="imgs/carrinho2.svg" class="carrinho2">
                    <img src="imgs/coracao2.svg" class="favorito2">
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-regular.svg" width="14px">
                    </div>
                  </div>
                  <div class="avaliacaoQuantidade">(362)</div>
                </div>
                <div class="foto-produto">
                  <img src="imgs/notebook_aspire_5_front_lg.png" alt="" width="75%">
                </div>
                <div class="textos">
                  <div class="titulo-produto">
                    <span>Notebook Acer Aspire 5 AMD Ryzen7-5700U, 16GB RAM, SSD 512GB, 15.6" FHD IPS</span>
                  </div>
                  <div class="preco-normal-estoque">
                    <span style="text-decoration: line-through;">R$ 4.499,00</span><span>Restam 48 Unid.</span>
                  </div>
                  <div class="preco-vista">
                    <span class="preco">R$ 3.199,00</span> <span class="desconto">-2%</span>
                  </div>
                  <div class="forma-pagamento">
                    <span class="forma-pagamento-vista">À vista no PIX</span><span class="forma-pagamento-parcelado">ou
                      até
                      <span style="font-weight: bold;">10x de R$ 389,90</span></span>
                  </div>
                  <input type="button" value="COMPRAR" class="btn-comprar">
                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="caixa5">
                <div class="tipo-avaliacoes">
                  <div class="avaliacao-estrelas">
                    <img src="imgs/carrinho2.svg" class="carrinho2">
                    <img src="imgs/coracao2.svg" class="favorito2">
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-regular.svg" width="14px">
                    </div>
                  </div>
                  <div class="avaliacaoQuantidade">(362)</div>
                </div>
                <div class="foto-produto">
                  <img src="imgs/iphone-15-pro-titanio-azul-700x700.webp" alt="" width="54.5%">
                </div>
                <div class="textos">
                  <div class="titulo-produto">
                    <span>Iphone 15 Apple, 128GB, Preto, Tela De 6,1 Polegadas, 5g E Câmera De 48 Mp</span>
                  </div>
                  <div class="preco-normal-estoque">
                    <span style="text-decoration: line-through;">R$ 6.349,97</span><span>Restam 48 Unid.</span>
                  </div>
                  <div class="preco-vista">
                    <span class="preco">R$ 5.426,22</span> <span class="desconto">-2%</span>
                  </div>
                  <div class="forma-pagamento">
                    <span class="forma-pagamento-vista">À vista no PIX</span><span class="forma-pagamento-parcelado">ou
                      até
                      <span style="font-weight: bold;">10x de R$ 542,62</span></span>
                  </div>
                  <input type="button" value="COMPRAR" class="btn-comprar">
                </div>

              </div>
            </div>
            <div class="swiper-slide">
              <div class="caixa5">
                <div class="tipo-avaliacoes">
                  <div class="avaliacao-estrelas">
                    <img src="imgs/carrinho2.svg" class="carrinho2">
                    <img src="imgs/coracao2.svg" class="favorito2">
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-solid.svg" width="14px">
                    </div>
                    <div class="estrela1">
                      <img src="imgs/star-regular.svg" width="14px">
                    </div>
                  </div>
                  <div class="avaliacaoQuantidade">(362)</div>
                </div>
                <div class="foto-produto">
                  <img src="imgs/iphone-15-pro-titanio-azul-700x700.webp" alt="" width="54.5%">
                </div>
                <div class="textos">
                  <div class="titulo-produto">
                    <span>Iphone 15 Apple, 128GB, Preto, Tela De 6,1 Polegadas, 5g E Câmera De 48 Mp</span>
                  </div>
                  <div class="preco-normal-estoque">
                    <span style="text-decoration: line-through;">R$ 6.349,97</span><span>Restam 48 Unid.</span>
                  </div>
                  <div class="preco-vista">
                    <span class="preco">R$ 5.426,22</span> <span class="desconto">-2%</span>
                  </div>
                  <div class="forma-pagamento">
                    <span class="forma-pagamento-vista">À vista no PIX</span><span class="forma-pagamento-parcelado">ou
                      até
                      <span style="font-weight: bold;">10x de R$ 542,62</span></span>
                  </div>
                  <input type="button" value="COMPRAR" class="btn-comprar">
                </div>

              </div>
            </div>
          </div>
          
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div> 
      </div>
    </section>
    
    <img src="imgs/Captura de tela 2025-06-01 002154.png" alt="" width="1334px" height="100%">      
          
  </main>
  <footer>
    
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</html>