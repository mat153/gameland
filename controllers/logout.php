<?php

include('loginController.php');
pg_close($db);
//echo $_SESSION['user'];

unset($_SESSION['user']);
session_destroy();

//echo $_SESSION['user'];


//echo "wylogowano";
header("Location:http://localhost:8000/views/login.php");
