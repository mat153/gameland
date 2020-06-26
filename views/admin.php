<!DOCTYPE html>
<head>

    <link rel="Stylesheet" type="text/css" href="../public/css/admin.css" />
    <title>gameland</title>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="../public/img/gameland.svg" alt="zdjecie">
    </div>
    <div class="uzytkownicy">
        <form action="showUser.php">
            <button type="submit" name="users" class="btn btn-primary">Show users</button>
        </form>
    </div>
    <div class="stanowiska">
        <form action="nPosition.php">
            <button type="submit" name="position" class="btn btn-primary">Dodaj ilość stanowisk</button>
        </form>
    </div>
    <div class="wylogowanie">
        <form action="../controllers/logout.php">
            <button type="submit" name="position" class="btn btn-primary">Wyloguj się</button>
        </form>
    </div>
</div>
</body>
