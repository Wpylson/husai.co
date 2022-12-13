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
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
           <?php
            include_once("side_panel.php");
           ?>
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
                                $sel_cli = mysqli_query($conn, "SELECT * FROM user_geral ");
                                ?>
                                <h1 class="no-margins"><?php echo mysqli_num_rows($sel_cli); ?></h1>
                                <div class="stat-percent font-bold text-navy"><?php echo round((mysqli_num_rows($sel_cli) * 100) / 500); ?> % <i class="fa fa-level-down"></i></div>
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
                                <div class="stat-percent font-bold text-info"><?php echo round((mysqli_num_rows($selSoli) * 100) / 500); ?>% <i class="fa fa-level-down"></i></div>
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
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
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
                                            $selped = mysqli_query($conn, "SELECT * FROM pedidos WHERE estado='nao validado' ORDER BY id desc ");
                                            while ($ascPed = mysqli_fetch_assoc($selped)) {
                                            ?>
                                                <tr class="gradeX">
                                                    <td><?php echo $ascPed["data"]; ?></td>
                                                    <td><?php echo $ascPed["usuario"]; ?></td>
                                                    <td><?php
                                                        if ($ascPed["tipo"] == 1) {
                                                            echo "Registro de Domínio...";
                                                        } elseif ($ascPed["tipo"] == 2) {
                                                            echo "Hospedagem de Site...";
                                                        } elseif ($ascPed["tipo"] == 3) {
                                                            echo "Certificado SSL...";
                                                        } elseif ($ascPed["tipo"] == 4) {
                                                            echo "E-mail profissional...";
                                                        }
                                                        ?></td>
                                                    <td class="center"><?php
                                                                        if ($ascPed["pago"] == 'nao') {
                                                                        ?>
                                                            <span class="badge badge-danger">Não</span>
                                                        <?php
                                                                        } elseif ($ascPed["pago"] == 'sim') {
                                                        ?>
                                                            <span class="badge badge-primary">Sim</span>
                                                        <?php
                                                                        }
                                                        ?>
                                                    </td>
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
                        title: 'Pedidos de Clientes'
                    },
                    {
                        extend: 'pdf',
                        title: 'Pedidos de Clientes'
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
    <script>
        $(document).ready(function() {

            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
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
            new Chart(ctx, {
                type: 'line',
                data: lineData,
                options: lineOptions
            });

        });
    </script>
</body>

</html>