<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
</body>

    <!--SHOW CODE DEMONSTRATING UPDATING OF RECORD FROM YOUR DATABASE-->
    <?php
    $query = "UPDATE clients
             SET Address_location = ?, Phone_number = ?
             WHERE ClientID =8
            ";

    $stmt = $pdo->prepare($query);

    $executeQuery = $stmt->execute(
        ["Cavite 15", "847-098-5726"]
    );

    if ($executeQuery){
        echo "Update successful!";
    }
    else {
        echo "Query failed";
    }

    ?>
</body? 
</html>
