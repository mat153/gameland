
<!DOCTYPE html>
<head>

    <link rel="Stylesheet" type="text/css" href="../public/css/position.css" />
    <title>gameland</title>
</head>
<body>
<div class="stanowiska">
    <div class="logo">
        <img src="../public/img/gameland.svg" alt="zdjecie">
    </div>
    <div class=" Napis">
        <h3>
            Zapraszamy na :
        </h3>
    </div>
    <div class= "komunikat">
    <?php
    $db = pg_connect("host=localhost port=5432 dbname=registration user=postgres ") or die("could not to connect");
    $query ="SELECT nr_stanowiska FROM registration.public.stanowiska ORDER BY RANDOM() LIMIT 1";
    $result = pg_query($db,$query);
    $row = pg_fetch_array($result);
    $zmienna = $row['nr_stanowiska'];
    echo "<button type='submit' name='user' class='btn btn-primary'>$zmienna</button>"
    ?>
    </div>
    <div class="wylogowanie">
        <form method="post" action = "../logout.php" >
            <button type="submit" name="wyloguj" >Wyloguj sie</button>
        </form>
    </div>
    <div class="profil">
        <form method="post" action = "profile_2.php" >
            <button type="submit" name="profil" >Profil</button>
        </form>
    </div>
</body>