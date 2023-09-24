<?php

    // Include the database connection file
    require_once "connection/connection.php";

    // Check if the database connection was successful
    if (!$db) {
        
        echo "Connection failed";
        exit;

    } else {
        
        try {
            
            // Create five users in the users table
            $sql = "SELECT * FROM `user`";

            // Prepare the SQL query to add the five users
            $statement = $db->prepare($sql);
            
            // Execute the SQL query to add the five users
            $statement->execute();

            // Save the result in a variable named $users
            $users = $statement->fetchAll(PDO::FETCH_ASSOC);
           
            // Close the database connection
            $db = null;

        } catch (PDOException $e) {
            // Handle any PDO exceptions and display an error message if necessary
            echo $e->getMessage();
        }

    }
?>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Last name</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user["name"] ?></td>                <?php /* Show the user name*/ ?>
                <td><?= $user["last_name"] ?></td>           <?php /* Show the user last name*/ ?>
                <td><?= $user["phone"] ?></td>               <?php /* Show the user phone*/ ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>