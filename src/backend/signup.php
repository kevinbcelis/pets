<?php
    $fullname = $_POST['fname'];
    $e_mail = $_POST['email'];
    $password = $_POST['passwd'];
    $enc_pas = md5($password);

    echo "Yur Fullname: ". $fullname."<br>";
    echo "Yur Email: ". $e_mail."<br>";
    echo "Yur Password Enc: ". $password;
?>