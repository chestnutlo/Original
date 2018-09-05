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
                 <div class="col-12 col-lg-12">
                                <ul class="uk-breadcrumb mb-30">
                                    <li><a href="index.php">首頁</a></li>
                                    <li><a href=#>常見問題</a></li>
                                </ul>
                           </div>
                            </div>
            <div class="row">
                 <div class="col-12 col-lg-9">
                        <div class="uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body mb-15">
                              <p> <i class="fa fa-question-circle p-2" aria-hidden="true"></i>　我要如何進行退(換)貨?</p>
                            <ul>
                                <li class="mt-15">1.若因商品本身瑕疵，運費由本公司負擔，消費者需於收到商品七日內，告知本公司要求退換貨，消費者除應保持原購買商品相關附件包裝、及所有附隨文件或資料之完整性，連同發票於告知後三日內寄回至本公司，若超過期限則不予辦理退換貨。</li>
                                <li class="mt-15">2.若非商品本身瑕疵（例：因尺寸不合／購買錯誤等），消費者需於收到商品七日內，告知本公司要求退換貨．因非本公司造成消費者需退換貨，運費由消費者自行負擔，並且商品應保持原購買商品相關附件包裝、及所有附隨文件或資料之完整性，連同發票於告知後三日內由消費者自行寄回至本公司，若超過期限則不予退換貨。</li>
                                <li class="mt-15">3.海外退換因應狀況的不同，將會由不同的方式辦理，若有任何問題，煩請至客服中心留言。</li>
                            </ul>
                            </div>                        
                        </div>
                            <div class="uk-card uk-card-default uk-card-body mb-15">
                              <p> <i class="fa fa-question-circle p-2" aria-hidden="true"></i>　可配送地區</p>
                            <ul>
                                <li class="mb-15">1. 目前海外服務區域為香港、澳門、新加坡、馬來西亞、美國。</li>
                                <li class="mb-15">2.目前使用順豐速運為以上區域會員，執行配送服務，因各區服務範圍不同，位址填寫請注意以下事項：</li>
                                <li >(1) 無法配送至郵政信箱。</li>
                                <li >(2) 如配送區域為偏遠地區，順豐速運將加收偏遠地區服務費。</li>
                                <li >(3) 順豐速運配送於香港非工商地址（指該場所為住宅用途），將收取非工商附加費港幣30元 。</li>
                            </ul>
                            </div>
                            <div class="uk-card uk-card-default uk-card-body">
                              <p> <i class="fa fa-question-circle p-2" aria-hidden="true"></i>　	其他注意事項</p>
                            <ul>
                                <li class="mb-15">1. 收貨人需遵守收貨之國家(地區)的進口規範與限制(違禁品..等)，否則相關法律問題將由收貨人自行負責。</li>
                                <li class="mb-15">2. 除香港、澳門以外配送地區，收件人需以英文全名填寫，不可簡寫。收件地址均需填寫正確郵遞區號。</li>
                            </ul>
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