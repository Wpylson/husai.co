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
        
    <link rel="stylesheet" href="css/husai.css">

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

                        <li class="nav-item">
                            <a class="nav-link" href="domains.php">Domínios</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link" href="#" role="button" id="header-help-drop-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nossos Produtos<span class="sr-only">(current)</span></a>
                            <ul class="dropdown-menu coodiv-dropdown-header" aria-labelledby="header-help-drop-down">
                                <li><a class="dropdown-item" href="bankya.php">Bankya</a></li>
                                <li><a class="dropdown-item" href="enter.php">Enter</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown ">
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
                <div class="col-md-12 d-flex mx-auto flex-column">
                    <div class="mb-auto"></div>
                    <h3 class="mt-3 main-header-text-title" style="text-align: left;"><span style="color: #f5f5f5;text-align: left;"></span>ENTER</h3>
                </div>
                <div class="col-md-12">
                    <div class="breadcrumb-hosting-pages row" style="height: 150px;">
                        <a class="col-md-6" href="bankya.php">
                            <img src="img/husai/clientes/banky.png" alt="" />
                            <!-- <span class="sub-breadcrumb-host-title">hospedagem web</span> -->
                        </a>

                        <a class="col-md-6 active" href="enter.php">
                            <img src="img/husai/clientes/enter.png" alt="" />
                            <!-- <span class="sub-breadcrumb-host-title">servidores</span> -->
                        </a>

                    </div>
                </div>
            </div>

        </main>
        <div class="mt-auto"></div>
    </div>

    <section class="padding-zero padding-100-0-0-100" style="background: #93278F;">
        <div class="container">
            <div class="row justify-content-between" style="padding: 20px;background: #fff;">
            <div class="col-md-4 side-text-right-container side-text-plan-hosting">
                   <p class="chourico">Vantagens de usar o <strong>enter</strong></p>

                    <ul class="web-hosting-options">
                    <li> <p class="f-size16"><em class="fa fa-check-circle ok-circle-icon" style="margin-right:5px;"></em>Marketplace Escalável</p> </li>
                        <li> <p class="f-size16"><em class="fa fa-check-circle ok-circle-icon" style="margin-right:5px;"></em>Injectável</p> </li>
                        <li> <p class="f-size16"><em class="fa fa-check-circle ok-circle-icon" style="margin-right:5px;"></em>100% Seguro</p></li>
                        <li> <p class="f-size16"><em class="fa fa-check-circle ok-circle-icon" style="margin-right:5px;"></em>Rápido</p></li>
                    </ul>

                </div>
                <div class="col-md-8 side-text-right-container side-text-plan-hosting" style="border-left: 1px solid #d1d1d1 ;">
                    <h2 class="side-text-right-title f-size25" style="color:#93278F;text-transform: uppercase;">O que é o <strong>enter?</strong></h2>
                    <p class="side-text-left-text f-size16" style="text-align: justify;">
                       O <strong>Enter</strong> é um marketplace de serviços da Husai, que tem como objectivo
                       conectar quem precisa, com quem sabe fazer, ao trabalhar com esse aplicativo, voçê amplia
                       a tua rede de novos cleientes, isto porque <strong>Enter</strong> cria conexõe entre os prestadores de serviços qualificados,
                       com aquele que buscamos e necessitam dos seus préstimos.
                    </p>
                    <div id="" class="mr-tp-50 custom-change">
                    <a class="log-btn btn-download" href="#" >Download <em class="fa fa-angle-right" style="margin-left:5px"></em></a>
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

            <!-- <div class="row justify-content-between final-footer-area mr-tp-40">
               

                <div class="footer-lang-changer">
                    <div class="lang-changer-drop-up">
                        <a class="menu-btn-changer" role="button" id="dropupmenulagchanger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" style="color: #f5f5f5;"><i class="fas fa-globe-africa"></i> Português/Angola</a>
                        <div class="dropdown-menu dropupmenulagchanger" aria-labelledby="dropupmenulagchanger">
                        </div>
                    </div>

                    <div class="lang-changer-drop-up">
                        <a class="menu-btn-changer" href="#" style="color: #f5f5f5;"><img src="img/flags/flag.png" alt="" width="30" /> Angola</a>
                    </div>
                </div>
            </div> -->
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