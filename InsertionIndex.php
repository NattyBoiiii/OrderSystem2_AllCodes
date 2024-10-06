<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
</body>

    <!--SHOW CODE DEMONSTRATING INSERTION OF RECORD TO YOUR DATABASE-->
    <?php
    $query = "INSERT INTO jobs (JobId, ClientID, AttendantId, Date_assigned, Job_state, 
    Service_type) VALUES (?,?,?,?,?,?)";

    $stmt = $pdo->prepare($query);

    $executeQuery = $stmt->execute(
        [16, 3, 7, '2024-10-15', 'On Going', 'Sanitazation services']
    );

    if ($executeQuery) {
        echo "Query successful!";
    }
    else {
        echo "Query failed";
    }
    ?>
</body? 
</html>
