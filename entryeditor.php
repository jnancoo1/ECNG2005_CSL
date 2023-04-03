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

    <h1>Carapachaima East Secondary<br>Staff</h1>

    <body>     

        <form method="post">

        Enter The ID of the student whose Mark you

        enter/modify

        <br>

           <Label for "ID"> ID:</label>

           <input type="number" name="ID" id="ID"><br>

           <button type="submit" name="Access" id="Access">Access</button>

       

       <?php
        if (isset($_POST['Access']) or isset($_POST['add']))
        {
            $id=$_POST['ID'];
            
        $user = 'root';
        $password = '';
          
        $database = 'students_marks';
          
        $servername='localhost:4306';
        $mysqli = new mysqli($servername, $user,
                        $password, $database);
       

        $query='SELECT Student_ID FROM mytable';
        $result=mysqli_query($mysqli, $query);
        $ID = []; 
  
        if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    array_push($ID,$row["Student_ID"]);
      
  }
$flag=false;
        for($i=0;$i<sizeof($ID);$i++){

                if($_POST["ID"]==$ID[$i]){

                    $flag=true;
                    break;
                }

        }
if($flag){
           {
               echo"
               <br>

               Please select the Term
               <br>
                <input type=text name='Term' id='Term'>
               <br>
               Please enter the year
               <br>
               <input type=text name='year' id='year'>
               <br>

               <br>
               Enter the mark
               <br>

               <input type='number' name='Mark' id='Mark'><br>

               Enter the subject
               <br>
               <input type='text' name='subject' id='subject'><br>

               <br>
               <button type='submit' name='add' id='add'>Add Entry</button>
               ";
           }
        }


           echo "</html>";


        }
  }
  if (isset($_POST['add']))

               {
      $user = 'root';
        $password = '';
          
        $database = 'students_marks';
          
        $servername='localhost:4306';
        $mysqli = new mysqli($servername, $user,
                        $password, $database);

                $query1 = "UPDATE mytable\n
                SET " .$_POST['subject']." = ".$_POST['Mark']."\n
                WHERE Student_ID= ".$_POST['ID']." AND Term=".$_POST['Term']." AND YEAR='".$_POST['year']."'";
                echo $query1;
                //$action=mysqli_prepare($mysqli,$query1);
                mysqli_query($mysqli, $query1);
                //mysqli_stmt_bind_param($action, "iii",$_POST['Mark'],$id,$_POST['Term']);
 echo $query1;
                //mysqli_stmt_execute($action);

                //mysqli_stmt_close($action);

            
                   echo  $_POST["Mark"];
                   echo "Successfully Added!";

               } 
               /* $sql = "UPDATE mytable\n"

    . "                SET ApMa = 23 \n"

    . "                WHERE Student_ID=837 AND Term=3 AND YEAR=\'2013-2014\';"; */

