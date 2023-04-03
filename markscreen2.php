<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid black;
        }
        
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <?php
	session_start();
	$studentID=$_SESSION["ID2Print"];
        // Connect to the database
        $username = 'root';
        $password = '';
        $database = 'csl_test_data';
        $servername='localhost:4306';
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        // Retrieve the student's marks
        $sql = "SELECT * FROM marks WHERE Student_ID =".$studentID;
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
        echo "<tr>";
        foreach ($column_names as $column_name) {
            $sql = "SELECT COUNT(*) FROM marks WHERE $column_name IS NOT NULL AND Student_ID =".$studentID;
            $count_result = mysqli_query($conn, $sql);
            $count_row = mysqli_fetch_row($count_result);
            if ($count_row[0] > 0) {
                echo "<th>" . $column_name . "</th>";
            }
        }
        echo "</tr>";
        
        // Loop through the rows of the student's marks and add them to the table
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($column_names as $column_name) {
                if (!is_null($row[$column_name])) {
                    echo "<td>" . $row[$column_name] . "</td>";
                }
            }
            echo "</tr>";
        }
        
        // Close the table
        echo "</table>";
    ?>
</body>
</html>
