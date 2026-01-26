<?php
    function hello($name, $age, $date = 0){
        echo $name;
        echo $age;
        echo "<br>";
        echo $date;
    }
    $username = "Aminullah";
    $age = 23;
    echo hello($username, $age, );

?>