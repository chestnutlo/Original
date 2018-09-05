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
                <div class="col-12 col-lg-9">
                                <ul class="uk-breadcrumb mb-30">
                                    <li><a href="#">首頁</a></li>
                                    <li><a href="#">聯絡我們</a></li>
                                </ul>
                        <div class="contact-form">
                                <p class="mb-30">我們很重視會員在網站上的任何意見。 請您填妥以下表格並送出，我們會以最迅速時間回覆您的詢問！  </p>
                         <!-- Contact Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                                                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="Mobile" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Mobile</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="Phone" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Phone</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <input type="text" name="subject" id="order_number" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Order number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn original-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                 </div>

                <!-- ##### Sidebar Area ##### -->           
              <div class="col-12 col-md-4 col-lg-3">        
                            <div class="uk-width-1-2@s uk-width-2-5@m">
                                <ul class="uk-nav uk-nav-default">
                                    <li class="uk-nav-header mt-15">About Us</li>
                                    <li class="uk-nav-divider"></li>
                                　　<li><a href="about.php">品牌故事</a></li>
                                    <li><a href="contact.php">聯絡我們</a></li>
                                    <li><a href="faq.php">常見問題</a></li>                      
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