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
                         <li class="nav-item">
                            <a class="nav-link" href="nossoproduto.php">Nossos Produtos</a>
                        </li>

                        <li class="nav-item dropdown active">
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
    </div>

    <section class="padding-60-0-100 position-relative">
        <div class="container">

            <div class="the_breadcrumb_conatiner_page">
                <div class="the_breadcrumb">
                    <div class="breadcrumbs"><i class="fas fa-home"></i><a href="index.html">Husai</a> / Centro de Ajuda</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 help-center-header">
                    <h5 class="help-center-title"><span style="color: #93278F;">Centro de Ajuda</span>bem-vindo à central de ajuda de clientes da Husai</h5>
                    <p class="help-center-text">é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando uma impressora desconhecida pegou uma cozinha de tipos e embaralhou-a para fazer um livro de espécimes de tipos.</p>
                </div>
            </div>

           <div class="row justify-content-center mr-tp-40 nav our-help-center-tabs-nav" id="nav-tab" role="tablist">

                <a class="col-md-3 active" id="nav-first-help-categorie-tab" data-toggle="tab" href="#nav-first-help-categorie" role="tab" aria-controls="nav-first-help-categorie" aria-selected="true">
                    <div class="support-contact-us-box"  style="background: #93278F;">
                        <i class="e-flaticon-045-car-key"></i>
                        <h5>meu carrinho</h5>
                        <p>é simplesmente um texto fictício da indústria tipográfica e de impressão.</p>
                    </div>
                </a>

                <a class="col-md-3" id="nav-second-help-categorie-tab" data-toggle="tab" href="#nav-second-help-categorie" role="tab" aria-controls="nav-second-help-categorie-tab" aria-selected="false">
                    <div class="support-contact-us-box"  style="background: #93278F;">
                        <i class="e-flaticon-011-mixer"></i>
                        <h5>minha fatura</h5>
                        <p>é simplesmente um texto fictício da indústria tipográfica e de impressão.</p>
                    </div>
                </a>

                <a class="col-md-3" id="nav-third-help-categorie-tab-tab" data-toggle="tab" href="#nav-third-help-categorie" role="tab" aria-selected="false">
                    <div class="support-contact-us-box"  style="background: #93278F;">
                        <i class="e-flaticon-022-chip"></i>
                        <h5>nosso sistema de ingressos</h5>
                        <p>é simplesmente um texto fictício da indústria tipográfica e de impressão.</p>
                    </div>
                </a>

            </div>

            <div class="row justify-content-start mr-tp-80">
               <div id="nav-tabContent" class="col-md-9 tab-content">

                    <div class="tab-pane fade show active" id="nav-first-help-categorie" role="tabpanel" aria-labelledby="nav-first-help-categorie-tab">
                        <span class="help-center-box-popular">categorias mais populares</span>

                        <div class="help-center-box-item">
                            <!-- start the help center box  -->
                            <div class="help-center-box-icon" style="background: #F0E738; color: #93278F;">
                                <!-- start the help center icon  -->
                                <i class="fas fa-server"></i>
                                <!-- help center item icon  -->
                            </div>
                            <!-- end the help center icon  -->

                            <div class="help-center-box-text" >
                                <span>estado dos nossos servidores </span>
                                <!-- help center item title  -->
                                <span>is simply dummy text of the printing and typesetting industry.</span>
                                <!-- help center item sub title  -->
                            </div>
                            <a class="help-center-box-link" href="Privacy.html" style="background: #F0E738;"><i class="fas fa-angle-right" style="color: #93278F;"></i></a>
                            <!-- help center item link  -->
                        </div>
                        <!-- end the help center box  -->

                        <div class="help-center-box-item">
                            <!-- start the help center box  -->
                            <div class="help-center-box-icon" style="background: #F0E738; color: #93278F;">
                                <!-- start the help center icon  -->
                                <i class="fas fa-binoculars"></i>
                                <!-- help center item icon  -->
                            </div>
                            <!-- end the help center icon  -->

                            <div class="help-center-box-text">
                                <span>nossos serviços de domínios </span>
                                <!-- help center item title  -->
                                <span>is simply dummy text of the printing and typesetting industry.</span>
                                <!-- help center item sub title  -->
                            </div>
                            <a class="help-center-box-link" href="Privacy.html" style="background: #F0E738;"><i class="fas fa-angle-right" style="color: #93278F;"></i></a>
                            <!-- help center item link  -->
                        </div>
                        <!-- end the help center box  -->

                        <div class="help-center-box-item">
                            <!-- start the help center box  -->
                            <div class="help-center-box-icon" style="background: #F0E738; color: #93278F;">
                                <!-- start the help center icon  -->
                                <i class="fas fa-chart-pie"></i>
                                <!-- help center item icon  -->
                            </div>
                            <!-- end the help center icon  -->

                            <div class="help-center-box-text">
                                <span>problema no pagamento </span>
                                <!-- help center item title  -->
                                <span>is simply dummy text of the printing and typesetting industry.</span>
                                <!-- help center item sub title  -->
                            </div>
                            <a class="help-center-box-link" href="Privacy.html" style="background: #F0E738;"><i class="fas fa-angle-right" style="color: #93278F;"></i></a>
                            <!-- help center item link  -->
                        </div>
                        <!-- end the help center box  -->

                    </div>

                    <div class="tab-pane fade" id="nav-second-help-categorie" aria-labelledby="nav-second-help-categorie-tab">
                        <h5 class="no-cat-error">não há categorias aqui <span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></h5>
                    </div>

                    <div class="tab-pane fade" id="nav-third-help-categorie">
                        <h5 class="no-cat-error">não há categorias aqui <span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></h5>
                    </div>

                </div>

                <div class="col-md-3">
                    <h5 class="immediate-help-center-title">Precisa de um atendimento <br>imediato ?</h5>
                    <p class="immediate-help-center-text">nossa equipe de suporte aqui para você 24/7</p>

                    <a class="immediate-help-center-link" href="#">+244 932 671 519</a>
                    <a class="immediate-help-center-link" href="#">suporte@husai.co</a>
                    <a class="immediate-help-center-link" href="contact.php" style="color: #93278F;">Mande uma mensagem</a>
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