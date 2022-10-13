<?php
include("../db.php");

$cliente = $_COOKIE["cliente"];
$idUserGeral = $_POST['idUserGeral'];
$palavra_passe = $_POST['palavra_passe'];
$nova_passe = $_POST['nova_passe'];
$confirm_passe = $_POST['confim_nova_passe'];

$sql_passe = mysqli_query($conn, "SELECT * FROM `user_geral` WHERE `idUserGeral`='$idUserGeral' and `senha`='$palavra_passe' and `email`='$cliente' ");
if (mysqli_num_rows($sql_passe) == 1) {
    if ($nova_passe != $confirm_passe) {
        $_SESSION['erro_passe_diferentes'] = ' <div class="alert alert-warning" role="alert">
        Palavra-passe nao considem. Por favor tente novamente!
     </div>';
?>
        <script type="text/javascript">
            window.location.replace("../edit_cliente.php");
        </script>
        <?php
        die();
    } else {
        $sql_nova_passe = "UPDATE user_geral SET senha='$nova_passe' WHERE idUserGeral='$idUserGeral'";
        $result_nova_passe = mysqli_query($conn, $sql_nova_passe);
        if ($result_nova_passe = true) {
            $_SESSION['success_nova_passe'] = ' <div class="alert alert-success" role="alert">
        Nova palavra-passe definida com sucesso!
     </div>';
        ?>
            <script type="text/javascript">
                window.location.replace("../edit_cliente.php");
            </script>
        <?php
        } else {
            $_SESSION['erro_nova_passe'] = ' <div class="alert alert-danger" role="alert">
        Erro ao definir nova palavra-passe. Por favor, tente novamente.
     </div>';
        ?>
            <script type="text/javascript">
                window.location.replace("../edit_cliente.php");
            </script>
    <?php
        }
    }
} else {
    $_SESSION['erro_edit_passe'] = ' <div class="alert alert-danger" role="alert">
    Palavra-passe errada. Tente novamnete!
 </div>';
    ?>
    <script type="text/javascript">
        window.location.replace("../edit_cliente.php");
    </script>
<?php
}
