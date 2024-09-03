<?php
ob_start();
include "model/danhmuc.php";
 $gioitinh = loadall_gioi_tinh();
 $dm_gioitinh1 = load_danh_muc_gioi_tinh1();
 $dm_gioitinh2 = load_danh_muc_gioi_tinh2();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>Welcome to FlatShop</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
      <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="css/style.css" rel="stylesheet">
      
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="index.php"><img src="./images/logo.png" alt="FlatShop"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="option_nav">
                                 <li class="dorpdown">
                                    <a href="#">Eng</a>
                                    <ul class="subnav">
                                       <li><a href="#">Eng</a></li>
                                       <li><a href="#">Vns</a></li>
                                       <li><a href="#">Fer</a></li>
                                       <li><a href="#">Gem</a></li>
                                    </ul>
                                 </li>
                                 <li class="dorpdown">
                                    <a href="#">USD</a>
                                    <ul class="subnav">
                                       <li><a href="#">USD</a></li>
                                       <li><a href="#">UKD</a></li>
                                       <li><a href="#">FER</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="topmenu">
                                 <li><a href="#">About Us</a></li>
                                 <li><a href="#">News</a></li>
                                 <li><a href="#">Service</a></li>
                                 <li><a href="#">Recruiment</a></li>
                                 <li><a href="#">Media</a></li>
                                 <li><a href="#">Support</a></li>
                              </ul>
                           </div>
                           
                           <div class="col-md-9">
                              <ul class="usermenu">
                                 
                                 <?php
                                    if(isset($_SESSION['user']) && $_SESSION['user']!==""){
                                          extract($_SESSION['user']);
                                    echo '    
                                    <li><a href="index.php?act=capnhattk" class="">Hello '.$user.'</a></li>                                                                                              
                                    <li><a href="index.php?act=dangxuat" class="reg">Logout</a></li>';
                                    if ($role=1) {
                                       echo '<li><a href="admin/index.php" class="">Admin</a></li>';
                                    }
                                  }else{
                                  echo '<li><a href="index.php?act=dangnhap" class="log">Login</a></li>';
                                 }?>
                                  
                              </ul>
                           </div>
                           
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form action="index.php?act=sanpham" method="post"><input class="search-submit" type="submit" name="timkiem" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="kyw"></form>
                           </li>
                           <li class="option-cart">
                              <!-- =================GIohang============== -->
                              <a href="index.php?act=viewcart" class="cart-icon">cart <span class="cart_no"></span></a>
                              
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                           <li><a href="index.php">Home</a></li>
                              <li class="active dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">shirt</a>
                                 
                                 <div class="dropdown-menu">                                    
                                    <ul class="mega-menu-links">
                                    <?php
                                       foreach ($dm_gioitinh1 as $value ) :
                                          extract($value);
                                          $linkdm = "index.php?act=sanpham&iddm=".$id;
                                    ?>
                                       <li><a href="<?= $linkdm?>"><?=$name?></a></li>                                      
                                       <!-- <li><a href="home2.html">home2</a></li>
                                       <li><a href="home3.html">home3</a></li>
                                       <li><a href="productlitst.html">Productlitst</a></li>
                                       <li><a href="productgird.html">Productgird</a></li>
                                       <li><a href="details.html">Details</a></li>
                                       <li><a href="cart.html">Cart</a></li>
                                       <li><a href="checkout.html">CheckOut</a></li>
                                       <li><a href="checkout2.html">CheckOut2</a></li>
                                       <li><a href="contact.html">contact</a></li> -->
                                       <?php endforeach ?>
                                    </ul>
                                    
                                 </div>
                                 

                              </li>
                              


                              <li class="active dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">trousers</a>
                                 
                                 <div class="dropdown-menu">
                                 
                                    <ul class="mega-menu-links"><?php
                                       foreach ($dm_gioitinh2 as $value ) :
                                          extract($value);
                                          $linkdm = "index.php?act=sanpham&iddm=".$id;
                                    ?>
                                      <li><a href="<?= $linkdm?>"><?=$name?></a></li>   
                                       <!-- <li><a href="home2.html">home2</a></li>
                                       <li><a href="home3.html">home3</a></li>
                                       <li><a href="productlitst.html">Productlitst</a></li>
                                       <li><a href="productgird.html">Productgird</a></li>
                                       <li><a href="details.html">Details</a></li>
                                       <li><a href="cart.html">Cart</a></li>
                                       <li><a href="checkout.html">CheckOut</a></li>
                                       <li><a href="checkout2.html">CheckOut2</a></li>
                                       <li><a href="contact.html">contact</a></li> -->
                                       <?php endforeach ?>
                                    </ul>
                                 </div>
                                 
                              </li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
                                 <div class="dropdown-menu mega-menu">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="productgird.html">New Collection</a></li>
                                             <li><a href="productgird.html">Shirts & tops</a></li>
                                             <li><a href="productgird.html">Laptop & Brie</a></li>
                                             <li><a href="productgird.html">Dresses</a></li>
                                             <li><a href="productgird.html">Blazers & Jackets</a></li>
                                             <li><a href="productgird.html">Shoulder Bags</a></li>
                                          </ul>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="">New Collection</a></li>
                                             <li><a href="">Shirts & tops</a></li>
                                             <li><a href="">Laptop & Brie</a></li>
                                             <li><a href="">Dresses</a></li>
                                             <li><a href="">Blazers & Jackets</a></li>
                                             <li><a href="">Shoulder Bags</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li><a href="">gift</a></li>
                              
                              <li><a href="">blog</a></li>
                              
                              <li><a href="index.php?act=lsdonhang">order history</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>