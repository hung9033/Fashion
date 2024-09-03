<div class="clearfix">
</div>
<div class="container_fullwidth">
  <div class="container shopping-cart">
    <div class="row">
       <!-- ////////////SHOPING//////////////// -->
            <div class="col-md-12">       
        <h3 class="title">
          Shopping Cart
        </h3>
        <div class="clearfix">
        </div>
        <table class="shop-table">
          <thead>
            <tr>
              <th>
                Image
              </th>
              <th>
                Dtails
              </th>
              <th>
                Quantity
              </th>
              <th>
                Color
              </th>
              <th>
                Size
              </th>
              <th>
              Price
              </th>
              
            </tr>
          </thead>
          <tbody>
            <?php               
                $tong=0;
                $i=0;                
                    foreach ($_SESSION['mycart'] as $key ) :
                        // $hinh =$img_path.$key[2];
                        $hinhpath="../images/products/ao_polo/".$key[2];
                                if(is_file($hinhpath)){
                                  $hinh="<img src= '".$hinhpath."'>";
                                }else{
                                  $hinhpath="No file img!";
                                } 
                        $thanhtien=$key[3]*$key[4];
                        $tong=$tong+$thanhtien;
                        $xoa= '<a href="index.php?act=delcart&idcart='.$i.'"><input style="width:15px;" type="image" src="images/remove.png" alt="">';
                ?>
                <tr>
                <td>
                   <img src="<?=$key[2]?>" alt="">
                </td>
                <td>
                  <div class="shop-details">
                    <div class="productname">
                    <?=$key[1]?>
                    </div>
                    <p>
                      <img alt="" src="images/star.png">
                      <a class="review_num" href="#">
                        02 Review(s)
                      </a>
                    </p>
                    <!-- <div class="color-choser">
                      <span class="text">
                        Product Color :
                      </span>
                      <ul>
                        
                        <li>
                          <a class="black-bg " href="#">
                            black
                          </a>
                        </li>
                        <li>
                          <a class="red-bg" href="#">
                            light red
                          </a>
                        </li>
                      </ul>
                    </div> -->
                    <p>
                      Product Code :
                      <strong class="pcode">
                        Dress 120
                      </strong>
                    </p>
                  </div>
                </td>
                <td>
                  <h5>
                    <?=$key[4]?>
                  </h5>
                </td>                                             
                <td>
                <?php 
                    //  if(isset($size1) && ($size1 != '')){
                    //      echo $size1;               
                    //   }        
                    echo $key[6];                     
                ?>                 
                </td>
                <td>
                <?php 
                    //  if(isset($size1) && ($size1 != '')){
                    //      echo $size1;               
                    //   }        
                    echo $key[7];                     
                ?>      
                </td>
                <td>
                  <h5>
                    <strong class="red">
                      $<?=$key[3]?>
                    </strong>
                  </h5>
                </td>
                
                </td>
              </tr>                                                                 
              <?php $i+=1;endforeach ?>              
          </tbody>
          <tfoot>
            <!-- <tr>
              <td colspan="6">
                <button class="pull-left">
                <a href="index.php?act=bill">Continue Shopping</a> 
                </button>
                <button class=" pull-right">
                  Update Shopping Cart
                </button>
              </td>
            </tr> -->
          </tfoot>
        </table>
        
        <div class="clearfix">
        </div>
        <div class="row">          
          
          
        </div>
      </div>
          </div>
