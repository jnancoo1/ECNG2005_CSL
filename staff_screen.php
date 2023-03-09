<!DOCTYPE html>
<html>
<head>
	<title>Sample Webpage</title>
	<style>
              h1 {text-align: center;}
     body{
         font-family: "Arial", Sans-Serif;
         background-color:#F0F8FF;}
		table {
             body {
			margin: 0;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		table {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 60%;
			width: 60%;
			margin-top: 50px;
		}
}
 /* This will center the table on the page */
		
		header {
			background-color: #1AA7EC;
			color: #1AA7EC;
			padding: 10px;
		}
		nav ul {
			margin: 0;
			padding: 0;
			list-style: none;
			position: relative;
			float: left;
		}
		nav ul li {
			display: inline-block;
			background-color: #1AA7EC;
		}
		nav a {
			display: block;
			padding: 0 10px;
			color: black;
			font-size: 18px;
			line-height: 60px;
			text-decoration: none;
		}
		nav ul ul {
			display: none;
			position: absolute; 
			top: 60px;
		}
		nav ul li:hover > ul {
			display: inherit;
		}
		nav ul ul li {
			width: 200px;
			float: none;
			display: list-item;
			position: relative;
			background-color: #333;
		}
		nav ul ul ul li {
			position: relative;
			top: -60px; 
			left: 200px;
		}
		nav li:hover {
			background-color: #2c3e50;
		}
		nav a:hover {
			color: #fff;
		}
                table{
                    height: 200px;
  position: relative;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

                }
                
                button{
  
                    background-color: #1AA7EC;
                    border-style: solid;
                    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

                     border: black;
                     color:black;
                     padding: 15px 32px;
 text-align: center;
  text-decoration: none;
  display: inline-block;
 font-size: 16px;
width: 400px;
  height: 160px;               }
	</style>
</head>
<body>
    <h1> CARAPACHAIMA EAST STAFF</h1>	
	<main>
            <form method="post"action="staff_screen2.php">
		<table>
			<tr>
				<td><button type="submit"name="button1">VIEW PERSONAL INFO</button></td>
				<td><button type="submit"button name="button2">STUDENT MARKS</button></td>
				<td><button type="submit"button name="button3">VIEW DISCIPLINARY RECORD</button></td>
			</tr>
			<tr>
				<td><button type="submit"button name="button4">MAKE NEW ENTRY</button></td>
				<td><button type="submit"button name="button5">UPDATE RECORD</button></td>
				<td><button type="subbmit"button name="button6">LOG OUT</button></td>
			</tr>
		</table>
                </form>
	</main>
</body>

<?php
if (isset($_POST['button1'])){
    
    echo"Button 1 Pressed";
    
}
if (isset($_POST['button2'])){
    
    echo"Button 2 Pressed";
    
}
if (isset($_POST['button3'])){
    
    echo"Button 3 Pressed";
    
}
if (isset($_POST['button4'])){
    
    echo"Button 4 Pressed";
    
}
if (isset($_POST['button5'])){
    
    echo"Button 5 Pressed";
    
}
if (isset($_POST['button6'])){
    
   header("Location:http://localhost/PhpProject2/login_screen.php");
    
}



?>
</html>
