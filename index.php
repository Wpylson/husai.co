`<?php
    include("db.php");
    ?>
<!doctype html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Husai, Tecnologia & Inovações, hospedagen, criação de sites, iOs, android, Namibe, Luanda, Angola">
    <meta name="Raúl Afonso, Walter Cabral Kahamba, Nedjai Mohamed(coodiv.net)" content="coodiv.net (nedjai mohamed),Husai Angola, Namibe">
    <title>Husai | Página Inicial</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- main css file -->
    <link href="css/main.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/husai.css">
    <link rel="icon" href="icone.png">
    <style type="text/css">
        .nav-item a {
            color: #FFF;
        }

        .section-header h3 {
            font-size: 36px;
            color: #283d50;
            text-align: center;
            font-weight: 500;
            position: relative;
        }

        .section-header p {
            text-align: center;
            margin: auto;
            font-size: 15px;
            padding-bottom: 60px;
            color: #556877;
            width: 50%;
        }

        #clients {
            padding: 60px 0;

        }

        #clients .clients-wrap {
            /* border-top: 1px solid #d6eaff;
            border-left: 1px solid #d6eaff; */
            margin-bottom: 30px;
        }

        #clients .client-logo {
            padding: 64px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            border-right: 1px solid #d6eaff;
            border-bottom: 1px solid #d6eaff;
            overflow: hidden;
            background: #fff;
            height: 160px;
        }

        #clients img {
            transition: all 0.4s ease-in-out;
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
    </div><!-- end preloader -->

    <div id="coodiv-header" class="d-flex mx-auto flex-column moon-edition">
        <!-- start header -->

        <div class="bg_overlay_header">
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
                        <li class="nav-item dropdown active" onclick="location.href='index.php'">
                            <a class="nav-link" href="index.php" role="button" id="header-first-drop-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Página Inicial</a>
                        </li>

                        <li class="nav-item megamenu dropdown">
                            <a class="nav-link" href="#" role="button" id="services-megamenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços <span class="megamenu-toggle"></span></a>
                            <div class="dropdown-menu coodiv-dropdown-megamnu default-megamenu" aria-labelledby="services-megamenu">
                                <div class="d-flex justify-content-center bd-highlight mb-3 megamenu-items-header">
                                    <div class="p-2 bd-highlight">
                                        <a href="hosting.php">
                                            <i class="bredhicon-cloud" style="background: #F0E738; color: #93278F;"></i>
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
                                        <a href="criacao_site.php">
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
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" id="header-help-drop-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Minha Conta<span class="sr-only">(current)</span></a>
                            <ul class="dropdown-menu coodiv-dropdown-header" aria-labelledby="header-help-drop-down">
                                <li><a class="dropdown-item" href="clientarea.php">Perfil</a></li>
                                <li><a class="dropdown-item" href="logout.php">Sair</a></li>
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

        <div class="mt-auto header-top-height"></div>
        <main class="container mb-auto">
            <div class="row">
                <div class="col-md-7 text-left">
                    <h3 class="mt-3 main-header-text-title" style="text-align: left;margin-bottom: 0px;"><span></span>Evolua!!!</h3>
                    <p class="text-white" style="font-size: 12px; color:#F0E738">Transforme a sua empresa por meio <br>
                        da tecnologia e aumente os seus <br>
                        resultados.</p>
                    <ul class="second-pricing-table-body" style="margin-left:20px">
                        <li><em class="fa fa-check" style="color:#F0E738"></em> <span class="text-white">100% SEGURO</span></li>
                        <li><em class="fa fa-check" style="color:#F0E738"></em> <span class="text-white">INOVAMOS O SEU NEGÓCIO</span></li>
                        <li><em class="fa fa-check" style="color:#F0E738"></em> <span class="text-white">OFERECEMOS A MELHOR ESTRATÉGIA DIGITAL</span></li>
                    </ul>
                    <!-- <div class="mt-auto header-top-height"></div> -->
                    <h3 class="mt-3 main-header-text-title" style="text-align: left; margin-top:20px;color:#F0E738"><span></span>seguro e garantido</h3>
                    <div class="row justify-content-left domain-search-row">
                        <form action="order.php" method="GET" id="domain-search-header" class="">
                            <i class="fas fa-globe" style="left: 40px"></i>
                            <input type="text" placeholder="procure seu domínio agora" id="domain" name="query">
                            <input type="text" name="tipo" value="dominio" hidden>
                            <span class="inline-button-domain-order">
                                <button data-toggle="tooltip" style="background: #F0E738; color: #93278F;" data-placement="left" title="Transferir" id="transfer-btn" type="submit" name="transfer" value="Transfer"><i class="fas fa-undo"></i></button>
                                <button data-toggle="tooltip" style="background: #F0E738; color: #93278F;" data-placement="left" title="Pesquisar" id="search-btn" type="submit" name="submit" value="Search"><i class="fas fa-search"></i></button>
                            </span>
                            <div class="domain-price-header mr-auto">
                                <a>
                                    <img src="img/domain/com.png" alt="domain"><!-- domain name -->
                                    <span>AOA <?php echo 1.791 * 12; ?></span>
                                    <!-- domain price -->
                                </a>

                                <a>
                                    <img src="img/domain/net.png" alt="domain"><!-- domain name -->
                                    <span>AOA <?php echo 1.791 * 12; ?> </span><!-- domain price -->
                                </a>

                                <a>
                                    <img src="img/domain/org.png" alt="domain"><!-- domain name -->
                                    <span>AOA <?php echo 1.791 * 12; ?></span><!-- domain price -->
                                </a>

                                <a class="no-phon-dsply">
                                    <img src="img/domain/store.png" alt="domain"><!-- domain name -->
                                    <span>AOA <?php echo 1.791 * 12; ?></span><!-- domain price -->
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-auto text-center">

                    <img class="girl_img" src="img/husai/home_page/girl.png" alt="">


                </div>
            </div>
        </main>
        <div class="mt-auto"></div>
    </div><!-- end header -->


    <!-- Start Slide -->

    <main class="carousel-margin-top">
        <div class="container" style="padding: 0;">
            <div class="carousel slide" id="main-carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#main-carousel" data-slide-to="1"></li>
                    <li data-target="#main-carousel" data-slide-to="2"></li>
                    <li data-target="#main-carousel" data-slide-to="3"></li>
                </ol><!-- /.carousel-indicators -->

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="img/slide/Flyer1.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Mountain</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="img/slide/Flyer2.jpg" alt="">
                        
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="img/slide/flyer3.jpg" alt="">
                        
                    </div>
                    <div class="carousel-item">
                        <img src="img/slide/Flyer4.jpg" alt="" class="d-block img-fluid">
                        
                    </div>
                </div><!-- /.carousel-inner -->

                <a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only" aria-hidden="true">Prev</span>
                </a>
                <a href="#main-carousel" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only" aria-hidden="true">Next</span>
                </a>
            </div><!-- /.carousel -->
        </div><!-- /.container -->
    </main>
    <!-- end Slide -->
   

    <section class="padding-40-0 position-relative">
        <div class="container">
            <h5 class="title-default-coodiv-two">confira planos de <strong>Hospedagem</strong> incríveis e faça seu pedido agora <span class="mr-tp-20">escolheu qual pacote é melhor para você.</span></h5>
            <div class="row justify-content-center">
                <div id="monthly-yearly-chenge" class="style-two">
                    <a class="active monthly-price"> <span class="change-box-text">Plano Mensal</span> <span class="change-box"></span></a>
                    <a class="yearli-price"> <span class="change-box-text">Plano Anual</span></a>
                </div>
            </div>

            <div class="row justify-content-start second-pricing-table-container mr-tp-30">
                <?php
                $selplanoscpnalDedic = mysqli_query($conn, "SELECT * FROM host_cpainel ");
                while ($ascCpaineldedic = mysqli_fetch_assoc($selplanoscpnalDedic)) {
                ?>
                    <div class="col-md-3" id="plano">
                        <div class="second-pricing-table">
                            <h5 class="second-pricing-table-title"><?php echo $ascCpaineldedic["nome"]; ?> <span>O plano ideal para sí</span></h5>
                            <span class="second-pricing-table-price monthly">
                                <i class="monthly">AOA <?php echo round($ascCpaineldedic["preco"] / 12); ?><small>/Mês</small></i>
                                <i class="yearly">AOA <?php echo $ascCpaineldedic["preco"]; ?><small>/Ano</small></i>
                            </span>

                            <ul class="second-pricing-table-body">
                                <li><em class="fa fa-check"></em> <?php echo $ascCpaineldedic["espaco"]; ?></li>
                                <li><em class="fa fa-check"></em> <?php echo $ascCpaineldedic["largura"]; ?></li>
                                <li><em class="fa fa-check"></em> <?php echo $ascCpaineldedic["dominio"]; ?></li>
                                <li><em class="fa fa-check"></em> <?php echo $ascCpaineldedic["subdominios"]; ?></li>
                                <li><em class="fa fa-check"></em> <?php echo $ascCpaineldedic["email"]; ?></li>
                                <li><em class="fa fa-check"></em> <?php echo $ascCpaineldedic["msyql"]; ?></li>
                                <li><em class="fa fa-check"></em> <?php echo $ascCpaineldedic["ipdedicado"]; ?></li>
                                <li><em class="fa fa-check"></em> <?php echo $ascCpaineldedic["cpainel"]; ?></li>
                                <li><em class="fa fa-check"></em> <?php echo $ascCpaineldedic["suporte"]; ?></li>
                            </ul>

                            <a class="second-pricing-table-button" href="order.php?idProduto=<?php echo $ascCpaineldedic["id"] . '& tipo=cpainel'; ?>" style="background: #F0E738; color: #93278F; border: none;">Comprar</a>

                        </div>
                    </div>

                <?php
                }
                ?>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <section class="padding-20-0 position-relative">
        
        <div class="container">
            <h5 class="title-default-coodiv-two" style="text-transform: none;"><strong>NA HUSAI,</strong> você encontra tudo que o seu site precisa</h5>
            <div class="row justify-content-center">
                <div id="monthly-yearly-chenge" class="mr-tp-40 style-two">
                    <em class="fa fa-check-circle"></em> <span class="change-box-text" style="margin-right: 20px;">100% de Segurança</span> <span class="change-box"></span>
                    <em class="fa fa-check-circle"></em> <span class="change-box-text" style="margin-right: 20px;">Email corporativo</span> <span class="change-box"></span>
                    <em class="fa fa-check-circle"></em> <span class="change-box-text" style="margin-right: 20px;">Hospedagem compartilhada</span> <span class="change-box"></span>
                    <em class="fa fa-check-circle"></em> <span class="change-box-text">Vários servidores</span> <span class="change-box"></span>
                </div>
            </div>
            <h5 class="title-default-coodiv-two" style="color:#88a1ad;text-transform: uppercase;">sua empresa online funciona melhor com:</h5>
            <div class="row justify-content-start second-pricing-table-container mr-tp-30">
               
                    <div class="col-md-4" style="text-align: center ;" id="">

                        <div class="second-pricing-table">
                            <img src="img/husai/ilustracao/ilu1.png" alt="" style="height: 50%;width:80% ;">
                            
                               <h5 style="text-transform: uppercase;">Criação de <strong>site</strong> e <strong>loja virtual</strong></h5>
                               <p>Site com design personalizado, otimizado para o Google, responsivo e com áreas de contao inteligente.</p>
                            
                            <a class="second-pricing-table-button" href="#" style="background: #93278F; color: #fff; border: none;">Ver planos agora</a>
                        </div>
                    </div>

                     <div class="col-md-4" style="text-align: center ;" id="">

                        <div class="second-pricing-table">
                            <img src="img/husai/ilustracao/ilu2.png" alt="" style="height: 50%;width:80% ;">
                            
                               <h5 style="text-transform: uppercase;"><strong>CLOUD</strong> VPS</h5>
                               <p>um servidor cloud utiliza a computação na nuvem, iso quer dizer que voçê não terá uma máquina física.</p>
                            
                            <a class="second-pricing-table-button" href="#" style="background: #93278F; color: #fff; border: none;">Ver planos agora</a>
                        </div>
                    </div>

                     <div class="col-md-4" style="text-align: center ;" id="">

                        <div class="second-pricing-table">
                            <img src="img/husai/ilustracao/ilu3.png" alt="" style="height: 50%;width:80% ;">
                            
                               <h5 style="text-transform: uppercase;"><strong>automação</strong> de marketing</h5>
                               <p>Automatizção de Marketing com a Husai, serviço gerenciado pela Husai para melhorar a comunicação e aumentar vendas</p>
                            
                            <a class="second-pricing-table-button" href="#" style="background: #93278F; color: #fff; border: none;">Ver planos agora</a>
                        </div>
                    </div>

              
            </div><!-- end row -->
        </div><!-- end container -->
    </section>


    <section class="padding-100-0-50 position-relative">
        <div class="container">
        <h5 class="title-default-coodiv-two" style="text-transform: none;margin-bottom: 30px;">Porquê não ter <strong>SERVIDOR</strong> só seu? <br>
        Confira os nossos incríveis planos de servidores</h5>
            <div class="banner-servers-box" style="background: #F0E738;">
                <div class="counter-placeholder"></div>
                <div class="banner-text-left">
                    <h5 style="color: #93278F;">nosso servidor é<strong>24% mais rápido</strong></h5>
                    <p style="color: #93278F;">com menos de 60 segundos em todo o mundo Deploy!</p>
                </div>
                <a class="benchmarks-link" href="#" style="color: #93278F;">referências</a>
            </div>

            <div class="row justify-content-left server-tabls-head" style="background: #93278F;">
                <div class="col-md-2">armazenamento</div>
                <div class="col-md-2">cpu</div>
                <div class="col-md-2">memória</div>
                <div class="col-md-2">largura de banda</div>
                <div class="col-md-4">preço</div>
            </div>

            <div class="server-tabls-body">
                <?php
                $selHostVPS = mysqli_query($conn, "SELECT * FROM host_vps ");
                while ($ascVps = mysqli_fetch_assoc($selHostVPS)) {
                ?>
                    <div class="row justify-content-left server-tabls-row best-one">
                        <div class="col-md-2"><span class="server-spects-for-mobile"></span> <b><?php echo $ascVps["memoria"]; ?></b></div>
                        <div class="col-md-2"><span class="server-spects-for-mobile"></span> <b><?php echo $ascVps["cpu"]; ?></b></div>
                        <div class="col-md-2"><span class="server-spects-for-mobile"></span> <b><?php echo $ascVps["ram"]; ?></b></div>
                        <div class="col-md-2"><span class="server-spects-for-mobile"></span> <b><?php echo $ascVps["transferencia"]; ?></b><span class="span-info-servers">IPv6</span></div>
                        <div class="col-md-2"><span class="server-spects-for-mobile"></span> <b>AOA <?php echo round($ascVps["preco"] / 12); ?></b>/mês</div>
                        <div class="col-md-2"><a class="server-order-button" href="orderVerificar.php?idProduto=<?php echo $ascVps["id"] . '& tipo=vps'; ?>" style="background: #F0E738; color: #93278F;">Adicionar ao Carrinho</a></div>
                    </div>
                <?php
                }
                ?>


            </div>

            <div class="button-row text-center">
                <a class="btn jango-color-btn" href="signup.php" style="background: #F0E738; color: #93278F;">Increve-se agora!</a>
            </div>

        </div>
    </section>

    <section class="footer-section-banner" style="background: #93278F;">
        <div class="container">
            <div class="row free-trial-footer-banner">
                <div class="col-md-8">
                    <h5 class="free-trial-footer-banner-title" style="color: #fff;text-transform: uppercase;text-align: left;">criação de projectos e sites personalizados <br> para sua empresa arrecadar <br>resultados execelêntes</h5>
                    <p class="free-trial-footer-banner-text" style="color: #fff;margin:30px 0px 0px 30px; font-size: 20;"><em class="fa fa-angle-up" style="margin-right:5px;font-size: 16px;"></em>Especialistas espalhados por toda Angola</p>
                    <p class="free-trial-footer-banner-text" style="margin-left:50px;margin-bottom: 30px;font-size: 12px;line-height: 16px;margin-top: 10px;">A Husai possui uma equipa de especialistas <br> para ajudar startups e empresas a obterem <br> grandes resultados nos empreendimentos <br> onlines através de presença forte na internet.</p>
                    <p class="free-trial-footer-banner-text" style="color: #fff;margin:30px; font-size: 20;"><em class="fa fa-angle-down" style="margin-right:5px;font-size: 16px;"></em>Criação de sites, E-mail corporativo, loja e projectos</p>
                </div>

                <div class="col-md-4 free-trial-footer-links d-flex mx-auto flex-column">
                    <div class="mb-auto"></div>
                    <div class="mb-auto">
                    <a class="sign-btn" href="#" style="background: #93278F;border: 2px solid #F0E738 ">Contacte a nossa equipa agora!</a>
                    </div>
                    <div class="mt-auto"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-40-0-100 position-relative">
        <div class="container">
            <div class="row justify-content-between">
            <div class="col-md-4 side-text-right-container">
                    <p class="side-text-right-text f-size14" style="color:#93278F">
                        Se física não consegue, online é o que segue!
                    </p>
                    <h2 class="side-text-right-title f-size25" style="text-transform: uppercase;">Porquê confiar mos <strong>serviços da Husai</strong> </h2>
                    <p class="side-text-right-text f-size16">
                       <strong>Plano Profissional</strong>: um pacote de hospedagem de sites 100% seguro e em formato único no mercado.
                        
                    </p>
                    <p class="side-text-right-text f-size16" style="margin-left: 10px;">
                       Hospedagem em núvem <br>
                       Serviços de revendedor <br>
                       Cloud VPS <br>
                       Servidores VPS <br>
                       Hospedagem Dedicada <br>
                       Hospedagem Compartilhada <br>
                       Hospedagem WordPress
                        
                    </p>
                    <p>
                        <a class="side-text-right-button btn-ver-planos" href="#">Ver planos de Hospedagem</a>
                    </p>
                </div>

                <div class="col-md-7 our-services-carousel-container">
                    <div class="our-services-carousel">
                        <div class="carousel-cell" style="display: inline-block;">
                            <div class="our-services-coresol-box" style="text-align:left;">
                               <div class="box-img-hospedagem">
                               <img src="img/husai/hospedagem/team.png" class="img-hospedagem" alt="">
                               </div>
                                <h5>Equipa de Segurança</h5>
                                <p class="text-justify">A segurança de um site envolve investir em acções e soluções focadas em garantir a protecção de dados. Para alcançar esse objectivo, a Husai, mantém o seu site actualizado.</p>
                               
                            </div>
                        </div>

                        <div class="carousel-cell" style="display: inline-block;">
                            <div class="our-services-coresol-box" style="text-align:left;">
                            <div class="box-img-hospedagem">
                               <img src="img/husai/hospedagem/pc.png" class="img-hospedagem" alt="">
                               </div>
                                <h5>Sistema Analítico</h5>
                                <p >Voltamos para análises de dados, com o objectivo final de transformar dados em informação capazes de dar suporte as decisões gerenciais de forma amigável e flexível ao utilizador em tempo hábil. </p>
                               
                            </div>
                        </div>
                        
                        <div class="carousel-cell" style="display: inline-block;">
                            <div class="our-services-coresol-box" style="text-align:left;">
                            <div class="box-img-hospedagem">
                               <img src="img/husai/hospedagem/rede.png" class="img-hospedagem" alt="">
                               </div>
                                <h5>Servidores Mundiais</h5>
                                <p style="text-align: justify;">A segurança de um site envolve investir em acções e soluções focadas em garantir a protecção de dados. Para alcançar esse objectivo, a Husai, mantém o seu site actualizado.</p>
                               
                            </div>
                        </div>


                    </div>

                </div>
               

            </div>
        </div>
    </section>
   

    <section class="our-pertners padding-20-0 mr-tp-0">
        <section id="clients" class="section-bg">

            <div class="container">

                <div class="section-header" style=" margin-top: -90px;">
                    <h3>Nossos Clientes</h3>
                    <p>Grandes clientes fazem parte da nossa trajetória. Através de soluções imediatas
                        e resoluções de problemas com ferramentas perfeitas que podem ser usadas até mesmo por ti. </p>
                </div>

                <div class="row no-gutters clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                    <div class="col-md-4">
                        <div class="client-logo margem-clientes" style="background-color:#93278F;">
                            <img src="img/husai/clientes/lupa.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="client-logo margem-clientes" style="background-color:#93278F;">
                            <img src="img/husai/clientes/banky.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="client-logo margem-clientes" style="background-color:#93278F;">
                            <img src="img/husai/clientes/enter.png" alt="">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="client-logo margem-clientes" style="background-color:#93278F;">
                            <img src="img/husai/clientes/sport.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="client-logo margem-clientes" style="background-color:#93278F;">
                            <img src="img/husai/clientes/palnoa.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="client-logo margem-clientes" style="background-color:#93278F;">
                            <img src="img/husai/clientes/outono.png" class="img-fluid" alt="">
                        </div>
                    </div>

                   

                </div>

            </div>

        </section>
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
                        <a class="log-btn btn-husai" href="#" >Ver todos os planos</a>
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
                        <a href="#" style="background: #F0E738; color: #93278F;"><i class="fab fa-twitter"  style="line-height:2"></i></a>
                        <a href="#" style="background: #F0E738; color: #93278F;"><i class="fab fa-instagram"  style="line-height:2"></i></a>
                        <a href="#" style="background: #F0E738; color: #93278F;"><i class="fab fa-youtube"  style="line-height:2"></i></a>
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
                        <li><span style="text-decoration: bold;">Serviços: </span> <a href="#" >Criação de Site</a> | <a href="#" >Hospedagem</a> | <a href="#" >Dominios</a> | <a href="#" >Certficado SSL</a></li>
                        <li><span>Atenção: </span><a href="#" >Política de Privacidade</a> | <a href="#" >Anti-Spam</a>
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
</body>

</html>`