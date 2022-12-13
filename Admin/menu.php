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
                                        <li style="cursor: pointer;" onclick="location.href='versolicitacoes.php?idSoli=<?php echo $ascSoli['idSolicitacao']; ?>'">
                                            <a href="versolicitacoes.php?idSoli=<?php echo $ascSoli["idSolicitacao"]; ?>" class="dropdown-item">
                                                <div>
                                                    <i class="fa fa-envelope fa-fw"></i> Chegou uma nova solicitação de <?php echo $ascSoli["nome_cliente"]; ?>
                                                    <span class="float-right text-muted small"><?php echo $ascSoli["data_solicitacao"]; ?></span>
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
                            <a href="controllers/logout.php">
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