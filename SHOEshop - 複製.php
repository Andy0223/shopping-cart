<?php
    session_start();
    if(!isset($_SESSION["ac_name"]))
    {
        header("Location: login.php");
    }
    $yeezy = ["name" => "Yeezy Boost 350 V2 Synth",
           "price" => "NT $8800",
           "image" => "https://cdn2.ettoday.net/images/4175/4175935.jpg",
           "bg" => "https://s3-eu-central-1.amazonaws.com/centaur-wp/designweek/prod/content/uploads/2019/06/27172619/3_adidas_originals.jpg",
           "content" => "YEEZY BOOST 350 V2 Synth為區域限定版本，鞋身設計以淺色呈現，淡灰紋理交織，雙色調的Primeknit材質，展現盛夏夢幻魅力。流線型鞋身搭配半透明鏤空設計，增添整體層次感，同時採用同色調大底，堆疊視覺效果。最後以同色系反光鞋帶點綴，在不同光線下，呈現獨特視覺衝擊。",
             "star" => 5 ];

    $airmax97 = ["name" => "MSCHF x INRI Nike Air Max 97",
                "price" => "NT $75000",
                "image" => "https://image-cdn.hypb.st/https%3A%2F%2Fhk.hypebeast.com%2Ffiles%2F2019%2F10%2Fhttps___hypebeast.com_image_2019_10_mschf-inri-air-max-97-walk-on-water-custom-info-002.jpg?q=75&w=800&cbr=1&fit=max",
                "bg" => "https://img.etimg.com/thumb/msid-59738997,width-640,resizemode-4,imgsize-21421/nike.jpg",
                "content" => "以耶穌（Iesus Nazarenus Rex Iudaeorum）在馬太福音 14:25 中水上行走的奇蹟為創作概念，客製化出一雙 Nike Air Max 97。這雙客製鞋款率先引入注目的地方，便是其氣墊位置竟然真的注水進內，而且是來自約旦河的水，因此走動時會看到氣墊內的「聖水」在流動。同時鞋款亦有向梵蒂岡致敬，鞋帶位置加上鋼製的十字架，鞋墊亦換上紅色點綴，鞋盒更有着馬太福音 14:25 的銘文。",
                "star" => 4];

    $Converse = ["name" => "Off-White x Converse 'THE TEN'",
               "price" => "NT $4880",
               "image" => "https://media.juksy.com/files/articles/77387/800x_100_w-5ac989d86df64.jpg",
               "bg" => "https://1000logos.net/wp-content/uploads/2019/06/Converse-Logo-2007.jpg",
                "content" => "Virgil Abloh 利用「GHOSTING」概念融入經典的 Chuck 70 中，鞋面由半透明材質拼接而成，內側飾有 Off-White 品牌標誌，半透明的側邊條上印有 “VULCANIZED” 字樣，鞋跟處將 Chuck 70 專屬黑標翻轉，左邊鞋頭印有 “RIGHT” 字樣、右邊鞋頭則印有 “LEFT” 字樣。同時，附贈有三副頂端處印有 “SHOELACES” 字樣的鞋帶，無處不展現 Off-White 品牌特色。",
                "star" => 5];

    $product_list = [$yeezy, $airmax97, $Converse];
    $final = array();

?>
<?php for($i=1; $i<=$product["star"]; $i++)
                {
                ?>
<i class="fa fa-star"></i>
<?php }
                ?>
<?php for($i=1; $i<=5-$product["star"]; $i++)
                {
                ?>
<i class="fa fa-star-o"></i>
<?php }
                ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SHOES SHOP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="shopcar.php" method="get">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h3 class="my-0 mr-md-auto font-weight-normal" style="-webkit-text-stroke: 1.0px #000000">
                <font face="DFKai-sb"><strong>鞋魔歪道</strong></font>&emsp;<font face="monospace">歡迎&nbsp;<?php echo $_SESSION["ac_name"] ?></font>
            </h3>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="#">
                    <font color="blue">NIKE</font>
                </a>
                <a class="p-2 text-dark" href="#">
                    <font color="#eaea16">ADIDAS</font>
                </a>
                <a class="p-2 text-dark" href="#">
                    <font color="red">NEW BALENCE</font>
                </a>
                <a class="p-2 text-dark" href="#">
                    <font color="green">PUMA</font>
                </a>
            </nav>
            <a class="btn btn-outline-primary" href="logout.php">Log out</a>
        </div>


        <div class="pricing-header px-5 py-5 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">店鋪介紹</h1>
            <p class="lead">We give our customers a high quality service and product<br>new shoes information is all in <b>SHOEVIL</b> <br><br>
                <font face="serif">Location:台北市大安區忠孝東路145巷27號<br>Tel:02-25723030</font>
            </p>
        </div>
        <?php 
        foreach($product_list as $product){
    ?>
        <div class="container" align="center">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h3 class="my-0 font-weight-normal">
                            <font face="monospace"><?php echo $product["name"] ?></font>
                        </h3>
                        <?php
                        $it_name=$product["name"];
                        if(isset($_SESSION["$it_name"]))
                        {
                            $a = $_SESSION["$it_name"];
                            $final[] = $a;
                        ?>
                                <a href="dislike.php?it_name=<?php echo $product["name"] ?>"><img src="img/like.png" width="30px" hight="30px"></a>
                                <?php
                        }else
                        {
                        ?>
                                <a href="like.php?it_name=<?php echo $product["name"] ?>"><img src="img/dislike.png" width="22px" hight="22px"></a>
                                <?php
                        }
                        ?>
                    </div>
                
                    <div class="card-body" style="background-image:url('<?php echo $product["bg"]?>');background-size: 270px 270px;">

                        <img src="<?php echo $product["image"]?>" width="300" height="200" align="center"><br><br>
                        <p>
                            <font face="微軟正黑體"><?php echo $product["content"]?></font>
                        </p>

                        <h3 class="card-title pricing-card-title">
                            <font face="serif" style="background-color:#fde9b0"><u><?php echo $product["price"]?></u></font>&nbsp;<small class="text-muted" style="background-color:#fde9b0">per one</small>
                        </h3>

                        <div>
                            
                        </div>
                <div class="product-btns">
                
                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">顯示目前訂單</span></button>
                            <input type="text" name="number[]" value="請輸入數量" onFocus="if(value==defaultValue){value='';this.style.color='#000'}" onBlur="if(!value){value=defaultValue;this.style.color='#999'}" style="color:#999999">
                            <br>
                        </div>
                        
                    </div>
                    
                </div>
            
            </div>
            <?php }
        ?>
            <button type="submit" class="btn btn-lg btn-block btn-outline-primary">送出</button><br><br><br>
            <div class="row">
                <div>
                    <i class="fa fa-shopping-cart">
                        <span>收藏</span></i>
                    <select>
                        <?php foreach($final as $e){
                        ?>
                        <option>
                            <h3 class="product-name"><?php echo "$e" ?></h3>
                            <?php } ?>
                        </option>
                    </select>
                </div>
            </div>
        </div>
    </form>
</body>

</html>