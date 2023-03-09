<?php
session_start();
        
        echo $_SESSION["ID2Print"];

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
	<main>
 <table>
  <tr>
    <th>Column 1</th>
    <th>Column 2</th>
    <th>Column 3</th>
    <th>Column 4</th>
    <th>Column 5</th>
    <th>Column 6</th>
    <th>Column 7</th>
    <th>Column 8</th>
    <th>Column 9</th>
    <th>Column 10</th>
  </tr>
  <tr>
    <td>Row 1, Column 1</td>
    <td>Row 1, Column 2</td>
    <td>Row 1, Column 3</td>
    <td>Row 1, Column 4</td>
    <td>Row 1, Column 5</td>
    <td>Row 1, Column 6</td>
    <td>Row 1, Column 7</td>
    <td>Row 1, Column 8</td>
    <td>Row 1, Column 9</td>
    <td>Row 1, Column 10</td>
  </tr>
  <tr>
    <td>Row 2, Column 1</td>
    <td>Row 2, Column 2</td>
    <td>Row 2, Column 3</td>
    <td>Row 2, Column 4</td>
    <td>Row 2, Column 5</td>
    <td>Row 2, Column 6</td>
    <td>Row 2, Column 7</td>
    <td>Row 2, Column 8</td>
    <td>Row 2, Column 9</td>
    <td>Row 2, Column 10</td>
  </tr>
</table>

	</main>
</body>
    <body>
       
    </body>
</html>";

        
                
