<?php

include 'connect.php';
session_start();




if (isset($_POST['signUp'])) {
    if (!empty($_POST['firstName'])  && !empty($_POST['lastName']) && !empty($_POST['email'])  && !empty($_POST['password'])) {
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $checkEmail = "SELECT * FROM `accounts` WHERE `email` ='$email' ";
        $checkResult = mysqli_query($conn, $checkEmail);

        if ($checkResult->num_rows > 0) {
            header("Location: index.php");
            $_SESSION['error'] = "This Email is Already Registered!";
            exit();
        } else {
            $insertInfo = "INSERT INTO `accounts`(`first`, `last`, `email`, `password`) 
                            VALUES ('$fname' ,'$lname','$email','$pass')";
            $insertResult = mysqli_query($conn, $insertInfo);

            if ($insertResult) {
                header("Location:index.php");
                $_SESSION['msg'] = "You Have Signed Up";
                exit();
            } else {
                echo "Error:" . $conn->error;
            }
        }
    } else {
        header("Location: index.php");
        $_SESSION['error'] = "ًPlease Enter ALL Informations";
        exit();
    }
}





if (isset($_POST['signIn'])) {
    if (!empty($_POST['emailLogin'])  && !empty($_POST['passwordLogin'])) {
        $emailLogin = $_POST['emailLogin'];
        $passwordLogin = $_POST['passwordLogin'];

        $loginSql = "SELECT * FROM `accounts` WHERE `email` = '$emailLogin' and `password` = '$passwordLogin' ";
        $loginResult = mysqli_query($conn, $loginSql);

        if ($loginResult->num_rows > 0) {
            session_start();
            $row = $loginResult->fetch_assoc();
            $_SESSION['email'] = $row['email'];
            $_SESSION['msg'] = "You Have Signed IN";
            header("Location:home.php");
            exit();
        } else {
            header("Location: index.php");
            $_SESSION['error'] = "ًWrong Email or Password!";
            exit();
        }
    } else {
        header("Location: index.php");
        $_SESSION['error'] = "ًPlease Enter Your Email and Password!";
        exit();
    }
}
