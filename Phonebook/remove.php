<html lang="sr">
<head><meta charset="UTF-8">
     <title>Phonebook</title>
     <link rel="stylesheet" type="text/css" href="css/style.css">
	 </head>
<body>
    <div id="wrap">
	    <div id="search">
		   <img src="img/remove.png">
		   <a href="index.php"><img src="img/search.png" height="50px" title="Search"></a>
		   <a href="insert.php"><img src="img/add.jpg" height="50px" title="Add new contact"></a>
		   <?php
		    require 'inc/connect.php';
			$query = "SELECT * FROM contacts";
			$result = mysqli_query($conn, $query);
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					?>
				   <div id="result">
				     <a href="inc/removeContact.php?id=<?php echo $row['id'] ?>"><img src="img/remove.png"/></a>
					 <p><b>Name:</b><?php echo $row['fname'] . " " . $row['lname'];  ?></p>
				  <p><b>Tel:</b><?php echo $row['tel'];  ?></p>
				   </div>
				  <?php
				}
			}else{
				echo "No contacts.";
			}
		   ?>
		</div>
	</div>
</body>
</html>