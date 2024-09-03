<?php

  session_start();

  if( !isset($_SESSION['user'])){
      header('location: ../index.php?act=dangnhap');
  }
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin FRANK </title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../css/style3.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="img">
                            <img src="../image/img_LOGO/logoadmin.png" alt="" width="70px">
                        </span>
                        <span class="title">Frank Admin</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="index.php?act=taikhoan">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customer   </span>
                    </a>
                </li>

                <li>
                    <a href="index.php?act=listdm">
                        <span class="icon">
                            <ion-icon name="logo-buffer"></ion-icon>
                        </span>
                        <span class="title">Category</span>
                    </a>
                </li>

                <li>
                    <a href="index.php?act=listsp">
                        <span class="icon">
                            <ion-icon name="bag-handle-outline"></ion-icon>
                        </span>
                        <span class="title">Product </span>
                    </a>
                </li>

                <li>
                    <a href="index.php?act=thongke">
                        <span class="icon">
                            <ion-icon name="newspaper-outline"></ion-icon>
                        </span>
                        <span class="title">Statistical</span>
                    </a>
                </li>

                <li>
                    <a href="index.php?act=binhluan">
                        <span class="icon">
                            <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                        </span>
                        <span class="title">Comment</span>
                    </a>
                </li>

                <li>
                    <a href="index.php?act=taikhoanadmin">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Admin</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Mật khẩu</span>
                    </a>
                </li> -->

                <li>
                    <a href="../index.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Exit</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="../image/img_LOGO/avt.jpg" alt="">
                </div>

            </div>
            <!-- ===============cards============== -->
            <div class="cardBox">
                
                
                <div class="cards">
                    <div>
                        <div class="numbers"></div>
                        <div class="cardName">Daily view</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>

                </div>


                <?php
                    $load_so_sp =dem_sp();
                    foreach ($load_so_sp as $key) ;
                        
                ?>
                <div class="cards">
                    <div>
                        <div class="numbers"><?=$key['total_sp']?></div>
                        <div class="cardName">Product   </div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                
                </div>
                <?php
                    $load_so_cmt =dem_cmt();
                    foreach ($load_so_cmt as $key) ;
                        
                ?>
                <div class="cards">
                    <div>
                        <div class="numbers"><?=$key['total_cmt']?></div>
                        <div class="cardName">Conmmet</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </div>

                </div>
                <?php
                $tong_doanhthu=tong_doanhthu();
                foreach ($tong_doanhthu as $key) ;
                ?>
                <div class="cards">
                    <div>
                        <div class="numbers">$<?=$key['tong_doanh_thu']?></div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>


                </div>
            </div>
            
