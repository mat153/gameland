<?php include ('../controllers/uploadController.php'); ?>
<!DOCTYPE html>
<head>
    <title>
        upload
    </title>
    <link rel="Stylesheet" type="text/css" href="../public/css/style.css" />
</head>
<body>
<div class="upload">

    <h1>Dodaj swoją ikonę</h1>
    <form action="upload.php" method="POST" ENCTYPE="multipart/form-data">
        <input type="file" name="image" >
        <input type="submit" value="Upload Image" name="submit">
    </form>
<!--    <p>-->
<!--        Hi, --><?php //echo $_SESSION['user']; ?>
<!--    </p>-->

</div>
</body>


