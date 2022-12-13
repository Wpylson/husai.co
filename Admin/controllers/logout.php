<?php
$validade = time()-3600;
$res=setcookie('userHusai', '',$validade,"/","",false,true);

if($res=TRUE){
    ?>
    <script type="text/javascript">window.location.replace("../../signin.php");</script>
    <?php
}

