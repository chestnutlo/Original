<?php   
require_once('../connection/link.php');
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
                            <div class="col-12 col-lg-12">
                                <ul class="uk-breadcrumb mb-30">
                                    <li><a href="#">首頁</a></li>
                                    <li><a href="#">加入會員</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="single-blog-area blog-style-2 mb-30 text-center">                    
                                        <h6 class="post-tag mb-50">加入會員</h6>
                                    <div>
                                        <form action="register_success.php" method="post">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">用戶名</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" name="name"  autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-3 col-form-label">Email(帳號)</label>
                                                <div class="col-sm-9">
                                                <input type="email" class="form-control" name="account" autocomplete="off" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">密碼</label>
                                                <div class="col-sm-9">
                                                <input type="password" class="form-control" name="password" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-outline-secondary">註冊</button>
                                           </div>
                                        </form>
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