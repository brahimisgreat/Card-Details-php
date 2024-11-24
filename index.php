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
       <?php 
        include "includes/formHandler.php";
       ?>

        <form action="" method="post">
            <a href="./includes/database.php">click here</a>
            <div class="form-group">
                <label for="exampleInputEmail1">CARDHOLDER NAME</label>
                <input type="text" id="placehold" name="cardholderName" class="<?= $nameClass ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E.g jane Appleseed">
                <small id="emailHelp" class="text-danger "><?php echo $cardholderNameErrMessage ?></small>
            </div>
            <div class="form-group">
                <label>CARDNUMBER</label>
                <input type="number" id="placehold" name="cardNumber" class="<?= $cardNumberClass ?>" aria-describedby="emailHelp" placeholder="e.g.1234 5678 9123 0000">
                <small class="text-danger"><?= $cardNumberErrMessage ?></small>
            </div>

            <div class="expDate">
                <div class="form-group">
                    <label>Exp.(MM)</label>
                    <input type="number" id="placehold" maxlength="2" minlength="2" name="expMonth" class="<?= $expMonthClass ?>" aria-describedby="emailHelp" placeholder="MM">
                    <small class="text-danger"><?= $expMonthErrMessage ?></small>
                </div>
                <div class="form-group">
                    <label>(YY)</label>
                    <input type="number" id="placehold" maxlength="2" minlength="2" name="expYear" class="<?= $expYearClass ?>" aria-describedby="emailHelp" placeholder="YY">
                    <small class="text-danger"><?= $expYearErrMessage ?></small>
                </div>
                <div class="form-group">
                    <label>CVC</label>
                    <input type="number" id="placehold" maxlength="3" minlength="3" name="cvc" class="<?= $cvcClass ?>" aria-describedby="emailHelp" placeholder="e.g.123">
                    <small class="text-danger"><?= $cvcErrMessage ?></small>
                </div>
            </div>

            <button type="submit" id="button" class="btn btn">Conifrm</button>
        </form>
    </main>
</body>

</html>