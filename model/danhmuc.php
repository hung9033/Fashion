
<?php

 function loadall_gioi_tinh(){
     $sql =" SELECT * FROM gender order by id desc ";
     $listsanpham = pdo_query($sql);
     return $listsanpham;
 }

 function load_danh_muc_gioi_tinh1(){
    $sql= "SELECT category.id,category.name 
    FROM category
    JOIN gender ON category.idsex = gender.id
    WHERE gender.id = '1'
    "
   ;
    
    $listsanpham = pdo_query($sql);
    return $listsanpham;
                                        

 }

 

 function load_danh_muc_gioi_tinh2(){
    $sql= "SELECT category.name
    FROM category
    JOIN gender ON category.idsex = gender.id
    WHERE gender.id = '2'"
    ;
    
    $listsanpham = pdo_query($sql);
    return $listsanpham;
                                        

 }
function load_ten_dm($iddm){
   $sql= " SELECT * FROM category where id = ".$iddm;
   $dm = pdo_query($sql);
   extract($dm);
   
}

//  function test(){
//     $sql="SELECT gender.name, category.name
//     FROM gender
//     JOIN category ON gender.id = category.idsex
//     WHERE sex.id = '1';
    
//     ";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
//  }

 function load_ten_dm1($iddm){
   if($iddm>0){
   $sql= " SELECT * FROM category where id = ".$iddm;
   $dm = pdo_query_one($sql);
   extract($dm);
   return ($name);
   }
   else{
       return "";
   }
}


function loadall_danhmuc(){
   $sql =" SELECT * FROM category order by id desc ";
   $listdanhmuc = pdo_query($sql);
return $listdanhmuc;
}

//===============function DM===============
function deletedm(){
   $sql ="DELETE FROM category where id =".$_GET['id'];
   pdo_execute($sql);
}
function loadone_danhmuc($id){
   $sql="select * from category where id=".$id; 
   $dm=pdo_query_one($sql);
   return $dm;
}
function update_danhmuc($id,$tenloai){
   $sql="update category set name='".$tenloai."' where id=".$id;
   pdo_execute($sql);
}

function insert_dm($idg,$id,$ten){
   
   $sql = "INSERT INTO category ( idsex, name ) 
   VALUES ('$idg','$ten')";
   pdo_execute($sql);
}


function loadall_danh_muc_gender(){
   
      $sql =" SELECT * FROM gender order by id desc ";
      $listdanhmuc = pdo_query($sql);
   return $listdanhmuc;
   
}


?>