<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
</body>

    <!--SHOW CODE DEMONSTRATING DELETION OF RECORD TO YOUR DATABASE-->
    <?php
    $query = "DELETE FROM jobs
                WHERE JobID = 16
            ";

    $stmt = $pdo->prepare($query);

    $executeQuery = $stmt->execute();

    if ($executeQuery){
        echo "Deletion successful!";
    }
    else {
        echo "Query failed";
    }

    ?>
</body? 
</html>
