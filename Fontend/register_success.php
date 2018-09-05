<?php 
session_start();
require_once('../connection/link.php');
$time = date('Y-m-d H:i:s');

$sql= "INSERT INTO members(name,account,password,created_at) VALUES (:name,:account,:password,:created_at)";
$sth = $db ->prepare($sql);
$sth ->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
$sth ->bindParam(":account", $_POST['account'], PDO::PARAM_STR);
$sth ->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
$sth ->bindParam(":created_at", $time, PDO::PARAM_STR);
$result = $sth ->execute();
if($result){
      $status = "success";
} else{
      $status = "Error";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Original - Lifestyle Blog Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    
    <link rel="stylesheet" href="../css/uikit.min.css">
    <link rel="stylesheet" href="../style.css">


</head>

<body>
        
           <?php require_once('theme/nav_bar.php');   ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Single Blog Area Start ##### -->
    <div class="single-blog-wrapper section-padding-0-100">

        <!-- Single Blog Area  -->
        <div class="single-blog-area blog-style-2 mb-50">
            <div class="single-blog-thumbnail">
                <img src="../img/bg-img/b5.jpg" alt="">
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- ##### Post Content Area ##### -->
                <div class="col-12 col-lg-9">
                                <ul class="uk-breadcrumb mb-30">
                                    <li><a href="index.php">首頁</a></li>
                                    <li><a href="">加入會員</a></li>
                                </ul>                                  
                            <div class="uk-card uk-card-default uk-text-center">
                            <img src="../img/core-img/logo.png" class="mt-50">
                            <ul class="uk-nav uk-nav-default">
                            <li class="uk-nav-header mt-15">註冊成功<li>
                            <p class="mt-15 mb-30">恭喜您加入會員</p>
                            </ul>
                            
                            <a href="index.php"><button class="uk-button uk-button-default uk-button-small mb-50">前往購物</button></a>
                            </div>                        
                </div>

                <!-- ##### Sidebar Area ##### -->
                <div class="col-12 col-md-4 col-lg-3">        
                            <div class="uk-width-1-2@s uk-width-2-5@m">
                                <ul class="uk-nav uk-nav-default">
                                    <li class="uk-nav-header">會員專區</li>
                                    <li class="uk-nav-divider"></li>
                                　　<li><a href="about.php">我的訂單</a></li>
                                    <li><a href="customer_account.php">我的資訊</a></li>
                                    <li><a href=".php">密碼變更</a></li>
                                    <li><a href="faq.php">登出</a></li>                   
                                </ul>
                            </div>
                            
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Single Blog Area End ##### -->

    <!-- ##### Instagram Feed Area Start ##### -->
       <?php require_once('theme/Footer.php')  ?>
</body>

</html>