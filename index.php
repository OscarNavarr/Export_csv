<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download csv file</title>
</head>
<body>

    <style>
        table {
            border-collapse: collapse;
            width: 50%;    
        }

        table, th, td {
            border: 1px solid black;
            text-align: center;
        }

        button{
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>

    <h1>Download csv file</h1>

    <?php
        include_once './components/table.php';
    ?>
    

    <form action="./functions/download_csv.php">
        <button type="submit" name="export" value="CSV Export">Export</button>
    </form>
</body>
</html>

 