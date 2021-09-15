<?php
    


    if(isset($_POST['submit']))
    {
        $username = $_POST['name'];
        $password = $_POST['password'];
        if(!$username || !$password)
        {
            $error =  "ZEHMET OLMASA XANALARI BOSH QOYMAYIN!!!";
        }elseif($username != $loginData['username'])
        {
            $error = "LOGIN SEHVDIR";
        }elseif($password != $loginData['password'])
        {
            $error = "Sifre Yanlishdir";
        }else{
            $_SESSION['name'] = $loginData['username'];

            header("Location:/php-05");
        }
    }
?>

 


    <?php require 'item.php' ?>
        

   
