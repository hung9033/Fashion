
   
<div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
                      <?php 
                      
                            foreach ($sanpham as $key);
                            // var_dump($key); 
                            // $hinhpath="images/products/ao_polo/".$key['product_image'];
                            // if(is_file($hinhpath)){
                            //   $hinh="<img src= '".$hinhpath."' width='300px' height='180px' id="zoom_03" src='".$hinhpath."'data-zoom-image='".$hinhpath."'>";
                            // }else{
                            //   $hinhpath="No file img!";
                            // } 
                            $hinhpath="images/products/ao_polo/".$key['variation_image'];
                            if(is_file($hinhpath)){
                              $hinh2="<img src= '".$hinhpath."' >";
                            }else{
                              $hinhpath="No file img!";
                            }    
                            $hinh =  $img_path_products.$key['product_image'];     
                            
                            
                      ?>
            <div class="col-md-9">
              <div class="products-details">
                <div class="preview_image">
                  <div class="preview-small">
                  <img id="zoom_03" src="<?=$hinh?>" data-zoom-image="<?=$hinh?>" alt="">
                  </div>
                  <div class="thum-image">
                    <ul id="gallery_01" class="prev-thum">
                          <?php foreach ($sanpham as $key ) :
                                $hinhpath="images/products/ao_polo/".$key['variation_image'];
                                if(is_file($hinhpath)){
                                  $hinh1="<img src= '".$hinhpath."' >";
                                }else{
                                  $hinhpath="No file img!";
                                } 
                          ?>
                      <li>
                        <a href="" data-image="<?=$hinh?>" data-zoom-image="<?=$hinh?>">
                          <?php 
                          if (isset($hinh1)) {
                            echo $hinh1;
                          }
                          ?>
                          
                        </a>
                      </li>
                          <?php endforeach?>
                          
                    </ul>
                    <a class="control-left" id="thum-prev" href="javascript:void(0);">
                      <i class="fa fa-chevron-left">
                      </i>
                    </a>
                    <a class="control-right" id="thum-next" href="javascript:void(0);">
                      <i class="fa fa-chevron-right">
                      </i>
                    </a>
                  </div>
                </div>
                <div class="products-description">
                  <h5 class="name">
                    <?=$key['product_name']?>
                  </h5>
                  <p>
                    <img alt="" src="images/star.png">
                    <a class="review_num" href="#">
                      02 Review(s)
                    </a>
                  </p>
                  <p>
                    Availability: 
                    <span class=" light-red">
                      In Stock
                    </span>
                  </p>
                  <p>
                    Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrie ces posuere cubilia curae. Proin lectus ipsum, gravida etds mattis vulps utate, tristique ut lectus. Sed et lorem nunc...
                  </p>
                  <hr class="border">
                  <div class="price">
                    Price : 
                    <span class="new_price">
                     <?=$key['price']?>
                      <sup>
                        $
                      </sup>
                    </span>
                    <span class="old_price">
                      450.00
                      <sup>
                        $
                      </sup>
                    </span>
                  </div>
                  <hr class="border">
                  <div class="wided">
                    <div class="qty">
                      Qty &nbsp;&nbsp;: 
                      <select name="idsize" required >
                        <!-- <option value="" disabled selected>-- Chọn một --</option> -->
                               <?php foreach ($sanpham as $value){
                                
                                echo'<option value="">'.$value['size'].'</option>';
                                    
                                } ?>
                        </select> <br><br>
                    </div>

                    <div class="qty">
                      Color &nbsp;&nbsp;: 
                      <select name="idsize" required >
                        <!-- <option value="" disabled selected>-- Chọn một --</option> -->
                               <?php 
                              
                               foreach ($sanpham as $value){
                                 
                                echo'<option value="">'.$value['color'].'</option>';
                                    
                                } ?>
                        </select> <br><br>
                    </div>
                    <form action="index.php?act=addtocart" method="post">
                              
                              <input type="number" id="quantity" name="sl" value="1" min="1" max="10" >
                              <input type="hidden" name="id" value="<?= $key['product_id'] ?>">
                              <input type="hidden" name="name" value="<?= $key['product_name'] ?>">
                              <input type="hidden" name="img" value="<?= $hinh ?>">
                              <input type="hidden" name="price" value="<?= $key['price'] ?>">
                              <input type="hidden" name="size" value="<?= $value['size'] ?>">
                              <input type="hidden" name="color" value="<?= $value['color'] ?>">
                              <button class="button add-cart" type="submit">Add To Cart</button>
                              <!-- <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                              <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button> -->
                    </form>
                  </div>
                  <div class="clearfix">
                  </div>
                  <hr class="border">
                  <img src="images/share.png" alt="" class="pull-right">
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="tab-box">
                <div >
                  <ul>
                    <li style="font-size:25px; text-align:center">
                        DESCRIPTION
                      </a>
                    </li>
                    
                  </ul>
                </div>
                <div class="tab-content-wrap">
                  <div class="tab-content" id="Descraption">
                    <?=$key['product_description']?>
                  </div>
                  <div >
                  <ul>
                    <li style="font-size:25px; text-align:center">
                        COMMENT
                      </a>
                    </li>
                    
                  </ul>
                </div>
                 <iframe width="100%" height="500px" src="view/binhluan.php?idsp=<?=$_GET['idsp']?>" frameborder="0"></iframe>
                 
                  <div class="tab-content" id="tags">
                    <div class="tag">
                      Add Tags : 
                      <input type="text" name="">
                      <input type="submit" value="Tag">
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div id="productsDetails" class="hot-products">
                <h3 class="title">
                  <strong>
                    Hot
                  </strong>
                  Products
                </h3>
                <div class="control">
                  <a id="prev_hot" class="prev" href="#">
                    &lt;
                  </a>
                  <a id="next_hot" class="next" href="#">
                    &gt;
                  </a>
                </div>
                <ul id="hot">
                  <li>
                    <div class="row">
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            - %20
                          </div>
                          <div class="thumbnail">
                            <img src="images/products/small/products-01.png" alt="Product Name">
                          </div>
                          <div class="productname">
                            Iphone 5s Gold 32 Gb 2013
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                            <button class="button compare" type="button">
                              <i class="fa fa-exchange">
                              </i>
                            </button>
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="thumbnail">
                            <img src="images/products/small/products-02.png" alt="Product Name">
                          </div>
                          <div class="productname">
                            Iphone 5s Gold 32 Gb 2013
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                            <button class="button compare" type="button">
                              <i class="fa fa-exchange">
                              </i>
                            </button>
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            New
                          </div>
                          <div class="thumbnail">
                            <img src="images/products/small/products-03.png" alt="Product Name">
                          </div>
                          <div class="productname">
                            Iphone 5s Gold 32 Gb 2013
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                            <button class="button compare" type="button">
                              <i class="fa fa-exchange">
                              </i>
                            </button>
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            - %20
                          </div>
                          <div class="thumbnail">
                            <img src="images/products/small/products-01.png" alt="Product Name">
                          </div>
                          <div class="productname">
                            Iphone 5s Gold 32 Gb 2013
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                            <button class="button compare" type="button">
                              <i class="fa fa-exchange">
                              </i>
                            </button>
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="thumbnail">
                            <img src="images/products/small/products-02.png" alt="Product Name">
                          </div>
                          <div class="productname">
                            Iphone 5s Gold 32 Gb 2013
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                            <button class="button compare" type="button">
                              <i class="fa fa-exchange">
                              </i>
                            </button>
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            New
                          </div>
                          <div class="thumbnail">
                            <img src="images/products/small/products-03.png" alt="Product Name">
                          </div>
                          <div class="productname">
                            Iphone 5s Gold 32 Gb 2013
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                            <button class="button compare" type="button">
                              <i class="fa fa-exchange">
                              </i>
                            </button>
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            - %20
                          </div>
                          <div class="thumbnail">
                            <img src="images/products/small/products-01.png" alt="Product Name">
                          </div>
                          <div class="productname">
                            Iphone 5s Gold 32 Gb 2013
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                            <button class="button compare" type="button">
                              <i class="fa fa-exchange">
                              </i>
                            </button>
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="thumbnail">
                            <img src="images/products/small/products-02.png" alt="Product Name">
                          </div>
                          <div class="productname">
                            Iphone 5s Gold 32 Gb 2013
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                            <button class="button compare" type="button">
                              <i class="fa fa-exchange">
                              </i>
                            </button>
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            New
                          </div>
                          <div class="thumbnail">
                            <img src="images/products/small/products-03.png" alt="Product Name">
                          </div>
                          <div class="productname">
                            Iphone 5s Gold 32 Gb 2013
                          </div>
                          <h4 class="price">
                            $451.00
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
                            <button class="button compare" type="button">
                              <i class="fa fa-exchange">
                              </i>
                            </button>
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="clearfix">
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="special-deal leftbar">
                <h4 class="title">
                  Special 
                  <strong>
                    Deals
                  </strong>
                </h4>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="images/products/thum/products-01.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Licoln Corner Unit
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="images/products/thum/products-02.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Licoln Corner Unit
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="images/products/thum/products-03.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Licoln Corner Unit
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
              </div>
              <div class="clearfix">
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
              <div class="clearfix">
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
              <div class="clearfix">
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
              <div class="clearfix">
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