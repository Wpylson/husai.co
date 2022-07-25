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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bredh flat responsive HTML & WHMCS hosting and domains template">
    <meta name="author" content="coodiv.net (nedjai mohamed)">
    <link rel="icon" href="favicon.ico">
    <title>bredh | signin page</title>

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

    <div class="auth-wrapper" style="background: #93278F; opacity: 80%;">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <a class="auth-content-logo-header" href="index.php"><img src="logo2.png" alt=""></a>
                    <h3 class="mb-4 auth-login-title">Entrar na conta <span>Inscreva-se para sua oferta de teste e instantaneamente tenha hospedagem de luxo em sua conta com domínio gratuito incluído.</span></h3>
                     <form method="GET" action="login.php">
                        <?php 
                        if (isset($_GET["erro"])) {
                             ?>
                             <label class="small" style="color: red; display: block; float: left;">*Informação errada!</label>
                              <?php 
                        }
                         ?>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="not" name="email" placeholder="E-mail" required style="background: #C891C5; color: #333;">
                    </div>
                    <?php 
                        if (isset($_GET["erro"])) {
                             ?>
                             <label class="small" style="color: red; display: block; float: left;">*Informação errada!</label>
                              <?php 
                        }
                         ?><div class="input-group mb-4">
                        <input type="password" class="form-control" id="not" name="senha" placeholder="Senha" required style="background: #C891C5; color: #333;">
                    </div>

                    <button class="btn btn-login-auth shadow-2 mb-4" style="background: #F0E738; color: #93278F; border: none;">Entrar</button>
                     </form>
                    <p class="mb-0 text-white-muted">Não tem uma conta? <a href="signup.php">Inscrever-se</a></p>
                </div>
            </div>
        </div>
    </div>

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