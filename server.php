<?php

session_start();

$username = "";
$email = "";
$errors = array();

$db = new mysqli("localhost", "root", "", "project1");

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

if(empty($username))
    array_push($errors, "Username is required");
if(empty($email))
    array_push($errors, "Email is required");
if(empty($password1))
    array_push($errors, "Password is required");
if($password1 != $password2)
    array_push($errors, "The two password do not match");

if(count($errors) == 0){
    $password = $password1; //encrypt password before storing
    $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
    $db->query($sql);
    
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php'); //redirect to homepage
}
}

//log user in from login page
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    //checking the filled form
    if(empty($username))
        array_push($errors, "Username is required");
    if(empty($password))
        array_push($errors, "Password is required");
    if(count($errors) == 0){
        $password = $password;
        $query = "SELECT * FROM users WHERE username= '$username' AND password= '$password'";
        $result= $db->query($query);
        if($result->num_rows == 1){
            //log user in
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php'); //redirect to homepage
        }
        else{
            array_push($errors, "Incorrect password or username");
        }
    }
}


//logout
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');

}

?>