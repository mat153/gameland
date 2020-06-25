<?php
if (isset($_POST['enter'])){
    header("Location:http://localhost:8000/views/admin.php");
}
?>

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
    <form method="post" action = "nPosition.php" >
        <input name="ilosc" type="text" placeholder="podaj ilosc stanowisk" required>
        <button type="submit" name="enter" class="btn btn-primary">Potwierdz</button>
    </form>

</div>
</body>