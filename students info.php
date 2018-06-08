<!DOCTYPE html>
<html>
<head>
	<title>JUNIOR SCHOOL</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <style type="text/css">
		body{
			background-image: url(images/4.jpeg);
			background-repeat: no-repeat;
			background-size: 100%;
			color: #1a0000;
			font-family: sans-serif;
			font-size: 6px;	
		}
		h1{
			font-family: Ubuntu light;
			text-align: center;
		}
		h2{
			text-align: center;
		}
    h3{
      font-size: 10px;
    }
		a{
			background-color: black;
			float: right;
		}
    .link2{
      padding-bottom: 20px;
    }
    h4{
      font-size: 16px;
      font-family: URW Chancery L;
    }
	</style>
	
  </head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container fluid">
        <div class="navbar-header">
        <h4>Kianda</h4>
        </div>
      <div class="link1">
        <a href="index.php">Kianda</a>
      </div><br><br>
      <div class="link2">
        <a href="contact us.php">Contact us</a>
      </div>
    </div>
   
  </nav>
  
  <h1>KIANDA SCHOOL</h1>
  <h2><marquee direction="left-right">Purple is our pledge and Scarlet is our DNA</marquee></h2>
	<form action="sch.php" method="POST">
	<div id="labels">
  <span class="glyphicon glyphicon-user"></span>
  <span class="sr-only"></span>
	<label>Student Name</label>
   	 <br>
 <input type="text" name="firstname" placeholder="Enter student name here" id="sname" required="">
      <br>	
      <label>Student ID</label>
   	 <br>
       <input type="text" name="id" placeholder="Enter ID number" id="sid" required="">
      <br>
      <label>Class</label>
   	 <br>
       <input type="text" name="clss" placeholder="Enter class" id="classde" required="">
      <br>
      
      <label>Math</label>
   	 <br>	
       <input type="number" name="mat" placeholder="Enter score here" required="">
      <br>
      <label>French</label>
   	 <br>	
       <input type="number" name="fren" placeholder="Enter score here" required="">
      <br>
      <label>Science</label>
   	 <br>	
       <input type="number" name="sci" placeholder="Enter score here" required="">
      <br>
      <label>Swahili</label>
   	 <br>	
       <input type="number" name="swa" placeholder="Enter score here" required="">
      <br>
      <label>Physics</label>
   	 <br>	
       <input type="number" name="phyc" placeholder="Enter score here" required="">
      <br>
      <label>History</label>
   	 <br>	
       <input type="number" name="histo" placeholder="Enter score here" required="">
      <br>
      <label>Geography</label>
   	 <br>	
       <input type="number" name="geo" placeholder="Enter score here" required="">
      <br>	
      <input type="submit" name="submit" value="SUBMIT">     
   	  <input type="reset" name="reset" value="RESET">     
   </form>
      </div>
       <footer style="background-color: gray; padding: 50px; font-size: 23px; ">

    Copyright &copy;Kanda School
    <br> +254708634484
    <br> &reg;May Class
  </footer>
</body>
</html