<?php
include("db.php");
$cliente = $_COOKIE["cliente"];
if (!isset($_COOKIE["cliente"])) {
?>
  <script type="text/javascript">
    window.location.replace("signin.php");
  </script>
  <?php
}
$selCli = mysqli_query($conn, "SELECT * FROM user_geral WHERE email='$cliente' ");
$ascCli = mysqli_fetch_assoc($selCli);

if (isset($_POST["enviar"])) {
  $iban = $_POST["iban"];
  $total = $_POST["total"];
  //$idCart = time("h");

  $isr = "INSERT INTO `carrinhofeito`( `user`, `total`, `descricao`, `banco`, `iban_conta`) 
  VALUES ('$cliente','$total','default','BAI','$iban')";
  $cog = mysqli_query($conn, $isr);
  if ($cog) {
    $upd = mysqli_query($conn, "UPDATE `carrinho` SET `estado`='sim',`carrinho`='$idCart' WHERE usuario='$cliente' ");
  ?>
    <script type="text/javascript">
      window.location.replace("clientarea.php");
    </script>
<?php
  }
}
?>
<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Husai, Tecnologia & Inovações, hospedagen, criação de sites, iOs, android, Namibe, Luanda, Angola">
  <meta name="Raúl Afonso, Walter Cabral Kahamba, Nedjai Mohamed(coodiv.net)" content="coodiv.net (nedjai mohamed),Husai Angola, Namibe">
  <title>Husai | Carrinho</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/husai.css">

  <link rel="icon" href="icone.png">
  <style type="text/css">
    /* Global settings */

    .product-image {
      float: left;
      width: 20%;
    }

    .product-details {
      float: left;
      width: 37%;
    }

    .product-price {
      float: left;
      width: 12%;
    }

    .product-quantity {
      float: left;
      width: 10%;
    }

    .product-removal {
      float: left;
      width: 9%;
    }

    .product-line-price {
      float: left;
      width: 12%;
      text-align: right;
    }

    /* This is used as the traditional .clearfix class */
    .group:before,
    .shopping-cart:before,
    .column-labels:before,
    .product:before,
    .totals-item:before,
    .group:after,
    .shopping-cart:after,
    .column-labels:after,
    .product:after,
    .totals-item:after {
      content: '';
      display: table;
    }

    .group:after,
    .shopping-cart:after,
    .column-labels:after,
    .product:after,
    .totals-item:after {
      clear: both;
    }

    .group,
    .shopping-cart,
    .column-labels,
    .product,
    .totals-item {
      zoom: 1;
    }

    /* Apply clearfix in a few places */
    /* Apply dollar signs */

    /* Body/Header stuff */
    h1 {
      font-weight: 100;
    }

    label {
      color: #aaa;
    }

    .shopping-cart {
      margin-top: -45px;
    }

    /* Column headers */
    .column-labels label {
      padding-bottom: 15px;
      margin-bottom: 15px;
      border-bottom: 1px solid #eee;
    }

    .column-labels .product-image,
    .column-labels .product-details,
    .column-labels .product-removal {
      text-indent: -9999px;
    }

    /* Product entries */
    .product {
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 1px solid #eee;
    }

    .product .product-image {
      text-align: center;
    }

    .product .product-image img {
      width: 100px;
    }

    .product .product-details .product-title {
      margin-right: 20px;
      font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
    }

    .product .product-details .product-description {
      margin: 5px 20px 5px 0;
      line-height: 1.4em;
    }

    .product .product-quantity input {
      width: 40px;
    }

    .product .remove-product {
      border: 0;
      padding: 4px 8px;
      background-color: #c66;
      color: #fff;
      font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
      font-size: 12px;
      border-radius: 3px;
    }

    .product .remove-product:hover {
      background-color: #a44;
    }

    /* Totals section */
    .totals .totals-item {
      float: right;
      clear: both;
      width: 100%;
      margin-bottom: 10px;
    }

    .totals .totals-item label {
      float: left;
      clear: both;
      width: 79%;
      text-align: right;
    }

    .totals .totals-item .totals-value {
      float: right;
      width: 21%;
      text-align: right;
    }

    .totals .totals-item-total {
      font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
    }

    .checkout {
      float: right;
      border: 0;
      margin-top: 20px;
      padding: 6px 25px;
      background-color: #6b6;
      color: #fff;
      font-size: 25px;
      border-radius: 3px;
    }

    .checkout:hover {
      background-color: #494;
    }

    /* Make adjustments for tablet */
    @media screen and (max-width: 650px) {
      .shopping-cart {
        margin: 0;
        padding-top: 20px;
        border-top: 1px solid #eee;
      }

      .column-labels {
        display: none;
      }

      .product-image {
        float: right;
        width: auto;
      }

      .product-image img {
        margin: 0 0 10px 10px;
      }

      .product-details {
        float: none;
        margin-bottom: 10px;
        width: auto;
      }

      .product-price {
        clear: both;
        width: 70px;
      }

      .product-quantity {
        width: 100px;
      }

      .product-quantity input {
        margin-left: 20px;
      }



      .product-removal {
        width: auto;
      }

      .product-line-price {
        float: right;
        width: 70px;
      }
    }

    /* Make more adjustments for phone */
    @media screen and (max-width: 350px) {
      .product-removal {
        float: right;
      }

      .product-line-price {
        float: right;
        clear: left;
        width: auto;
        margin-top: 10px;
      }



      .totals .totals-item label {
        width: 60%;
      }

      .totals .totals-item .totals-value {
        width: 40%;
      }
    }
  </style>
