<?php
include("../db.php");

$idUserGeral = $_GET["idUserGeral"];
$nome = $_GET["nome"];
$sobre_nome = $_GET["sobre_nome"];
$data_nascimento = $_GET["data_nascimento"];
$genero = $_GET["genero"];
$nif = $_GET["nif"];
$email = $_GET["email"];
$telefone = $_GET["telefone"];
$localizacao = $_GET["localizacao"];
$estado_provincia = $_GET["estado_provincia"];
$cod_postal = $_GET["cod_postal"];
$pais = $_GET["pais"];
$sql_edit= "UPDATE user_geral SET nome='$nome',sobrenome='$sobre_nome',
        email='$email',telefone='$telefone',
        dataNascimento='$data_nascimento',genero='$genero',nif='$nif',
        localizacao='$localizacao',estado_provincia='$estado_provincia',
        cod_postal='$cod_postal',pais='$pais' WHERE idUserGeral='$idUserGeral' ";

$resultado_edit=mysqli_query($conn,$sql_edit);
if($resultado_edit==TRUE){
    $_SESSION['success_edit_cliente']=' <div class="alert alert-success" role="alert">
    Dadaos actualizados com sucesso!
 </div>';
    ?>
     <script type="text/javascript">window.location.replace("../edit_cliente.php");</script>
    <?php
}else{
    ?>
    <script type="text/javascript">window.location.replace("../edit_cliente.php?erro=true");</script>
   <?php 
}

