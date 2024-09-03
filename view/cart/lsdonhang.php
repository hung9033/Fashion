<?php

if (isset($_SESSION['user'])) {
  $id = $_SESSION['user']['id'];
  $name = $_SESSION['user']['user'];
  $address = $_SESSION['user']['address'];
  $email = $_SESSION['user']['email'];
  $tel = $_SESSION['user']['tel'];
} else {
  $name = "";
  $address = "";
  $email = "";
  $tel = "";
}



?>
<!-- header -->
<div class="clearfix">
</div>
<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-3">
              <div class="special-deal leftbar" style="margin-top:0;">
                <h4 class="title">
                  Special 
                  <strong>
                    Deals
                  </strong>
                </h4>
                <div class="special-item">
                  <div class="product-image">
                    <a href="details.html">
                      <img src="images/products/thum/products-01.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <a href="details.html">
                        Licoln Corner Unit
                      </a>
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="details.html">
                      <img src="images/products/thum/products-02.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <a href="details.html">
                        Licoln Corner Unit
                      </a>
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="details.html">
                      <img src="images/products/thum/products-03.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <a href="details.html">
                        Licoln Corner Unit
                      </a>
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
              </div>
              <div class="product-tag leftbar">
                <h3 class="title">
                  Products 
                  <strong>
                    Tags
                  </strong>
                </h3>
                <ul>
                  <li>
                    <a href="#">
                      Lincoln us
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      SDress for Girl
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Corner
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Window
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      PG
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Oscar
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Bath room
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      PSD
                    </a>
                  </li>
                </ul>
              </div>
              <div class="get-newsletter leftbar">
                <h3 class="title">
                  Get 
                  <strong>
                    newsletter
                  </strong>
                </h3>
                <p>
                  Casio G Shock Digital Dial Black.
                </p>
                <form>
                  <input class="email" type="text" name="" placeholder="Your Email...">
                  <input class="submit" type="submit" value="Submit">
                </form>
              </div>
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="images/fblike.png" alt="">
                  </a>
                </span>
                <p>
                  12k people like Flat Shop.
                </p>
                <ul>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                </ul>
                <div class="fbplug">
                  <a href="#">
                    <span>
                      <img src="images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
            </div> -->
      <div class="col-md-9">
        <div class="checkout-page">
          <ol class="checkout-steps">
            <?php
            if (isset($_SESSION['user'])) {
              foreach ($lsdonhang as $key => $value) : ?>
                <li class="steps active">
                  <a href="#" class="step-title">
                    Code orders : <?= $value['madh'] ?>
                  </a>
                  <div class="step-description">
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <div class="new-customer">
                          <h5>
                            <?= $value['tensp'] ?>
                          </h5>
                          <label for="">
                            <img src="<?= $value['img'] ?>" width="200px" alt="">
                          </label>

                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="run-customer">

                          <h5>
                            Information line
                          </h5>
                          <h6>
                            <label for="">Color : <?= $value['color'] ?></label><br><br>
                            <label for="">Size : <?= $value['size'] ?></label><br><br>
                            <label for="">Price : <?= $value['dongia'] ?></label><br><br>
                            <label for="">quantity : <?= $value['soluong'] ?></label><br><br>
                            <label for="">Total : <?= $value['dongia'] * $value['soluong'] ?></label><br><br>
                            <label for="">Order date : <?= $value['ngaydathang'] ?></label><br><br>
                            <label for="">Status :
                              <?php
                              if ($value['idstt'] == 1) {
                                echo "Wait for confirmation ";
                              }
                              if ($value['idstt'] == 2) {
                                echo "Confirmed";
                              }
                              if ($value['idstt'] == 3) {
                                echo "Being transported";
                              }
                              if ($value['idstt'] == 4) {
                                echo "Delivered";
                              }
                              if ($value['idstt'] == 5) {
                                echo "Unable to deliver goods";
                              }
                              ?>

                            </label>
                          </h6>
                        </div>

                      </div>
                    </div>
                  </div>
                </li>
              <?php endforeach;
            } else { ?>
              <div class="col-md-4 col-sm-6">
                <div class="shippingbox">
                  <h5>
                    Code orders
                  </h5>
                  <form action="index.php?act=timdonhang" method="post">
                    <label>
                      Press enter to find the order
                    </label>
                    <input type="text" name="madh">
                    <div class="clearfix">
                    </div>
                    <button>
                      Enter
                    </button>
                  </form>
                </div>
              <?php } ?>
              </div>
          </ol>
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
<!-- footer -->