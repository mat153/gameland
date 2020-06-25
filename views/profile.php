<?php include('../controllers/loginController.php'); ?>

<!DOCTYPE html>
<head>

    <link rel="Stylesheet" type="text/css" href="../public/css/profile.css" />
    <title>gameland</title>
</head>
<body>
<div class="profile">
    <div class="logo">
        <img src="../public/uploadPhotos/tlo.jpg" alt="zdjecie">
    </div>
    <div class="uzytkownik">
        <h1>
            <?php echo $_SESSION['user']; ?>
        </h1>
    </div>
    <div class="wylogowanie">
    <form method="post" action = "../logout.php" >
        <button type="submit" name="login_user" >Wyloguj sie</button>
    </form>
    </div>
    <div class="ikonka">
        <form method="post" action = "upload.php" >
            <button type="submit" name="ikona" >Dodaj/Zmień ikone swojego profilu</button>
        </form>
    </div>
    <div class="przeciwnik">
        <form method="post" action = "../dostepni_gracze.php" >
            <button type="submit" name="przeciwnik" >Wybierz przeciwnika</button>
        </form>
    </div>
    <div class="ranking">
        <form method="post" action = "../logout.php" >
            <button type="submit" name="ikona" >Ranking graczy</button>
        </form>
    </div>
</body>