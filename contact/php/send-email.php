<?php
    include("../../php/conn.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $message = $_POST['message'];
    if(!empty($name) || !empty($email) || !empty($company) || !empty($phone) || !empty($message)){
    $sql = mysqli_query($db,"INSERT INTO contact(name, email, company, mesage,  phone) VALUES ('$name','$email','$company','$message','$phone')");
        echo "Success";
    }else{
        echo "All Input Required!!";
    }