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

    function addTwoNum($name, $age){
        return $firstNum + $secondNum;
    }
    echo "<br/>";
    echo addTwoNum(4, 8);

    function calculateTotalAmount($price, $quantity, $tax = 0.02){
        $subTotal = $price * $quantity;
        $taxAmount = $subTotal * $tax;
        $totalAmount = $subTotal + $taxAmount;
        return $totalAmount;
    }

    echo ""

    echo calculateTotalAmount(110, 3);
    echo calculateTotalAmount(110, 3);
?>