<?php 
session_start();  
require_once('../connection/link.php');
if(isset($_POST['edit']) && $_POST['edit'] == "UPDATE"){
    $updated_at = date('Y-m-d H:i:s');
    $sql= "UPDATE members SET name=:name, birthday=:birthday, gender=:gender, zipcode=:zipcode, county=:county, district=:district, phone=:phone, mobile=:mobile, address=:address, updated_at=:updated_at WHERE members_id=:members_id";
    $sth = $db ->prepare($sql);
    $sth ->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
    $sth ->bindParam(":birthday", $_POST['birthday'], PDO::PARAM_STR);
    $sth ->bindParam(":gender", $_POST['gender'], PDO::PARAM_STR);
    $sth ->bindParam(":zipcode", $_POST['zipcode'], PDO::PARAM_STR);
    $sth ->bindParam(":county", $_POST['county'], PDO::PARAM_STR);
    $sth ->bindParam(":district", $_POST['district'], PDO::PARAM_STR);
    $sth ->bindParam(":phone", $_POST['phone'], PDO::PARAM_STR);
    $sth ->bindParam(":mobile", $_POST['mobile'], PDO::PARAM_STR);
    $sth ->bindParam(":address", $_POST['address'], PDO::PARAM_STR);
    $sth ->bindParam(":updated_at", $updated_at, PDO::PARAM_STR);
    $sth ->bindParam(":members_id", $_SESSION['member']['members_id'], PDO::PARAM_INT);
    $result = $sth ->execute();
    if($result){
        $query = $db->query("SELECT * FROM members WHERE members_id=".$_SESSION['member']['members_id']);
        $_SESSION['member'] = $query->fetch(PDO::FETCH_ASSOC);

        header('Location: customer_account.php?msg="success"');
    }else{
        echo "error";
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
                                    <li><a href="customer_account.php">我的資訊</a></li>
                                </ul>
                                <form  action='customer_account.php' method='post'>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label >用戶名</label>
                                                <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['member']['name'] ;?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label >Email(帳號)</label>
                                                <input type="text" class="form-control" name="account" readonly="readonly" value="<?php echo $_SESSION['member']['account'] ;?>">
                                                </div>
                                            </div>
                                            <div class="form-row">                                              
                                                <div class="form-group col-md-3">
                                                <label>性別</label>
                                                <div style= 'text-align:center'>
                                                <input type="radio" class="uk-radio" name="gender" value="0" <?php if($_SESSION['member']['gender'] == 0) echo "checked" ?>> <td>man</td>
                                                <input type="radio" class="uk-radio"  name="gender" value="1"<?php if($_SESSION['member']['gender'] == 1) echo "checked" ?>> <td>woman</td>
                                                </div></div>
                                                <div class="form-group col-md-3">
                                                <label>生日</label>
                                                <input type="text" class="form-control" placeholder="1990/01/01" name="birthday" value="<?php echo $_SESSION['member']['birthday'] ;?>" >
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label>市話</label>
                                                <input type="text" class="form-control" name="phone" value="<?php echo $_SESSION['member']['phone'] ;?>">
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label >行動</label>
                                                <input type="text" class="form-control" name="mobile" value="<?php echo $_SESSION['member']['mobile'] ;?>">
                                                </div>
                                            </div>
                                            <div id="twzipcode"><div class="form-row">
                                            
                                            <div class="form-group col-md-2">
                                                <label>區碼</label>
                                                <input type="text" class="form-control" name="zipcode" value="<?php echo $_SESSION['member']['zipcode'] ;?>">
                                                </div>
                                            <div class="form-group col-md-2">
                                                <label >縣市</label>
                                                <select class="form-control" id="county" name="county"></select>
                                            </div>
                                                <div class="form-group col-md-2">
                                                <label >地區</label>
                                                <select class="form-control" id="address" name="address"></select>
                                            </div>
                                            
                                            <div class="form-group col-md-6">
                                                <label >地址</label>
                                                <input type="text" class="form-control" name="address" value="<?php echo $_SESSION['member']['address'] ;?>">
                                            </div>
                                            </div></div>
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