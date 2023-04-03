<?php
        session_start();
  
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
   
$sql="SELECT ID,Name,Class,DateofBirth,Phone,Address,City FROM studentinfo WHERE ID='".$_SESSION["ID2Print"]."'";
$result=mysqli_query($mysqli,$sql);
$toprint=[];
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
      
      array_push($toprint,$row["ID"]);
      array_push($toprint,$row["Name"]);
      array_push($toprint,$row["Class"]);
      array_push($toprint,$row["DateofBirth"]);
      array_push($toprint,$row["Phone"]);
      array_push($toprint,$row["Address"]);
      array_push($toprint,$row["City"]);

      
      }
  }
  $max=count($toprint);
  $sqlquery2="SELECT Mother,Father,MotherContact,FatherContact,MotherEmail,FatherEmail FROM studentinfo sudentinfo WHERE ID='".$_SESSION["ID2Print"]."'";

  $result=mysqli_query($mysqli, $sqlquery2);
  $toprint2=[];
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        
        array_push($toprint2,$row["Mother"]);
        array_push($toprint2,$row["Father"]);
        array_push($toprint2,$row["MotherContact"]);
        array_push($toprint2,$row["FatherContact"]);
        array_push($toprint2,$row["MotherEmail"]);
        array_push($toprint2,$row["FatherEmail"]);
  
        
        }
  

        $sqlquery3="SELECT Bloodtype,Allergies,Conditions,VaccinationStatus FROM studentinfo WHERE ID='".$_SESSION["ID2Print"]."'";

        $result=mysqli_query($mysqli, $sqlquery3);
        $toprint3=[];
        if (mysqli_num_rows($result) > 0) 
        {
          while($row = mysqli_fetch_assoc($result)) 
          {
              
              array_push($toprint3,$row["Bloodtype"]);
              array_push($toprint3,$row["Conditions"]);
              array_push($toprint3,$row["VaccinationStatus"]);    
              array_push($toprint3,$row["Allergies"]);    

            }
        }
  }
        $sqlquery4="SELECT BoxLunchStatus FROM studentinfo WHERE ID='".$_SESSION["ID2Print"]."'";

        $result=mysqli_query($mysqli, $sqlquery4);
        $toprint4=[];
        if (mysqli_num_rows($result) > 0) 
        {
          while($row = mysqli_fetch_assoc($result)) 
          {
              array_push($toprint4,$row["BoxLunchStatus"]);   
          }
        }
      
//Try Checking for NULL
        $sqlquery5="SELECT Guardian_Name,Guardian_contact,Guardian_email FROM studentinfo WHERE ID='".$_SESSION["ID2Print"]."'";

        $result=mysqli_query($mysqli, $sqlquery5);
        $toprint5=[];
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
              
              array_push($toprint5,$row["Guardian_Name"]);
              array_push($toprint5,$row["Guardian_contact"]);
              array_push($toprint5,$row["Guardian_email"]);
        }}

            
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
        
        h3{text-align: center;}
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
    <h2>Student Record Viewer</h2>
	<main>
<div class='table-wrapper'>
 <table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Date of Birth</th>
    <th>Phone</th>
    <th>Address</th>
    <th>City</th>
    <th>Gender</th>
    <th>Class</th>
  </tr> 
  <tr> ";
for($i=0;$i<$var=7;$i++){
    echo"<th>$toprint[$i]</th>";
    
    
}
echo"
  </tr>
    </table>

<br>
<br>

  <table>
  <tr>
  <h3>Parent's Info<h3>
  </tr>
  <tr>
      <th>Mother</th>
      <th>Father</th>
      <th>Mother Contact</th>
      <th>Father Contact</th>
      <th>Mother Email</th>
      <th>Father Email</th>
  </tr>
  <tr>";
  
for($i=0;$i<$var=6;$i++){

    echo"<th>$toprint2[$i]</th>";   

}
echo"
</tr>
</table>



<table>
<br>
<br>
<tr>
<h3>Medical INFO<h3>
</tr>
<tr>
  <th>Blood type</th>
  <th>Conditions</th>
  <th>Vaccination Status</th>
  <th>Allergies</th>
</tr>
<tr>";

for($i=0;$i<$var=4;$i++)
{
      

  echo"<th>$toprint3[$i]</th>"; 
  
}
echo"
</tr>
</table>



<table>
<br>
<br>
<tr>
<h3>Box Lunch Status<h3>
</tr>
<tr>
  <th>Box Lunch Status</th>
</tr>
<tr>";

for($i=0;$i<1;$i++)
{   

  echo"<th>$toprint4[$i]</th>";   
   
}
echo"
</tr>
</table>


<table>
  <br>
  <br>
  <h3>Guardian Name</h3>
  <tr><th>Guardian Name</h>  
<th>Guardian Contact</th>  
<th>Guardian Email</th>  

</tr>";

for($i=0;$i<$var=3;$i++)
{
       
  echo"<th>$toprint5[$i]</th>";  


}
echo"
	</main>
</body>
    <body>
       
    </body>
</html>";

}