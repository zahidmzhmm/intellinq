<?php


class Login
{
    public function admin($data)
    {
        $config = new Config();
        $username = $data['username'];
        $password = $data['password'];
        $query = $config->query("SELECT * FROM `admin` WHERE `username`like'$username'and`password`like'$password'");
        $checking = mysqli_num_rows($query);
        if ($checking===1){
            $_SESSION['admin']=$username;
            header("location:../admin/index.php");
        }else{
            $_SESSION['wrong_usr_pwd']="username or password wrong";
            header("location:../admin/login.php");
        }
    }
}