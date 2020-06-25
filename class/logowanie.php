<?php

class Logs {
    public function ip() {
        $id = $_SERVER['REMOTE_ADDR'];
        return $id;
    }

    public function nick(){
        $nick = $_SESSION['user'];
        return $nick;
    }

}