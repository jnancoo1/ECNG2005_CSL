<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php

session_start();
        
        echo $_SESSION["ID2Print"];
        if($_SESSION["ID2Print"]!=NULL){
            
            $user = 'root';
$password = '';
  
$database = 'csl_test_data';
  
$servername='localhost:4306';
$mysqli = new mysqli($servername, $user,
                $password, $database);

  
// Checking for connections
if (!$mysqli){
    echo "Connection Unsuccessful!!!";
}
   
$sql="SELECT Student_ID,NAME,Age,Date_of_Birth,Phone,Address,City FROM studentinfo where Student_ID='".$_SESSION["ID2Print"]."'";
$result=mysqli_query($mysqli,$sql);
$toprint=[];
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
      
      array_push($toprint,$row["Student_ID"]);
      array_push($toprint,$row["NAME"]);
      array_push($toprint,$row["Date_of_Birth"]);
      array_push($toprint,$row["Phone"]);
      array_push($toprint,$row["Address"]);
      array_push($toprint,$row["City"]);

      
      }
  }
  $max=count($toprint);
  



            
echo $max;
echo"
<html>
    <style>
        
        body{
            font-family: 'Arial', Sans-Serif;
         background-color:#F0F8FF;
            
            
            
        }
        h1{
            text-align: center
            
        }
        
        
main{
                background-color: white;
 border: 1px solid black;
  padding: 10px;
   display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh; /* adjust this to fit your needs */
}
 
    table {
  border-collapse: collapse;
  border: 1px solid black;
}


th, td {
  border: 1px solid black;
  padding: 8px;
}

        
        </style>
    </head>
<body>
    <h1> CARAPACHAIMA EAST STAFF</h1>	
	<main>
 <table>
  <tr>
    <th>Column 1</th>
    <th>Column 2</th>
    <th>Column 3</th>
    <th>Column 4</th>
    <th>Column 5</th>
    <th>Column 6</th>
  </tr>
  <tr>
   ";
for($i=0;$i<$var=count($toprint);$i++){
    echo"<th>$toprint[$i]</th>";
    
    
}
echo"
  </tr>
    </table>

	</main>
</body>
    <body>
       
    </body>
</html>";
        }
        
                
