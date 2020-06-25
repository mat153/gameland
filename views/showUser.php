<?php
include('../controllers/loginController.php');

$get_all_users = "SELECT username,email from registration.public.users where is_admin = 0";
$result = pg_query($db,$get_all_users);
$usersData = pg_fetch_all($result);
foreach ($usersData as $user): {

    echo $user['username'];
    echo ":";
    echo $user['email'];
    echo "<br>";
}
endforeach;

//$view = "CREATE VIEW dane2 AS
//SELECT u.username, u.email, p.image FROM photos p
//LEFT JOIN users u on p.id_photos=u.id_photos;";





