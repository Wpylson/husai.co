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
                                <li><a class="dropdown-item" href="../signout.php">Sair</a></li>
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
                    <li>
                        <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Relatórios</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="invoice.php">Relatório de venda</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <?php
                        $selSoli = mysqli_query($conn, "SELECT * FROM `solicitacao` WHERE `visto`='Não' ");
                        ?>
                        <a href="solicitacoes.php"><i class="fa fa-magic"></i> <span class="nav-label">Solicitações </span><span class="label label-info float-right"><?php echo mysqli_num_rows($selSoli); ?></span></a>
                    </li>
                    <li class="special_link">
                        <a href="package.php"><i class="fa fa-database"></i> <span class="nav-label">Construtor de Site</span></a>
                    </li>
                </ul>

            </div>
        </nav>