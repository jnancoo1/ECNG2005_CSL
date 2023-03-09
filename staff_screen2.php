<!DOCTYPE html>
<html>
<head>
	<title>Sample Webpage</title>
	<style>
            
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
} /* This will center the table on the page */
		}
		header {
			background-color: #333;
			color: #fff;
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
			background-color: #333;
		}
		nav a {
			display: block;
			padding: 0 10px;
			color: #fff;
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
	</style>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Services</a>
					<ul>
						<li><a href="#">Service 1</a></li>
						<li><a href="#">Service 2</a></li>
						<li><a href="#">Service 3</a>
							<ul>
								<li><a href="#">Sub-service 1</a></li>
								<li><a href="#">Sub-service 2</a></li>
								<li><a href="#">Sub-service 3</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<table>
			<tr>
				<td><button type="button">Button 1</button></td>
				<td><button type="button">Button 2</button></td>
				<td><button type="button">Button 3</button></td>
			</tr>
			<tr>
				<td><button type="button">Button 4</button></td>
				<td><button type="button">Button 5</button></td>
				<td><button type="button">Button 6</button></td>
			</tr>
		</table>
	</main>
</body>
</html>
