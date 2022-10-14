<?php
include("../db.php");

if (isset($_COOKIE["cliente"])) {
        $usuarioLogado = $_COOKIE["cliente"];

        $sql = "SELECT * FROM user_geral WHERE email='$usuarioLogado'";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_assoc($result);
        

        $idUsuario = $rows['idUserGeral'];
        $nome = $rows["nome"];
        $email = $rows["email"];
        $telefone=$rows["telefone"];

        $empresa = $_POST["empresa"];
        $tipoEmpresa = $_POST["tipo_empresa"];
        $titulo = $_POST["titulo"];
        $tipo_site = $_POST['tipo_site'];
        $descricao = $_POST["descricao"];

        $insert = "INSERT INTO `solicitacoes`( `nome`, `email_empresa`,`telefone_empresa`, `idUserGeral`,
     `nome_empresa`, `tipo_empresa`, `titulo`, `tipo_site`, `descricao` ) 
    VALUES ('$nome','$email','$telefone','$idUsuario','$empresa','$tipoEmpresa','$titulo','$tipo_site','$descricao')";

        $cogVery = mysqli_query($conn, $insert);
        if ($cogVery) {
                $_SESSION['solicitacao'] = ' <div class="alert alert-success" role="alert">
        A sua solicitação foi enviada com sucesso, enviaremos uma resposta dentro embreve.
     </div>';
?>
                <script type="text/javascript">
                        window.location.replace("../pedido_site.php");
                </script>

        <?php
        } else {
                $_SESSION['erro_solicitacao'] = ' <div class="alert alert-danger" role="alert">
       Erro ao fazer a solicitação. Por favor tente novamente.
     </div>';
        ?>
                <script type="text/javascript">
                        window.location.replace("../pedido_site.php");
                </script>
        <?php
        }
} else {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone=$_POST["telefone"];
        $empresa = $_POST["empresa"];
        $tipoEmpresa = $_POST["tipo_empresa"];
        $titulo = $_POST["titulo"];
        $tipo_site = $_POST['tipo_site'];
        $descricao = $_POST["descricao"];

        $insert = "INSERT INTO `solicitacoes`( `nome`, `email_empresa`,`telefone_empresa`,
     `nome_empresa`, `tipo_empresa`, `titulo`, `tipo_site`, `descricao` ) 
    VALUES ('$nome','$email','$telefone','$empresa','$tipoEmpresa','$titulo','$tipo_site','$descricao')";

        $cogVery = mysqli_query($conn, $insert);
        if ($cogVery) {
                $_SESSION['solicitacao'] = ' <div class="alert alert-success" role="alert">
        A sua solicitação foi enviada com sucesso, enviaremos uma resposta dentro embreve.
     </div>';
        ?>
                <script type="text/javascript">
                        window.location.replace("../pedido_site.php");
                </script>

        <?php
        } else {
                $_SESSION['erro_solicitacao'] = ' <div class="alert alert-danger" role="alert">
       Erro ao fazer a solicitação. Por favor tente novamente.
     </div>';
        ?>
                <script type="text/javascript">
                        window.location.replace("../pedido_site.php");
                </script>
<?php
        }
}
