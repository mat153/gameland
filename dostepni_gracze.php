<?php

if (isset($_POST['user'])){
header("location: http://localhost:8000/views/position.php");
}
?>

<!DOCTYPE html>
<head>
    <?php include_once('controllers/loginController.php')?>
    <link rel="Stylesheet" type="text/css" href="public/css/gamers.css" />
    <title>gameland</title>
</head>
<body>
<div class="gracze">
    <h1>
        Wybierz swojego przeciwnika
    </h1>
    <form method="post" action = "dostepni_gracze.php" >
        <?php
        $db = pg_connect("host=localhost port=5432 dbname=registration user=postgres ") or die("could not to connect");
        $name = $_SESSION['user'];
        $query = "SELECT username FROM registration.public.users WHERE username != '$name'";
        $result = pg_query($db,$query);
        while($row = pg_fetch_array($result))
        {
            $zmienna = $row['username'];
            echo "<button type='submit' name='user' class='btn btn-primary'>$zmienna</button>";
        }
        ?>
    </form>
</div>
</body>