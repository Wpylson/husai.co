<div class="sidebar-panel" style="background: #ccc;">
                <div>
                    <h4>Mensagens <span class="badge badge-warning float-right"><?php echo mysqli_num_rows($selMsg); ?></span></h4>
                    <?php
                    $selMsgd = mysqli_query($conn, "SELECT * FROM mensagens WHERE estado='nao' ORDER BY id desc");
                    if (mysqli_num_rows($selMsgd) >= 1) {
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
                            $selPdVal = mysqli_query($conn, "SELECT * FROM pedidos WHERE estado='nao validado' ");
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
                                $selUserAco = mysqli_query($conn, "SELECT * FROM user_admin ");
                                ?>
                                <span class="badge badge-warning"><?php echo mysqli_num_rows($selUserAco); ?></span>
                                Usuarios
                            </li>
                        </ul>
                    </div>
                </div>
            </div>