<?php

// Include the database connection file
require_once "../connection/connection.php";

// Check if the database connection was successful
if (!$db) {
    
    echo "Connection failed";
    exit;

} else {
    
    try {
        
        // Create the 'user' table if it doesn't already exist
        $sql = "CREATE TABLE IF NOT EXISTS `user` (
            `id` INT NOT NULL AUTO_INCREMENT , 
            `name` VARCHAR(255) NOT NULL , 
            `last_name` VARCHAR(255) NOT NULL , 
            `phone` INT NOT NULL , 
            PRIMARY KEY (`id`)
        ) ENGINE = InnoDB DEFAULT CHARSET=utf8;";

        // Execute the SQL query to create the table
        $db->exec($sql);

        // Display a success message if the table was created
        echo "Table 'user' created successfully";

        // Close the database connection
        $db = null;

    } catch (PDOException $e) {
        // Handle any PDO exceptions and display an error message if necessary
        echo $e->getMessage();
    }

}
