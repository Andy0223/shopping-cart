<?php
    session_start();
    if(isset($_SESSION["ac_name"]))
    {
        header("");
    }

    $acc1 = ["name" => "李振維" ,
             "account" => 0000,
             "password" => 0000];
    $acc2 = ["name" => "Andy" ,
             "account" => 1111,
             "password" => 1111];
    $acc3 = ["name" => "Tim" ,
             "account" => 2222,
             "password" => 2222];
    $account = [$acc1 , $acc2, $acc3];

        if(isset($_POST["account1"]))
        {
            $account1= $_POST["account1"];
            $password1= $_POST["password1"];
            foreach($account as $a)
            {
                if($account1 == $a["account"] and $password1 == $a["password"])
                {
                    $_SESSION["ac_name"] = $a["name"];
                    header("Location: SHOEshop.php");
                }
            }
            $error="<p>帳號或密碼錯誤<p>";
            $password1=null;
        
        }
    
?>

<!DOCTYPE HTML>

<html>

	<head>
		<title>登入</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="login.php" class="logo"><strong>SHOEVIL</strong></a>
					<nav id="nav">
						<a href="#">忘記密碼</a>
						<a href="login.php">回首頁</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
		<form method="post">
			<section id="banner">
				<div class="inner">
					<header>
						<h2><font style="color: aliceblue">會員登入</font></h2>
					</header>
               
					<div class="flex">

						<div>
							<h4><font style="color: aliceblue">帳號Account</font></h4>
							<input class ="form-control" type="text" name="account1" value="<?php echo $account1?>" required autofocus>
						</div>

						<div>
							<h4><font style="color: aliceblue">密碼Password</font></h4>
							<input class ="form-control" type="password" name="password1" value="<?php echo $password1?>" required autofocus>
							<?php echo $error; ?>
						</div>
					</div>
					

					<footer><br>
						<input class="btn btn-primary" type="submit" value="登入">
					</footer>
				</div>
				<br><br>
			</section>
        </form>


		
		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>