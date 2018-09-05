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
<div class="single-blog-wrapper section-padding-0-100">
    <div class="single-blog-area blog-style-2 mb-50">
        <div class="single-blog-thumbnail">
            <img src="../img/bg-img/b5.jpg" alt="">
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-12">
            <ul class="uk-breadcrumb mb-30">
                <li><a href="#">首頁</a></li>
                <li><a href="#">種類</a></li>
                <li><a href="#">分類</a></li>
                <li><a href="#">產品</a></li>
            </ul>
        </div>
    </div>
<div class="row">  
        <div class="col-12 col-lg-5">
            <div class="uk-position-relative img-thumbnail" uk-slideshow="animation: fade">
                <ul class="uk-slideshow-items">
                    <li>
                        <img src="../img/bg-img/b2.jpg" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="../img/bg-img/b1.jpg" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="../img/bg-img/b5.jpg" alt="" uk-cover>
                    </li>
                </ul>
            <div class="uk-position-bottom-center uk-position-small">
                <ul class="uk-thumbnav">
            <li uk-slideshow-item="0"><a href="#"><img src="../img/bg-img/b2.jpg" width="50" alt=""></a></li>
            <li uk-slideshow-item="1"><a href="#"><img src="../img/bg-img/b1.jpg" width="50" alt=""></a></li>
            <li uk-slideshow-item="2"><a href="#"><img src="../img/bg-img/b5.jpg" width="50" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>  
        <div class="col-12 col-lg-4">
            <form action="" method="post">
                <ul class="ml-10">
                    <li class="uk-active">商品名稱</li>
                    <li><span class="uk-label mb-15">現貨供應</span></li>
                    <li class="uk-active"><p>售價 NT$ XXX </p></li>                                              
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">尺寸</label>
                            <div class="col-sm-4">
                                <select name="sort-by" class="form-control">
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                        </div> 
                         <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">數量</label>
                                <div class="col-sm-4">
                                    <select name="sort-by" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                    </select>
                                </div>
                        </div>
                        <button class="uk-button uk-button-default uk-width-1-1 mb-15"><i class="fa fa-shopping-cart p-2"></i>加入購物車</button>                          
                 </ul>
            </form>                       
        </div>
        <div class="col-12 col-lg-9">
            <div class="single-blog-area blog-style-2 mb-50">
                    <div class="single-blog-content">
                        <hr>                       
                        <h6 class="post-tag">商品描述</h6>
                        <p>目前沒有</p>         
                    </div>
            </div>
        </div>
    </div>
</div>


    <!-- ##### Instagram Feed Area Start ##### -->
       <?php require_once('theme/Footer.php')  ?>
</body>

</html>