<?php


class Config
{
    public function con()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db   = "intellinq";
        $con  = mysqli_connect($host,$user,$pass,$db);
        if ($con==true){
            return $con;
        }else{
            die("Connection Error");
        }
    }
    public function query($sql)
    {
        return mysqli_query($this->con(),$sql);
    }
}