<?php
include("db.php");
$idProduto = $_GET["idProduto"];
$tipo = $_GET["tipo"];

if (isset($_POST["irVeri"])) {
    $dominio = $_POST["dominio"];
    $ext = $_POST["ext"];
    $dominioGeral = $dominio . '' . $ext;
    $selDom = mysqli_query($conn, "SELECT * FROM dominios WHERE nome='$ext' ");
    $ascDOm = mysqli_fetch_assoc($selDom);
    $idDom = $ascDOm["id"];
    $precoD = $ascDOm["preco"];
    if (!isset($_COOKIE["cliente"])) {
?>
        <script type="text/javascript">
            window.location.replace("signin.php");
        </script>
        <?php
    } else {
        $cliente = $_COOKIE["cliente"];
        $selCli = mysqli_query($conn, "SELECT * FROM user_geral WHERE email='$cliente' ");
        $ascCli = mysqli_fetch_assoc($selCli);
        $user = $ascCli["email"];
        $selCpainel = mysqli_query($conn, "SELECT * FROM host_cpainel WHERE id='$idProduto' ");
        $ascCpainel = mysqli_fetch_assoc($selCpainel);
        $precoCpainel = $ascCpainel["preco"];
        $insert = "INSERT INTO `carrinho`(`idprod`, `tipo`, `dominio`, `designacao`, `quantidade`, `usuario`, `preco`) VALUES ('$idProduto','$tipo','null','null',1,'$user','$precoCpainel')";
        $cog = mysqli_query($conn, $insert);
        if ($cog) {
            $isr = "INSERT INTO `carrinho`(`idprod`, `tipo`, `dominio`, `designacao`, `quantidade`, `usuario`,`preco`) VALUES ('$idDom','dominio','$dominioGeral','Registro de Domínio',1,'$user','$precoD')";
            $cogd = mysqli_query($conn, $isr);
            if ($cogd) {
        ?>
                <script type="text/javascript">
                    window.location.replace("ordernextvery.php");
                </script>
        <?php
            }
        }
    }
}

if (isset($_POST["irVeriD"])) {
    $dominio = $_POST["dominio"];
    $ext = $_POST["ext"];
    $dominioGeral = $dominio . '' . $ext;
    $selDom = mysqli_query($conn, "SELECT * FROM dominios WHERE nome='$ext' ");
    $ascDOm = mysqli_fetch_assoc($selDom);
    $idDom = $ascDOm["id"];
    $precoD = $ascDOm["preco"];
    if (!isset($_COOKIE["cliente"])) {
        ?>
        <script type="text/javascript">
            window.location.replace("signin.php");
        </script>
        <?php
    } else {
        $cliente = $_COOKIE["cliente"];
        $selCli = mysqli_query($conn, "SELECT * FROM user_geral WHERE email='$cliente' ");
        $ascCli = mysqli_fetch_assoc($selCli);
        $user = $ascCli["email"];
        $isr = "INSERT INTO `carrinho`(`idprod`, `tipo`, `dominio`, `designacao`, `quantidade`, `usuario`, `preco`) VALUES ('$idDom','dominio','$dominioGeral','Registro de Domínio',1,'$user','$precoD')";
        $cogd = mysqli_query($conn, $isr);
        if ($cogd) {
        ?>
            <script type="text/javascript">
                window.location.replace("ordernextvery.php");
            </script>
        <?php
        }
    }
}

