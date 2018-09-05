<?php 
session_start();  
require_once('../connection/link.php');
if(isset($_POST['edit']) && $_POST['edit'] == "UPDATE"){
    $updated_at = date('Y-m-d H:i:s');
    $sql= "UPDATE members SET password=:password , updated_at=:updated_at, WHERE members_id=:members_id";
    $sth = $db ->prepare($sql);
    $sth ->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
    $sth ->bindParam(":updated_at", $updated_at, PDO::PARAM_STR);
    $sth ->bindParam(":members_id", $_SESSION['member']['members_id'], PDO::PARAM_INT);
    $result = $sth ->execute();
    if($result){
        $query = $db->query("SELECT * FROM members WHERE members_id=".$_SESSION['member']['members_id']);
        $_SESSION['member'] = $query->fetch(PDO::FETCH_ASSOC);

        header('Location: customer_account.php?msg="success"');
    }else{

        echo "";

    }
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
                                    <li><a href="customer_password.php">密碼變更</a></li>
                                </ul>
                                <form  action='customer_password.php' method='post'>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label >舊密碼</label>
                                                <input type="text" class="form-control" name="old_password">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label >新密碼</label>
                                                <input type="text" class="form-control" name="password">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label >確認新密碼</label>
                                                <input type="text" class="form-control" name="password">
                                                </div>
                                            </div>
                                            
                                            <div style='text-align:right'>
                                                <button type="submit" class="btn btn-primary">更新資料</button>
                                                <input type="hidden" name="edit" value="UPDATE">
                                                <input type="hidden"  name='members_id' value="<?php $_SESSION['member']['members_id']?>">

                                    </form>
                    
                    </div>          
                </div>

                <!-- ##### Sidebar Area ##### -->
                <div class="col-12 col-md-4 col-lg-3">        
                            <div class="uk-width-1-2@s uk-width-2-5@m">
                                <ul class="uk-nav uk-nav-default">
                                    <li class="uk-nav-header">會員專區</li>
                                    <li class="uk-nav-divider"></li>
                                　　<li><a href="customer_order.php">我的訂單</a></li>
                                    <li><a href="customer_account.php">我的資訊</a></li>
                                    <li><a href="customer_password.php">密碼變更</a></li>
                                    <li><a href="theme/checkout.php">登出</a></li>                   
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