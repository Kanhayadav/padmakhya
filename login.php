<?php
include_once('dbs.php');

// this is a function to check for the the log in 
if (isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['submit'])=='Login'){
    $email = $_POST['email'];
    $password = $_POST['pass'];
    check_author();
}

function check_author() {
    global $con, $email, $password;
    $sql = "SELECT * FROM logs WHERE username='$email'";
    $data = mysqli_query($con, $sql);
    if (mysqli_num_rows($data) === 1) {
        $result= mysqli_fetch_assoc($data);
        if ($result['password'] == $password) {
            session_start();
            $_SESSION["name"] = $result['name'];
            $_SESSION["id"]   = $result['id'];
            $_SESSION["role"] = $result['role'];
            echo 'success';
            sleep(5);
            echo "varified";
            header("location:../main.php");
        } 
        else {
            echo 'Incorrect password';
        }
    } 
    else {
        echo "Account with this Email does not Exist.";
        sleep(5);
        header("location:../index.php");
    }
}
?>