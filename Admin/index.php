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
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
                <li class="active">
                    <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Painel Admin</span> </a>
                </li>
                <li>
                    <a href="clientes.php"><i class="fa fa-users"></i> <span class="nav-label">Clientes</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Gestão do Site</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="dominios.php">Domínios</a></li>
                        <li><a href="hospedagem.php">Hospedagem</a></li>
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
            <div class="sidebar-panel" style="background: #ccc;">
                <div>
                    <h4>Mensagens <span class="badge badge-warning float-right"><?php echo mysqli_num_rows($selMsg); ?></span></h4>
                   	<?php 
                   	$selMsgd = mysqli_query($conn,"SELECT * FROM mensagens WHERE estado='nao' ORDER BY id desc");
                   	if (mysqli_num_rows($selMsgd)>=1) {
                   		while ($ascMsgd = mysqli_fetch_assoc($selMsgd)) {
                   			 ?>
		                   	<div class="feed-element" style="background: #f5f5f5; padding: 7px; border-radius: 3px; cursor: pointer;" onclick="location.href='vermensagem.php?idms=<?php echo $ascMsgd["id"]; ?>'">
		                        <a href="vermensagem.php?idms=<?php echo $ascMsgd["id"]; ?>" class="float-left">
		                            <img alt="image" class="rounded-circle" src="user.png">
		                        </a>
		                        <div class="media-body">
		                            <?php echo $ascMsgd["mensagem"]; ?>.
		                            <br>
		                            <small class="text-muted"><?php echo $ascMsgd["data"]; ?></small>
		                        </div>
		                    </div>
                   			 <?php 
                   		}
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

                </div>
                <div class="m-t-md">
                    <div class="row m-t-sm">
                        <div class="col-md-6">
                            <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                            <h5><strong><?php echo mysqli_num_rows($selSoli); ?></strong> Solicitações</h5>
                        </div>
                        <div class="col-md-6">
                            <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                            <?php 
                            $selPdVal = mysqli_query($conn,"SELECT * FROM pedidos WHERE estado='nao validado' ");
                             ?>
                            <h5><strong><?php echo mysqli_num_rows($selPdVal); ?></strong> Por validar</h5>
                        </div>
                    </div>
                </div>
                <div class="m-t-md">
                    <h4>Discussion</h4>
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge badge-primary"><em class="fa fa-spinner fa-spin"></em></span>
                                Sites em construção
                            </li>
                            <li class="list-group-item ">
                                <span class="badge badge-info"><em class="fa fa-spinner fa-spin"></em></span>
                                Publicidades
                            </li>
                            <li class="list-group-item">
                            	<?php 
                            	$selUserAco = mysqli_query($conn,"SELECT * FROM user_admin ");
                            	 ?>
                                <span class="badge badge-warning"><?php echo mysqli_num_rows($selUserAco); ?></span>
                                Usuarios
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="wrapper wrapper-content" style="background: #ccc;">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-primary float-right">Geral</span>
                                <h5>Clientes</h5>
                            </div>
                            <div class="ibox-content">
                            	<?php 
                            	$sel_cli = mysqli_query($conn,"SELECT * FROM user_geral ");
                            	 ?>
                                <h1 class="no-margins"><?php echo mysqli_num_rows($sel_cli); ?></h1>
                                <div class="stat-percent font-bold text-navy"><?php echo round((mysqli_num_rows($sel_cli)*100)/500); ?> % <i class="fa fa-level-down"></i></div>
                                <small>sincronizado</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-info float-right">Geral</span>
                                <h5>Solicitações</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo mysqli_num_rows($selSoli); ?></h1>
                                <div class="stat-percent font-bold text-info"><?php echo round((mysqli_num_rows($selSoli)*100)/500); ?>% <i class="fa fa-level-down"></i></div>
                                <small>sincronizado</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <span class="label label-warning float-right">Geral</span>
                                <h5>Bankya</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">AOA 0,00</h1>
                                <div class="stat-percent font-bold text-warning">% <i class="fa fa-level-up"></i></div>
                                <small>sincronizado</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                 <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5><em class="fa fa-vcard (alias)"></em> Tabela de pedidos</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Data</th>
                        <th>Usuario</th>
                        <th>Descrição</th>
                        <th>Pago</th>
                        <th>Estado</th>
                        <th>Opc</th>
                    </tr>
                    </thead>
                    <tbody>
                    	<?php 
                    	$selped = mysqli_query($conn,"SELECT * FROM pedidos WHERE estado='nao validado' ORDER BY id desc ");
                    	while ($ascPed = mysqli_fetch_assoc($selped)) {
                    		?>
	                       <tr class="gradeX">
	                        <td><?php echo $ascPed["data"]; ?></td>
	                        <td><?php echo $ascPed["usuario"]; ?></td>
	                        <td><?php 
	                        if ($ascPed["tipo"]==1) {
	                        	echo "Registro de Domínio...";
	                        }elseif ($ascPed["tipo"]==2) {
	                        	echo "Hospedagem de Site...";
	                        }elseif ($ascPed["tipo"]==3) {
	                        	echo "Certificado SSL...";
	                        }elseif ($ascPed["tipo"]==4) {
	                        	echo "E-mail profissional...";
	                        }
	                         ?></td>
	                        <td class="center"><?php 
	                        if ($ascPed["pago"]=='nao') {
	                        	 ?>
	                        	<span class="badge badge-danger">Não</span>
	                        	 <?php 
	                        }elseif ($ascPed["pago"]=='sim') {
	                        	 ?>
	                        	 <span class="badge badge-primary">Sim</span>
	                        	 <?php 
	                        }
	                         ?></td>
	                        <td class="center"><span class="badge badge-warning"><?php echo $ascPed["estado"]; ?></span></td>
	                        <td class="center"><button class="btn btn-sm btn-info " type="button" onclick="location.href='index.php?idPed=<?php echo $ascPed["id"]; ?>'"><i class="fa fa-paste"></i> Abrir</button></td>
	                       </tr>
                    <?php 
                    	}
                    	 ?>
                    </tbody>
                    </table>
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
    <script src="js/plugins/chartJs/Chart.min.js"></script>
 <script src="js/plugins/dataTables/datatables.min.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
<script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'Pedidos de Clientes'},
                    {extend: 'pdf', title: 'Pedidos de Clientes'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
    <script>
        $(document).ready(function() {

            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Example dataset",
                        backgroundColor: "rgba(26,179,148,0.5)",
                        borderColor: "rgba(26,179,148,0.7)",
                        pointBackgroundColor: "rgba(26,179,148,1)",
                        pointBorderColor: "#fff",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    },
                    {
                        label: "Example dataset",
                        backgroundColor: "rgba(220,220,220,0.5)",
                        borderColor: "rgba(220,220,220,1)",
                        pointBackgroundColor: "rgba(220,220,220,1)",
                        pointBorderColor: "#fff",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    }
                ]
            };

            var lineOptions = {
                responsive: true
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});

        });
    </script>
</body>
</html>
