<?php
$email = $_POST["email"];
$pw1 = $_POST["pw1"];
$pw2 = $_POST["pw2"];

require "database.php";
require "Encript.php";

if (empty($email)) {
    echo "Enter Your Email";
} else if (!preg_match("/^[a-zA-Z0-9_.-]+@gmail.com|@email.com|@icloud.com|@hotmail.com+$/", $email)) {
    echo "Invalid Email";
} else if (empty($pw1)) {
    echo "Enter Your Password";
} else if (empty($pw2)) {
    echo "ReEnter Your Password";
} else if ($pw1 != $pw2) {
    echo "Passwords Don't Match";
} else {
    $user_id = uniqid();
    $e = new Encript();


    $resultset = Database::s("SELECT * FROM `user`");
    $no = $resultset->num_rows;
    $user = false;
    for ($i = 1; $i <= $no; $i++) {
        $row = $resultset->fetch_assoc();
        $un = $e->decrypt($row["user_email"]);

        if ($un == $email) {
            $user = true;
            break;
        }
    }

    if (!$user) {
        Database::iud("INSERT INTO `user` (`user_id`,`user_email`,`user_password`) VALUES('" . $user_id . "','" . $e->encrypt($email) . "','" . $e->encrypt($pw1) . "')");
        echo "User Register Sucess";
    } else {
        echo "User alredy Registered";
    }
}