if (isset($_POST["irTranf"])) {
    $dominio = $_POST["dominio"];
    $ext = $_POST["ext"];
    $dominioGeral = $dominio . '' . $ext;
    $selDom = mysqli_query($conn, "SELECT * FROM dominios WHERE nome='$ext' ");
    $ascDOm = mysqli_fetch_assoc($selDom);
    $idDom = $ascDOm["id"];
    $precoD = $ascDOm["preco"];
    if (!isset($_COOKIE["cliente"])) {
        ?>
        <script type="text/javascript">
            window.location.replace("signin.php");
        </script>
        <?php
    } else {
        $cliente = $_COOKIE["cliente"];
        $selCli = mysqli_query($conn, "SELECT * FROM user_geral WHERE email='$cliente' ");
        $ascCli = mysqli_fetch_assoc($selCli);
        $user = $ascCli["email"];
        $selCpainel = mysqli_query($conn, "SELECT * FROM host_cpainel WHERE id='$idProduto' ");
        $ascCpainel = mysqli_fetch_assoc($selCpainel);
        $precoCpainel = $ascCpainel["preco"];
        $insert = "INSERT INTO `carrinho`(`idprod`, `tipo`, `dominio`, `designacao`, `quantidade`, `usuario`, `preco`) VALUES ('$idProduto','$tipo','null','null',1,'$user','$precoCpainel')";
        $cog = mysqli_query($conn, $insert);
        if ($cog) {
            $isr = "INSERT INTO `carrinho`(`idprod`, `tipo`, `dominio`, `designacao`, `quantidade`, `usuario`, `preco`) VALUES ('$idDom','dominio','$dominioGeral','Transferir Domínio para Husai',1,'$user','$precoD')";
            $cogd = mysqli_query($conn, $isr);
            if ($cogd) {
        ?>
                <script type="text/javascript">
                    window.location.replace("ordernextvery.php");
                </script>
        <?php
            }
        }
    }
}
if (isset($_POST["irTranfD"])) {
    $dominio = $_POST["dominio"];
    $ext = $_POST["ext"];
    $dominioGeral = $dominio . '' . $ext;
    $selDom = mysqli_query($conn, "SELECT * FROM dominios WHERE nome='$ext' ");
    $ascDOm = mysqli_fetch_assoc($selDom);
    $idDom = $ascDOm["id"];
    $precoD = $ascDOm["preco"];
    if (!isset($_COOKIE["cliente"])) {
        ?>
        <script type="text/javascript">
            window.location.replace("signin.php");
        </script>
        <?php
    } else {
        $cliente = $_COOKIE["cliente"];
        $selCli = mysqli_query($conn, "SELECT * FROM user_geral WHERE email='$cliente' ");
        $ascCli = mysqli_fetch_assoc($selCli);
        $user = $ascCli["email"];
        $isr = "INSERT INTO `carrinho`(`idprod`, `tipo`, `dominio`, `designacao`, `quantidade`, `usuario`, `preco`) VALUES ('$idDom','dominio','$dominioGeral','Transferir Domínio para Husai',1,'$user', '$precoD')";
        $cogd = mysqli_query($conn, $isr);
        if ($cogd) {
        ?>
            <script type="text/javascript">
                window.location.replace("ordernextvery.php");
            </script>
        <?php
        }
    }
}


if (isset($_POST["irUsar"])) {
    $dominio = $_POST["dominio"];
    $ext = $_POST["ext"];
    $dominioGeral = $dominio . '' . $ext;
    $selDom = mysqli_query($conn, "SELECT * FROM dominios WHERE nome='$ext' ");
    $ascDOm = mysqli_fetch_assoc($selDom);
    $idDom = $ascDOm["id"];
    $precoD = $ascDOm["preco"];
    if (!isset($_COOKIE["cliente"])) {
        ?>
        <script type="text/javascript">
            window.location.replace("signin.php");
        </script>
        <?php
    } else {
        $cliente = $_COOKIE["cliente"];
        $selCli = mysqli_query($conn, "SELECT * FROM user_geral WHERE email='$cliente' ");
        $ascCli = mysqli_fetch_assoc($selCli);
        $user = $ascCli["email"];
        $selCpainel = mysqli_query($conn, "SELECT * FROM host_cpainel WHERE id='$idProduto' ");
        $ascCpainel = mysqli_fetch_assoc($selCpainel);
        $precoCpainel = $ascCpainel["preco"];
        $insert = "INSERT INTO `carrinho`(`idprod`, `tipo`, `dominio`, `designacao`, `quantidade`, `usuario`, `preco`) VALUES ('$idProduto','$tipo','null','null',1,'$user','$precoCpainel')";
        $cog = mysqli_query($conn, $insert);
        if ($cog) {
            $isr = "INSERT INTO `carrinho`(`idprod`, `tipo`, `dominio`, `designacao`, `quantidade`, `usuario`, `preco`) VALUES ('$idDom','dominio','$dominioGeral','Apaontar Dominio Existente para Husai',1,'$user','$precoD')";
            $cogd = mysqli_query($conn, $isr);
            if ($cogd) {
        ?>
                <script type="text/javascript">
                    window.location.replace("ordernextvery.php");
                </script>
        <?php
            }
        }
    }
}

