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
     </style>
     
    </head>
    <h1>Login Screen</h1>
    <body>      
        <form method ="post">
        Please enter your Id And Password<br>
            
           <Label for "ID">Student ID:</label>
           <input type="number" id="ID" name="ID"><br>
           <br>
           <Label for "Password">Password:</label>
           <input type="text" id="Password" name="Password"><br>
           <button type="submit" button onclick="myFunction()" name="submit">Submit!</button>
           <a href="">
  </button>
</a>

          </form>
          <?php
        if(isset($_POST['submit'])) {
            $username =$_POST['ID'];            
            $paswd=$_POST['Password'];
            echo $username;
            echo$paswd;
            $CSVfile=fopen("C:\Users\jonat\OneDrive\Desktop\login_data.csv","r");
            while(!feof($CSVfile)){
                $data[]=fgetcsv($CSVfile,100);
                

             


            }
            $flag=false;
            for($i=0;$i<10;$i++){
                echo $data[$i][0];
                echo $data[$i][1];
                if($username==$data[$i][0] and $paswd==$data[$i][1]){
                    $flag=true;
                    break;
                }
                
                
               

            }
            if ($flag){
                header("Location:http://localhost/PhpProject1/index.php");

            }
            else{

                echo"invalid id";
            }
            
                
            


           // header("Location: http://localhost/PhpProject1/index.php");
            exit();


        }
        ?>
    </body>
   </html>
