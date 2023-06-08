<!DOCTYPE html>
<html lang="en" >
<head>
<title>Fydon Sitima Life Experience</title>
<meta charset="utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<meta name="author" content="Fydon Sitima">

<style>
body{
background:radial-gradient(lightyellow,cyan,lightgreen,lightyellow);
}

a{
text-decoration:none;
}

h1{
font-family:times new roman;
text-align:center;
color:gold; background-color:green;
border:5px solid gold;
border-radius:0 15px;
padding:20px 0px;
}

button{
padding:20px;
color:blue;
color:#ffffff;
}

p{
padding:10px 15px; text-align:justify;
box-shadow:0 0 10px black; border-radius:10px;
}

p:hover{background-color:grey; color:white;}
</style>

<script type="text/javascript">
function userValidate(){
  var x = document.forms["clientForm"]["fname"].value;
  if(x == null || x == ""){
    alert("First name field cannot be empty, please fill it");
    return false;
    }
    
  var y = document.forms["clientForm"]["lname"].value;
  if(y == null || y == ""){
    alert("Last name field cannot be empty, please fill it");
    return false;
  }
  
  var z = document.forms["clientForm"]["email"].value;
  var atInd = z.indexOf("@");
  var dotInd = z.indexOf(".");
  if(atInd < 1 || dotInd < atInd+2 || dotInd+2 >= z.length){
    alert("Invalid email please fill carefully");
    return false;
  }
  
}
</script>

</head>
<body>
<a href="WebAssignment1.html" id="homeLink" ><b>&larr;</b></a>
<h2 class="back" >Fydon's Life Experience</h2>
<div>
<h3 class="Colour" >Academic Experience</h3>
<p>You can do business with us to achieve maximum profits and sales. We can make you to be known where you are unknown. Please fill this form and submit to reach us.</p>
<hr>

<form action="action_page.php" id = "clientForm" onsubmit="return userValidate()" method="post" >
<fieldset>
<legend>Fill details to contact us</legend>
First Name <br>
 <input type="text" name="fname" id="fname" ><br>
Last Name <br>
 <input type="text" name="lname" id="lname"  ><br>
Email <br>
<input type="text" name="email" id="email"  ><br> <br>
<input type="submit" >
</fieldset>
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my portforio";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn){
echo "Successfully connected to database login system";
$result = mysqli_query($conn, "select * from myprojects");
while($row = mysqli_fetch_array($result)){
echo $row["contact"]."<br>";
  }
}
else
echo "Database connection failed";
?>
</body>
</html>