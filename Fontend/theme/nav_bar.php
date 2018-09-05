<?php  
require_once('../connection/link.php');

$query = $db->query("SELECT * FROM  product_categories ORDER BY  product_categories_id ASC ");
$category = $query->fetchAll(PDO::FETCH_ASSOC);



?> 
 <!-- Reloads -->
 <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- 會員登入 -->
    <div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">會員登入</h5>
                        <form action="theme/check.php" class="newsletterForm" method="post">
                            <input type="email" name="account" id="subscribesForm2" placeholder="帳號(email)" autocomplete="off">
                            <input type="password" name="password"  placeholder="密碼" autocomplete="off">
                            <div class="text-right"><button type="submit" class="btn original-btn">會員登入</button></div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### 導覽 ##### -->
    <header class="header-area">

        <div class="logo-area text-center">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <a href="index.html" class="original-logo"><img src="../img/core-img/logo.png"></a>
                </div>
            </div>
        </div>

        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between">

                        <!-- Subscribe btn -->
                        <div class="subscribe-btn">
                        <?php   if(isset($_SESSION['member']) && $_SESSION['member']  !=null ){  ?>
                            <a href="theme/checkout.php" class="btn subscribe-btn" >登出<i class="fa fa-sign-out p-1" aria-hidden="true"></i></a>
                        <?php } else { ?>
                            
                            <a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#subsModal">登入<i class="fa fa-sign-in p-1" aria-hidden="true"></i></a>
                        <?php  } ?> 
                        </div>

                        <!-- Navbar Toggler -->


                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="news.php">News</a></li>
                                    <li><a href="#">Products</a>                 
                                        <div class="megamenu">
                                         <?php foreach($category as $product_categories){ ?>                                           
                                            <ul class="single-mega cn-col-4">                                           
                                                <li class="title"><?php echo $product_categories['category']; ?></li>
                                            <?php 
                                                $query2 = $db->query("SELECT * FROM  second WHERE product_categories_id=".$product_categories['product_categories_id']);
                                                $type = $query2->fetchAll(PDO::FETCH_ASSOC);    ?>     
                                              <?php  foreach($type as $item){    ?>                       
                                                <li><a href="product_list.php?cat=<?php echo $product_categories['product_categories_id']?>&dog=<?php echo $item['second_id']; ?> "> <?php echo $item['category']; ?></a></li> 
                                                <?php } ?>                                           
                                            </ul>
                                         <?php } ?>      
                                        </div> 
                                    
                                    </li>             
                                    <li><a href="#">about us</a>
                                    <div class="megamenu">
                                        <ul class="dropdown">
                                            <li><a href="about.php">品牌故事</a></li>
                                            <li><a href="contact.php">聯絡我們</a></li>
                                            <li><a href="faq.php">常見問題</a></li>                                          
                                        </ul>
                                    </div>  
                                    </li> 
                                    <li><a href="#" ><i class="fa fa-shopping-cart p-2" aria-hidden="true"></i>購物車(0)</a></li>
                                    <?php   if(isset($_SESSION['member']) && $_SESSION['member']  !=null ){  ?>
                                        <li><a href="customer_account.php" ><i class="fa fa-id-card-o p-2" aria-hidden="true"></i>我的帳戶</a></li>
                                    
                                    <?php } else { ?>
                                        <li><a href="register.php" ><i class="fa fa-user-circle-o p-2" aria-hidden="true"></i>加入會員</a></li>
                                    <?php } ?>
                                </ul>

                                <!-- Search Form  -->
                                <div id="search-wrapper">
                                    <form action="#">
                                        <input type="text" id="search" placeholder="Search something..." autocomplete="off">
                                        <div id="close-icon"></div>
                                        <input class="d-none" type="submit" value="" >
                                    </form>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>