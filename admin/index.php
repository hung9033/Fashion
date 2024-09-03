<?php
ob_start();

include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "../model/donhanng.php";
include "../model/binhluan.php";
include "../model/bienthe.php";
include "../model/thongke.php";
include "../global.php";
include "header.php"; 

    $load_dh=loadall_donhang();
    
    
if(isset($_GET['act']) && ($_GET['act'] != "") ){
    $act = $_GET['act'];
    switch ($act){
        // ====================CRUD SAN PHAM=======================
        case "listsp":
            $dssp=loadall_sp();
            $spbt=loadall_sp_bienthe();
            include "sanpham/listsp.php";
            break;   

        case "addsp":
                // if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                
                // $iddm= $_POST['iddm'];
                // $ten= $_POST['ten'];
                // $gia=$_POST['price'];
                // $mota=$_POST['mota'];
                // $view=$_POST['view'];
                // $file=$_FILES['img'];
                // $img=$file['name'];
                // move_uploaded_file($file['tmp_name'], "../images/products/ao_polo/" . $img);
                // insert_sp( $ten, $gia, $img,$mota,$view,$iddm);
                // $thongbao = "thêm thành công";
                

                
                

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Xử lý dữ liệu từ biểu mẫu thêm sản phẩm và biến thể
                    $productName = $_POST['name'];
                    $price = $_POST['price'];
                    
                    $mota = $_POST['mota'];
                    $iddm = $_POST['iddm'];
                    $sizeId = $_POST['size'];
                    $colorId = $_POST['color'];
                    $quantity = $_POST['quantity'];
                    $file=$_FILES['img'];
                    $img=$file['name'];
                    move_uploaded_file($file['tmp_name'], "../images/products/ao_polo/" . $img);
                
                    // Gọi hàm từ Model để thêm sản phẩm và biến thể vào cơ sở dữ liệu
                    addProductWithVariation($productName, $price, $img, $mota, $iddm, $sizeId, $colorId, $quantity);
                    $thongbao="Add product successfully";
            }
            $dsdm = loadall_danhmuc();
            include "sanpham/add.php";
            break;
            
                      

        case"xoasp":
            if(isset($_GET['idbt']) && isset($_GET['id']) && $_GET['idbt'] > 0 && $_GET['id'] > 0) {                   
                deleteProduct();
                $thongbao="Deleted successfully";
            }
                $dssp = loadall_sp();
                $spbt = loadall_sp_bienthe();
                
        include "sanpham/listsp.php";
        break;

        case "suasp":
            if(isset($_GET['id'])&& ($_GET['id']  > 0)){
                $sp= loadone_sanpham($_GET['id']);
                            }
                            $dsdm = loadall_danhmuc();
                            include "sanpham/update.php";
                            break; 
                case "updatesp":
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        
                        $id=$_POST['id'];
                        $iddm= $_POST['iddm'];
                        $ten= $_POST['ten'];
                        $gia=$_POST['price'];
                        $mota=$_POST['mota'];
                        $view=$_POST['view'];
                        $file=$_FILES['img'];
                        $img=$file['name'];
                        move_uploaded_file($file['tmp_name'], "../images/products/ao_polo" . $img);
        
                        update_sp($id,$iddm,$ten, $gia,$mota,$view,$img);
                        $thongbao="cập nhật thành công!";
                    }
                    $dsdm = loadall_danhmuc();
                      $dssp = loadall_sp();
                      include "sanpham/listsp.php";
                    break;

                    // ===============dm==================
                    case "listdm":
                        $dsdm=loadall_danhmuc();
                        include "listdm.php";
                        break;   

                        case "xoadm":
                            if(isset($_GET['id']) && $_GET['id'] > 0 ){
                                $xoadm=deletedm();
                            }
                            $dsdm=loadall_danhmuc();
                            include "listdm.php";
                            break;  
                        case "suadm":
                            if(isset($_GET['id']) && $_GET['id'] > 0 ){
                                $dm=loadone_danhmuc($_GET['id']);
                                include "update.php";
                            }
                            $dsdm=loadall_danhmuc();
                            include "listdm.php";
                            break;
                        case 'updatedm' :
                            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                $tenloai=$_POST['tenloai'];
                                $id=$_POST['id'];
                                update_danhmuc($id,$tenloai);
                                $thongbao="Cập nhật thành công";
                            }
                            $dsdm=loadall_danhmuc();
                            include "listdm.php";
                            break;  

                            case "adddm":
                                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                                    $idg =$_POST['idg'];
                                $id = $_POST['maloai'];
                                $ten= $_POST['tenloai'];
                                
                
                                insert_dm($idg,$id,$ten);   
                                
                                $thongbao = "thêm thành công";
                                }
                                $dsgender = loadall_danh_muc_gender();
                                include "add.php";
                                break;
                // ======================TAIKHOAN======================
                case "taikhoan":
                    $dstk=loadall_taikhoan();
                    include "taikhoan/listtk.php";
                    break;
                case "taikhoanadmin":
                    $dstkadmin=loadall_taikhoan_admin();
                    include "taikhoan/listtkadmin.php";
                    break;
                
                //=======================ĐƠN HÀNG======================
                case "suatrangthai":
                    if(isset($_GET['iddh']) && $_GET['iddh'] > 0){
                        $loadonedonhang =load_ctdh($_GET['iddh']);
                    }
                    $loadall_stt =loadall_stt();
                    include "donhang/chitietdonhang.php";
                    break;
                
                case "updatetrangthai":
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                                           
                        $iddh=$_POST['iddh'];
                        $idstt= $_POST['idstt'];         
                                              
                        update_trangthai($iddh,$idstt);
                        $thongbao="cập nhật thành công!";
                        header('location: index.php');
                    }
                    break;
                case "binhluan":
                    $allCmt = loadallCmt();
                    include "binhluan/listcmt.php";
                    break;

                case"xoabinhluan":
                    if(isset($_GET['id'])&& ($_GET['id']  > 0)){
                        xoa_binhluan();
                        $thongbao ="Xóa thành công";
                    }
                    $allCmt = loadallCmt();
                    include "binhluan/listcmt.php";
                    break;
                case"thongke":
                    $data= thongke();
                    
                    include "thongke/thongke.php";
                    break;
    }
}else{
    include "home.php";
    
}

include "footer.php";

?>