</head>

<body>
  <!-- start body -->


  <div class="preloader">
    <!-- start preloader -->
    <div class="preloader-container">
      <img src="icone.png" width="50">
      <br><br>
      <span>Carregando...</span>
    </div>
  </div>
  <!-- end preloader -->

  <div id="coodiv-header" class="subpages-header-min moon-edition">
    <div class="bg_overlay_header">
      <div id="particles-bg"></div>
      <img src="fundo.png" alt="img-bg">
    </div>
    <!-- Fixed navbar -->
    <nav id="coodiv-navbar-header" class="navbar navbar-expand-md " style="background: #93278F;">
      <div class="container main-header-coodiv-s">
        <a class="navbar-brand" href="index.php">
          <img class="w-logo" src="logo2.png" alt="" />
          <img class="b-logo" src="logo2.png" alt="" />
        </a>
        <button class="navbar-toggle offcanvas-toggle menu-btn-span-bar ml-auto" data-toggle="offcanvas" data-target="#offcanvas-menu-home">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse navbar-offcanvas" id="offcanvas-menu-home" style="background: #93278F;">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown " onclick="location.href='index.php'">
              <a class="nav-link" href="index.php" role="button" id="header-first-drop-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Página Inicial</a>
            </li>

            <li class="nav-item megamenu dropdown">
              <a class="nav-link" href="#" role="button" id="services-megamenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços <span class="megamenu-toggle"></span></a>
              <div class="dropdown-menu coodiv-dropdown-megamnu default-megamenu" aria-labelledby="services-megamenu">
                <div class="d-flex justify-content-center bd-highlight mb-3 megamenu-items-header">
                  <div class="p-2 bd-highlight">
                    <a href="hosting.php">
                      <i class="bredhicon-sun" style="background: #F0E738; color: #93278F;"></i>
                      <h5>Hospedagem</h5>
                      <!-- <p>A hospedagem é um espaço no servidor que armazena todos os arquivos que compõem um site para deixá-lo acessível na internet.</p> -->
                    </a>
                  </div>

                  <div class="p-2 bd-highlight">
                    <a href="ssl.php">
                      <i class="bredhicon-award-empty" style="background: #F0E738; color: #93278F;"></i>
                      <h5>Certificado SSL</h5>
                      <!-- <p>Certificado SSL é um certificado digital que autentica a identidade de um site e possibilita uma conexão criptografada.</p> -->
                    </a>
                  </div>

                  <div class="p-2 bd-highlight">
                    <a href="websites.php">
                      <i class="bredhicon-steering-wheel" style="background: #F0E738; color: #93278F;"></i>
                      <h5>Criação de Site</h5>
                      <!-- <p> um site funciona como uma porta de entrada da sua empresa na internet, baseado neste conjunto de páginas que precisam de uma estrutura para ficar armazenada e de um nome de domínio.</p> -->
                    </a>
                  </div>
                  <div class="p-2 bd-highlight">
                    <a href="criacao_app.php">
                      <i class="bredhicon-mobile" style="background: #F0E738; color: #93278F;"></i>
                      <h5>Criação de Aplicativos</h5>
                      <!-- <p> um site funciona como uma porta de entrada da sua empresa na internet, baseado neste conjunto de páginas que precisam de uma estrutura para ficar armazenada e de um nome de domínio.</p> -->
                    </a>
                  </div>
                  <div class="p-2 bd-highlight">
                    <a href="domains.php">
                      <i class="bredhicon-headphones" style="background: #F0E738; color: #93278F;"></i>
                      <h5>Domínios</h5>
                      <!-- <p>O domínio geralmente usa o nome da sua organização e um sufixo padrão da Internet, como minhaempresa.com ou universidadeestadual.edu.</p> -->
                    </a>
                  </div>

                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" role="button" id="webhosting-megamenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Hospedagem <span class="nav-new-tag" style="color: #93278F;">Novo</span></a>
              <div class="dropdown-menu coodiv-dropdown-header web-menu" aria-labelledby="webhosting-megamenu">
                <ul class="web-hosting-menu-header">
                  <li><i class="fas fa-server"></i> <a href="hosting.php">Hospedagem Compartilhada <span> A hospedagem compartilhada permite que diversos sites utilizem um único servidor.</span></a></li>
                  <li><i class="fab fa-squarespace"></i> <a href="dedicated.php">hospedagem dedicada <span>A hospedagem dedicada é uma opção de hospedagem da Internet em que um servidor (ou servidores) físico fica dedicado a um único cliente comercial.</span></a></li>
                  <li><i class="fab fa-cpanel"></i> <a href="cpanel.php">Revendedores cPanel <span>Gerenciador que permite revender diversas hospedagens e administrar uma carteira própria de clientes.</span></a></li>
                </ul>
              </div>
            </li>


            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" id="header-help-drop-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos<span class="sr-only">(current)</span></a>
              <ul class="dropdown-menu coodiv-dropdown-header" aria-labelledby="header-help-drop-down">
                <li><a class="dropdown-item" href="bankya.php">Bankya</a></li>
                <li><a class="dropdown-item" href="enter.php">Enter</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" id="header-help-drop-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Suporte<span class="sr-only">(current)</span></a>
              <ul class="dropdown-menu coodiv-dropdown-header" aria-labelledby="header-help-drop-down">
                <li><a class="dropdown-item" href="about.php">Sobre</a></li>
                <li><a class="dropdown-item" href="contact.php">Contate-nos</a></li>
              </ul>
            </li>

            <?php
            if (isset($_COOKIE["cliente"])) {
            ?>

              <li class="nav-item dropdown active">
                <a class="nav-link" href="#" role="button" id="header-help-drop-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Minha Conta<span class="sr-only">(current)</span></a>
                <ul class="dropdown-menu coodiv-dropdown-header" aria-labelledby="header-help-drop-down">
                  <li><a class="dropdown-item" href="clientarea.php">Perfil</a></li>
                  <li><a class="dropdown-item" href="signout.php">Sair</a></li>
                </ul>
              </li>

            <?php
            }
            ?>
          </ul>
        </div>
        <ul class="header-user-info-coodiv">
          <?php
          if (isset($_COOKIE["cliente"])) {
            $cliente = $_COOKIE["cliente"];
            $selCart = mysqli_query($conn, "SELECT * FROM carrinho WHERE usuario='$cliente' AND estado='nao' ");
          ?>
            <li onclick="location.href='Bankya/'"><a href="ordernextvery.php" class="btn btn-sm" style="background: #F0E738; border: 1px solid #F0E738; color: #93278F;"><i class="fa fa-shopping-cart"></i> Carrinho <b>(<?php echo mysqli_num_rows($selCart); ?>)</b></a>
            </li>
          <?php
          } else {
          ?>
            <li class="dropdown"><a role="button" id="header-login-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" style="background: #F0E738; border: 1px solid #F0E738; color: #93278F;"><i class="fa fa-user"></i> Entrar</a>
              <!-- user header dropdown -->
              <div class="dropdown-menu coodiv-dropdown-header user-login-dropdown" aria-labelledby="header-login-dropdown">
                <form class="user-login-dropdown-form" action="login.php" data-form="validate">
                  <div class="form-group username">
                    <input type="email" name="email" placeholder="E-mail" class="form-control" style="outline: hidden; " autocomplete="none">
                    <i class="fas fa-at"></i>
                  </div>

                  <div class="form-group password">
                    <input type="password" name="senha" placeholder="Senha" class="form-control" style="outline: hidden; " autocomplete="none">
                    <i class="fas fa-lock"></i>
                  </div>

                  <button style="background: #F0E738; color: #93278F; border:none;" data-toggle="tooltip" data-placement="left" title="login" class="user-login-dropdown-form-button" type="submit"><i class="fas fa-angle-right"></i></button>

                </form>
              </div>
              <!-- end user header dropdown -->
            </li>
          <?php
          }
          ?>


        </ul>
      </div>
    </nav>
  </div>

  <section class="padding-60-0-50 position-relative">
    <div class="container">

      <div class="the_breadcrumb_conatiner_page">
        <div class="the_breadcrumb">
          <div class="breadcrumbs"><i class="fas fa-home"></i><a href="index.php">Husai</a> / Carrinho de Compra</div>
        </div>
      </div>

      <div class="animated fadeInRight ecommerce">

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <h1 style="color: #93278F;"><em class="fa fa-shopping-cart"></em> Carrinho</h1>

        <div class="shopping-cart">

          <div class="column-labels">
            <label class="product-image">Imagem</label>
            <label class="product-details">Produto</label>
            <label class="product-price">Preço / Ano</label>
            <label class="product-quantity">Quantidade</label>
            <label class="product-removal">OPC</label>
            <label class="product-line-price">Total</label>
          </div>

          <?php
          $selCart = mysqli_query($conn, "SELECT * FROM carrinho WHERE estado='nao' AND usuario='$cliente' ORDER BY id desc");

          while ($ascCart = mysqli_fetch_assoc($selCart)) {
            $idProd = $ascCart["idprod"];
            if ($ascCart["tipo"] == "cpainel") {

              $selhostCpainel = mysqli_query($conn, "SELECT * FROM host_cpainel WHERE id='$idProd' ");
              $ascHostcpainel = mysqli_fetch_assoc($selhostCpainel);
          ?>
              <div class="product">
                <div class="product-image">
                  <img src="images.jpg">
                </div>
                <div class="product-details">
                  <div class="product-title" style="color: #93278F; font-family: Arial;">Hospedagem Cpanel</div>
                  <p class="product-description"><?php echo $ascHostcpainel["espaco"] . ', ' . $ascHostcpainel["largura"] . ', ' . $ascHostcpainel["subdominios"] . ', ' . $ascHostcpainel["email"] . ', ' . $ascHostcpainel["msyql"]; ?>.</p>
                </div>
                <div class="product-price">AOA <?php echo $ascCart["preco"]; ?></div>
                <div class="product-quantity">
                  <input type="number" value="1" min="1" max="5" disabled style="text-align: center;">
                </div>
                <div class="product-removal">
                  <button class="remove-product" style="background: #F0E738; color: #93278F; border: none; font-family: Arial;" onclick="location.href='removerProdCart.php?idProd=<?php echo $ascCart["id"]; ?>'">
                    Remover
                  </button>
                </div>
                <div class="product-line-price">AOA <?php echo $ascCart["preco"]; ?></div>
              </div>
            <?php
            } elseif ($ascCart["tipo"] == "dominio") {
            ?>
              <div class="product">
                <div class="product-image">
                  <img src="3094464.png">
                </div>
                <div class="product-details">
                  <div class="product-title" style="color: #93278F; font-family: Arial;"><?php echo $ascCart["designacao"]; ?></div>
                  <p class="product-description" style="color: green; font-weight: 400;"> <em class="fa fa-check-circle"></em> <?php echo $ascCart["dominio"]; ?>.</p>
                </div>
                <div class="product-price">AOA <?php echo $ascCart["preco"]; ?></div>
                <div class="product-quantity">
                  <input type="number" value="1" min="1" max="5" disabled style="text-align: center;">
                </div>
                <div class="product-removal">
                  <button class="remove-product" style="background: #F0E738; color: #93278F; border: none; font-family: Arial;" onclick="location.href='removerProdCart.php?idProd=<?php echo $ascCart["id"]; ?>'">
                    Remover
                  </button>
                </div>
                <div class="product-line-price">AOA <?php echo $ascCart["preco"]; ?></div>
              </div>
            <?php
            } elseif ($ascCart["tipo"] == "ssl") {
              $selCert = mysqli_query($conn, "SELECT * FROM certificado_ssl WHERE id='$idProd' ");
              $ascCert = mysqli_fetch_assoc($selCert);
            ?>
              <div class="product">
                <div class="product-image">
                  <img src="1034503.png">
                </div>
                <div class="product-details">
                  <div class="product-title" style="color: #93278F; font-family: Arial;"><?php echo $ascCert["nome"]; ?></div>
                  <p class="product-description"> <?php echo $ascCert["descricao"]; ?>.</p>
                </div>
                <div class="product-price">AOA <?php echo $ascCart["preco"]; ?></div>
                <div class="product-quantity">
                  <input type="number" value="1" min="1" max="5" disabled style="text-align: center;">
                </div>
                <div class="product-removal">
                  <button class="remove-product" style="background: #F0E738; color: #93278F; border: none; font-family: Arial;" onclick="location.href='removerProdCart.php?idProd=<?php echo $ascCart["id"]; ?>'">
                    Remover
                  </button>
                </div>
                <div class="product-line-price">AOA <?php echo $ascCart["preco"]; ?></div>
              </div>
            <?php
            } elseif ($ascCart["tipo"] == "vps") {
              $selVPS = mysqli_query($conn, "SELECT * FROM host_vps WHERE id='$idProd' ");
              $ascVPS = mysqli_fetch_assoc($selVPS);
            ?>
              <div class="product">
                <div class="product-image">
                  <img src="servers-icon-png-13.jpg">
                </div>
                <div class="product-details">
                  <div class="product-title" style="color: #93278F; font-family: Arial;">Hospedagem VPS</div>
                  <p class="product-description"> <?php echo $ascVPS["nome"] . ', ' . $ascVPS["ram"] . ', ' . $ascVPS["cpu"] . ', ' . $ascVPS["transferencia"] . ', ' . $ascVPS["sistema"]; ?>.</p>
                </div>
                <div class="product-price">AOA <?php echo $ascCart["preco"]; ?></div>
                <div class="product-quantity">
                  <input type="number" value="1" min="1" max="5" disabled style="text-align: center;">
                </div>
                <div class="product-removal">
                  <button class="remove-product" style="background: #F0E738; color: #93278F; border: none; font-family: Arial;" onclick="location.href='removerProdCart.php?idProd=<?php echo $ascCart["id"]; ?>'">
                    Remover
                  </button>
                </div>
                <div class="product-line-price">AOA <?php echo $ascCart["preco"]; ?></div>
              </div>
            <?php
            } elseif ($ascCart["tipo"] == "vpsdedicado") {
              $selVPS = mysqli_query($conn, "SELECT * FROM host_vps WHERE id='$idProd' ");
              $ascVPS = mysqli_fetch_assoc($selVPS);
            ?>
              <div class="product">
                <div class="product-image">
                  <img src="servers-icon-png-13.jpg">
                </div>
                <div class="product-details">
                  <div class="product-title" style="color: #93278F; font-family: Arial;">Hospedagem Dedicada</div>
                  <p class="product-description"> Domínio, Certificado SSL, E-mail personalizado, Assistencia Técnica.</p>
                </div>
                <div class="product-price">AOA <?php echo $ascCart["preco"]; ?></div>
                <div class="product-quantity">
                  <input type="number" value="1" min="1" max="5" disabled style="text-align: center;">
                </div>
                <div class="product-removal">
                  <button class="remove-product" style="background: #F0E738; color: #93278F; border: none; font-family: Arial;" onclick="location.href='removerProdCart.php?idProd=<?php echo $ascCart["id"]; ?>'">
                    Remover
                  </button>
                </div>
                <div class="product-line-price">AOA <?php echo $ascCart["preco"]; ?></div>
              </div>
            <?php
            }
            ?>
          <?php
          }
          ?>



          <div class="totals">
            <div class="totals-item">
              <label>Subtotal</label>
              <?php
              $soma =  mysqli_query($conn, "SELECT sum(preco) FROM carrinho WHERE usuario ='$cliente' and estado='nao' ");
              $linhas = mysqli_num_rows($soma);
              while ($linhas = mysqli_fetch_array($soma)) {
                $li = ($linhas['sum(preco)']);
              ?>
                <div class="totals-value" id="cart-subtotal"><?php echo $li; ?> AOA</div>
              <?php
              }
              ?>
            </div>
            <div class="totals-item">
              <label>Taxa (0%)</label>
              <div class="totals-value" id="cart-tax">0,00 AOA</div>
            </div>
            <div class="totals-item ">
              <label>Total</label>
              <div class="totals-value" id="cart-total"><?php echo $li; ?> AOA</div>
            </div>
          </div>


        </div>
        <div id="pagamento" style="display: block; margin: auto; width: 100%; margin-top: 5px;  height: auto; padding: 10px; background: #f5f5f5; border-radius: 8px;">
          <h5 style="font-size: 12pt; border-bottom: 1px solid #ccc; padding-bottom: 6px; width: 100%"><img src="iconi.png" width="20"> Formulario de Pagamento <b><em class="fa fa-sync" style="cursor: pointer; float: right; color: #93278F;"></em></b></h5>
          <h6>Nome: Husai, Tecnologia & Inovações</h6>
          <h6>Nº de Conta: 282910001</h6>
          <h6>IBAN: AO06 0040000028291000109</h6>
          <h6>Banco: BAI</h6>
          <h6 style="color: #93278F;">* Total do Carrinho: <?php echo $li; ?> AOA</h6>
          <p>* Por favor faça a transfência correspondente ao valor total do carrinho e nos informe os seu dados bancarios que usaste para fazer a transferencia.</p>
          <form method="POST" style="border: 1px solid #ccc; width: 100%; display: block; margin: auto; padding: 10px;">
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Informe o seu nº de conta/IBAN:</label>
              <input type="text" class="form-control" id="email" placeholder="Nº de Conta/IBAN" name="iban" required>
              <input type="text" hidden name="total" value="<?php echo $li; ?>">
              <small style="color: red;">* nº de conta caso for do mesmo banco</small>
            </div>
            <button type="submit" class="btn btn-primary" name="enviar" style="background: #F0E738; float: right; color: #93278F; border: none;">Efectuar Pagamento</button><br><br>
          </form>
        </div>

      </div>

      <br><br>
    </div>
  </section>

  <section class="footer-section-banner" style="background: #F0E738;">
    <div class="container">
      <div class="row free-trial-footer-banner">
        <div class="col-md-8">
          <h5 class="free-trial-footer-banner-title" style="color: #93278F;">inscreva-se agora e tenha um mês grátis de hospedagem deluxe</h5>
          <p class="free-trial-footer-banner-text" style="color: #93278F;">Oferecemos um mês de serviço gratuito para novos clientes.* Inscreva-se para sua oferta de teste e instantaneamente tenha hospedagem de luxo em sua conta com domínio gratuito incluído.</p>
        </div>

        <div class="col-md-4 free-trial-footer-links d-flex mx-auto flex-column">
          <div class="mb-auto"></div>
          <div class="mb-auto">
            <a class="sign-btn" href="signup.php" style="background: #93278F;">inscrever-se</a>
            <a class="log-btn" href="signin.php">Conecte-se</a>
          </div>
          <div class="mt-auto"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="footer-section" style="background: #93278F;">
    <div class="container">
      <div class="row">
        <div class="col-md-9 quiq-links-footer">

          <div class="row">
            <div class="col-md-3">
              <h5 class="quiq-links-footer-title">Evolua!!</h5>
              <p style="text-align:left;">Transforme a sua empresa por meio
                da tecnologia e aumente os seus resultados.</p>
              <div class="mb-auto">
                <a class="log-btn btn-husai" href="#">Ver todos os planos</a>
              </div>

            </div>

            <div class="col-md-4">
              <h5 class="quiq-links-footer-title margem-top-lista-link"><em class="fa fa-angle-right" style="margin-right:5px"></em>Links Rápidos</h5>
              <ul class="quiq-links-footer-ul">
                <li><a href="#" style="color: #f5f5f5;">anúncios da nossa empresa</a></li>
                <li><a href="#" style="color: #f5f5f5;">Base de conhecimento</a></li>
                <li><a href="#" style="color: #f5f5f5;">Transferências</a></li>
                <li><a href="#" style="color: #f5f5f5;">Status da rede</a></li>
                <li><a href="#" style="color: #f5f5f5;">Meus tíquetes de suporte</a></li>
                <li><a href="#" style="color: #f5f5f5;">Registrar um novo domínio</a></li>
                <li><a href="#" style="color: #f5f5f5;">Transferir novo domínio</a></li>
                <li><a href="#" style="color: #f5f5f5;">Produtos de software</a></li>
                <li><a href="#" style="color: #f5f5f5;">Hospedagem Dedicada</a></li>
              </ul>
            </div>

            <div class="col-md-4">
              <ul class="quiq-links-footer-ul">
                <li><a href="#" style="color: #f5f5f5;">Entre em contato conosco</a></li>
                <li><a href="#" style="color: #f5f5f5;">Status da rede</a></li>
                <li><a href="#" style="color: #f5f5f5;">Esqueceu sua senha?</a></li>
                <li><a href="#" style="color: #f5f5f5;">Crie uma conta conosco</a></li>
                <li><a href="#" style="color: #f5f5f5;">Faça login na sua conta</a></li>
                <li><a href="#" style="color: #f5f5f5;">fazer um novo pagamento</a></li>
                <li><a href="#" style="color: #f5f5f5;">Revisão e finalização da compra</a></li>
                <li><a href="#" style="color: #f5f5f5;">Área do cliente</a></li>
                <li><a href="#" style="color: #f5f5f5;">gerencie sua conta</a></li>
              </ul>
            </div>

          </div>
        </div>

        <div class="col-md-3">
          <!-- <h5 class="quiq-links-footer-title">Método de Pagamento</h5>
                    <p class="secure-img-footer-area">
                        <img src="bankya2.png" alt="" width="100" />
                        <span>isso é apenas por motivo de demonstração</span>
                    </p> -->

          <div class="footer-contact-method">
            <a href="#">
              <span>envia-nos um email :</span>
              <b>suporte@husai.co</b>
              <i class="fas fa-at" style="color: #93278F;"></i>
            </a>

            <a href="#">
              <span>ligue para nós:</span>
              <b>+244 932 671 519</b>
              <i class="fas fa-phone" style="color: #93278F;"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="mr-tp-40 row justify-content-between footer-area-under barra-top">
        <div class="col-md-4">
          <a href="#"><img class="footer-logo-blue" src="logo.png" alt="" /></a>
          <div class="final-footer-area-text" style="color: #f5f5f5;">
            © Copyright 2022 Husai , Todos os direitos reservados
          </div>
          <div class="footer-social-icons">
            <a href="#" style="background: #F0E738; color: #93278F;"><i class="fab fa-facebook-f" style="line-height:2"></i></a>
            <a href="#" style="background: #F0E738; color: #93278F;"><i class="fab fa-twitter" style="line-height:2"></i></a>
            <a href="#" style="background: #F0E738; color: #93278F;"><i class="fab fa-instagram" style="line-height:2"></i></a>
            <a href="#" style="background: #F0E738; color: #93278F;"><i class="fab fa-youtube" style="line-height:2"></i></a>
          </div>
        </div>

        <div class="col-md-8 row">
          <div class="col-md-12">
            <div class="col-md-6">
              <a href="#"><img class="footer-logo-blue" src="img/husai/clientes/lupa.png" alt="" /></a>
              <a href="#"><img class="footer-logo-blue" src="img/husai/logos/bankya_logo.jpg" alt="" /></a>
              <a href="#"><img class="footer-logo-blue" src="img/husai/logos/enter_logo.png" alt="" /></a>
            </div>

          </div>

          <ul class="col-md-12 under-footer-ullist" style="text-transform: none ;">
            <li><span style="text-decoration: bold;">Serviços: </span> <a href="#">Criação de Site</a> | <a href="#">Hospedagem</a> | <a href="#">Dominios</a> | <a href="#">Certficado SSL</a></li>
            <li><span>Atenção: </span><a href="#">Política de Privacidade</a> | <a href="#">Anti-Spam</a>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- jquery -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <!-- bootstrap JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!-- template JavaScript -->
  <script src="js/template-scripts.js"></script>
  <!-- flickity JavaScript -->
  <script src="js/flickity.pkgd.min.js"></script>
  <!-- carousel JavaScript -->
  <script src="owlcarousel/owl.carousel.min.js"></script>
  <!-- parallax JavaScript -->
  <script src="js/parallax.min.js"></script>
  <!-- mailchamp JavaScript -->
  <script src="js/mailchamp.js"></script>
  <!-- bootstrap offcanvas -->
  <script src="js/bootstrap.offcanvas.min.js"></script>
  <!-- touchSwipe JavaScript -->
  <script src="js/jquery.touchSwipe.min.js"></script>

  <!-- seconde style additionel JavaScript -->
  <script src="js/particles-code.js"></script>
  <script src="js/particles.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script type="text/javascript">


  </script>
</body>

</html>