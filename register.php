<?php
$conn = require_once("mysqlCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $mail = $_POST["mail"];
    $address = $_POST["address"];
    //檢查帳號是否重複
//    $check = "SELECT * FROM `使用者` WHERE `姓名` = " . $username . " ";
//    if (mysqli_num_rows(mysqli_query($conn, $check)) == 0) {
    $sql = "INSERT INTO `使用者`(`姓名`, `信箱`, `密碼`, `偏好類型`, `地址`)
         VALUES ('$username','$mail','$password','NULL','$address')";

    if (mysqli_query($conn, $sql)) {
        echo "註冊成功!3秒後將自動跳轉頁面<br>";
        echo "<a href='index.php'>未成功跳轉頁面請點擊此</a>";
        header("refresh:32;url=index.php");
        exit;
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    /*   } else {
    echo "該帳號已有人使用!<br>3秒後將自動跳轉頁面<br>";
    echo "<a href='register.html'>未成功跳轉頁面請點擊此</a>";
    header('HTTP/1.0 302 Found');
    //header("refresh:3;url=register.html",true);
    exit;
    }*/
}


mysqli_close($conn);

function function_alert($message)
{

    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='index.php';
    </script>";

    return false;
}
?>