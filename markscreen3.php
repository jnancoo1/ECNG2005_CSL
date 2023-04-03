<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->

 <head>
        <meta charset="UTF-8">
        <title>Access Student Info</title>
    
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

    text-align: left;
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
    <h1>Carapachaima East Secondary<br>Staff</h1>
    <body>      
        <form method ="post">
        Enter The ID or The name of the student's whose Marks you would like to access <br>
        <br>
        If You Enter A student's name their ID will be displayed<br>
        <br>
        To Access Their Record Then Enter the ID number Provided
        <br>
        <br>
            
           <Label for "ID"> ID:</label>
           <input type="number" id="ID" name="ID"><br>
           <div>
           </div>
           <br>
           <Label for "Password">Student Name:</label>
           <input type="text" id="Name" name="Name"><br>
           <button type="submit" button onclick="myFunction()" name="submit">Submit!</button>
           <a href="">
  </button>
</a>

          </form>
          <?php
          
          session_start();
          
          


            $ids_from_database=[];
            $names_from_database=[];


  
        if(isset($_POST['submit'])) {
            $StudentID =$_POST['ID'];            
            $name=$_POST['Name'];
             ;
            //echo $username;
            //echo$paswd;
            //$CSVfile=fopen("C:\Users\jonat\OneDrive\Desktop\login_data.csv","r");
            //while(!feof($CSVfile)){
              //  $data[]=fgetcsv($CSVfile,100);
                
           
             


            //}
            $flag=false;
            $flag2=false;
                     

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
    $sql="SELECT Student_ID,Year FROM marks";
$result = mysqli_query($mysqli,$sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
      
      array_push($ids_from_database,$row["Student_ID"]);
      array_push($names_from_database,$row["Year"]);
    
      
      }
  }
  $max=count($ids_from_database);
  
  for($i=0;$i<$max;$i++){
  if($name==$names_from_database[$i]){
      $flag=true;
      break;
  }
  
      
  }
  if ($flag){
      echo "The Student's ID is ".$ids_from_database[$i];
       }
  
  
  
mysqli_close($mysqli);
 

        }
         $max=count($ids_from_database);

        for($i=0;$i<$max;$i++){
            
            if ($StudentID!=NULL and $StudentID==$ids_from_database[$i]){
                $_SESSION["ID2Print"]=$ids_from_database[$i];
                ob_start();
                header("Location:http://3.144.93.168/homepage/markscreen2.php");
                exit();
                
            }
        }
        if($i==$max-1){
            
            echo"try again";
        }
        
        ?>
    </body>
   </html>