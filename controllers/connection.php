<?php
class Database {
private $username;
//private $password;
private $host;
private $database;
public function __construct()
{
$this->username = 'postgres';
$this->host = 'localhost';
$this->database = 'registration';
}
public function connect()
{
$connectionString = "pgsql:host=$this->host"
.";port=5432;dbname=$this->database;"
."user=$this->username;";
//."password=$this->password";
try {
$conn = new PDO(
$connectionString,
$this->username,
//$this->password
);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $conn;
}
catch(PDOException $e) {
die("Connection failed: " . $e->getMessage());
}
}
}

//$nowa = new Database();
//$zmienna = $nowa->connect();
//$sql = "select username from registration.public.users";
//
//foreach ($zmienna->query($sql) as $row){
//    print "<br/>";
//    print $row['username'];
//
//}

