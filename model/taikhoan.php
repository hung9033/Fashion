<?php
function insert_tk($user,$pass,$email){
    $sql="INSERT INTO account (user, pass, email) values ('$user', '$pass', '$email')";
    pdo_execute($sql);
}
function check_user($user, $pass){
    $sql = "SELECT * FROM account where user ='".$user."' AND pass='".$pass."'" ;
    $sp=pdo_query_one($sql);
    return $sp;
}

function check_email($email){
    $sql="SELECT * FROM account WHERE email = '$email'";
    $check_email=pdo_query($sql);
    return $check_email;
    
}
function dangxuat(){
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}
//tk admin
function loadall_taikhoan_admin(){
    $sql="SELECT *FROM account where role= 1 ";
    $sp = pdo_query($sql);
    return $sp;
}
//tk user
function loadall_taikhoan(){
    $sql="SELECT *FROM account where role= 0 ";
    $sp = pdo_query($sql);
    return $sp;
}

function update_tk($id,$user,$pass,$name, $email,$address,$tel){
   
    $sql= "UPDATE account set  name='".$name."', user='".$user."',pass='".$pass."',email='".$email."',address='".$address."', tel='".$tel."'  WHERE id=".$id;
    

    pdo_execute($sql);

}

?>