<?php
$pw = "adminlogin" ;
    if ($_POST["loginPW"] == $pw){
        header('Location: home.html');
    }else{
         echo "password incorrect";
    }
?>