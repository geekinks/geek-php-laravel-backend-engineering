<?php
    function hello($name, $age, $date = 0){
        return "Hello".$name. "Welcome to new age". $age;
    }
    $username = "Aminullah";
    $age = 23;
    echo hello($username, $age, "23/10/23");

    function welcome(){
        return "Welcome to new year";
        
    }
?>