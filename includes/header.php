<?php
$cardholderName = null;
$cardNumber = null;
$expMonth = null;
$expYear = null;
$cvc = null;


$cardholderNameErrMessage = null;
$cardNumberErrMessage = null;
$expMonthErrMessage = null;
$expYearErrMessage = null;
$cvcErrMessage = null;

$nameClass = "form-control";
$cardNumberClass = "form-control";
$expMonthClass = "form-control";
$expYearClass = "form-control";
$cvcClass = "form-control";
$errors = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="bg">
            <img src="./assets/bg-card-back.png" id="frontOfCard" alt="image of a card">
            <img src="./assets/bg-card-front.png" id="backOfCard" alt="image of a card">
        </div>