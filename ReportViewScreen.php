<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
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
        <?php
        session_start();
        $_SESSION["ID"]=50;
        if($_SESSION["ID"]!=NULL){
            $form=NULL;
            $Name=NULL;
            $Year=NULL;
            echo"<h2>Student Name";
            echo $Name;
            echo"</h2><br>";
            echo"<h3>Form";
            echo $form;
            echo"</h3><t><html>";
            echo"<h3>Year";
            echo $Year;
            echo"</h3><br>";
            
            echo"<div class='table wrapper'>
                
<table><tr><th>Criteria</th><th>T1</th><th>T2</th><th>T3</th></tr>


<tr>
        <tr><th>Average</th><th></th><th></th><th></th></tr>
          <tr><th>Total Sessions</th></th><th></th><th><th></th><th></th></tr>
<tr><th>Sessions Absent</th><th></th><th></th><th></th><th></th></tr>
<tr><th>Sessions Late</th><th></th><th></th><th></th>
        
        </table>
        ";
            
            echo"<table><tr><th>Subject</th><th>T1</th><th>T2</th><th>T3</th>"
            . "<th>T1 CourseWork </th><th>T2 Coursework</th><th>T3 Coursework</th></th></tr>
                

";
            $NoOfsubs=6;
            for ($i=0;$i<$NoOfsubs;$i++){
                echo"<tr><th></th><th></th><th></th><th></th>"
            . "<th> </th><th></th><th></th></th></tr>"
                        
                        ;
               
            }
            
            echo"<tr><Subjects Passed></tr></table>";

              echo" 
                
            
    </body>
</html>


";
        }