<!-- /////////////////////// -->
    </div>
    <div class="container_fullwidth">
        <div class="container">
          <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="shippingbox">
              
              <div class="grandtotal">
                <h5>
                  GRAND TOTAL
                </h5>
                <span>
                  $<?=$tong?>
                </span>
              </div>
              <button>
                Process To Checkout
              </button>
            </div>
          </div>          
           <!-- ////////////////////////////////////////// -->
           
            <div class="col-md-9">
              <div class="checkout-page">
                <ol class="checkout-steps"> 

                <!-- ///////////form dang nhap?//////////// -->
            <!-- <?php if(!isset($_SESSION['user'])) {?>
                  <li class="steps active">
                    <a href="checkout.html" class="step-title">
                      01. checkout opition
                    </a>
                    <div class="step-description">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="new-customer">
                            <h5>
                              New Customer
                            </h5>
                            <label>
                              <span class="input-radio">
                                <input type="radio" name="user">
                              </span>
                              <span class="text">
                                I wish to subscribe to the Herbal Store newsletter.
                              </span>
                            </label>
                            <label>
                              <span class="input-radio">
                                <input type="radio" name="user">
                              </span>
                              <span class="text">
                                My delivery and billing addresses are the same.
                              </span>
                            </label>
                            <p class="requir">
                              By creating an account you will be able to shop faste be up to date on an order's status, and keep track of the orders you have previously made.
                            </p>
                            <button>
                              Continue
                            </button>
                          </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6">
                          <div class="run-customer">
                            <h5>
                              Rerunning Customer
                            </h5>
                            <form action="index.php?act=dangnhap" method="post">
                              <div class="form-row">
                                <label class="lebel-abs">
                                  User 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="user" required>
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Password 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="password" class="input namefild" name="pass" required>
                              </div>
                              <p class="forgoten">
                              <a href="index.php?act=dangky">
                              Signing account
                                </a>
                               
                                <a href="#">
                                  Forgoten your password?
                                </a>
                              </p>
                              <button type="submit" value="Login" name="dangnhap" >
                                Login
                              </button>
                            </form>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </li>
            <?php }?> -->

<!-- ////////////////////LẤY DỮ LIỆU NGƯỜI MUA KHI DANG NHẬP////////////////// -->
            <?php 
                    if(isset($_SESSION['user']) ){
                        $id=$_SESSION['user']['id'];
                        $name=$_SESSION['user']['name'];
                        $address=$_SESSION['user']['address'];
                        $email=$_SESSION['user']['email'];
                        $tel=$_SESSION['user']['tel'];
                    }else{
                        $id="0";
                        $name="";
                        $address="";
                        $email="";
                        $tel="";
                    }
                ?>
          
            <li class="steps active">
                    <a href="checkout.html" class="step-title">
                    customer information
                    </a>
                    <div class="step-description">
                      <form action="index.php?act=thanhtoan" method="POST">
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Your Persional Details
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs">
                                 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="hidden" name="iduser" value="<?=$id?>">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Last Name 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input required type="text" class="input namefild" name="name" value="<?=$name?>">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Email 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input required type="text" class="input namefild" name="email" value="<?=$email?>">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Telephone 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input required type="text" class="input namefild" name="tel" value="<?=$tel?>">
                              </div>
                              
                             
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Your Address
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Address 01 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input required type="text" class="input namefild" name="address" value="<?=$address?>">
                              </div>
                              
                              
                              <div class="form-row">
                                
                                <input required type="radio" name="pttt" id="" value="1">Thanh toán khi nhận hàng
                                <!-- <input  required type="radio" name="pttt" id="" value="2">Thanh toán Online
                                <input required type="radio" name="pttt" id="" value="3">Thanh toán Momo -->
                              </div>
                              
                              <!-- <div class="form-row">
                                <label class="lebel-abs">
                                  Country 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="">
                              </div> -->
                              <!-- <div class="form-row">
                                <label class="lebel-abs">
                                  Region / State 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="">
                              </div> -->
                              
                              
                              <input type="submit" name="thanhtoan" value="tiếp tục">
                                
                              <input type="hidden" name="tongdonhang" value="<?=$tong?>">
                            </div>
                          </div>
                        </div> 
                       
                    </div>
                    
                  </li>                 
                </ol>
              </div>
              
            </div>
           
          <div class="clearfix">
          </div>
          <div class="our-brand">
            <h3 class="title">
              <strong>
                Our 
              </strong>
              Brands
            </h3>
            <div class="control">
              <a id="prev_brand" class="prev" href="#">
                &lt;
              </a>
              <a id="next_brand" class="next" href="#">
                &gt;
              </a>
            </div>
            <ul id="braldLogo">
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>