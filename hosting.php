<?php 
include("db.php");
 ?>
<!doctype html>
<html lang="en">

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

    <div class="preloader"><!-- start preloader -->
        <div class="preloader-container">
            <img src="icone.png" width="50">
            <br><br>
            <span>Carregando...</span>
        </div>
    </div>
    <!-- end preloader -->

    <div id="coodiv-header" class="d-flex mx-auto flex-column subpages-header moon-edition">
        <div class="bg_overlay_header">
		<div id="particles-bg" style="background: #93278F;"></div>
        <img src="fundo.png" alt="img-bg">
		<span class="header-shapes shape-02"></span>
		<span class="header-shapes shape-03"></span>
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
                        <li class="nav-item dropdown" onclick="location.href='index.php'">
                            <a class="nav-link" href="index.php" role="button" id="header-first-drop-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Início</a>
                        </li>

                       <li class="nav-item megamenu dropdown">
                            <a class="nav-link" href="#" role="button" id="services-megamenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços <span class="megamenu-toggle"></span></a>
                            <div class="dropdown-menu coodiv-dropdown-megamnu default-megamenu" aria-labelledby="services-megamenu">
                            <div class="d-flex justify-content-center bd-highlight mb-3 megamenu-items-header">
                            <div class="p-2 bd-highlight">
                            <a href="hosting.php">
                            <i class="bredhicon-sun" style="background: #F0E738; color: #93278F;"></i>
                            <h5>Hospedagem</h5>
                            <p>A hospedagem é um espaço no servidor que armazena todos os arquivos que compõem um site para deixá-lo acessível na internet.</p>
                            </a>
                            </div>
                            
                            <div class="p-2 bd-highlight">
                            <a href="ssl.php">
                            <i class="bredhicon-award-empty" style="background: #F0E738; color: #93278F;"></i>
                            <h5>Certificado SSL</h5>
                            <p>Certificado SSL é um certificado digital que autentica a identidade de um site e possibilita uma conexão criptografada.</p>
                            </a>
                            </div>
                            
                            <div class="p-2 bd-highlight">
                            <a href="websites.php">
                            <i class="bredhicon-steering-wheel" style="background: #F0E738; color: #93278F;"></i>
                            <h5>Criação de Site</h5>
                            <p> um site funciona como uma porta de entrada da sua empresa na internet, baseado neste conjunto de páginas que precisam de uma estrutura para ficar armazenada e de um nome de domínio.</p>
                            </a>
                            </div>
                            
                            <div class="p-2 bd-highlight">
                            <a href="domains.php">
                            <i class="bredhicon-headphones" style="background: #F0E738; color: #93278F;"></i>
                            <h5>Domínios</h5>
                            <p>O domínio geralmente usa o nome da sua organização e um sufixo padrão da Internet, como minhaempresa.com ou universidadeestadual.edu.</p>
                            </a>
                            </div>
                            
                            </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link" role="button" id="webhosting-megamenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Hospedagem <span class="nav-new-tag" style="color: #93278F;">Novo</span></a>
                            <div class="dropdown-menu coodiv-dropdown-header web-menu" aria-labelledby="webhosting-megamenu">
                            <ul class="web-hosting-menu-header">
                            <li><i class="fas fa-server"></i> <a href="hosting.php">Hospedagem Compartilhada <span> A hospedagem compartilhada permite que diversos sites utilizem um único servidor.</span></a></li>
                            <li><i class="fab fa-squarespace"></i> <a href="dedicated.php">hospedagem dedicada <span>A hospedagem dedicada é uma opção de hospedagem da Internet em que um servidor (ou servidores) físico fica dedicado a um único cliente comercial.</span></a></li>
                            <li><i class="fab fa-cpanel"></i> <a href="cpanel.php">Revendedores cPanel <span>Gerenciador que permite revender diversas hospedagens e administrar uma carteira própria de clientes.</span></a></li>
                            </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="domains.php">Domínios</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="nossoproduto.php">Nossos Produtos</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" id="header-help-drop-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Suporte<span class="sr-only">(current)</span></a>
                            <ul class="dropdown-menu coodiv-dropdown-header" aria-labelledby="header-help-drop-down">
                                <li><a class="dropdown-item" href="help-center.php">Centro de Ajuda</a></li>
                                <li><a class="dropdown-item" href="contact.php">Contate-nos</a></li>
                            </ul>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="about.php">Sobre</a>
                        </li>
                          <?php 
       if (isset($_COOKIE["cliente"])) {
           ?>
            <li class="nav-item">
           <a class="nav-link" href="clientarea.php">Minha Conta</a>
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
                        $selCart = mysqli_query($conn,"SELECT * FROM carrinho WHERE usuario='$cliente' AND estado='nao' ");
                          ?>
                           <li onclick="location.href='Bankya/'"><a  href="ordernextvery.php" class="btn btn-sm" style="background: #F0E738; border: 1px solid #F0E738; color: #93278F;"><i class="fa fa-shopping-cart"></i> Carrinho <b>(<?php echo mysqli_num_rows($selCart); ?>)</b></a> 
                           </li>
                           <?php 
                    }else{
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
                <div class="col-md-5 d-flex mx-auto flex-column">
                    <div class="mb-auto"></div>
                    <h3 class="mt-3 main-header-text-title"><span style="color: #f5f5f5;">Mantenha o controle total do seu ambiente com nossa hospedagem na web</span>Hospedagem Compartilhada</h3>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-hosting-pages row">
                        <a class="col-md-4 active" href="hosting.php">
                            <img src="img/svgs/hosting.svg" alt="" />
                            <span class="sub-breadcrumb-host-title">hospedagem web</span>
                        </a>

                        <a class="col-md-4" href="servers.php">
                            <span class="off-tag">-15% de desconto</span>
                            <img src="img/svgs/servers.svg" alt="" />
                            <span class="sub-breadcrumb-host-title">servidores</span>
                        </a>

                        <a class="col-md-4" href="dedicated.php">
                            <img src="img/svgs/dedicated.svg" alt="" />
                            <span class="sub-breadcrumb-host-title">Dedicado</span>
                        </a>
                    </div>
                </div>
            </div>

        </main>
        <div class="mt-auto"></div>
    </div>

    <section class="padding-100-0-0 position-relative">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-md-8 row justify-content-center hosting-plan-row">

                    <div class="col-md-3">
                        <?php 
                        $selHost = mysqli_query($conn,"SELECT * FROM host_cpainel WHERE id=1 ");
                        $ascHost = mysqli_fetch_assoc($selHost);
                         ?>
                        <div class="third-pricing-table ">
                            <div class="plan-header">
                                <span class="headline">20GB SSD</span>
                                 <span class="plan-price second-pricing-table-price monthly">
                                <i class="monthly" style="font-size: 12pt;">AOA <?php echo round($ascHost["preco"]/12); ?> <span>/Mês</span></i>
                                <i class="yearly" style="font-size: 12pt;">AOA <?php echo $ascHost["preco"]; ?> <span>/Ano</span></i>
                                </span>
                                <span class="activated-method">Ative em minutos</span>
                            </div>
                            <div class="package-body">
                                <ul>
                                    <li><strong>1 Nucleo</strong> Processador</li>
                                    <li><strong>2040MB</strong> Memoria Ram</li>
                                    <li><strong>2000GB</strong> Bandwidth</li>
                                    <li><strong>Liniux/Windows/FreeBSd</strong> OS</li>
                                </ul>
                            </div>
                            <div class="package-footer">
                                <a href="order.php?idProduto=<?php echo $ascHost["id"].'& tipo=cpainel'; ?>">Escolher plano</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <?php 
                        $selHost = mysqli_query($conn,"SELECT * FROM host_cpainel WHERE id=2 ");
                        $ascHost = mysqli_fetch_assoc($selHost);
                         ?>
                        <div class="third-pricing-table">
                            <div class="plan-header">
                                <span class="headline">50GB SSD</span>
                                <span class="plan-price second-pricing-table-price monthly">
	                            <i class="monthly" style="font-size: 12pt;">AOA <?php echo round($ascHost["preco"]/12); ?> <span>/Mês</span></i>
                                <i class="yearly" style="font-size: 12pt;">AOA <?php echo $ascHost["preco"]; ?> <span>/Ano</span></i>
                                </span>
                                <span class="activated-method">Ative em minutos</span>
                            </div>
                            <div class="package-body">
                                <ul>
                                    <li><strong>1 Nucleo</strong> Processador</li>
                                    <li><strong>2040MB</strong> Memoria Ram</li>
                                    <li><strong>2000GB</strong> Bandwidth</li>
                                    <li><strong>Liniux/Windows/FreeBSd</strong> OS</li>
                                </ul>
                            </div>
                            <div class="package-footer">
                                <a href="order.php?idProduto=<?php echo $ascHost["id"].'& tipo=cpainel'; ?>">Escolher plano</a>
                            </div>
                        </div>
                    </div>
                     <?php 
                        $selHost = mysqli_query($conn,"SELECT * FROM host_cpainel WHERE id=3 ");
                        $ascHost = mysqli_fetch_assoc($selHost);
                         ?>
                    <div class="col-md-3">
                        <div class="third-pricing-table side-right">
                            <div class="plan-header">
                                <span class="headline">250GB SSD</span>
                                <span class="plan-price second-pricing-table-price monthly">
	                           <i class="monthly" style="font-size: 12pt;">AOA <?php echo round($ascHost["preco"]/12); ?> <span>/Mês</span></i>
                                <i class="yearly" style="font-size: 12pt;">AOA <?php echo $ascHost["preco"]; ?> <span>/Ano</span></i>
                                </span>
                                <span class="activated-method">Ative em minutos</span>
                            </div>
                            <div class="package-body">
                                <ul>
                                     <li><strong>1 Nucleo</strong> Processador</li>
                                    <li><strong>2040MB</strong> Memoria Ram</li>
                                    <li><strong>2000GB</strong> Bandwidth</li>
                                    <li><strong>Liniux/Windows/FreeBSd</strong> OS</li>
                                </ul>
                            </div>
                            <div class="package-footer">
                                <a href="order.php?idProduto=<?php echo $ascHost["id"].'& tipo=cpainel'; ?>">Escolher plano</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 side-text-right-container side-text-plan-hosting">
                    <h2 class="side-text-right-title f-size25">Nós estamos com você ,<br> cada passo do caminho</h2>
                    <p class="side-text-right-text f-size16">
                        Quer você esteja procurando um <b>pessoal</b> plano de hospedagem de sites ou um<b> negócio</b> plano de hospedagem de sites.
                    </p>
                    <ul class="web-hosting-options">
                        <li><i class="fas fa-database"></i> MySQL 5.7</li>
                        <li><i class="far fa-window-restore"></i> Cpanel</li>
                        <li><i class="fas fa-microchip"></i> Unidades de estado sólido</li>
                        <li><i class="fas fa-shield-alt"></i> Acesso de administrador raiz</li>
                        <li><i class="far fa-clock"></i> 24/7 Ative em minutos, online 24 horas por dia, 7 dias por semana</li>
                        <li><i class="fab fa-expeditedssl"></i> Certificado SSL gratuito</li>
                    </ul>
                    <div id="monthly-yearly-chenge" class="mr-tp-20 custom-change">
                        <a class="active monthly-price f-size12"> <span class="change-box-text">por mês</span> <span class="change-box"></span></a>
                        <a class="yearli-price f-size12"> <span class="change-box-text">anualmente</span></a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="section-wth-amwaj">
        <div class="bg_overlay_section-amwaj">
            <img src="img/bg/b_bg_02.jpg" alt="img-bg">
        </div>

         <div class="container">
            <div class="row justify-content-between mr-tp-50">

                <div class="col-md-6 side-text-right-container">
                    <h2 class="side-text-right-title">Nós estamos com você ,<br> cada passo do caminho</h2>
                    <p class="side-text-right-text">
                       Se você está procurando um plano de hospedagem de site <b>pessoal</b> ou um plano de hospedagem de site <b>empresarial</b>, nós somos a solução perfeita para você. Nossos poderosos serviços de hospedagem de sites não apenas ajudarão você a atingir as metas gerais de seu site, mas também fornecerão a confiança necessária para saber que você é parceiro de uma empresa <a href="#">confiável</a> e <a href="#">segura</a> plataforma de hospedagem de sites.
                        <br>
                        <br> Somos uma das plataformas de hospedagem de sites mais fáceis de usar e continuamos comprometidos em fornecer aos nossos clientes uma das melhores soluções de hospedagem do mercado.
                        <p>
                        <a class="side-text-right-button" href="#">Comece conosco agora</a>
                </div>

                <div class="col-md-5">

                    <div class="display-on-hover-box-container">
                        <a href="#tab1" class="display-on-hover-box-items">
                            <img src="img/svgs/hover-box/quality-badge.svg" alt="" />
                        </a>
                        <a href="#tab2" class="display-on-hover-box-items">
                            <img src="img/svgs/hover-box/inclined-rocket.svg" alt="" />
                        </a>
                        <a href="#tab3" class="display-on-hover-box-items">
                            <img src="img/svgs/hover-box/public-speech.svg" alt="" />
                        </a>
                        <a href="#tab4" class="display-on-hover-box-items">
                            <img src="img/svgs/hover-box/big-light.svg" alt="" />
                        </a>
                        <a href="#tab5" class="display-on-hover-box-items">
                            <img src="img/svgs/hover-box/big-lifesaver.svg" alt="" />
                        </a>
                        <a href="#tab6" class="display-on-hover-box-items">
                            <img src="img/svgs/hover-box/headphones-with-thin-mic.svg" alt="" />
                        </a>
                        <a href="#tab7" class="display-on-hover-box-items">
                            <img src="img/svgs/hover-box/inclined-paper-plane.svg" alt="" />
                        </a>
                        <a href="#tab8" class="display-on-hover-box-items">
                            <img src="img/svgs/hover-box/big-telephone.svg" alt="" />
                        </a>

                        <div class="display-on-hover-box-content">
                            <div class="display-on-hover-box-cotent-items" >
                                <div id="tab1" class="tab-content-hover" >
                                    <h5>Hospedagem Compartilhada</h5>
                                    <p>Garante diversos benefícios ao usuário sem exigir um investimento alto. Hospedar um domínio em regime compartilhado é o mesmo que aproveitar vários serviços e infraestrutura.</p>
                                </div>
                                <div id="tab2" class="tab-content-hover">
                                    <h5>Hospedagem Dedicada</h5>
                                    <p>A hospedagem dedicada é uma opção de hospedagem da Internet em que um servidor (ou servidores) físico fica dedicado a um único cliente comercial.</p>
                                </div>
                                <div id="tab3" class="tab-content-hover">
                                    <h5>Armazenamento em nuvem</h5>
                                    <p>Basicamente, o armazenamento em nuvem consiste no ato de armazenar um ou mais arquivos em um HD fora da sua máquina, através da internet.</p>
                                </div>
                                <div id="tab4" class="tab-content-hover">
                                    <h5>Domínios</h5>
                                    <p>O domínio geralmente usa o nome da sua organização e um sufixo padrão da Internet, como minhaempresa.com ou universidadeestadual.edu.</p>
                                </div>
                                <div id="tab5" class="tab-content-hover">
                                    <h5>Servidores VPS</h5>
                                    <p>Um Servidor Privado Virtual (VPS) é uma das opções de alojamento web mais flexíveis disponíveis.</p>
                                </div>
                                <div id="tab6" class="tab-content-hover">
                                    <h5>Cloud VPS</h5>
                                    <p>um servidor cloud utiliza a computação na nuvem. Isso quer dizer que você não terá uma máquina física.</p>
                                </div>
                                <div id="tab7" class="tab-content-hover">
                                    <h5>Serviços de revendedor</h5>
                                    <p>Este contrato forma um vínculo de parceria para a revenda de serviços de um fornecedor para outro, caso os mesmos tenham complementariedade e sinergia de negócios, e não mantenham concorrência.</p>
                                </div>
                                <div id="tab8" class="tab-content-hover">
                                    <h5>Hospedagem WordPress</h5>
                                    <p>um sistema que permite a criação, publicação e hospedagem de um site de forma simples e descomplicada, até mesmo por quem não possui conhecimentos em desenvolvimento de sites e webdesign.</p>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div><!-- end row -->
        </div><!-- end container -->
    </section>

  	<section class="padding-60-0-100">
        <div class="container">
            <h5 class="title-default-coodiv-two">Ferramentas simples e poderosas<span class="mr-tp-10">CPU 100% Intel de alto desempenho e plataforma bare metal 100% SSD.</span></h5>
            <div class="row justify-content-center mr-tp-40">
                <div class="col-md-3">
                    <div class="box-features-one">
                        <i class="e-flaticon-002-plug"></i>
                        <h5>Fique conectado o tempo todo</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-features-one">
                        <i class="e-flaticon-025-router"></i>
                        <h5>Fique conectado o tempo todo</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-features-one">
                        <i class="e-flaticon-043-remote-control"></i>
                        <h5>Sem vizinhos barulhentos</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-features-one">
                        <i class="e-flaticon-021-virtual-reality"></i>
                        <h5>Infraestrutura poderosa</h5>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center mr-tp-10">
                <div class="col-md-3">
                    <div class="box-features-one">
                        <i class="e-flaticon-004-battery"></i>
                        <h5>Muitas combinações de SO</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-features-one">
                        <i class="e-flaticon-032-sata"></i>
                        <h5>Acesso de administrador raiz</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-features-one">
                        <i class="e-flaticon-036-air-conditioner"></i>
                        <h5>Sem contratos de longo prazo</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-features-one">
                        <i class="e-flaticon-049-speaker"></i>
                        <h5>Sem vizinhos barulhentos</h5>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="padding-100-0 with-top-border">
        <div class="container">
            <h5 class="title-default-coodiv-two">Perguntas frequentes.</h5>

            <div class="row justify-content-center mr-tp-40">
                <div class="col-md-9">

                    <div class="accordion" id="frequently-questions">

                        <div class="questions-box">
                            <div id="headingOne">
                                <button class="btn questions-title" type="button" data-toggle="collapse" data-target="#questionone" aria-expanded="true" aria-controls="questionone">
                                    Como posso solicitar uma nova hospedagem?
                                </button>
                            </div>

                            <div id="questionone" class="collapse show questions-reponse" aria-labelledby="headingOne" data-parent="#frequently-questions">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>

                        <div class="questions-box">
                            <div id="headingtwo">
                                <button class="btn questions-title collapsed" type="button" data-toggle="collapse" data-target="#questiontwo" aria-expanded="true" aria-controls="questiontwo">
                                    O que é hospedagem de revendedores ?
                                </button>
                            </div>

                            <div id="questiontwo" class="collapse questions-reponse" aria-labelledby="headingtwo" data-parent="#frequently-questions">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>

                        <div class="questions-box">
                            <div id="headingtree">
                                <button class="btn questions-title collapsed" type="button" data-toggle="collapse" data-target="#questiontree" aria-expanded="true" aria-controls="questiontree">
                                   Quero um novo nome de domínio
                                </button>
                            </div>

                            <div id="questiontree" class="collapse questions-reponse" aria-labelledby="headingtree" data-parent="#frequently-questions">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>

                    </div>

                </div>
            </div>

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