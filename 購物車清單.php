<?php
    $yeezy = $_GET["number"][0];
    $airmax97 = $_GET["number"][1];
    $Converse = $_GET["number"][2];
    $total = $yeezy * 8800 + $airmax97 * 75000 + $Converse * 4880;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>購物車</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container" align="center">
       <div class="col-5" "row-5"><br>
        <table style="text-align:center">
            <tr>
                <th>商品名稱</th>
                <td>商品價格</td>
                <td>商品數量</td>
            </tr>
            <tr>
                <th>Yeezy Boost 350 V2 Synth</th>
                <td>NT$8800</td>
                <td><?php echo $yeezy ?></td>
            </tr>
            <tr>
                <th>MSCHF x INRI Nike Air Max 97</th>
                <td>NT$75000</td>
                <td><?php echo $airmax97 ?></td>
            </tr>
            <tr>
                <th>Off-White x Converse 'THE TEN'</th>
                <td>NT$4880</td>
                <td><?php echo $Converse ?></td>
            </tr>
            <tr>
                <th>總計</th>
                <td>NT$<?php echo $total ?></td>
            </tr>
        </table>
        </div>
    </div>
</body>
</html>