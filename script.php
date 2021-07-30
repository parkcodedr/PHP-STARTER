<?php
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "Your email is " . $email . "Password is " . $password;
    $_SESSION["username"] = $email;
}

