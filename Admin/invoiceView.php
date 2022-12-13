<?php
include("../db.php");
$userHusai = $_COOKIE["userHusai"];
if (!isset($userHusai)) {
    header("location: ../signin.php");
}
$selUser = mysqli_query($conn, "SELECT * FROM user_admin WHERE email='$userHusai' ");
$ascUser = mysqli_fetch_assoc($selUser);
$idInvo = $_GET["idInvo"];
$selCart = mysqli_query($conn, "SELECT * FROM carrinhofeito WHERE id='$idInvo' ");
$ascSel = mysqli_fetch_assoc($selCart);
$idCart = $ascSel['id'];
$user = $ascSel["user"];
$selUserCli = mysqli_query($conn, "SELECT * FROM user_geral WHERE email='$user' ");
$ascUserCli = mysqli_fetch_assoc($selUserCli);
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
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
</head>

<body class="fixed-navigation">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header" style="text-align: center;">
                        <div class="dropdown profile-element">
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
                        $selMsg = mysqli_query($conn, "SELECT * FROM mensagens WHERE estado='nao' ORDER BY id desc");
                        ?>
                        <a href="mailbox.php"><i class="fa fa-envelope"></i> <span class="nav-label">Mensagens </span><span class="label label-warning float-right"><?php echo mysqli_num_rows($selMsg); ?></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="mailbox.php">Caixa de Entrada</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Relatórios</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="active"><a href="invoice.php">Relatório de venda</a></li>
                        </ul>
                    </li>
                    <li>
                        <?php
                        $selSoli = mysqli_query($conn, "SELECT * FROM solicitacoes WHERE estado='nao' ");
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
                                <i class="fa fa-envelope"></i> <span class="label label-warning"><?php echo mysqli_num_rows($selMsg); ?></span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <?php
                                if (mysqli_num_rows($selMsg) >= 1) {
                                    while ($ascMsg = mysqli_fetch_assoc($selMsg)) {
                                ?>
                                        <li style="cursor: pointer;" onclick="location.href='vermensagem.php?idms=<?php echo $ascMsg["id"]; ?>'">
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
                                } else {
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
                                <i class="fa fa-bell"></i> <span class="label label-primary"><?php echo mysqli_num_rows($selSoli); ?></span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <?php
                                if (mysqli_num_rows($selSoli) >= 1) {
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
                                } else {
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
                <div class="col-lg-10 grey-bg">
                    <h2>Registro de Venda</h2>
                    <ol class="breadcrumb grey-bg">
                        <li class="breadcrumb-item">
                            <a href="index.html">Painel Admin</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Registros</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Vendas</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

            <div class="animated fadeInRight ecommerce" style="width: 98%;">
                <div class="ibox-content p-xl">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>De:</h5>
                            <address>
                                <strong>Husai, Inc.</strong><br>
                                suporte@husai.co<br>
                                Angola<br>
                                <abbr title="Phone">P:</abbr> (´+244) 932 671 519
                            </address>
                        </div>

                        <div class="col-sm-6 text-right">
                            <h4>Fatura No.</h4>
                            <h4 class="text-navy">FT-0<?php echo $idInvo; ?></h4>
                            <span>To:</span>
                            <address>
                                <strong><?php echo $ascUserCli["nome"]; ?>, Inc.</strong><br>
                                <?php echo $ascUserCli["email"]; ?><br>
                                <?php echo $ascUserCli["localizacao"]; ?><br>
                                <abbr title="Phone">P:</abbr> (+244) <?php echo $ascUserCli["telefone"]; ?>
                            </address>
                            <p>
                                <span><strong>Fatura Data:</strong> <?php echo $ascSel["data"]; ?></span><br />
                                <span><strong>Hoje:</strong> <?php echo date("d/m/Y"); ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="table-responsive m-t">
                        <table class="table invoice-table">
                            <thead>
                                <tr>
                                    <th>Lista de Itens</th>
                                    <th>Quantidade</th>
                                    <th>Preço</th>
                                    <th>Taxa</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $selCartk = mysqli_query($conn, "SELECT * FROM carrinho WHERE estado='sim' AND usuario='$user' ORDER BY id desc");
                                while ($ascCart = mysqli_fetch_assoc($selCartk)) {
                                    $idProd = $ascCart["idprod"];
                                    if ($ascCart["tipo"] == "cpainel") {
                                        $selhostCpainel = mysqli_query($conn, "SELECT * FROM host_cpainel WHERE id='$idProd' ");
                                        $ascHostcpainel = mysqli_fetch_assoc($selhostCpainel);
                                ?>
                                        <tr>
                                            <td>
                                                <div><strong>Hospedagem Cpanel</strong></div>
                                                <small><?php echo $ascHostcpainel["espaco"] . ', ' . $ascHostcpainel["largura"] . ', ' . $ascHostcpainel["subdominios"] . ', ' . $ascHostcpainel["email"] . ', ' . $ascHostcpainel["msyql"]; ?>.</small>
                                            </td>
                                            <td>1</td>
                                            <td>AOA <?php echo $ascCart["preco"]; ?></td>
                                            <td>AOA 0,00</td>
                                            <td>AOA <?php echo $ascCart["preco"]; ?></td>
                                        </tr>
                                    <?php
                                    } elseif ($ascCart["tipo"] == "dominio") {
                                    ?>
                                        <tr>
                                            <td>
                                                <div><strong><?php echo $ascCart["designacao"]; ?></strong></div>
                                                <small style="color: green;"><em class="fa fa-check-circle"></em> <?php echo $ascCart["dominio"]; ?>.</small>
                                            </td>
                                            <td>1</td>
                                            <td>AOA <?php echo $ascCart["preco"]; ?></td>
                                            <td>AOA 0,00</td>
                                            <td>AOA <?php echo $ascCart["preco"]; ?></td>
                                        </tr>
                                    <?php
                                    } elseif ($ascCart["tipo"] == "ssl") {
                                        $selCert = mysqli_query($conn, "SELECT * FROM certificado_ssl WHERE id='$idProd' ");
                                        $ascCert = mysqli_fetch_assoc($selCert);
                                    ?>
                                        <tr>
                                            <td>
                                                <div><strong><?php echo $ascCert["nome"]; ?></strong></div>
                                                <small> <?php echo $ascCert["descricao"]; ?>.</small>
                                            </td>
                                            <td>1</td>
                                            <td>AOA <?php echo $ascCart["preco"]; ?></td>
                                            <td>AOA 0,00</td>
                                            <td>AOA <?php echo $ascCart["preco"]; ?></td>
                                        </tr>
                                    <?php
                                    } elseif ($ascCart["tipo"] == "vps") {
                                        $selVPS = mysqli_query($conn, "SELECT * FROM host_vps WHERE id='$idProd' ");
                                        $ascVPS = mysqli_fetch_assoc($selVPS);
                                    ?>
                                        <tr>
                                            <td>
                                                <div><strong>Hospedagem VPS</strong></div>
                                                <small> <?php echo $ascVPS["nome"] . ', ' . $ascVPS["ram"] . ', ' . $ascVPS["cpu"] . ', ' . $ascVPS["transferencia"] . ', ' . $ascVPS["sistema"]; ?>.</small>
                                            </td>
                                            <td>1</td>
                                            <td>AOA <?php echo $ascCart["preco"]; ?></td>
                                            <td>AOA 0,00</td>
                                            <td>AOA <?php echo $ascCart["preco"]; ?></td>
                                        </tr>
                                    <?php
                                    } elseif ($ascCart["tipo"] == "vpsdedicado") {
                                        $selVPS = mysqli_query($conn, "SELECT * FROM host_vps WHERE id='$idProd' ");
                                        $ascVPS = mysqli_fetch_assoc($selVPS);
                                    ?>
                                        <tr>
                                            <td>
                                                <div><strong>Hospedagem Dedicada</strong></div>
                                                <small>Domínio, Certificado SSL, E-mail personalizado, Assistencia Técnica.</small>
                                            </td>
                                            <td>1</td>
                                            <td>AOA <?php echo $ascCart["preco"]; ?></td>
                                            <td>AOA 0,00</td>
                                            <td>AOA <?php echo $ascCart["preco"]; ?></td>
                                        </tr>
                                <?php
                                    }
                                }

                                ?>

                            </tbody>
                        </table>
                    </div><!-- /table-responsive -->

                    <table class="table invoice-total">
                        <tbody>
                            <tr>
                                <td><strong>Sub Total :</strong></td>
                                <?php
                                $soma =  mysqli_query($conn, "SELECT sum(preco) FROM carrinho WHERE usuario ='$user' ");
                                $linhas = mysqli_num_rows($soma);
                                while ($linhas = mysqli_fetch_array($soma)) {
                                    $li = ($linhas['sum(preco)']);
                                ?>
                                    <td><?php echo $li; ?> AOA</td>
                                <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <td><strong>Taxa :</strong></td>
                                <td>0,00 AOA</td>
                            </tr>
                            <tr>
                                <td><strong>TOTAL :</strong></td>
                                <td><?php echo $li; ?> AOA</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-right">
                        <?php
                        if ($ascSel["estado"] == "nao") {
                        ?>
                            <form method="POST" action="validar.php">
                                <input type="hidden" name="idCart" value="<?php echo $idCart; ?>" />
                                <button class="btn btn-primary" name="validar"><i class="fa fa-dollar"></i> Validar Pagamento</button>
                            </form>
                        <?php
                        } else {
                        ?>
                            <button class="btn btn-primary" disabled><i class="fa fa-dollar"></i>Pagamento validado</button>
                        <?php
                        }
                        ?>

                    </div>

                </div>
                <br><br>

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
    <script src="js/plugins/dataTables/datatables.min.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'ExampleFile'
                    },
                    {
                        extend: 'pdf',
                        title: 'ExampleFile'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
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
</body>

</html>