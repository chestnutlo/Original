<?php  
require_once('../connection/link.php');

$query = $db->query("SELECT * FROM products ORDER BY type ");
$data = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Original - Lifestyle Blog Template</title>

    <link rel="stylesheet" href="../style.css">
</head>

<body>
   
   <?php require_once('theme/nav_bar.php');   ?>
    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(../img/bg-img/b2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">標題</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html">內容</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(../img/bg-img/b1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">lifestyle</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html">Take a look
                                        at last night’s party!</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(../img/bg-img/b3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">lifestyle</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html">Take a look
                                        at last night’s party!</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-30">
                        <!-- Blog Content -->                       
                            <img src="../img/blog-img/facebook.jpg"  class="mb-30 img-thumbnail" alt="" width="100%">
                            <img src="../img/blog-img/instagram.jpg" class="mb-30 img-thumbnail" alt="" width="100%">
                            <img src="../img/blog-img/instagram.jpg" class="mb-30 img-thumbnail" width="100%">                    
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-catagory-area clearfix mb-30 img-thumbnail">
                        <img src="../img/blog-img/2.jpg" alt="" >
                        <!-- Catagory Title -->
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="single-catagory-area clearfix mb-30 img-thumbnail">
                        <img src="../img/blog-img/2.jpg" alt="" >
                        <!-- Catagory Title -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Cool Facts Area Start ##### -->

        <div class="cool-facts-area section-padding-100-0 bg-img background-overlay" style="background-image: url(../img/bg-img/b4.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-blog-area blog-style-2 text-center mb-100">
                            <!-- Blog Content -->
                            <div class="single-blog-content">
                                <div class="line"></div>
                                <a href="#" class="post-tag">Lifestyle</a>
                                <h4><a href="#" class="post-headline">Welcome to this Lifestyle blog</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum
                                    mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id.
                                    Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut
                                    semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum.
                                    Donec sagittis lacus sit amet augue sodales, vel cursus enim tristique. Maecenas
                                    vitae massa ut est consectetur sagittis quis vitae tortor. Sed et massa vel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Cool Facts Area End ##### -->

        <!-- 分隔線 -->
        <div class="container">
            <div class="fullline">
                <div id="inside">
                    <h4>熱門商品</h4>
                    <p>TOP SALE</p>
                </div>
            </div>
        </div>
        <!-- 分隔線 -->

<div class="blog-wrapper section-padding-100-0 clearfix">
    <div class="container">
        <div class="row">
            <?php  $query = $db->query("SELECT * FROM products WHERE type=0");
                   $data = $query->fetchAll(PDO::FETCH_ASSOC);  ?>
            <?php foreach($data as $index)  { ?>
            <div class="col-12 col-md-6 col-lg-3"> 
                <div class="single-blog-area blog-style-2 mb-50 img-thumbnail wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1000ms" > 
                    <div class="single-blog-thumbnail" >
                        <img src="../uploads/products/<?php echo $index['picture']; ?>" width="00px" height="100px" >
                    </div>
                     <div class="single-blog-content mt-15">
                        <h4><a href="#" class="post-headline"><?php echo $index['name']; ?></a></h4>
                        <p>$NT.<?php echo $index['price']; ?></p>
                    </div>
                </div>
            </div>        <?php } ?>                   
        </div> 
    </div> 
</div>

        <!-- 分隔線 -->
        <div class="container">
            <div class="fullline">
                <div id="inside">
                    <h4>推薦商品</h4>
                    <p>HOT PRODUCT</p>
                </div>
            </div>
        </div>
        <!-- 分隔線 -->
<div class="blog-wrapper section-padding-100-0 clearfix">
    <div class="container">
        <div class="row">
                    <?php  $query = $db->query("SELECT * FROM products WHERE type=1");
                               $data = $query->fetchAll(PDO::FETCH_ASSOC);  ?>
                    <?php foreach($data as $index)  { ?>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-blog-area blog-style-2 mb-50 img-thumbnail wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1000ms" >                     
                    <div class="single-blog-thumbnail" >
                         <img src="../uploads/products/<?php echo $index['picture']; ?>" width="00px" height="100px" >
                    </div>
                <div class="single-blog-content mt-15">
                    <h4><a href="#" class="post-headline"><?php echo $index['name']; ?></a></h4>
                    <p>$NT.<?php echo $index['price']; ?></p>
                </div>
            </div>
        </div>                          
<?php } ?></div> 
</div> 


    <?php require_once('theme/Footer.php');   ?>

</body>

</html>