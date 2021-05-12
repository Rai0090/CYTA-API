w<?php


if (isset($_POST['submit'])) {

    include 'dbh.inc.php';
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    if (empty($username) || empty($password)) {
        header("Location: ../index.php?login=emptyvalues");
        exit();

    } else{
        $sql ="SELECT * FROM users WHERE username ='$username'";
        $result =  mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck < 1) {
            header("Location: ../index.php?login=missinguser");
            exit();
        } else {
            $sql2 ="SELECT * FROM users WHERE pass ='$password'";
            $result2 =  mysqli_query($conn, $sql2);
            $resultcheck2 = mysqli_num_rows($result2);
            if($resultcheck2 < 1) {
                header("Location: ../index.php?login=missingpassword");
                exit();
            } else{
                session_start();
                $_SESSION['4HEAD'] = $row['user_id'];
                $_SESSION['giga'] = $row['username'];
                $_SESSION['omega'] = $row['pass'];
                header("Location: ../index.php?login=success");
                exit();
            }


            }
        }
    }
     else {
        header("Location: ../index.php?login=errorlast");
        exit();

}