<?php
$cardholderName =null;
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <main>
        <?php
        if (isset($_POST["cardholderName"])) {
            $cardholderName = $_POST["cardholderName"];
            $cardNumber = $_POST["cardNumber"];
            $expMonth = $_POST["expMonth"];
            $expYear = $_POST["expYear"];
            $cvc = $_POST["cvc"];

            if (empty($cardholderName)) {
                $cardholderNameErrMessage = "Cardholder Name is required";
                $nameClass = "form-control border border-danger";
                $errors++;
            } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $cardholderName)) {
                $cardholderNameErrMessage = "Only letters and white space allowed";
                $nameClass = "form-control border border-danger";
                $errors++;

            }

            if (empty($cardNumber)) {
                $cardNumberErrMessage = "Card Number is required";
                $cardNumberClass = "form-control border border-danger";
                $errors++;
            } elseif (strlen($cardNumber) < 16 || strlen($cardNumber) > 16) {
                $cardNumberErrMessage = "Card Number must be 16 digits";
                $cardNumberClass = "form-control border border-danger";
                $errors++;
            } elseif (!is_numeric($cardNumber)) {
                $cardNumberErrMessage = "Card Number must be a number";
                $cardNumberClass = "form-control border border-danger";
                $errors++;
            }

            if(empty($expMonth)) {
                $expMonthErrMessage = "Exp. Month is required";
                $expMonthClass = "form-control border border-danger";
                $errors++;

            } elseif(strlen($expMonth) < 2 || strlen($expMonth) > 2) {
                $expMonthErrMessage = "Exp. Month must be 2 digits";
                $expMonthClass = "form-control border border-danger";
                $errors++;
            } elseif(!is_numeric($expMonth)) {
                $expMonthErrMessage = "Exp. Month must be a number";
                $expMonthClass = "form-control border border-danger";
                $errors++;
            }

            if(empty($expYear)) {
                $expYearErrMessage = "Exp. Year is required";
                $expYearClass = "form-control border border-danger";
                $errors++;
            } elseif(strlen($expYear) < 2 || strlen($expYear) > 2) {
                $expYearErrMessage = "Exp. Year must be 2 digits";
                $expYearClass = "form-control border border-danger";
                $errors++;
            } elseif(!is_numeric($expYear)) {
                $expYearErrMessage = "Exp. Year must be a number";
                $expYearClass = "form-control border border-danger";
                $errors++;
            }

            if(empty($cvc)) {
                $cvcErrMessage = "CVC is required";
                $cvcClass = "form-control border border-danger";
                $errors++;
            } elseif(strlen($cvc) < 3 || strlen($cvc) > 3) {
                $cvcErrMessage = "CVC must be 3 digits";
                $cvcClass = "form-control border border-danger";
                $errors++;
            } elseif(!is_numeric($cvc)) {
                $cvcErrMessage = "CVC must be a number";
                $cvcClass = "form-control border border-danger";
                $errors++;
            }
                if ($errors == 0) {
                    echo "<div class='alert alert-success' role='alert'>
                    Cardholder Name: $cardholderName <br>
                    Card Number: $cardNumber <br>
                    Exp. Month: $expMonth <br>
                    Exp. Year: $expYear <br>
                    CVC: $cvc <br>
                    </div>";
                }
            
        }
        ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">CARDHOLDER NAME</label>
                <input type="text" name="cardholderName" class="<?= $nameClass ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E.g jane Appleseed">
                <small id="emailHelp" class="text-danger "><?php echo $cardholderNameErrMessage ?></small>
            </div>
            <div class="form-group">
                <label>CARDNUMBER</label>
                <input type="number" name="cardNumber" class="<?= $cardNumberClass ?>" aria-describedby="emailHelp" placeholder="0000 0000 0000 0000">
                <small class="text-danger"><?= $cardNumberErrMessage ?></small>
            </div>

            <div>
                <div class="form-group">
                    <label>Exp.(MM)</label>
                    <input type="number" name="expMonth" class="<?= $expMonthClass ?>" aria-describedby="emailHelp" placeholder="0000 0000 0000 0000">
                    <small class="text-danger"><?= $expMonthErrMessage ?></small>
                </div>
                <div class="form-group">
                    <label>(YY)</label>
                    <input type="number" name="expYear" class="<?= $expYearClass ?>" aria-describedby="emailHelp" placeholder="0000 0000 0000 0000">
                    <small class="text-danger"><?= $expYearErrMessage ?></small>
                </div>
                <div class="form-group">
                    <label>CVC</label>
                    <input type="number" name="cvc" class="<?= $cvcClass ?>" aria-describedby="emailHelp" placeholder="0000 0000 0000 0000">
                    <small class="text-danger"><?= $cvcErrMessage ?></small>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
</body>

</html>