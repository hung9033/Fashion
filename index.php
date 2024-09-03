<?php
session_start();
include "model/pdo.php";
include "model/taikhoan.php";
include "model/sanpham.php";
include "model/bienthe.php";
include "model/donhanng.php";
include "model/vnpay.php";

include "global.php";
include "view/header.php";

 $spnew1 = test_spnew1();
 $spnew2 =test_spnew2();
 $spview1 = load_spview_top1();
 $spview2=load_spview_top2();
 if(!isset($_SESSION['mycart']))  $_SESSION['mycart']=[];
if(isset($_GET['act']) && ($_GET['act'] != "")){
    $act = $_GET['act'];
    switch ($act){
        case "chitietsp":
            if(isset($_POST['guibinhluan'])){
                insert_binhluan($_POST['idpro'], $_POST['noidung']);
            }
            if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                $sanpham = testt($_GET['idsp']);
                // $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
              
                include "view/chitietsp.php";
            }else{
                include "view/home.php";            
            }
        break;
        
        

        case "sanpham":
            
            if(isset($_POST['kyw']) &&  $_POST['kyw'] != 0 ){
                $kyw = $_POST['kyw'];
            }else{
                $kyw = "";
            }
            if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                $iddm =$_GET['iddm'];
                $loadsp_dm= loadsp_dm($iddm);
            }else{
               $iddm =0;
            }
            $dssp= search_sp($kyw,$iddm);
            $tendm=load_ten_dm($iddm);
            include "view/sanpham.php";
            break;

        case "dangnhap":
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                $user =$_POST['user'];                    
                $pass =$_POST['pass'];                    
                $checkuser =check_user($user, $pass);
                if(is_array($checkuser)){
                    $_SESSION['user']=$checkuser;
                    //    $avt=loadavt();
                    header('location:index.php');                   
                    } 
                
                }
            include "view/taikhoan/dangnhap.php";
            break;

        case "dangky":
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $mysqli = pdo_get_connection();
                // Lấy dữ liệu từ form
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $confirm_password = $_POST['confirm_password'];
                $email = $_POST['email'];
                require_once 'model/dangky.php';        
            } else {
                $error_message = "Registration failed. Please try again later.";
            }
            include "view/taikhoan/dangky.php";
            break;    

            case "dangxuat":
                dangxuat();
                header('location:index.php');
                break;
                            //   ===============Gio hang======================          
            case "addtocart":
                $id =$_POST['id'];
                $name =$_POST['name'];
                $img =$_POST['img'];
                $price =$_POST['price'];
                $size1 =$_POST['size'];
                $color1 =$_POST['color'];
                                            
                //         if (isset($_POST["size"])&& isset($_POST["color"])) {
                    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                            //             $size1 = $_POST["size"];
                                            //             $color1 = $_POST["color"];
                                            //             $size= $size1;
                                            //             $color= $color1;
                                            //         } else {
                                            //             echo "No option selected.";
                                            //         }
                                            //     }                           
                                            if(isset($_POST['sl']) && ($_POST['sl']>0)){
                                                $sl =$_POST['sl'];
                                            }else{                                                                                 
                                            $sl =1;
                                            }  
                                            $thanhtien=$sl*$price;
                                            $fg =0;
                                            $i=0;
                                            foreach ($_SESSION['mycart'] as $spadd) {
                                                if ($spadd[1] === $name && $spadd[6] === $color1 && $spadd[7] === $size1){
                                                    $slnew=$sl+$spadd[4];
                                                    $_SESSION['mycart'][$i][4]=$slnew;
                                                    $fg =1;
                                                    break;
                                               }
                                               $i++;
                                            }
                                            if ($fg==0) {
                                            $spadd = array($id, $name,$img,$price,$sl,$thanhtien,$color1,$size1);
                                            $_SESSION['mycart'][]=$spadd;
                                            }
                                           
                                            $color= getColors();
                                            $size= getSizes();
                                            include "view/cart/giohang.php";
                                            break;
                            
                                        case "delcart":
                                             if(isset($_GET['idcart'])){
                                                array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                                             }else{
                                                $_SESSION['mycart']=[];
                                             }
                                             include "view/cart/giohang.php";
                                            break;
                            
                                            case "viewcart":
                                                include "view/cart/giohang.php";
                                                break;      
                                            case "bill":
                                                
                                                // if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                //     if (isset($_POST["size"])&& isset($_POST["color"])) {
                                                //         $selectedOption1 = $_POST["size"];
                                                //         $selectedOption2 = $_POST["color"];
                                                //         $size= $selectedOption1;
                                                //         $color= $selectedOption2;
                                                //     } else {
                                                //         echo "No option selected.";
                                                //     }
                                                // }
                                                

                                                include  "view/cart/bill.php";
                                                break;
                                                
                                            case "thanhtoan":
                                                if (isset($_SESSION['mycart'])>0) {
                                                    
                                                
                                                if(isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])){
                                                    //lấy dữ liệu
                                                    $iduser = $_POST['iduser'];
                                                    $tongdonhang=$_POST['tongdonhang'];
                                                    $name=$_POST['name'];
                                                    $address=$_POST['address'];
                                                    $email=$_POST['email'];
                                                    $tel=$_POST['tel'];
                                                    $pttt=$_POST['pttt'];
                                                    $madh="Fs".rand(00,9999);
                                                    $ngaydathang= date('h:i:sa d/m/Y');
                                                    //tạo dơn hàng
                                                    //và trả về 1 id đơn hàng
                                                    // $spadd = array($id, $name,$img,$price,$sl,$thanhtien,$color1,$size1);
                                                    $iddh = taodonhang($madh,$tongdonhang,$pttt,$iduser,$name,$address,$email,$tel,$ngaydathang);
                                                    $_SESSION['iddh']=$iddh;
                                                    if (isset($_SESSION['mycart']) && count($_SESSION['mycart']) > 0) {
                                                        foreach ($_SESSION['mycart'] as $item) {
                                                            if ($item[4] <= 0) {
                                                                // Số lượng không hợp lệ, xử lý hoặc báo lỗi tùy thuộc vào logic của bạn
                                                                return;
                                                            }
                                                            addtocart($iddh, $item[0], $item[1], $item[2], $item[3], $item[4], $item[5], $item[6], $item[7]);
                                                        }
                                                        unset($_SESSION['mycart']);
                                                        
                                                    }

                                                   
                                                }
                                            }
                                                
                                                include  "view/cart/billcomform.php";
                                                break;

                                        case "redirect":
                                            if (isset($_SESSION['mycart'])) {
                                                    
                                                
                                                if(isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])){
                                                    //lấy dữ liệu
                                                    $iduser = $_POST['iduser'];
                                                    $tongdonhang=$_POST['tongdonhang'];
                                                    $name=$_POST['name'];
                                                    $address=$_POST['address'];
                                                    $email=$_POST['email'];
                                                    $tel=$_POST['tel'];
                                                    $pttt=$_POST['pttt'];
                                                    $madh="HUNGz".rand(00,9999);
                                                    $ngaydathang= date('h:i:sa d/m/Y');
                                                    //tạo dơn hàng
                                                    //và trả về 1 id đơn hàng
                                                    // $spadd = array($id, $name,$img,$price,$sl,$thanhtien,$color1,$size1);
                                                    $iddh = taodonhang($madh,$tongdonhang,$pttt,$iduser,$name,$address,$email,$tel,$ngaydathang);
                                                    $_SESSION['iddh']=$iddh;
                                                    if (isset($_SESSION['mycart']) && count($_SESSION['mycart']) > 0) {
                                                        foreach ($_SESSION['mycart'] as $item) {
                                                            if ($item[4] <= 0) {
                                                                // Số lượng không hợp lệ, xử lý hoặc báo lỗi tùy thuộc vào logic của bạn
                                                                return;
                                                            }
                                                            addtocart($iddh, $item[0], $item[1], $item[2], $item[3], $item[4], $item[5], $item[6], $item[7]);
                                                        }
                                                        unset($_SESSION['mycart']);
                                                        
                                                    }

                                                   
                                                }
                                            }else{
                                                echo "không có đơn hàng";
                                            }
                                            vnpay();
                                            break;

            case "capnhattk":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id =$_POST['id'];
                    $user =$_POST['user'];
                    $email=$_POST['email'];
                    $pass =$_POST['pass'];
                    $name =$_POST['name'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                     
                    
                    $update_tk =update_tk($id,$user,$pass,$name, $email,$address,$tel);
                    $_SESSION['user']= check_user($user, $pass);
                    // header('location:index.php?act=edittk');
                    $thongbao="Cập nhật thông tin thành công";
                    
                 
                }    
                include "view/taikhoan/updatetk.php";
                break;
            case "lsdonhang":
                
                            if(isset($_SESSION['user']) ){
                                $iduser=$_SESSION['user']['id'];
                                $name=$_SESSION['user']['user'];
                                $address=$_SESSION['user']['address'];
                                $email=$_SESSION['user']['email'];
                                $tel=$_SESSION['user']['tel'];
                                $lsdonhang=lsdonhang($iduser);
                            }else{
                                $name="";
                                $address="";
                                $email="";
                                $tel="";
                            }
                            
                    include "view/cart/lsdonhang.php";
                    break;
                    
                    case "timdonhang":
                        $madh = $_POST['madh'];
                        require_once 'model/searchdh.php';
                        $tdh = timdonhang($madh);
                        include "view/cart/searchdh.php";
                        break;
                        }
            

                    }
else{
   
    include "view/home.php";
}

include "view/footer.php";
?>