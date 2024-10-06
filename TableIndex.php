<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px; 
        }
    </style>
</head>
<body>

    <h1>List of all the clients with all the jobs at housekeeping services.</h1>
    <?php
        $stmt = $pdo->prepare(
            "SELECT Clients.First_name AS First_Name,
                    Clients.Last_name AS Last_Name,
                    Jobs.Job_state AS Jobs,
                    Jobs.Service_type AS Services
             FROM Clients
             JOIN Jobs ON Clients.ClientID = Jobs.ClientID;"
        );

        $executeQuery = $stmt->execute();

        if ($executeQuery) {
            $clients = $stmt->fetchAll();
        } else {
            echo "Query Failed!";
            exit;
        }
    ?>

    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Job State</th>
            <th>Service Type</th>
        </tr>

        <?php if (!empty($clients)): ?>
            <?php foreach ($clients as $row): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['First_Name']); ?></td>
                <td><?php echo htmlspecialchars($row['Last_Name']); ?></td>
                <td><?php echo htmlspecialchars($row['Jobs']); ?></td>
                <td><?php echo htmlspecialchars($row['Services']); ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No Data Found</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
