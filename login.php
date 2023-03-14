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
        Please enter your ID And Password<br>
            
           <Label for "ID"> ID:</label>
           <input type="number" id="ID" name="ID"><br>
           <div>
           </div>
           <br>
           <Label for "Password">Password:</label>
           <input type="text" id="Password" name="Password"><br>
           <button type="submit" button onclick="myFunction()" name="submit">Submit!</button>
           <a href="">
  </button>
</a>

          </form>
          <?php
          
          
          
          $username=NULL;
          $paswd=NULL;


  
        if(isset($_POST['submit'])) {
        
            
        $username =$_POST['ID'];            
        $paswd=$_POST['Password'];
                

             


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

$sql = "SELECT StudentID, Name FROM studentinfo";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    
      if($username==$row["StudentID"] and $paswd==$row["Name"]){
                    $flag=true;
                    break;
                }
  }
} else {
  echo "0 results";
}

mysqli_close($mysqli);


                
                   if ($flag){
               // header("Location:http://localhost/PhpProject1/staff_screen2.php");
                         echo"VALID";
            }
            else{
                echo "<p style='color:red;'>";
                echo"INVALID ID PLEASE TRY AGAIN";
               
            }
            
                
               

          
       
                
            


           // header("Location: http://localhost/PhpProject1/index.php");
            exit();
        }
        ?>
    </body>
   </html>
