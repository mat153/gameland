<?php
//include('connection.php');
session_start();

$username="";
$message = array();

//connect to the database
$db = pg_connect("host=localhost port=5432 dbname=registration user=postgres ") or die("could not to connect");

if (isset($_POST['login_user'])){
    $username = pg_escape_string($db,$_POST['username']);
    $password = pg_escape_string($db,$_POST['password']);

    if(empty($username)){
        array_push($message,"Username is required");
    }
    if(empty($password)){
        array_push($message,"Password is required");
    }
    if (count($message)==0){
        $query = "SELECT * FROM registration.public.users WHERE username = '$username' AND password= '$password'";
        $result = pg_query($db,$query);
        if (pg_num_rows($result)==1) {
            $logged_in_user = pg_fetch_assoc($result);
            if ($logged_in_user['is_admin'] == 1) {
                $_SESSION['user'] = htmlspecialchars($_POST['username']);
                header("Location:http://localhost:8000/views/admin.php");
            } else {
                $_SESSION['user'] = htmlspecialchars($_POST['username']);
                $new = new Logs();
                $ip = $new->ip();
                $nick = $new->nick();
                $data = $new->date();
                $query ="insert into registration.public.logs(nick,ip,datetime) values('$nick','$ip','$data') ";
                $add = pg_query($db,$query);
                header("Location: http://localhost:8000/views/profile.php");
                //            setcookie('ciasteczko',$username);
            }
        }else{
            array_push($message,"Wrong username or password");
//            echo implode(" ",$message);
        }
    }
}

class Logs {
    public function ip() {
        $id = $_SERVER['REMOTE_ADDR'];
        return $id;
    }

    public function nick(){
        $nick = $_SESSION['user'];
        return $nick;
    }

    public function date(){
        date_default_timezone_set("Poland");
        $data =date("Y-m-d H:i:s");
        return $data;
    }



}
