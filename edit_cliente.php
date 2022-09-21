<?php
include("db.php");
$cliente = $_COOKIE["cliente"];
$id = $_GET['id'];
if (!isset($_COOKIE["cliente"])) {
?>
    <script type="text/javascript">
        window.location.replace("signin.php");
    </script>

<?php

}
$selCli = mysqli_query($conn, "SELECT * FROM user_geral WHERE idUserGeral='$id' ");
$ascCli = mysqli_fetch_assoc($selCli);
?>
<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bredh flat responsive HTML & WHMCS hosting and domains template">
    <meta name="author" content="coodiv.net (nedjai mohamed)">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.min.css" rel="stylesheet">
    <link href="css/husai.css" rel="stylesheet">
    <style type="text/css">
        .emp-profile {
            padding: 3%;
            margin-top: 5%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }

        .profile-img {
            text-align: center;
        }

        .profile-img img {
            width: 70%;
            height: 100%;
        }

        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }

        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }

        .profile-head h5 {
            color: #333;
        }

        .profile-head h6 {
            color: #0062cc;
        }

        .profile-edit-btn {
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }

        .proile-rating {
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }

        .proile-rating span {
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }

        .profile-head .nav-tabs {
            margin-bottom: 5%;
        }

        .profile-head .nav-tabs .nav-link {
            font-weight: 600;
            border: none;
        }

        .profile-head .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 2px solid #93278F;
        }

        .profile-work {
            padding: 14%;
            margin-top: -15%;
        }

        .profile-work p {
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }

        .profile-work a {
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }

        .profile-work ul {
            list-style: none;
        }

        .profile-tab label {
            font-weight: 600;
        }

        .profile-tab p {
            font-weight: 300;
            color: #495057;
        }

        .data-info {
            color: #495057;
            padding: 5px;
            /* padding-right: 30px; */
            background: #d1d1;
            border-radius: 5px;
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
                            <li class="nav-item active">
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
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <div class="container emp-profile">

            <div class="row justify-content-center">

                <div class="profile-img user-header">
                    <img src="man_5-512.webp" alt="" style="width:100px;height:100px;" />
                    <h5>
                        <?php echo $ascCli["nome"]; ?>
                    </h5>
                    <h6 style="color: #93278F;">
                        <?php echo $ascCli["email"]; ?>
                    </h6>
                    <p style="font-size: 10px;"><a href="clientarea.php" class="link-client-area ">Perfil do utilizador</a> | <a href="edit_cliente.php?id=<?php echo $ascCli["idUserGeral"]; ?>" class="link-client-area active">Editar Informações</a> </p>
                </div>
            </div>
            <!-- <div class="col-md-2">
                        <em class="fa fa-cog" style="color: #93278F;"></em>
                    </div> -->

            <div class="row justify-content-left">
                <div class="col-md-12">
                    <div class="profile-head">

                    <?php
                   
                            if (isset($_POST['btn_save_passe'])) {
                            ?>
                                <div class="alert alert-success" role="alert">
                                   Mensagem
                                </div>
                            <?php
                            }

                            ?>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true" style="color: #93278F;">Dados Pessoais</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false" style="color: #93278F;">Palavra-passe</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active row" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row user-info">
                                            <div class="col-md-12">
                                                <div class="field input-field">
                                                    <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-user" style="margin-right:5px"></em>Nome Próprio</p>
                                                    <input class="text-email-input" type="text" id="nome" name="nome" value="<?php echo $ascCli["nome"]; ?>" placeholder="escreve o nome da sua empresa" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="field input-field">
                                                    <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-user" style="margin-right:5px"></em>Sobrenome</p>
                                                    <input class="text-email-input" type="text" id="sobre_nome" name="sobre_nome" value="<?php echo $ascCli["sobrenome"]; ?>" placeholder="escreve o seu sobrenome" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="field input-field">
                                                    <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-calendar" style="margin-right:5px"></em>Data Nascimento</p>
                                                    <input class="text-email-input" type="date" id="data_nascimento" name="data_nascimento" value="<?php echo $ascCli["dataNascimento"]; ?>" required>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-left:0px ;">
                                                <div class="col-md-6">
                                                    <div class="field input-field">
                                                        <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-male" style="margin-right:5px"></em>Gênero</p>
                                                        <select class="select-input" id="genero" name="genero" required>
                                                            <option value="">seleciona o seu gênero</option>
                                                            <option value="Maculino">Maculino</option>
                                                            <option value="Femenino">Femenino</option>
                                                            <option value="Outro">Outro</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="field input-field">
                                                        <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-list" style="margin-right:5px"></em>NIF</p>
                                                        <input class="text-email-input" type="text" id="nif" name="nif" value="<?php echo $ascCli["nif"]; ?>" placeholder="escreve o seu NIF" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="field input-field">
                                                    <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-at" style="margin-right:5px"></em>E-mail</p>
                                                    <input class="text-email-input" type="text" id="email" name="email" value="<?php echo $ascCli["email"]; ?>" placeholder="escreve o seu e-mail" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="field input-field">
                                                    <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-phone" style="margin-right:5px"></em>Número de Telefone</p>
                                                    <input class="text-email-input" type="text" id="telefone" name="telefone" value="<?php echo $ascCli["telefone"]; ?>" placeholder="escreve o seu número de telefone" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row user-info">
                                            <div class="col-md-12">
                                                <div class="field input-field">
                                                    <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-lacalization" style="margin-right:5px"></em>Localização</p>
                                                    <input class="text-email-input" type="text" id="localizacao" name="localizacao" value="<?php echo $ascCli["localizacao"]; ?>" placeholder="ex: Moçâmedes, Urbanização 5 de Abril" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="field input-field">
                                                    <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-globe-state" style="margin-right:5px"></em>Estado/Província</p>
                                                    <input class="text-email-input" type="text" id="estado_provincia" name="estado_provincia" value="<?php echo $ascCli["estado_provincia"]; ?>" placeholder="escreve o seu estado/província" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="field input-field">
                                                    <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-globe-africa" style="margin-right:5px"></em>Código Postal</p>
                                                    <input class="text-email-input" type="text" id="cod_postal" name="cod_postal" value="<?php echo $ascCli["cod_postal"]; ?>" placeholder="escreve o seu código postal">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="field input-field">
                                                    <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-globe-africa" style="margin-right:5px"></em>País</p>
                                                    <select class="select-input" id="pais" name="pais" required>
                                                        <option>seleciona o seu país</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Namíbia">Namíbia</option>
                                                        <option value="Brasil">Brasil</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>


                                    </div>
                                </div>
                                <div class="row mt-20-mb-20">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn-profile" name="btn_editar"> <em class="fa fa-save" style="margin-right:5px"></em>Salvar</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row user-info">
                                            <div class="col-md-12">
                                                <div class="field input-field">
                                                    <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-lock" style="margin-right:5px"></em>Palavra-passe</p>
                                                    <input class="text-email-input" type="password" id="palavra_passe" name="palavra_passe" placeholder="escreve a sua palavra-passe" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="field input-field">
                                                    <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-lock" style="margin-right:5px"></em>Nova palavra-passe</p>
                                                    <input class="text-email-input" type="password" id="nova_passe" name="nova_passe" placeholder="escreve nova palavra-passe" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="field input-field">
                                                    <p style="font-size: 12px;color: #000;margin: 0;"><em class="fa fa-lock" style="margin-right:5px"></em>Confirma nova palavra-passe</p>
                                                    <input class="text-email-input" type="password" id="confim_nova_passe" name="confim_nova_passe" placeholder="volta  escrever a nova palavra-passe" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end form -->
                                    </div>

                                </div>
                                <div class="row mt-20-mb-20">

                                    <button type="submit" class="btn-profile" name="btn_save_passe"> <em class="fa fa-save" style="margin-right:5px"></em>Salvar</button>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            </form>
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
    <script src="js/mailer.js"></script>
    <!-- seconde style additionel JavaScript -->
    <script src="js/particles-code.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script type="text/javascript">


    </script>
</body>

</html>