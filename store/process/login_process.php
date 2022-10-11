<?php
session_start();
$email = $_POST["email"];
$pw = $_POST["pw"];


require "database.php";
require "Encript.php";

if (empty($email)) {
    echo "Enter Your Email";
} else if (empty($pw)) {
    echo "Enter Your Password";
} else {
    $user_id = uniqid();
    $e = new Encript();
    $resultset = Database::s("SELECT * FROM `user`");
    $no = $resultset->num_rows;
    for ($i = 1; $i <=$no; $i++) {
        $row = $resultset->fetch_assoc();
        $un = $e->decrypt($row["user_email"]);
        $up = $e->decrypt($row["user_password"]);
        if ($un == $email) {
            if ($up == $pw) {
                $_SESSION["user"]=$row;
                echo "Sucess";
                break;
            } else {
                echo "Invalid Password for this user";
                break;
            }
        }else{
            if($i==$no){
                echo "User Not Found";
                break;
            }
        }
    }
}
