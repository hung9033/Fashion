



<div class="clearfix">
</div>
<div class="container_fullwidth">
  <div class="container shopping-cart">
    <div class="row">
              
      <div class="col-md-12">
      <div class="step-description">
        
              <form action="index.php?act=bill" method="post">
              <?php
                   if(isset($_SESSION['iddh']) && ($_SESSION['iddh']>0)){
                    $bill =loadbbill($_SESSION['iddh']);
                    if(count($bill)>0){
              ?>
                <div class="row">
                <h3 class="title">
                   ID ODER: <?=$bill[0]['madh']?>
                </h3>
                  <div class="col-md-6 col-sm-6">
                    <div class="your-details">
                      <h5>
                      Information line : 
                      </h5>
                      <div class="form-row">
                        <h6>Name: <?=$bill[0]['name']?></h6>
                
                      </div>
                      <div class="form-row">
                      <h6>Email: <?=$bill[0]['email']?></h6>
                    
                      </div>
                      <div class="form-row">
                      <h6>Telephone: <?=$bill[0]['tel']?></h6><br>
                        
                      </div>
                      <label for="" >
                        <strong><h5>Payment Methods</h5></strong>
                      </label>
                      <?php 
                        switch ($bill[0]['pttt']) {
                          case '1':
                            $txtmess="Thanh toán khi nhận hàng";
                          break;
                          case '2':
                            $txtmess="Thanh toán khi VNPAY";
                          break;
                          case '3':
                            $txtmess="Thanh toán khi MOMO";
                          break;
                          
                          default:
                          $txtmess="bạn chưa chọn phương thức thanh toán";
                            break;
                        }
                      ?>
                      <div class="form-row">
                      <h6> <?=$txtmess?></h6>
                        
                      </div>
                      

                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="your-details">
                      <h5>
                        Your Address
                      </h5>
                      <div class="form-row">
                      <h6>Address :<?=$bill[0]['address']?></h6>
                      </div>
                        <h6></h6>
                      
                      
                      
                    </div>
                  </div>
                  
                </div>
                <?php }
              }?>
              </form>
            </div>
        <h3 class="title">
            ODER
        </h3>
        <div class="clearfix">
        </div>
        <table class="shop-table">
          <thead>
            <tr>
              <th>
             
              </th>
              <th>
                Dtails
              </th>
              <th>
                Price
              </th>
              <th>
                Color
              </th>
              <th>
                Quantity
              </th>
              <th>
                Size
              </th>
              
            </tr>
          </thead>
          <tbody>
          <?php
                if(isset($_SESSION['iddh']) && ($_SESSION['iddh']>0)){
                $bill=loadbcart($_SESSION['iddh']);
                  foreach ($bill as $key ) :
                    extract($key);
                // var_dump($key);
                  
                  
                
              ?>
                <tr>
                <td>
                <img src="<?=$img?>" alt="">
                </td>
                <td>
                  <div class="shop-details">
                    <div class="productname">
                    <?=$tensp ?>  
                    </div>
                    <p>
                    
                      <a class="review_num" href="#">
                        02 Review(s)
                      </a>
                    </p>
                    <div class="color-choser">
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
                    </div>
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
                    $<?=$gia?>   
                  </h5>
                </td>
                <td>
                  <h5>
                   <?=$color?>
                  </h5>
                </td>
                
                  
                
                <td>
                  <h5>
                    <?=$soluong?>
                  </h5>
                </td>
                <td>
                  <h5><?=$size?></h5>                
                </td>
                
                
              </tr>
               
                 
                  
                

              
                  
          </tbody>
          
        </table>
        <div class="clearfix">
        </div>
        <div class="row">
          
          
          <div class="col-md-3 col-sm-6">
            <div class="shippingbox">
              
              <div class="grandtotal">
                <h5>
                  GRAND TOTAL
                </h5>
                <span>
                  $<?=$dongia?>   
                </span>
              </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
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
<div class="clearfix">
</div>
<?php }?>