<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->

 <head>
        <meta charset="UTF-8">
        <title>Login_Page</title>
    
     <style>
     h1 {text-align: center;}
     body{
         font-family: "Arial", Sans-Serif;
         background-color:#F0F8FF;}
     form{
    width: 400px;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.3);

    text-align: center;
    margin: auto;
    position: absolute;
     top: 50%;
     -ms-transform: translateY(50%);
     transform: translateY(50%);
     right: 50%;
     -ms-transform: translateX(50%);
     transform: translateX(50%);
     }
     input {
  display: block; /* make the input a block element */
  width: 100%; /* set the input width to 100% of the parent container */
  padding: 5px; /* add some padding to the input */
  box-sizing: border-box; /* include padding and border in the input's width */
}

     label {
  display: block; /* make the label a block element */
  margin-bottom: 5px; /* add some spacing between the label and input */
}

     </style>
     
    </head>
    <h1>Carapachaima East Secondary<br>Login Screen</h1>
    <body>      
        <form method ="post">
        <br>Please enter The ID or Name of the student whose Attendance Records you would like to view Password<br>
        <br>If the name is entered the ID will be output <br>
        <br>The record can only be accessed by the ID<br>
           <Label for "ID"> ID:</label>
           <input type="number" id="ID" name="ID"><br>
           <div>
           </div>
           <br>
           <Label for "Password">Name</label>
           <input type="text" id="Name" name="Name"><br>
           <button type="submit" button onclick="myFunction()" name="submit">Submit!</button>
           <a href="">
  </button>
</a>

          </form>
          <?php
          session_start();

           $_SESSION["Checker"]=NULL;
           $_SESSION["ID"]=NULL;
          
          session_start();
          
          
          $ID=NULL;
          $Name=NULL;
          $IDs=[];


  
        if(isset($_POST['submit'])) {
        
            
        $ID =$_POST['ID'];            
        $Name=$_POST['Name'];
                

             


          $flag=false;
            
                     

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

if($Name!=NULL and $ID==NULL){
$sql = "SELECT StudentID, Name FROM studentinfo WHERE Name='".$Name."'";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    array_push($IDs,$row["StudentID"]);
        }
    echo"The ID for this student is".$IDs[0];    
} else {
  echo "0 results";
}
}
else if ($ID!=NULL){
    $ids2=[];
    $sql = "SELECT StudentID, Name FROM studentinfo";
    $result = mysqli_query($mysqli, $sql);
     if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
   
    if($ID==$row["StudentID"]){
        $flag=true;
        break;
        
    }
    
    
    }
    if($flag){
        
    $_SESSION["ID"]=$ID;
    header("Location:http://localhost/PhpProject5/index.php");
    }
    else{echo"INVALID";}
}
    
}
else{
    echo"No input";
}

mysqli_close($mysqli);
           // header("Location: http://localhost/PhpProject1/index.php");
            exit();
        }
        ?>
    </body>
   </html>
