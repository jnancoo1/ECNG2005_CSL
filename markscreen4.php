<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <style>
        body {
            font-family: 'Arial', Sans-Serif;
            background-color: #F0F8FF;
        }

        h1 {
            text-align: center;
        }

        h2 {
            text-align: center;
        }

        table,
        th {
            border-collapse: collapse;
            border: 1px solid black;
            column-width: 10000px;
        }
    </style>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Carapachaima East Secondary</h3>
        <div class='table-wrapper'>
           <?php
    
    session_start();
    $studentID = 837;
    // Connect to the database
    $username = 'root';
    $password = '';
    $database = 'csl_test_data';
    $servername='localhost:4306';
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Retrieve the student's marks
    $sql = "SELECT * FROM marks WHERE Student_ID =" . $studentID . " AND Year='2017-2018'";
    $result = mysqli_query($conn, $sql);
    
    // Get the column names from the marks table
    $sql = "SHOW COLUMNS FROM marks";
    $columns = mysqli_query($conn, $sql);
    $column_names = array();
    while ($row = mysqli_fetch_assoc($columns)) {
        $column_names[] = $row['Field'];
    }
    
    // Create a table to display the results
    echo "<table>";
    
    // Add the header row to the table
    //echo "<tr>";
    foreach ($column_names as $column_name) {
        //echo "<th>" . $column_name . "</th>";
    }
    //echo "</tr>";
    

    // Loop through the rows of the student's marks and add them to the table
    foreach ($column_names as $column_name) {
        echo "<tr>";
        $row_has_data = false;
   
        mysqli_data_seek($result, 0); // reset pointer to beginning of result set
        while ($row = mysqli_fetch_assoc($result)) {
            if (!empty(trim($row[$column_name]))) {
                $row_has_data = true;
		     echo "<td>" . $column_name . "</td>";
                echo "<td>" . $row[$column_name] . "</td>";
            }
        }
        echo "</tr>";
        if (!$row_has_data) {
            // skip the row if all cells are empty
            continue;
        }
    }

    // Close the table
    echo "</table>";

?>
</div>
</body>
</html>
