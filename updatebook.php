<html>
<head>
	<title> Search data and update it </title>
	<link rel="stylesheet" type="text/css" href="sty.css">
</head>
<body>
	<center>
	<div class="header">
		<h2>Search data and update it </h2>
	</div>
		<form action = "" method ="POST">

			<input type="text" name="id" placeholder="Enter book's id for search "/><br/>
			<input type="submit" name="search" value="Search" />
			<style>
    			input{
      				width: 40%;
      				height: 6%;
      				border: 1px solid black;
     				border-radius: 05px;
      				padding: 8px 15px 8px 15px;
      				margin: 10px 0px 15px 0px;
      				box-shadow: 1px 1px 2px 1px grey;
    			}
   			</style>

		</form>
		<?php
			$connection =mysqli_connect("localhost","root","") or die("couldn;t connect with server");
			$db=mysqli_select_db($connection,"regestration") or die ("couldn't connect with database");

			if(isset($_POST['search']))
			{
				$id =$_POST['id'];

				$query= "SELECT * FROM books WHERE id='$id' ";
				$query_run =mysqli_query($connection,$query);

				while($row = mysqli_fetch_array($query_run))
				{

					?>
						<form action="" method="POST">
						<input type="hidden" name="id" value="<?php echo $row['id'] ?>"/> <br>
						<input type="text" name="bookname" value="<?php echo $row['bookname'] ?>"/> <br>
						<input type="text" name="author" value="<?php echo $row['author'] ?>"/> <br>
						<input type="text" name="price" value="<?php echo $row['price'] ?>"/> <br>
			
						<input type="submit" name="update" value="update">;
						</form>

					<?php
				}
			}
		?>
		</center>
</body>
</html>
<?php
	$connection =mysqli_connect("localhost","root","") or die("couldn't connect with server");
	$db=mysqli_select_db($connection,"regestration") or die ("couldn't connect with database");

	if(isset($_POST['update']))
	{
		$bookname=$_POST['bookname'];
		$author=$_POST['author'];
		$price=$_POST['price'];

		$query= "UPDATE `books` SET bookname='$_POST[bookname]' , author='$_POST[author]' , price='$_POST[price]' WHERE id= '$_POST[id]' ";
		$query_run=mysqli_query($connection,$query);

		function function_alert($message) { 
           echo "<script>alert('$message');</script>"; 
        } 

		if($query_run)
		{
			
	    function_alert("Succesfully Updated"); 
			 
		}

		else{
		
			 function_alert("faile to Updated");
			 
		}
	
	}
	
?>