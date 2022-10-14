<?php
include("db.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Husai, Tecnologia & Inovações, hospedagen, criação de sites, iOs, android, Namibe, Luanda, Angola">
    <meta name="Raúl Afonso, Walter Cabral Kahamba, Nedjai Mohamed(coodiv.net)" content="coodiv.net (nedjai mohamed),Husai Angola, Namibe">
    <title>Husai | Hospedagem Dedicada</title>
    <link rel="icon" href="icone.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- main css file -->
    <link href="css/main.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/husai.css">

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


        <div class="mt-auto header-top-height"></div>
        <main class="container mb-auto">
            <div class="row">
                <div class="col-md-5 d-flex mx-auto flex-column">
                    <div class="mb-auto"></div>
                    <h3 class="mt-3 main-header-text-title"><span style="color: #f5f5f5;">Mantenha o controle total do seu ambiente com nossa hospedagem na web</span>Hospedagem Dedicada</h3>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-hosting-pages row">


                        <a class="col-md-6 active" href="dedicated.php">
                            <img src="img/svgs/dedicated.svg" alt="" />
                            <span class="sub-breadcrumb-host-title">Dedicado</span>
                        </a>
                        <a class="col-md-6" href="servers.php">
                            <span class="off-tag">-15% de desconto</span>
                            <img src="img/svgs/servers.svg" alt="" />
                            <span class="sub-breadcrumb-host-title">servidores</span>
                        </a>
                    </div>
                </div>
            </div>

        </main>
        <div class="mt-auto"></div>
    </div>

    <section class="padding-50-0-10 position-relative">
        <div class="container">
            <h3 class="d-none">pricing table</h3>
            <div class="table-responsive">
                <table class="table table-striped table-dedicated-hosting-container">
                    <thead class="table-dedicated-hosting-header">
                        <tr>
                            <th scope="col">
                                <span class="plan-name-dedicated text-left">PLanos</span>
                                <div id="monthly-yearly-chenge" class=" custom-change">
                                    <a class="active monthly-price f-size12"> <span class="change-box-text">mensal</span> <span class="change-box"></span></a>
                                    <a class="yearli-price f-size12"> <span class="change-box-text">anual</span></a>
                                </div>
                            </th>
                            <?php
                            $selFV = mysqli_query($conn, "SELECT * FROM host_vps ");
                            while ($ascFV = mysqli_fetch_assoc($selFV)) {
                            ?>
                                <th scope="col">
                                    <span class="plan-name-dedicated"><?php echo $ascFV["nome"]; ?></span>
                                    <span class="price-dedicated second-pricing-table-price monthly">
                                        <i class="monthly" style="font-size: 11pt;"> <?php echo round($ascFV["preco"] / 12); ?> <span>/mês</span></i>
                                        <i class="yearly" style="font-size: 11pt;"> <?php echo $ascFV["preco"]; ?> <span>/ano</span></i>
                                    </span>
                                </th>
                            <?php
                            }
                            ?>

                        </tr>
                    </thead>

                    <tbody class="table-dedicated-hosting-body">
                        <tr>
                            <th scope="row"><b>Amrazenamento SSD</b></th>
                            <td><b class="plan-dedicated-config">40 GB</b> </td>
                            <td><b class="plan-dedicated-config">60 GB</b> </td>
                            <td><b class="plan-dedicated-config">100 GB</b> </td>
                            <td><b class="plan-dedicated-config">200 GB</b> </td>
                            <td><b class="plan-dedicated-config">300 GB</b> </td>
                        </tr>

                        <tr>
                            <th scope="row"><b>RAM</b></th>
                            <td><b class="plan-dedicated-config">2GB</b> </td>
                            <td><b class="plan-dedicated-config">4GB</b> </td>
                            <td><b class="plan-dedicated-config">8GB</b> </td>
                            <td><b class="plan-dedicated-config">16GB</b> </td>
                            <td><b class="plan-dedicated-config">32GB</b> </td>
                        </tr>

                        <tr>
                            <th scope="row"><b>Certificado SSL</b></th>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                        </tr>

                        <tr>
                            <th scope="row"><b>E-mail personalizado</b></th>
                            <td><b class="plan-dedicated-config"></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                        </tr>

                        <tr>
                            <th scope="row"><b>24/7 Suporte</b></th>
                            <td><b class="plan-dedicated-config"></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                        </tr>

                        <tr>
                            <th scope="row"><b>Chat direto</b></th>
                            <td><b class="plan-dedicated-config"></b></td>
                            <td><b class="plan-dedicated-config"></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                            <td><b class="plan-dedicated-config"><i class="fas fa-check-circle"></i></b></td>
                        </tr>

                        <tr>
                            <th scope="row"></th>
                            <td><a class="plan-dedicated-order-button" style="background: #F0E738; color: #93278F; border:none;" href="orderVerificar.php?idProduto=1&tipo=vpsdedicado">Adicionar ao Carrinho</a></td>
                            <td><a class="plan-dedicated-order-button" style="background: #F0E738; color: #93278F; border:none;" href="orderVerificar.php?idProduto=2&tipo=vpsdedicado">Adicionar ao Carrinho</a></td>
                            <td><a class="plan-dedicated-order-button" style="background: #F0E738; color: #93278F; border:none;" href="orderVerificar.php?idProduto=3&tipo=vpsdedicado">Adicionar ao Carrinho</a></td>
                            <td><a class="plan-dedicated-order-button" style="background: #F0E738; color: #93278F; border:none;" href="orderVerificar.php?idProduto=4&tipo=vpsdedicado">Adicionar ao Carrinho</a></td>
                            <td><a class="plan-dedicated-order-button" style="background: #F0E738; color: #93278F; border:none;" href="orderVerificar.php?idProduto=5&tipo=vpsdedicado">Adicionar ao Carrinho</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </section>


    <section class="section-wth-amwaj">
        <div class="bg_overlay_section-amwaj">
            <img src="img/bg/b_bg_02.jpg" alt="img-bg">
        </div>

        <div class="container">
            <h5 class="title-default-coodiv-tree">Instâncias de computação de alto desempenho são ativadas em segundos. On-line 24 horas por dia, 7 dias por semana <span>recursos do servidor</span></h5>

            <div class="row justify-content-left mr-tp-80">
                <div class="col-md-4">
                    <div class="features-box-style-two">
                        <i class="e-flaticon-002-plug"></i>
                        <h5>Fique conectado o tempo todo</h5>
                        <p>Whether you are looking for a personal website hosting plan or a business website hosting plan, </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="features-box-style-two">
                        <i class="e-flaticon-025-router"></i>
                        <h5>Sem vizinhos barulhentos</h5>
                        <p>Whether you are looking for a personal website hosting plan or a business website hosting plan, </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="features-box-style-two">
                        <i class="e-flaticon-021-virtual-reality"></i>
                        <h5>Infraestrutura poderosa</h5>
                        <p>Whether you are looking for a personal website hosting plan or a business website hosting plan, </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-left mr-tp-30">
                <div class="col-md-4">
                    <div class="features-box-style-two">
                        <i class="e-flaticon-032-sata"></i>
                        <h5>Muitas combinações de SO</h5>
                        <p>Whether you are looking for a personal website hosting plan or a business website hosting plan, </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="features-box-style-two">
                        <i class="e-flaticon-037-cable"></i>
                        <h5>Acesso de administrador raiz</h5>
                        <p>Whether you are looking for a personal website hosting plan or a business website hosting plan, </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="features-box-style-two">
                        <i class="e-flaticon-045-car-key"></i>
                        <h5>Sem contratos de longo prazo</h5>
                        <p>Whether you are looking for a personal website hosting plan or a business website hosting plan, </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="padding-70-0 position-relative">
        <div class="container">

            <div class="row justify-content-between">

                <div class="col-md-8 about-us-img-section">
                    <img src="img/demo/groupofworks.jpg" alt="" />
                </div>

                <div class="col-md-4 side-text-right-container">
                    <h2 class="side-text-right-title">Nós estamos com você ,<br> cada passo do caminho</h2>
                    <p class="side-text-right-text">
                        Se você está procurando um plano de hospedagem de site <b>pessoal</b> ou um plano de hospedagem de site <b>empresarial</b>, nós somos a solução perfeita para você. Nossos poderosos serviços de hospedagem de sites não apenas ajudarão você a atingir as metas gerais de seu site, mas também fornecerão a confiança necessária para saber que você é parceiro de uma empresa <a href="#">confiável</a> e <a href="#">segura</a> plataforma de hospedagem de sites.
                        <br>
                        <br> Somos uma das plataformas de hospedagem de sites mais fáceis de usar e continuamos comprometidos em fornecer aos nossos clientes uma das melhores soluções de hospedagem do mercado.
                    <p>
                        <a class="side-text-right-button" href="#">Comece conosco agora</a>
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

</html>