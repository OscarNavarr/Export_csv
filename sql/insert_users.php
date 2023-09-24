

<?php

// Include the database connection file
require_once "../connection/connection.php";

// Check if the database connection was successful
if (!$db) {
    
    echo "Connection failed";
    exit;

} else {
    
    try {
        
        // Create five users in the users table
        $sql = "INSERT INTO `user` (`id`, `name`, `last_name`, `phone`) VALUES (NULL, 'Augustus', 'Nash', '930390293'), (NULL, 'Franklin ', 'Levine', '23454354'), (NULL, 'Tracey ', 'Gray', '24323453'), (NULL, 'Kareem', 'Elliott', '9487855'), (NULL, 'Jefferey', 'Bennett', '34342354');";

        // Execute the SQL query to add the five users
        $db->exec($sql);

        // Display a success message if the users was added to the table successfully
        echo "The new users was added to the table successfully";

        // Close the database connection
        $db = null;

    } catch (PDOException $e) {
        // Handle any PDO exceptions and display an error message if necessary
        echo $e->getMessage();
    }

}

?>