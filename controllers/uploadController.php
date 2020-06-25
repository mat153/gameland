<?php include('loginController.php'); ?>
<?php if(isset($_POST['submit'])) {
    $msg = "";
    $target = "../public/uploadPhotos/" . basename($_FILES['image']['name']);
    $db = pg_connect("host=localhost port=5432 dbname=registration user=postgres ") or die("could not to connect");

    $image = $_FILES['image']['name'];
    $sql = "insert into registration.public.photos(image) values ('$image')";
    pg_query($db, $sql);
    $querry = "SELECT id_photos FROM registration.public.photos ORDER BY id_photos DESC LIMIT 1";
    $l_result = pg_query($db,$querry);
    $l_gamers = pg_fetch_array($l_result);
    $id = $l_gamers['id_photos'];
//    $sql_2 = "insert into registration.public.users(id_photos) values ('$id')";
//    pg_query($db,$sql_2);
    $zmienna = $_SESSION['user'];
    $photos = "UPDATE registration.public.users SET id_photos = $id WHERE username = '$zmienna'";
    pg_query($db,$photos);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
        header("location:http://localhost:8000/views/profile.php");
    } else {
        $msg = 'There was a problem uploading message';
    }
}
?>