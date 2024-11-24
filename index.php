       
       <?php 
         include "includes/header.php";
        include "includes/formHandler.php";
       ?>

        <form action="" method="post">
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