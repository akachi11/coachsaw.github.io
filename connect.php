<?php
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    

    $conn = new mysqli('localhost','root','','test',3307);
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into newreg(firstName, lastName, gender, email, password, cpassword)
        values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $firstName, $lastName, $gender, $email, $password, $cpassword);
        $stmt->execute();
        echo "Registration Successful";
        header('location:login.php');
        // $stmt->close();
    }
?>