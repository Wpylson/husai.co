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


        $titulo = $_POST["titulo"];
        $tipo_site = $_POST['tipo_site'];
        $descricao = $_POST["descricao"];

        $insert = "INSERT INTO`solicitacao`(`idUserGeral`, `nome_cliente`, `email_cliente`, 
        `telefone_cliente`, `titulo_projecto`, `descricao_projecto`, `idTipoProjecto`, `visto`, `tipo_cliente`)
    VALUES ('$idUsuario','$nome','$email','$telefone','$titulo','$descricao','$tipo_site','Não','1')";
        
        $cogVery = mysqli_query($conn, $insert);
        if ($cogVery) {
                $_SESSION['solicitacao'] = ' <div class="alert alert-success" role="alert">
        A sua solicitação foi enviada com sucesso, enviaremos uma resposta dentro embreve.
     </div>';
?>
                <script type="text/javascript">
                        window.location.replace("../solicitacao.php");
                </script>

        <?php
        } else {
                $_SESSION['erro_solicitacao'] = ' <div class="alert alert-danger" role="alert">
       Erro ao fazer a solicitação. Por favor tente novamente.
     </div>';
        ?>
                <script type="text/javascript">
                        window.location.replace("../solicitacao.php");
                </script>
        <?php
        }
} else {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone=$_POST["telefone"];
        $titulo = $_POST["titulo"];
        $tipo_site = $_POST['tipo_site'];
        $descricao = $_POST["descricao"];

        $insert = "INSERT INTO`solicitacao`( `nome_cliente`, `email_cliente`, 
        `telefone_cliente`, `titulo_projecto`, `descricao_projecto`, `idTipoProjecto`, `visto`, `tipo_cliente`)
    VALUES ('$nome','$email','$telefone','$titulo','$descricao','$tipo_site','Não','2')";

        $cogVery = mysqli_query($conn, $insert);
        if ($cogVery) {
                $_SESSION['solicitacao'] = ' <div class="alert alert-success" role="alert">
        A sua solicitação foi enviada com sucesso, enviaremos uma resposta dentro embreve.
     </div>';
        ?>
                <script type="text/javascript">
                        window.location.replace("../solicitacao.php");
                </script>

        <?php
        } else {
                $_SESSION['erro_solicitacao'] = ' <div class="alert alert-danger" role="alert">
       Erro ao fazer a solicitação. Por favor tente novamente.
     </div>';
        ?>
                <script type="text/javascript">
                        window.location.replace("../solicitacao.php");
                </script>
<?php
        }
}
