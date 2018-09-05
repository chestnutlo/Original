<?php
require_once('../connection/link.php');



$query = $db->query("SELECT * FROM product_categories WHERE product_categories_id=".$_GET['cat']);
$hello = $query->fetch(PDO::FETCH_ASSOC);


$query2 = $db->query("SELECT * FROM second WHERE second_id=".$_GET['dog']);
$hi = $query2->fetch(PDO::FETCH_ASSOC);


$query3 = $db->query("SELECT * FROM products WHERE seconds_id=".$_GET['dog']);
$data = $query3->fetchAll(PDO::FETCH_ASSOC);



// $query3 = $db->query("SELECT * FROM products WHERE second_id ASC products_id");
// $products = $query3->fetchAll(PDO::FETCH_ASSOC);

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
    <!-- breadcrumb start -->
    <div class="row">
        <div class="col-12 col-lg-12">
            <ul class="uk-breadcrumb mb-30">
                <li><a href="index.php">首頁</a></li>                               
                    <li><p><?php echo $hello['category'] ?></p></li>
                    <li><p><?php echo $hi['category'] ?></p></li>
            </ul>
        </div> 
    </div>
        <!-- breadcrumb end -->
    <div class="row">
        <div class="col-12 col-lg-9">
            <div class="blog-wrapper clearfix">
                <div class="container">
                    <div class="row">
                    <?php foreach($data as $product_detail) { ?>
                        <div class="col-12 col-lg-3">                                  
                            <div class="uk-card-default img-thumbnail mb-15">           
                                <div class="single-blog-thumbnail">
                                    <a href="">
                                    <img src="../uploads/products/<?php echo $product_detail['picture']  ?>"></a>
                                </div>
                                <div class="single-blog-content mt-15">
                                    <h4><a href="#" class="post-headline">
                                    <?php echo $product_detail['name']  ?></a></h4>
                                    <p class="mt-30">$NT.<?php echo $product_detail['price']  ?></p>
                            </div>                         
                        </div>                               
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>                
    </div>

                <!-- ##### Sidebar Area ##### -->
                <div class="col-12 col-md-4 col-lg-3">        
                        <div class="uk-width-1-2@s uk-width-2-5@m">
                            <ul class="uk-nav uk-nav-default">
                                <li class="uk-active mb-30">本站商品</li>
                        <?php $query = $db->query("SELECT * FROM second WHERE product_categories_id=".$_GET['cat']);
                              $hi = $query->fetchAll(PDO::FETCH_ASSOC);    foreach($hi as $second){   ?>
                              <li class="uk-parent mb-15">
                        <a href="product_list.php?cat=<?php echo $hello['product_categories_id']?>&dog=<?php echo $second['second_id']; ?> ">
                              <strong><?php echo $second['category'] ?> </strong></li>
                              </a>                             
                                <?php }  ?>
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