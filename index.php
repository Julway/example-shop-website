<html>
	<head>
		<title>My Shop</title>
		<style>
			body{
				background:cyan;
				text-align: center;
				color:darkblue;
			}
			h1{
				text-transform: uppercase;
				color:grey;
			}
			li{
				list-style-type:none;
				padding:30px;
				margin:15px;
				border:3px solid white;
				
			}
		</style>
	</head>
	
	<body>
		<h1>Welcome to my shop</h1>
		<ul>
		<?php
			$json =file_get_contents('http://product-service');
			$obj = json_decode($json);
			
			$products = $obj->products;
			foreach($products as $product){
				echo "<li>$product</li>";
			}
		?>
		</ul>
	</body>
</html>