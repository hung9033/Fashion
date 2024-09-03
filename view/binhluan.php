<?php
session_start();
include "../model/pdo.php";
include "../model/binhluan.php";
$idpro = $_GET['idsp'];
$loadone_bl =load_one_bl($idpro);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/iframe.css">
    <style>
        
    </style>
</head>
<body>
    

        <div class="cmt">
        <?php 
            foreach ($loadone_bl as  $value) :
                extract($value);
            ?>
                <div class="name">
                    Hoàng Hùng
                </div>
                <div class="nd">
                    <?=$noidung?>
                </div>
                <div class="date">
                    <?=$ngaybinhluan?>
                </div>
            
            <?php endforeach?>
        </div>  
<?php 
    if(isset($_POST['guibinhluan'])){
        $iduser=$_SESSION['user']['id'];
        $idpro=$_GET['idsp'];
        $noidung=$_POST['noidung'];
        insert_binhluan($idpro, $noidung,$iduser);
        header("location:".$_SERVER['HTTP_REFERER']);
    }

?>
<?php
    if(isset($_SESSION['user'])  && ($_SESSION['user'])){
?>
<div class="form-container">
<form action="" method="post">

    <input type="text" name="noidung" placeholder="Nhập bình luân"><br><br>
    
    <input type="hidden" value="<?=$idpro?>">
    
    <input type="submit" value="Gửi bình luận" name="guibinhluan">
</form>
</div>
<?php }else{
    echo '
    <div class="form-container" >
        <h4 style="text-align:center; color:red;">Bạn cần đăng nhập để bình luận</h4> 
    </div>';
}?>
</body>
</html>