if (isset($_POST["irUsarD"])) {
    $dominio = $_POST["dominio"];
    $ext = $_POST["ext"];
    $dominioGeral = $dominio . '' . $ext;
    $selDom = mysqli_query($conn, "SELECT * FROM dominios WHERE nome='$ext' ");
    $ascDOm = mysqli_fetch_assoc($selDom);
    $idDom = $ascDOm["id"];
    $precoD = $ascDOm["preco"];
    if (!isset($_COOKIE["cliente"])) {
        ?>
        <script type="text/javascript">
            window.location.replace("signin.php");
        </script>
        <?php
    } else {
        $cliente = $_COOKIE["cliente"];
        $selCli = mysqli_query($conn, "SELECT * FROM user_geral WHERE email='$cliente' ");
        $ascCli = mysqli_fetch_assoc($selCli);
        $user = $ascCli["email"];
        $isr = "INSERT INTO `carrinho`(`idprod`, `tipo`, `dominio`, `designacao`, `quantidade`, `usuario`, `preco`) VALUES ('$idDom','dominio','$dominioGeral','Apaontar Dominio Existente para Husai',1,'$user','$precoD')";
        $cogd = mysqli_query($conn, $isr);
        if ($cogd) {
        ?>
            <script type="text/javascript">
                window.location.replace("ordernextvery.php");
            </script>
<?php
        }
    }
}


