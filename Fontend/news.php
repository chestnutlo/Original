<?php 
session_start();  
require_once('../connection/link.php');

$limit = 3;
if(isset($_GET['page']))  { $page = $_GET['page']; }else{$page = 1 ;}; 
$start_from = ($page-1) * $limit;
$query = $db->query("SELECT * FROM news ORDER BY published_date DESC LIMIT ".$start_from." , ".$limit);
$data = $query->fetchAll(PDO::FETCH_ASSOC);

$totalrows = count($data);

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
    <div class="single-blog-area blog-style-2 mb-50">
            <div class="single-blog-thumbnail">
                <img src="../img/bg-img/b5.jpg" alt="">
            </div>
        </div>
    <!-- ##### Single Blog Area Start ##### -->
<div class="container">
    <div class="row">
                <!-- ##### Post Content Area ##### -->
                <div class="col-12 col-lg-12">
                                <ul class="uk-breadcrumb mb-30">
                                    <li><a href="index.php">首頁</a></li>
                                    <li><a href=#>最新消息</a></li>
                                </ul>
               </div>
    </div>               
            <div class="row">
                <!-- ##### Post Content Area ##### -->
                <div class="col-12 col-lg-9">
                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50">
                            <?php foreach($data as $news){ ?>
                            
                                <div class="uk-card uk-card-default uk-card-body mt-15">
                        <div class="single-blog-content">                     
                            <a  class="post-tag"><?php echo $news['title']; ?></a>                    
                            <div class="post-meta mb-30">                              
                            <i class="fa fa-calendar-o p-2"></i><p><?php echo $news['published_date']; ?></p>
                            </div>
                            <p><?php echo $news['content']; ?></p>
                        </div></div>
      <?php } ?>   </div>
                    <?php  if($totalrows > 0){
                     $sth = $db->query("SELECT * FROM news ORDER BY published_date DESC ");
                     $data_count = count($sth ->fetchAll(PDO::FETCH_ASSOC));
                    $total_pages = ceil($data_count / $limit); ?>
                   

                            <ul class="uk-pagination uk-flex-center mb-50">
                            <?php   if($page > 1){ ?>
                                <li><a href="news.php?page=<?php echo $page-1;?>"><span uk-pagination-previous></span></a></li>
                                <?php }else{ ?>
                                    <span uk-pagination-previous></span> <?php } ?>
                                
                                <?php for ($i=1; $i<=$total_pages; $i++) { ?>  
                                <li><a href="news.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li> <?php } ?>
                                <?php   if($page <  $total_pages ){ ?>
                                <li><a href="news.php?page=<?php echo $page+1;?>"><span uk-pagination-next></span></a></li>
                                <?php }else{ ?>
                                    <span uk-pagination-next></span>    <?php } ?>
                            </ul>
                            <?php  }?>
            </div> 
                <div class="col-12 col-md-4 col-lg-3">
                    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                        <li class="uk-active"><a href="#">最新消息</a></li>
                        <li class="uk-parent">
                            <a href="#">Parent</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li>
                                    <a href="#">Sub item</a>
                                </li>
                            </ul>
                        </li>
                        <li class="uk-parent mb-30">
                            <a href="#">Parent</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Advertisement</h5>
                        <a href="#"><img src="../img/bg-img/add.gif" alt=""></a>
                    </div>
                </div>
            </div>  
        </div>
    <!-- ##### Single Blog Area End ##### -->

    <!-- ##### Instagram Feed Area Start ##### -->
       <?php require_once('theme/Footer.php')  ?>
</body>

</html>