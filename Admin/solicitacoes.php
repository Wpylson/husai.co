<?php
include("../db.php");
$userHusai = $_COOKIE["userHusai"];
if (!isset($userHusai)) {
    header("location: ../signin.php");
}
$selUser = mysqli_query($conn, "SELECT * FROM user_admin WHERE email='$userHusai' ");
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
</head>

<body class="fixed-navigation">
    <div id="wrapper">
    <?php
            include_once("top_menu.php");
        ?>

        <div id="page-wrapper" class="gray-bg sidebar-content">
            <div class="row border-bottom">
                 <?php 
              include_once("menu.php");
              ?>
            </div>
            <div class="row wrapper border-bottom grey-bg page-heading">
                <div class="col-lg-10 grey-bg">
                    <h2>Solicitações de Clientes</h2>
                    <ol class="breadcrumb grey-bg">
                        <li class="breadcrumb-item">
                            <a href="index.html">Painel Admin</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Clientes</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Solicitações</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

            <div class="animated fadeInRight ecommerce" style="width: 98%;">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5><em class="fa fa-users"></em> Solicitações de Clientes</h5>

                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">

                                <table class="footable table table-stripped toggle-arrow-tiny">
                                    <thead>
                                        <tr>

                                            <th data-toggle="true">Projecto</th>
                                            <th>Cliente</th>
                                            <th>Contato</th>
                                            <th>E-mail</th>
                                            <th data-hide="all">Tipo do Projecto</th>
                                            <th data-hide="all">Descriçao do Projeto</th>
                                            <th data-hide="all">Tipo Cliente</th>
                                            <th data-hide="all">Verificado</th>
                                            <th data-hide="all">Data</th>
                                            <!-- <th data-hide="all" rowspan="2"></th> -->
                                            <th>Acção</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $selSoliGeral = mysqli_query($conn, "SELECT solicitacao.*,tipo_projecto.* FROM solicitacao 
                                        INNER JOIN tipo_projecto on solicitacao.idTipoProjecto=tipo_projecto.idTipoProjecto ORDER by solicitacao.data_solicitacao; ");
                                        if (mysqli_num_rows($selSoliGeral) >= 1) {
                                            while ($ascSoliGeral = mysqli_fetch_assoc($selSoliGeral)) {
                                                $userAs = $ascSoliGeral["idUserGeral"];
                                                $selUsers = mysqli_query($conn, "SELECT * FROM user_geral WHERE idUserGeral='$userAs' ");
                                                $ascUsers = mysqli_fetch_assoc($selUsers);
                                        ?>
                                                <tr>
                                                    <td>Projeto - <?php echo $ascSoliGeral["titulo_projecto"]; ?></td>
                                                    <td><?php echo $ascSoliGeral["nome_cliente"]; ?></td>
                                                    <td><?php echo $ascSoliGeral["telefone_cliente"]; ?></td>
                                                    <td><?php echo $ascSoliGeral["email_cliente"]; ?></td>
                                                    <td><?php echo $ascSoliGeral["descricaoTipoProjecto"]; ?></td>
                                                    <td><?php echo $ascSoliGeral["descricao_projecto"]; ?></td>
                                                    <?php
                                                        if($ascSoliGeral['tipo_cliente']=="1"){
                                                            ?>
                                                               <td> <span class="label label-success">Registado</span></td>
                                                            <?php
                                                        }
                                                        else{
                                                            ?>
                                                                <td><span class="label label-warning">N/Registado</span></td>
                                                            <?php
                                                        }
                                                    ?>
                                                    <?php
                                                        if($ascSoliGeral['visto']=="Não"){
                                                            ?>
                                                               <td> <span class="label label-warning">Não</span></td>
                                                            <?php
                                                        }
                                                        else{
                                                            ?>
                                                                <td><span class="label label-success">Sim</span></td>
                                                            <?php
                                                        }
                                                    ?>
                                                    <td><?php echo $ascSoliGeral["data_solicitacao"]; ?></td>
                                                    <td><a onclick="location.href='verificar_solicitacao.php?idSol=<?php echo $ascSoliGeral["idSolicitacao"]; ?>' "><i class="fa fa-check text-navy"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-times text-danger"></i></a></td>
                                                </tr>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <div class="alert alert-danger alert-dismissable" style="border-radius: 0px; text-align: center;">
                                                Não encontramos nenhuma solicitação nova <em class="fa fa-spinner fa-spin"></em>
                                            <?php
                                        }
                                            ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5">
                                                <ul class="pagination float-right"></ul>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>

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
    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });
    </script>
</body>

</html>