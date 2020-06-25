<?php

session_start();

$username="";
$email="";
$errors = array();

if (isset($_POST['registration'])) {
    $db = pg_connect("host=localhost port=5432 dbname=registration user=postgres ") or die("could not to connect");
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    $user_check_query = "SELECT * FROM registration.public.users WHERE username = '$username' or email = '$email' ";
    $result = pg_query($db, $user_check_query);
    $user = pg_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Username already exist");
        }
        if ($user['email'] === $email) {
            array_push($errors, "This email is already has a registered username");
        }
    }

    if (count($errors) == 0) {

        $sql = "INSERT INTO registration.public.users(username, email, password) values ('$username','$email','$password')";
        pg_query($db, $sql);
        $_SESSION['user'] = htmlspecialchars($_POST['username']);

        header("location:profile.php");
    }
}