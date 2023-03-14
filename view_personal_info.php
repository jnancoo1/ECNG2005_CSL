<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        
        
     
        body{
            font-family: 'Arial', Sans-Serif;
         background-color:#F0F8FF;
            
            
            
        }
        h1{
            text-align: center;
            
        }
        h2{
            text-align:center;
        }
        h3{
            text-align: left;
            
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


th, td ,tr{
  border: 1px solid black;
  padding: 8px;
}
    </style>
    <body>
        <h1>Carapachaima East Staff</h1>
        <br>
        <h2>Personal Info Viewer</h2>
        <?php
        session_start();
        
        echo $_SESSION["ID"];
        if($_SESSION["ID"]!=NULL){   
            $user = 'root';
$password = '';
  
$database = 'csl_test_data';
  
$servername='localhost:4306';
$mysqli = new mysqli($servername, $user,
                $password, $database);

  
// Checking for connections
if (!$mysqli){
    echo "Connection Unsuccessful!!!";
}// put your code here

$toprint1=[];

$sql="SELECT StudentID,Name,Age,DateofBirth,Phone,Address,City FROM studentinfo where StudentID='".$_SESSION["ID"]."'";
    $result = mysqli_query($mysqli, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
      array_push($toprint1,$row["Name"]);
      array_push($toprint1,$row["Age"]);
      array_push($toprint1,$row["DateofBirth"]);
      array_push($toprint1,$row["Phone"]);
      array_push($toprint1,$row["Address"]);
      array_push($toprint1,$row["City"]);
  }
     
  }
echo"<div class='table wrapper'>
    <h3>Personal Info</h3>
<table>
<tr>
<th>Name</th>
<th>Age</th>
<th>Date of Birth</th>
<th>Phone</th>
<th>Address</th>
<th>City</th>
</tr> 

<tr>";
  for($i=0;$i<6;$i++){
      echo"<th>".$toprint1[$i]."</th>";
      
  }
  echo"</tr>
  </table>
  <table>
  <h3>Parents Info</h3>
  <tr>
<th>Mother's Name</th>
<th>Mother's Phone Number</th>
<th>Mother's Email</th>
<th>Father's Name</th>
<th>Father's Phone Number</th>
<th>Father's Email</th>
</tr> 
</table>
     ";
echo"  

<br>
<table><h3> Medical Info</h3>
<tr>
<th>Blood Type</th>
<th>Conditions</th>
<th>Alergies</th>
<th>Vaccination Status</th>
</tr>

</table>";
  echo"
      
<table><h3> Box Lunch Status</h3>
<tr>
<th>IS the student Taking Box Lunch</th>
</tr>

</table>";

echo"
    <table><h3>Guardian Info</h3>
    <tr><th>Guardian Name</th>
    <th>Guardian Contact</th></tr>
    </table>


    </body>
        </html>";
  
  
  
        }
        
        
        
                
