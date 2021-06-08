<?php

                 $connection= mysqli_connect("localhost","root","","regestration") or die("couldnt connect with server"); 
             

                if(isset($_POST['add']))
                {
                   extract($_POST);
                    $bookname =$_POST['bookname'];
                    $price =$_POST['price'];
                    $author =$_POST['author'];

                    $query_run =  mysqli_query($connection,"INSERT INTO  books (bookname,price,author) VALUES ('$bookname','$price' ,'$author') ");

                    if($query_run)
                    {
                        echo '<script> alert(" Data inserted")</script>';

                    }else
                    {
                        echo '<script> alert(" Data Not inserted")</script>';

                    }

                }
?>


<html>
<head>
<title> Add book </title>
<link rel="stylesheet" type="text/css" href="sty.css">
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
</head>
   <body>
   <div class="header">
		<h2>Add Book</h2>
	</div>
  
    <form method="post" action="">
    <div class="input-group">
        <input type="text" name="bookname" placeholder="Enter the book name" required /><br/>

  	</div>
      <div class="input-group">
        <input type="text" name="price" placeholder="Enter the book price" required /><br/>
  	</div>
      <div class="input-group">
        <input type="text" name="author" placeholder="Enter the author" required /><br/>
  	</div>
      <div class="input-group" style="color: black;">
        <input type="submit" name="add" value="add" />    
  	</div>
        
    
    </form>
 </body>
 </html>