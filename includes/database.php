<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carddetails";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO cards (  name, cardNumber, expMonth, expYear, cvc) VALUES ('$cardholderName', '$cardNumber', '$expMonth', '$expYear', '$cvc')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>