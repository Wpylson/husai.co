<?php 
include("../db.php");
$userHusai = $_COOKIE["userHusai"];
if (!isset($userHusai)) {
	header("location: ../signin.php");
}
$selUser = mysqli_query($conn,"SELECT * FROM user_admin WHERE email='$userHusai' ");
$ascUser = mysqli_fetch_assoc($selUser);
 ?>
 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
</head>
<body class="fixed-navigation" >
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header" style="text-align: center;">
                    <div class="dropdown profile-element" >
                        <img alt="image" class="rounded-circle" src="12169276551941958109.png" width="100" />
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold"><?php echo $ascUser["nome"]; ?></span>
                            <span class="text-muted text-xs block">Administrador <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.php">Perfil</a></li>
                            <li><a class="dropdown-item" href="mailbox.php">E-mail</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../signin.php">Sair</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        <img src="../icone.png" width="40">
                    </div>
                </li>
                <li>
                    <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Painel Admin</span> </a>
                </li>
                <li>
                    <a href="clientes.php"><i class="fa fa-users"></i> <span class="nav-label">Clientes</span></a>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Gestão do Site</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="dominios.php">Domínios</a></li>
                        <li class="active"><a href="hospedagem.php">Hospedagem</a></li>
                        <li><a href="certificadossl.php">Certificado SSL</a></li>
                        <li><a href="emailProfissional.php">E-mail Profissional</a></li>
                    </ul>
                </li>
                <li>
                	<?php 
                	$selMsg = mysqli_query($conn,"SELECT * FROM mensagens WHERE estado='nao' ORDER BY id desc");
                	 ?>
                    <a href="mailbox.php"><i class="fa fa-envelope"></i> <span class="nav-label">Mensagens </span><span class="label label-warning float-right"><?php echo mysqli_num_rows($selMsg); ?></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="mailbox.php">Caixa de Entrada</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Relatórios</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="invoice.php">Relatório de venda</a></li>
                    </ul>
                </li>
                <li>
                	<?php 
                	$selSoli = mysqli_query($conn,"SELECT * FROM solicitacoes WHERE estado='nao' ");
                	 ?>
                    <a href="solicitacoes.php"><i class="fa fa-magic"></i> <span class="nav-label">Solicitações </span><span class="label label-info float-right"><?php echo mysqli_num_rows($selSoli); ?></span></a>
                </li>
                <li class="special_link">
                    <a href="package.php"><i class="fa fa-database"></i> <span class="nav-label">Construtor de Site</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg sidebar-content">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.php">
                <div class="form-group">
                    <input type="text" placeholder="Ferramenta de pesquisa..." class="form-control" name="query" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Bem-vindo ao painel do Administrador <b>Husai</b></span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning"><?php echo mysqli_num_rows($selMsg); ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                    	<?php 
                    	if (mysqli_num_rows($selMsg)>=1) {
                    		while ($ascMsg = mysqli_fetch_assoc($selMsg)) {
                    		 ?>
                    	  <li style="cursor: pointer;" onclick="location.href='vermensagem.php?idms=<?php echo $ascMsg["id"]; ?>'" >
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="vermensagem.php?idms=<?php echo $ascMsg["id"]; ?>">
                                    <img alt="image" class="rounded-circle" src="user.png">
                                </a>
                                <div>
                                    <strong><?php echo $ascMsg["nome"]; ?></strong> <?php echo $ascMsg["mensagem"]; ?>. <br>
                                    <small class="text-muted"><?php echo $ascMsg["data"]; ?></small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                    		 <?php 
                    	}
                    	 ?>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.php" class="dropdown-item">
                                    <i class="fa fa-envelope"></i> <strong> todas mensagens</strong>
                                </a>
                            </div>
                        </li>
                        <?php
                    	}else{
                    	 ?>
                    	  <div class="col-lg-12">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            <i class="fa fa-warning"></i> Alerta
                                        </div>
                                        <div class="panel-body">
                                            <p>Não encontramos nenhuma mensagem.</p>
                                        </div>
                                    </div>
                                </div>
                    	 <?php
                    	}
                    	?>

                    	
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary"><?php echo mysqli_num_rows($selSoli); ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                    	<?php 
                    	if (mysqli_num_rows($selSoli)>=1) {
                    		while ($ascSoli = mysqli_fetch_assoc($selSoli)) {
                    			?>
                    			 <li style="cursor: pointer;" onclick="location.href='versolicitacoes.php?idSoli=<?php echo $ascSoli["id"]; ?>'">
                            <a href="versolicitacoes.php?idSoli=<?php echo $ascSoli["id"]; ?>" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Chegou uma nova solicitação de <?php echo $ascSoli["nome"]; ?>
                                    <span class="float-right text-muted small"><?php echo $ascSoli["data"]; ?></span>
                                </div>
                            </a>
                                </li>
                        <li class="dropdown-divider"></li>
                        <?php 
                    		}
                    		?>
                    		 <li>
                            <div class="text-center link-block">
                                <a href="solicitacoes.php" class="dropdown-item">
                                    <strong>todas solicitações</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    	 <?php 
                    	}else{
                    	 ?>
                    	  <div class="col-lg-12">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            <i class="fa fa-warning"></i> Alerta
                                        </div>
                                        <div class="panel-body">
                                            <p>Não encontramos nenhuma solicitação.</p>
                                        </div>
                                    </div>
                                </div>
                    	 <?php 
                    	}
                    	?>
                       
                    </ul>
                </li>


                <li>
                    <a href="../signin.php">
                        <i class="fa fa-sign-out"></i> Sair
                    </a>
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-spinner fa-spin"></i>
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom grey-bg page-heading">
                <div class="col-lg-10 grey-bg" >
                    <h2>Hospedagens</h2>
                    <ol class="breadcrumb grey-bg">
                        <li class="breadcrumb-item">
                            <a href="index.html">Painel Admin</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Hospedagens</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Hospedagem de Site</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

            <div class="tabs-container" style="width: 98%;">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a class="nav-link active" data-toggle="tab" href="#tab-1">WEBSITE HOSTING CPAINEL</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-2">HOSPEDAGEM VPS SSD</a></li>
                            <li><a class="nav-link" data-toggle="tab" href="#tab-3">HOSPEDAGEM DEDICADA</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" id="tab-1" class="tab-pane active">
                                <div class="panel-body" style="text-align: center;">
                                    <strong style="text-transform: uppercase;"><i class="fa fa-database"></i> Planos de Hospedagem cPainel</strong>
                                    <?php 
                                    if (isset($_POST["attplano"])) {
                                       $preco = $_POST["preco"];
                                       $espaco = $_POST["espaco"];
                                       $largura = $_POST["largura"];
                                       $dominio = $_POST["dominio"];
                                       $subdominios = $_POST["subdominios"];
                                       $email = $_POST["email"];
                                       $msyql = $_POST["msyql"];
                                       $ipdedicado = $_POST["ipdedicado"];
                                       $suporte = $_POST["suporte"];
                                       $planoID = $_POST["planoID"];

                                       $upd = "UPDATE `host_cpainel` SET `preco`='$preco',`espaco`='$espaco',`largura`='$largura',`dominio`='$dominio',`subdominios`='$subdominios',`email`='$email',`msyql`='$msyql',`ipdedicado`='$ipdedicado',`suporte`='$suporte' WHERE id='$planoID' ";
                                       $updcogy = mysqli_query($conn,$upd);
                                       if ($updcogy) {
                                          ?>
                                          <div class="alert alert-info alert-dismissable">
                                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                            Detalhes do plano de hospedagem atualizado com sucesso.
                                        </div>
                                          <?php 
                                       }
                                    }
                                     ?>
                                    <hr>
                                    <?php 
                                    $selcpainel = mysqli_query($conn,"SELECT * FROM host_cpainel ");
                                    while ($aschost = mysqli_fetch_assoc($selcpainel)) {
                                        ?>
                                          <div class="col-md-3" style="display: inline-block; cursor: pointer;">
                                        <div class="ibox">
                                             <form method="POST" style="width: 100%;">
                                            <div class="ibox-content product-box">

                                                <div class="product-imitation" style="text-transform: uppercase;">
                                                    [ <?php echo $aschost["nome"]; ?> ]
                                                </div>
                                                <div class="product-desc">
                                                    <span class="product-price">
                                                       AOA <input type="text" style="width: 80px; background: transparent; border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #f5f5f5; color: #f5f5f5;" name="preco" value="<?php echo $aschost["preco"]; ?>">
                                                    </span>
                                                    <small class="text-muted">Detalhes do Plano</small>
                                                    <div class="m-t-xs" style="text-align: left;">
                                                    <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["espaco"]; ?>" name="espaco"></p>
                                                     <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["largura"]; ?>" name="largura"></p>
                                                     <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["dominio"]; ?>" name="dominio"></p>
                                                     <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["subdominios"]; ?>" name="subdominios"></p>
                                                      <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["email"]; ?>" name="email"></p>
                                                      <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["msyql"]; ?>" name="msyql"></p>
                                                      <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["ipdedicado"]; ?>" name="ipdedicado"></p>
                                                      <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["suporte"]; ?>" name="suporte"></p>
                                                    </div>
                                                    <div class="m-t text-righ">
                                                        <input type="text" hidden name="planoID" value="<?php echo $aschost["id"]; ?>">
                                                        <button class="btn btn-xs btn-outline btn-primary" name="attplano"><i class="fa fa-pencil"></i> Atualizar Informações</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                        <?php 
                                    }
                                     ?>

                                   
                                </div>
                            </div>
                            <div role="tabpanel" id="tab-2" class="tab-pane">
                                <div class="panel-body" style="text-align: center;">
                                  <strong style="text-transform: uppercase;"><i class="fa fa-database"></i> Planos de Hospedagem Vps SSD</strong>
                                  <?php 
                                    if (isset($_POST["attplanoVPS"])) {
                                        $preco = $_POST["preco"];
                                        $ram = $_POST["ram"];
                                        $cpu = $_POST["cpu"];
                                        $memoria = $_POST["memoria"];
                                        $transferencia = $_POST["transferencia"];
                                        $ip = $_POST["ip"];
                                        $protecao = $_POST["protecao"];
                                        $cpainel = $_POST["cpainel"];
                                        $gps = $_POST["gps"];
                                        $sistema = $_POST["sistema"];
                                        $reinicia = $_POST["reinicia"];
                                        $remota = $_POST["remota"];
                                        $suporte = $_POST["suporte"];
                                        $planoIDVPS = $_POST["planoIDVPS"];

                                        $upd = "UPDATE `host_vps` SET `preco`='$preco',`ram`='$ram',`cpu`='$cpu',`memoria`='$memoria',`transferencia`='$transferencia',`ip`='$ip',`protecao`='$protecao',`cpainel`='$cpainel',`gps`='$gps',`sistema`='$sistema',`reinicia`='$reinicia',`remota`='$remota',`suporte`='$suporte' WHERE id='$planoIDVPS' ";
                                        $updcosvery = mysqli_query($conn,$upd);
                                        if ($updcosvery) {
                                            ?>
                                          <div class="alert alert-info alert-dismissable">
                                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                            Detalhes do plano de hospedagem atualizado com sucesso.
                                        </div>
                                          <?php 
                                        }

                                    }
                                   ?>
                                    <hr>
                                    <?php 
                                    $selcpainel = mysqli_query($conn,"SELECT * FROM host_vps ");
                                    while ($aschost = mysqli_fetch_assoc($selcpainel)) {
                                        ?>
                                          <div class="col-md-3" style="display: inline-block; cursor: pointer;">
                                        <div class="ibox">
                                             <form method="POST" style="width: 100%;">
                                            <div class="ibox-content product-box">

                                                <div class="product-imitation" style="text-transform: uppercase;">
                                                    [ <?php echo $aschost["nome"]; ?> ]
                                                </div>
                                                <div class="product-desc">
                                                    <span class="product-price">
                                                       AOA <input type="text" style="width: 80px; background: transparent; border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #f5f5f5; color: #f5f5f5;" name="preco" value="<?php echo $aschost["preco"]; ?>">
                                                    </span>
                                                    <small class="text-muted">Detalhes do Plano</small>
                                                    <div class="m-t-xs" style="text-align: left;">
                                                    <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["ram"]; ?>" name="ram"></p>
                                                     <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["cpu"]; ?>" name="cpu"></p>
                                                     <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["memoria"]; ?>" name="memoria"></p>
                                                     <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["transferencia"]; ?>" name="transferencia"></p>
                                                      <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["ip"]; ?>" name="ip"></p>
                                                      <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["protecao"]; ?>" name="protecao"></p>
                                                      <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["cpainel"]; ?>" name="cpainel"></p>
                                                      <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["gps"]; ?>" name="gps"></p>
                                                      <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["sistema"]; ?>" name="sistema"></p>
                                                       <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["reinicia"]; ?>" name="reinicia"></p>
                                                       <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["remota"]; ?>" name="remota"></p>
                                                       <p style="display: block;margin: auto;"><em class="fa fa-check"></em> <input type="text" style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid #ccc;" value="<?php echo $aschost["suporte"]; ?>" name="suporte"></p>
                                                    </div>
                                                    <div class="m-t text-righ">
                                                        <input type="text" hidden name="planoIDVPS" value="<?php echo $aschost["id"]; ?>">
                                                        <button class="btn btn-xs btn-outline btn-primary" name="attplanoVPS"><i class="fa fa-pencil"></i> Atualizar Informações</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                        <?php 
                                    }
                                     ?>

                                   
                                </div>
                            </div>
                             <div role="tabpanel" id="tab-3" class="tab-pane">
                                <div class="panel-body" style="text-align: center;">
                                    <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5><i class="fa fa-database"></i> Informações sobre a Hospedagem dedicada </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <h2>
                           Funcionamento<br>
                        </h2>
                        <p>
                            A <strong>hospedagem dedicada</strong>
                            é a junção de alguns serviços que a Husai oferece, ou seja dentro da <strong>hospedagem dedicada</strong> já se emcontra a hospedagem cPainel ou VPS, emails profissionais e certificados SSL para a maior compreesnão de um usuario que quer simplesmente um pacote completo de hospedagem incluindo esses item acima citados, pode também se fazer acompanhar da criação de site. </p>
                        <p>
                            <small>
                                * A <strong>hospedagem dedicada</strong> é uma opção de hospedagem da internet em que um servidor (ou servidores) físico dedicado a um único cliente comercial.
                            </small>
                        </p>
                    </div>
                </div>
            </div>
                                </div>
                            </div>
                        </div>


                    </div>
       

        <div class="footer">
            <div class="float-right">
                Desenvolvido por <strong>Raúl Afonso</strong>.
            </div>
            <div>
                <strong>Copyright</strong> Husai &copy; 2022-2023
            </div>
        </div>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/curvedLines.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
        <script src="js/plugins/footable/footable.all.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

        });

    </script>
</body>
</html>
