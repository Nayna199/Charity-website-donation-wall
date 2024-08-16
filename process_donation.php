<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $amount = $_POST["amount"];
    $payment = $_POST["payment"];
    $cardNumber = $_POST["card_number"];
    $cardHolder = $_POST["card_holder"];
    $cardExpiration = $_POST["card_expiration"];
    $cardCVV = $_POST["card_cvv"];

   
    header("Location: thankyou.php");
    exit();
}