?>
<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bredh flat responsive HTML & WHMCS hosting and domains template">
    <meta name="author" content="coodiv.net (nedjai mohamed)">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- main css file -->
    <link href="css/main.min.css" rel="stylesheet">

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

                        <li class="nav-item megamenu dropdown active">
                            <a class="nav-link" href="#" role="button" id="services-megamenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços <span class="megamenu-toggle"></span></a>
                            <div class="dropdown-menu coodiv-dropdown-megamnu default-megamenu" aria-labelledby="services-megamenu">
                                <div class="d-flex justify-content-center bd-highlight mb-3 megamenu-items-header">
                                    <div class="p-2 bd-highlight">
                                        <a href="hosting.php">
                                        <img src="img/svgs/dedicated.svg" alt="" width="75px" height="75px" />
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
                        <li class="nav-item dropdown ">
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
                        
                        <li class="nav-item dropdown">
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
                    <?php
                    if ($_GET["tipo"] == "cpainel") {
                    ?>
                        <div class="breadcrumbs"><i class="fas fa-home"></i><a href="index.php">Husai</a> / Carrinho de Compra / Hospedagem Cpanel</div>
                    <?php
                    } elseif ($_GET["tipo"] == "vps") {
                    ?>
                        <div class="breadcrumbs"><i class="fas fa-home"></i><a href="index.php">Husai</a> / Carrinho de Compra / Hospedagem VPS</div>
                    <?php
                    } elseif ($_GET["tipo"] == "vpsdedicado") {
                    ?>
                        <div class="breadcrumbs"><i class="fas fa-home"></i><a href="index.php">Husai</a> / Carrinho de Compra / Hospedagem Dedicada</div>
                    <?php
                    } elseif ($_GET["tipo"] == "ssl") {
                    ?>
                        <div class="breadcrumbs"><i class="fas fa-home"></i><a href="index.php">Husai</a> / Carrinho de Compra / Certificado SSL</div>
                    <?php
                    } elseif ($_GET["tipo"] == "dominio") {
                    ?>
                        <div class="breadcrumbs"><i class="fas fa-home"></i><a href="index.php">Husai</a> / Carrinho de Compra / Domínio</div>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <section class="padding-20-0 with-top-border">
                <div class="container">
                    <section class="padding-20-0-0 position-relative">
                        <div class="container">

                            <div class="row justify-content-between">
                                <?php
                                if ($_GET["tipo"] == "cpainel") {
                                    $selectF = mysqli_query($conn, "SELECT * FROM host_cpainel WHERE id='$idProduto' ");
                                    $ascSHC = mysqli_fetch_assoc($selectF);
                                ?>
                                    <div class="col-md-4 row justify-content-center hosting-plan-row">
                                        <div class="col-md-12">
                                            <div class="third-pricing-table">
                                                <div class="plan-header">
                                                    <span class="headline"><?php echo $ascSHC["espaco"]; ?></span>
                                                    <span class="plan-price second-pricing-table-price monthly">
                                                        <i class="monthly">AOA <?php echo round($ascSHC["preco"] / 12); ?> <span>/mês</span></i>
                                                        <i class="yearly">$163 <span>/year</span></i>
                                                    </span>
                                                    <span class="activated-method">Ativação em minutos</span>
                                                </div>
                                                <div class="package-body">
                                                    <ul>
                                                        <li><?php echo $ascSHC["largura"]; ?></li>
                                                        <li><?php echo $ascSHC["subdominios"]; ?></li>
                                                        <li><?php echo $ascSHC["email"]; ?></li>
                                                        <li><?php echo $ascSHC["msyql"]; ?></li>
                                                        <li><?php echo $ascSHC["cpainel"]; ?></li>
                                                        <li><?php echo $ascSHC["ipdedicado"]; ?></li>
                                                    </ul>
                                                </div>
                                                <div class="package-footer">
                                                    <a href="#"><em class="fa fa-sync fa-spin"></em></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8 side-text-right-container side-text-plan-hosting">
                                        <div class="col-md-12">
                                            <h5 class="title-default" style="text-align: center;">Este serviço requer de um domínio.</h5>
                                            <div class="accordion" id="frequently-questions">

                                                <div class="questions-box">
                                                    <div id="headingOne">
                                                        <button class="btn questions-title" type="button" data-toggle="collapse" data-target="#questionone" aria-expanded="true" aria-controls="questionone">
                                                            Quero registrar um domínio
                                                        </button>
                                                    </div>

                                                    <div id="questionone" class="collapse show questions-reponse" aria-labelledby="headingOne" data-parent="#frequently-questions">
                                                        <form method="POST" style="width: 100%; padding: 0;">
                                                            <input type="text" name="dominio" value="www." class="form-control" style="width: 80%; display: inline-block;">
                                                            <select class="form-control" name="ext" style="width: 15%; display: inline-block;">
                                                                <?php
                                                                $selDominios = mysqli_query($conn, "SELECT * FROM dominios ");
                                                                while ($ascDominio = mysqli_fetch_assoc($selDominios)) {
                                                                ?>
                                                                    <option value="<?php echo $ascDominio["nome"]; ?>"><?php echo $ascDominio["nome"]; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select><br>
                                                            <button class="btn btn-default btn-sm" name="irVeri" style="background: #F0E738; color: #93278F; margin-top: 5px;">Verificar <em class="fa fa-sync" style="font-size: 10pt;"></em></button>

                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="questions-box">
                                                    <div id="headingtwo">
                                                        <button class="btn questions-title collapsed" type="button" data-toggle="collapse" data-target="#questiontwo" aria-expanded="true" aria-controls="questiontwo">
                                                            Quero transferir o meu domínio para a Husai
                                                        </button>
                                                    </div>

                                                    <div id="questiontwo" class="collapse questions-reponse" aria-labelledby="headingtwo" data-parent="#frequently-questions">
                                                        <form method="POST" style="width: 100%; padding: 0;">
                                                            <input type="text" name="dominio" value="www." class="form-control" style="width: 80%; display: inline-block;">
                                                            <select class="form-control" name="ext" style="width: 15%; display: inline-block;">
                                                                <?php
                                                                $selDominios = mysqli_query($conn, "SELECT * FROM dominios ");
                                                                while ($ascDominio = mysqli_fetch_assoc($selDominios)) {
                                                                ?>
                                                                    <option value="<?php echo $ascDominio["nome"]; ?>"><?php echo $ascDominio["nome"]; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select><br>
                                                            <button class="btn btn-default btn-sm" name="irTranf" style="background: #F0E738; color: #93278F; margin-top: 5px;">Transferir <em class="fa fa-sync" style="font-size: 10pt;"></em></button>

                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="questions-box">
                                                    <div id="headingtree">
                                                        <button class="btn questions-title collapsed" type="button" data-toggle="collapse" data-target="#questiontree" aria-expanded="true" aria-controls="questiontree">
                                                            Vou usar o meu domínio existente e apontar para a Husai
                                                        </button>
                                                    </div>

                                                    <div id="questiontree" class="collapse questions-reponse" aria-labelledby="headingtree" data-parent="#frequently-questions">
                                                        <form method="POST" style="width: 100%; padding: 0;">
                                                            <input type="text" name="dominio" value="www." class="form-control" style="width: 80%; display: inline-block;">
                                                            <select class="form-control" name="ext" style="width: 15%; display: inline-block;">
                                                                <?php
                                                                $selDominios = mysqli_query($conn, "SELECT * FROM dominios ");
                                                                while ($ascDominio = mysqli_fetch_assoc($selDominios)) {
                                                                ?>
                                                                    <option value="<?php echo $ascDominio["nome"]; ?>"><?php echo $ascDominio["nome"]; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select><br>
                                                            <button class="btn btn-default btn-sm" name="irUsar" style="background: #F0E738; color: #93278F; margin-top: 5px;">Usar domínio</em></button>

                                                        </form>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    <?php
                                } elseif ($_GET["tipo"] == "vps") {
                                    ?>
                                        <div class="container">
                                            <div class="row justify-content-left server-tabls-head" style="background: #93278F;">
                                                <div class="col-md-2">armazenamento</div>
                                                <div class="col-md-2">cpu</div>
                                                <div class="col-md-2">memória</div>
                                                <div class="col-md-2">largura de banda</div>
                                                <div class="col-md-4">preço</div>
                                            </div>

                                            <div class="server-tabls-body">
                                                <?php
                                                $selHostVPS = mysqli_query($conn, "SELECT * FROM host_vps WHERE id='$idProduto'");
                                                $ascVps = mysqli_fetch_assoc($selHostVPS);
                                                ?>
                                                <form method="POST">
                                                    <div class="row justify-content-left server-tabls-row best-one">
                                                        <div class="col-md-2"><span class="server-spects-for-mobile"></span> <b><?php echo $ascVps["memoria"]; ?></b></div>
                                                        <div class="col-md-2"><span class="server-spects-for-mobile"></span> <b><?php echo $ascVps["cpu"]; ?></b></div>
                                                        <div class="col-md-2"><span class="server-spects-for-mobile"></span> <b><?php echo $ascVps["ram"]; ?></b></div>
                                                        <div class="col-md-2"><span class="server-spects-for-mobile"></span> <b><?php echo $ascVps["transferencia"]; ?></b><span class="span-info-servers">IPv6</span></div>
                                                        <div class="col-md-2"><span class="server-spects-for-mobile"></span> <b>AOA <?php echo round($ascVps["preco"] / 12); ?></b>/mês</div>
                                                        <div class="col-md-2"><button class="server-order-button" name="ircart" style="background: #F0E738; color: #93278F; border: none;">Adicionar ao Carrinho</button></div>
                                                    </div>
                                                </form>


                                            </div>

                                            <div class="button-row text-center">
                                                <a class="btn jango-color-btn" href="index.php" style="background: #F0E738; color: #93278F;"><em class="fa fa-home"></em> Voltar</a>
                                            </div>

                                        </div>
                                    <?php
                                } elseif ($_GET["tipo"] == "dominio") {
                                    ?>
                                        <div class="col-md-12">
                                            <h5 class="title-default" style="text-align: left;">Este serviço requer de um domínio.</h5>
                                            <div class="accordion" id="frequently-questions">

                                                <div class="questions-box">
                                                    <div id="headingOne">
                                                        <button class="btn questions-title" type="button" data-toggle="collapse" data-target="#questionone" aria-expanded="true" aria-controls="questionone">
                                                            Quero registrar um domínio
                                                        </button>
                                                    </div>

                                                    <div id="questionone" class="collapse show questions-reponse" aria-labelledby="headingOne" data-parent="#frequently-questions">
                                                        <form method="POST" style="width: 100%; padding: 0;">
                                                            <input type="text" name="dominio" value="www." class="form-control" style="width: 80%; display: inline-block;">
                                                            <select class="form-control" name="ext" style="width: 15%; display: inline-block;">
                                                                <?php
                                                                $selDominios = mysqli_query($conn, "SELECT * FROM dominios ");
                                                                while ($ascDominio = mysqli_fetch_assoc($selDominios)) {
                                                                ?>
                                                                    <option value="<?php echo $ascDominio["nome"]; ?>"><?php echo $ascDominio["nome"]; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select><br>
                                                            <button class="btn btn-default btn-sm" name="irVeriD" style="background: #F0E738; color: #93278F; margin-top: 5px;">Registrar <em class="fa fa-sync" style="font-size: 10pt;"></em></button>

                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="questions-box">
                                                    <div id="headingtwo">
                                                        <button class="btn questions-title collapsed" type="button" data-toggle="collapse" data-target="#questiontwo" aria-expanded="true" aria-controls="questiontwo">
                                                            Quero transferir o meu domínio para a Husai
                                                        </button>
                                                    </div>

                                                    <div id="questiontwo" class="collapse questions-reponse" aria-labelledby="headingtwo" data-parent="#frequently-questions">
                                                        <form method="POST" style="width: 100%; padding: 0;">
                                                            <input type="text" name="dominio" value="www." class="form-control" style="width: 80%; display: inline-block;">
                                                            <select class="form-control" name="ext" style="width: 15%; display: inline-block;">
                                                                <?php
                                                                $selDominios = mysqli_query($conn, "SELECT * FROM dominios ");
                                                                while ($ascDominio = mysqli_fetch_assoc($selDominios)) {
                                                                ?>
                                                                    <option value="<?php echo $ascDominio["nome"]; ?>"><?php echo $ascDominio["nome"]; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select><br>
                                                            <button class="btn btn-default btn-sm" name="irTranfD" style="background: #F0E738; color: #93278F; margin-top: 5px;">Transferir <em class="fa fa-sync" style="font-size: 10pt;"></em></button>

                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="questions-box">
                                                    <div id="headingtree">
                                                        <button class="btn questions-title collapsed" type="button" data-toggle="collapse" data-target="#questiontree" aria-expanded="true" aria-controls="questiontree">
                                                            Vou usar o meu domínio existente e apontar para a Husai
                                                        </button>
                                                    </div>

                                                    <div id="questiontree" class="collapse questions-reponse" aria-labelledby="headingtree" data-parent="#frequently-questions">
                                                        <form method="POST" style="width: 100%; padding: 0;">
                                                            <input type="text" name="dominio" value="www." class="form-control" style="width: 80%; display: inline-block;">
                                                            <select class="form-control" name="ext" style="width: 15%; display: inline-block;">
                                                                <?php
                                                                $selDominios = mysqli_query($conn, "SELECT * FROM dominios ");
                                                                while ($ascDominio = mysqli_fetch_assoc($selDominios)) {
                                                                ?>
                                                                    <option value="<?php echo $ascDominio["nome"]; ?>"><?php echo $ascDominio["nome"]; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select><br>
                                                            <button class="btn btn-default btn-sm" name="irUsarD" style="background: #F0E738; color: #93278F; margin-top: 5px;">Usar domínio</em></button>

                                                        </form>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    <?php
                                }
                                    ?>


                                    </div>

                            </div>
                        </div>
                    </section>

                </div>
            </section>
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
                    <h5 class="quiq-links-footer-title">Links Rápidos</h5>
                    <div class="row">
                        <ul class="col-md-6 quiq-links-footer-ul">
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

                        <ul class="col-md-6 quiq-links-footer-ul">
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

                <div class="col-md-3">
                    <h5 class="quiq-links-footer-title">Método de Pagamento</h5>
                    <p class="secure-img-footer-area">
                        <img src="bankya2.png" alt="" width="100" />
                        <span>isso é apenas por motivo de demonstração</span>
                    </p>

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

            <div class="mr-tp-40 row justify-content-between footer-area-under">
                <div class="col-md-4">
                    <a href="#"><img class="footer-logo-blue" src="logo.png" alt="" /></a>
                    <div class="footer-social-icons">
                        <a href="#" style="background: #F0E738; color: #93278F;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" style="background: #F0E738; color: #93278F;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="background: #F0E738; color: #93278F;"><i class="fab fa-instagram"></i></a>
                        <a href="#" style="background: #F0E738; color: #93278F;"><i class="fab fa-youtube"></i></a>
                        <a href="#" style="background: #F0E738; color: #93278F;"><i class="fab fa-dribbble"></i></a>
                        <a href="#" style="background: #F0E738; color: #93278F;"><i class="fab fa-google"></i></a>
                    </div>
                </div>

                <div class="col-md-4 row">
                    <ul class="col-md-6 under-footer-ullist">
                        <li><a href="#" style="color: #f5f5f5;">sobre nós</a></li>
                        <li><a href="#" style="color: #f5f5f5;">Nossos serviços</a></li>
                    </ul>
                    <ul class="col-md-6 under-footer-ullist text-right">
                        <li><a href="#" style="color: #f5f5f5;">política de Privacidade</a></li>
                        <li><a href="#" style="color: #f5f5f5;">termos de serviço</a></li>
                    </ul>
                </div>

            </div>

            <div class="row justify-content-between final-footer-area mr-tp-40">
                <div class="final-footer-area-text" style="color: #f5f5f5;">
                    © Copyright 2022 Husai , Todos os direitos reservados
                </div>

                <div class="footer-lang-changer">
                    <div class="lang-changer-drop-up">
                        <a class="menu-btn-changer" role="button" id="dropupmenulagchanger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" style="color: #f5f5f5;"><i class="fas fa-globe-africa"></i> Português</a>
                        <div class="dropdown-menu dropupmenulagchanger" aria-labelledby="dropupmenulagchanger">
                        </div>
                    </div>

                    <div class="lang-changer-drop-up">
                        <a class="menu-btn-changer" href="#" style="color: #f5f5f5;"><img src="img/flags/flag.png" alt="" width="30" /> Angola</a>
                    </div>
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
</body>

</html>