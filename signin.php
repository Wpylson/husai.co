<?php 
include("db.php");
if (isset($_COOKIE["cliente"])) {
   ?>
    <script type="text/javascript">window.location.replace("index.php");</script>
    <?php
}
if (isset($_GET["erro"])) {
    ?>
    <style type="text/css">
        #not{
            border: 1px solid red;
        }
    </style>
    <?php 
}
 ?>
<!doctype html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bredh flat responsive HTML & WHMCS hosting and domains template">
    <meta name="author" content="coodiv.net (nedjai mohamed)">
    <link rel="icon" href="icone.png">
    <title>bredh | signin page</title>

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
            <svg version="1.1" id="L5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <circle fill="#675cda" stroke="none" cx="6" cy="50" r="6">
                    <animateTransform attributeName="transform" dur="1s" type="translate" values="0 15 ; 0 -15; 0 15" repeatCount="indefinite" begin="0.1" />
                </circle>
                <circle fill="#675cda" stroke="none" cx="30" cy="50" r="6">
                    <animateTransform attributeName="transform" dur="1s" type="translate" values="0 10 ; 0 -10; 0 10" repeatCount="indefinite" begin="0.2" />
                </circle>
                <circle fill="#675cda" stroke="none" cx="54" cy="50" r="6">
                    <animateTransform attributeName="transform" dur="1s" type="translate" values="0 5 ; 0 -5; 0 5" repeatCount="indefinite" begin="0.3" />
                </circle>
            </svg>
            <span>Carregando</span>
        </div>
    </div>
    <!-- end preloader -->

    <div class="auth-wrapper" style="background: #93278F;">
        <div class="auth-content">
            <div class="card">
            <a class="auth-content-logo-header" href="index.php"><img src="logo2.png" alt=""></a>
                <div class="card-body text-center shadow-2" style="border-radius: 10px;">
                <div class="mt-auto altura-20"></div>
                    <h3 class="mb-4 auth-login-title" >Insira os seus dados</h3>
                    <div class="mt-auto altura-20"></div>
                     <form method="GET" action="login.php">
                        <?php 
                        if (isset($_GET["erro"])) {
                             ?>
                             <label class="small" style="color: red; display: block; float: left;">*Informação errada!</label>
                              <?php 
                        }
                         ?>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="not" name="email" placeholder="E-mail" required >
                    </div>
                    <?php 
                        if (isset($_GET["erro"])) {
                             ?>
                             <label class="small" style="color: red; display: block; float: left;">*Informação errada!</label>
                              <?php 
                        }
                         ?><div class="input-group mb-4">
                        <input type="password" class="form-control" id="not" name="senha" placeholder="Senha" required >
                    </div>
                    <button class="btn btn-entrar shadow-2 mb-4" >ENTRAR NA CONTA</button>
                     </form>
                    <p class="mb-0 text-white-muted">Não tem uma conta? <a href="signup.php">Inscrever-se</a></p>
                    <p class="mb-0 text-white-muted">Esqueceu-se a sua senha? <a href="#">Recuperar</a></p>
                    <div class="mt-auto altura-50"></div>
                </div>
            </div>
        </div>
    </div>

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
</body>

</html>