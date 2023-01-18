<?php
include("db.php");
$idCart = $_GET["idCart"];
$selcartF = mysqli_query($conn, "SELECT * FROM carrinhofeito WHERE id='$idCart' ");
$scCartF = mysqli_fetch_assoc($selcartF);
$user = $scCartF["user"];
$cliente = $_COOKIE["cliente"];
if (!isset($_COOKIE["cliente"])) {
    header("location: signin.php");
}
$selCli = mysqli_query($conn, "SELECT * FROM user_geral WHERE email='$cliente' ");
$ascCli = mysqli_fetch_assoc($selCli);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Husai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-12">
                <table class="body-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6">
                    <tbody>
                        <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                            <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
                            <td class="container" width="600" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">
                                <div class="content" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                                    <table class="main" width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px;  margin: 0; border: none;">
                                        <tbody>
                                            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                <td class="content-wrap aligncenter" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;padding: 20px;border: 3px solid #1d1e3a;border-radius: 7px; background-color: #fff;" align="center" valign="top">
                                                    <table width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                        <tbody>
                                                            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                                    <h2 onclick="location.href='clientarea.php'" class="aligncenter" style="cursor: pointer; font-family: 'Helvetica Neue',Helvetica,Arial,'Lucida Grande',sans-serif; box-sizing: border-box; font-size: 24px; color: #000; line-height: 1.2em; font-weight: 400; text-align: left; margin: 40px 40px 0;" align="center"><img src="logo2.png" width="150"></h2>
                                                                </td>
                                                            </tr>
                                                            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                <td class="content-block aligncenter" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: center; margin: 0; padding: 0 0 20px;" align="center" valign="top">
                                                                    <table class="invoice" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; text-align: left; width: 80%; margin: 40px auto;">
                                                                        <tbody>
                                                                            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                                <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 5px 0;" valign="top"><b><?php echo $ascCli["nome"]; ?></b>
                                                                                    <br style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">Email: <?php echo $ascCli["email"]; ?>
                                                                                    <br style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;"><?php echo $ascCli["telefone"]; ?>
                                                                                    <br style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">FT-0<?php echo $idCart; ?>
                                                                                </td>
                                                                            </tr>
                                                                            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                                <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 5px 0;" valign="top">
                                                                                    <table class="invoice-items" cellpadding="0" cellspacing="0" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; margin: 0;">
                                                                                        <tbody>
                                                                                            <?php
                                                                                            $selCart = mysqli_query($conn, "SELECT * FROM carrinho WHERE usuario='$cliente' AND carrinho='$idCart' ORDER BY id desc");
                                                                                            while ($ascCart = mysqli_fetch_assoc($selCart)) {
                                                                                            ?>
                                                                                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                                                    <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 5px 0;" valign="top">
                                                                                                        <?php if ($ascCart["tipo"] == "cpainel") {
                                                                                                            echo "Hospedagem Cpanel";
                                                                                                        } elseif ($ascCart["tipo"] == "vps") {
                                                                                                            echo "Hospedagem VPS";
                                                                                                        } elseif ($ascCart["tipo"] == "dominio") {
                                                                                                            echo $ascCart["designacao"];
                                                                                                        } elseif ($ascCart["tipo"] == "ssl") {
                                                                                                            echo "Certificado SSL";
                                                                                                        } elseif ($ascCart["tipo"] == "vpsdedicado") {
                                                                                                            echo "Hospedagem Desicada";
                                                                                                        } ?>
                                                                                                    </td>
                                                                                                    <td class="alignright" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 5px 0;" align="right" valign="top">AOA <?php echo $ascCart["preco"]; ?>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php
                                                                                            }
                                                                                            ?>

                                                                                            <tr class="total" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                                                <td class="alignright" width="80%" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 2px; border-top-color: #333; border-top-style: solid; border-bottom-color: #333; border-bottom-width: 2px; border-bottom-style: solid; font-weight: 700; margin: 0; padding: 5px 0;" align="right" valign="top">Total
                                                                                                </td>
                                                                                                <td class="alignright" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 2px; border-top-color: #333; border-top-style: solid; border-bottom-color: #333; border-bottom-width: 2px; border-bottom-style: solid; font-weight: 700; margin: 0; padding: 5px 0;" align="right" valign="top">
                                                                                                    <?php
                                                                                                    $soma =  mysqli_query($conn, "SELECT sum(preco) FROM carrinho WHERE usuario ='$cliente' AND carrinho='$idCart' ");
                                                                                                    $linhas = mysqli_num_rows($soma);
                                                                                                    while ($linhas = mysqli_fetch_array($soma)) {
                                                                                                        $li = ($linhas['sum(preco)']);
                                                                                                        echo $li . ' AOA';
                                                                                                    }
                                                                                                    ?>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                <td class="content-block aligncenter" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; text-align: center; margin: 0; padding: 0 0 20px;" align="center" valign="top">
                                                                    Husai Inc. Todos os direitos reservados, <?php echo date("Y"); ?>
                                                                </td>
                                                            </tr>

                                                            <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                <td class="content-block" style="text-align: center;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0;" valign="top">
                                                                    © <?php echo date("Y"); ?> HUSAI
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>