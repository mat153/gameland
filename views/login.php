<?php include('../controllers/loginController.php');?>
<!DOCTYPE html>
<head>

    <link rel="Stylesheet" type="text/css" href="../public/css/style.css" />
    <title>gameland</title>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="../public/img/gameland.svg" alt="zdjecie">
    </div>
    <div class = "bledy">
        <p><?php echo implode(" ",$message); ?></p>
    </div>
    <form method="post" action = "login.php" >
        <input name="username" type="text" placeholder="nick" required>
        <input name="password" type="password" placeholder="password" required>
        <button type="submit" name="login_user" class="btn btn-primary">Log in</button>
        <p>Not a user?<a href="http://localhost:8000/views/register.php"><b>Register here</b></p>
    </form>

</div>
</body>