<?php
include("db.php");

?>
<!doctype html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Husai, Tecnologia & Inovações, hospedagen, criação de sites, iOs, android, Namibe, Luanda, Angola">
    <meta name="Raúl Afonso, Walter Cabral Kahamba, Nedjai Mohamed(coodiv.net)" content="coodiv.net (nedjai mohamed),Husai Angola, Namibe">
    <title>Husai | Solicitação</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- main css file -->
    <link href="css/main.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/husai.css">
    <link rel="icon" href="icone.png">
</head>

<body>
    <!-- start body -->

    <!-- start modal video -->
    <div class="modal fade" id="videomodal" tabindex="-1" role="dialog" aria-labelledby="videomodal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" id="video"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal video -->

    <div class="preloader">
        <!-- start preloader -->
        <div class="preloader-container">
            <img src="icone.png" width="50">
            <br><br>
            <span>Carregando...</span>
        </div>
    </div>
    <!-- end preloader -->

    <div id="coodiv-header" class="d-flex mx-auto flex-column  moon-edition">
        <div class="bg_overlay_header">
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

                        <li class="nav-item megamenu dropdown ">
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

                        <li class="nav-item dropdown active">
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
                <div class="col-md-5 text-center">
                    <h3 class="mt-3 title-header">Solicitaçõe de Projectos</h3>
                    <p class="side-text-center-text" style="color:#fff">
                        A <strong>HUSAI</strong> projectos que irão impulsionar o seu negócio. Desde sites, lojas online, apps (iOS e Android), sistemas de gestão e muito mais.
                        Isso tudo acompanhado com uma equipa de especialistas inteiramente dedicados para ti.

                    </p>
                    <div id="" class="mr-tp-20 custom-change">
                        <a class="log-btn btn-fale-connosco" href="#solicitacao"><em class="fa fa-phone" style="margin-right:5px"></em>Fale connosco </a>
                    </div>
                </div>

                <div class="col-md-auto text-center">
                    <img class="main-header-rigth-img" src="img/husai/ilustracao/ilu1.png" alt="" />
                </div>
            </div>

        </main>

    </div>


    <div id="mobile-form-contact-height"></div>

    <section class="/*padding-0-100*/ position-relative mr-tp-30" id="solicitacao" style="padding: 0px 0px 40px 0px;">
        <div class="container">
            <h5 class="title-default-coodiv-two mr-tp-30" style="text-transform: none;"><strong style="text-transform:capitalize;">Tudo o que voçê precisa</strong> para tornar o seu negócio real na internet</h5>
            <div class="row justify-content-between">
                <div class="col-md-5 about-us-img-section">
                    <img src="img/husai/ilustracao/ilu3.png" alt="">
                    <div class="mob-display-none">
                        <h5 class="immediate-help-center-title">Precisa de um atendimento <br>imediato ?</h5>
                        <p class="immediate-help-center-text">nossa equipe de suporte esta aqui para você 24/7</p>

                        <a class="immediate-help-center-link" href="#">+244 932 671 519</a>
                        <a class="immediate-help-center-link" href="#">suporte@husai.co</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <?php
                    if (isset($_SESSION['solicitacao'])) {
                        echo $_SESSION['solicitacao'];
                        unset($_SESSION['solicitacao']);
                    }

                    if (isset($_SESSION['erro_solicitacao'])) {
                        echo $_SESSION['erro_solicitacao'];
                        unset($_SESSION['erro_solicitacao']);
                    }
                    ?>
                    <form class="row form-contain-home contact-page-form-send" method="POST" action="controllers/solicitacao_controller.php">
                        <!-- start form -->
                        <h5>Faça a sua solicitação <span>diz-nos o que prentende e teremos o prazer em ajuda-lo</span></h5>
                        <div id="form-messages"></div>
                        <!-- form message -->

                        <?php
                        if (isset($_COOKIE["cliente"])) {
                        } else {
                        ?>
                            <div class="col-md-12">
                                <!-- start col -->
                                <div class="field input-field">
                                    <input class="form-contain-home-input" type="text" id="name" name="nome" placeholder="escreva seu nome" required>
                                    <!-- input -->
                                    <i class="fas fa-user" style="color: #93278F;"></i>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-md-12">
                                <!-- start col -->
                                <div class="field input-field">
                                    <input class="form-contain-home-input" type="email" id="email" name="email" placeholder="escreve seu email" required>
                                    <!-- input -->
                                    <i class="far fa-envelope" style="color: #93278F;"></i>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <!-- start col -->
                                <div class="field input-field">
                                    <input class="form-contain-home-input" type="text" id="telefone" name="telefone" placeholder="escreve seu telefone" required>
                                    <!-- input -->
                                    <i class="far fa-phone" style="color: #93278F;"></i>
                                </div>
                            </div>
                        <?php
                        }

                        ?>

                        <div class="col-md-12">
                            <!-- start col -->
                            <div class="field input-field">
                                <input class="form-contain-home-input" type="text" id="titulo" name="titulo" placeholder="escreva o  título para o seu projecto" required>
                                <!-- input -->
                                <i class="far fa-home" style="color: #93278F;"></i>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-12">
                            <!-- start col -->
                            <div class="field input-field">
                                <select class="select-input" id="tipo_site" name="tipo_site" required>
                                <option value="">seleciona o tipo projecto</option>
                                    <?php
                                    $sql_tipo_projecto = mysqli_query($conn, "SELECT * FROM `tipo_projecto`");
                                    $count_tipo_projecto = mysqli_num_rows($sql_tipo_projecto);
                                    if ($count_tipo_projecto > 0) {
                                        while ($row = mysqli_fetch_assoc($sql_tipo_projecto)) {
                                            $idTipoProjecto = $row['idTipoProjecto'];
                                            $descricao = $row['descricaoTipoProjecto'];
                                    ?>
                                           
                                            <option value="<?php echo $idTipoProjecto; ?>"><?php echo $descricao; ?></option>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <option value="">Tipo de projectos indisponíveis</option>
                                    <?php
                                    }
                                    ?>

                                </select>
                                <!-- input -->
                                <i class="far fa-list" style="color: #93278F;"></i>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <!-- start col -->
                            <div class="field input-field">
                                <textarea class="form-contain-home-input" id="message" name="descricao" placeholder="resumidamente, diga-nos mais detalhes sobre o seu projecto." required></textarea>
                                <!-- textarea -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="btn-holder-contect">
                            <button type="submit" name="enviar" style="background: #F0E738; color: #93278F;">Enviar</button>

                        </div>

                    </form>
                    <!-- end form -->
                </div>

            </div>


        </div>
    </section>

    <!-- 
    <section class="footer-section-banner" style="background: #F0E738;">
       <div class="container">
       <div class=" row free-trial-footer-banner">
        <div class="col-md-8 text-center">
                    <h3 class="mt-3 title-header">Hospedagens de Sites</h3>
                    <h3 class="" style="color:#fff ;font-size: 30px;font-weight: normal;">Para pequenos e grandes negócios</h3>
                    
                    <div id="" class="mr-tp-50 custom-change">
                        <a class="log-btn btn-fale-connosco" href="#" >VER TODOS PLANOS </a>
                    </div>
                </div>
        </div>

       </div>
    </section> -->

    <section class="footer-section-banner" style="background: #F0E738;">
        <div class="container">
            <div class="row free-trial-footer-banner">
                <div class="col-md-8">
                    <h5 class="free-trial-footer-banner-title" style="color: #93278F;">Hospedagens de Sites</h5>
                    <p class="free-trial-footer-banner-text" style="color: #93278F;">Para pequenos e grandes negócios</p>
                </div>

                <div class="col-md-4 free-trial-footer-links d-flex mx-auto flex-column">
                    <div class="mb-auto"></div>
                    <div class="mb-auto">
                        <a class="sign-btn" href="signup.php" style="background: #93278F;">VER TODOS PLANOS</a>
                    </div>
                    <div class="mt-auto"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-100-0 with-top-border border-botton-yellow">
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
    <!-- ajax mailer -->
    <script src="js/mailer.js"></script>
    <!-- seconde style additionel JavaScript -->
    <script src="js/particles-code.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/smoothscroll.js"></script>
</body>

</html>