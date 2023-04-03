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
    <body>
        <h1>Carapachaima East Secondary</h1>
        <h2> Attendance Hub</h2>
        <head>
        <meta charset="UTF-8">
            <style>
        body{
            font-family: 'Arial', Sans-Serif;
         background-color:#F0F8FF;     
        }
        table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 1em;
  border: 1px solid black;
}

th {
  background-color: #f2f2f2;
  color: #333;
  font-weight: bold;
  padding: 10px;
  text-align: left;
  border: 1px solid black;
}

td {
  border: 1px solid black;
  padding: 10px;
  text-align: left;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
  border: 1px solid black;
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
        </style>
             
        <?php
        echo"i" ;
       session_start();
       $_SESSION['Class']=NULL;
       $_SESSION['Date']=NULL;
       $studentname=array("f","g");
        $NoofStudents=40;
                  echo"<main>
              <form method='post'>
              <table>
              <tr>
              <th>Name</th>
              <th>Present</th>
              <th>Absent</th>
              <th>Late</th>
              </tr>";
              
      for($i=0;$i<=1;$i++){
          $Name=$studentname[$i]."present";
          echo $Name;
          echo"<tr>
                    <th>Student Name</th>
                      <input type='hidden' value=FALSE name='$Name'>
                    <th><input type='checkbox' id=$Name name=$Name value=TRUE> </th>
                    <th><input type='checkbox' id=";echo $studentname[$i]."'absent' name='present' value=x> </th>
                    <th><input type='checkbox' id=";echo $studentname[$i]."'late' name='present'> </th>
                    </tr>";
      }
      echo"</table>"
      
      ;
        // put your code here
       echo"
                      <button type='submit'name='submit''>Submit!</button>
           <a href=''>

    </body>
</html>";
if(isset($_POST['submit'])){
echo $_POST['fpresent'];}
    
    
    
    
