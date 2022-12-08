<?php
include("./conn.php");
    $name = $_POST['name'];
    if(!empty($name)){
        $email = $_POST['email'];
        if(!empty($email)){
            $phone = $_POST['phone'];
            if(!empty($phone)){
                $way = $_POST['way'];
                $code = $_POST['code'];
                $pid = $_POST['pid'];
                $way = $_POST['way'];
                $course_id = $_POST['course_id'];
                $stu_id = substr($course_id,0,4)."4".rand(1000,10000);
                $sql  = mysqli_query($db,"INSERT INTO students( name, stu_id, batch, course, payment, pid, code, email, phone) VALUES ('$name','$stu_id','4','$course_id','$way','$pid','$code','$email','$phone')");
                if($sql){
                    echo "Success";
                }
                else{
                    echo "Code dengindi";
                }
            }
            else{
                echo "Phone number is required";
            }
        }
        else{
            echo "Email is required";
        }
    }
    else{
        echo "Name is Required";
    }