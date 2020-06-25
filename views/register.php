<?php include('../controllers/registerController.php') ?>
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
        <p><?php echo implode(" ",$errors); ?></p>
    </div>
    <form method="post" action = "register.php" >
        <input name="username" type="text" placeholder="nick" required>
        <input name="email" type="text" placeholder="email@email.com" required>
        <input name="password" type="password" placeholder="password" required>
<!--        <input name="password_2" type="password" placeholder="confirm password" required>-->
        <button type="submit" name="registration" class="btn btn-primary">Register</button>
        <p>Already a user?<a href="login.php"><b>Login in</b></p>
    </form>

</div>
</body>


