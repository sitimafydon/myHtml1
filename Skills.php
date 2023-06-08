<DOCTYPE html>
<html lang="en" >
<head>
<title>My Skills page</title>
<meta charset="utf-8" />
<meta name="viewport" content="width = device-width, initial-scale = 1.0" >
<style type="text/css">
#container{
width:93%;
height:auto;
position:relative;
background:yellow;
padding:10px;
}

#animation{
height:50px;
width:auto;
position:absolute;
}

#container1{
width:93%;
height:auto;
position:relative;
background:yellow;
padding:10px;
}

#animation1{
height:50px;
width:auto;
position:absolute;
}
</style>

<script type="text/javascript">
var id = null
var id1 = null
function myMove1(){
var a = document.getElementById("animation");
var pos = 0;
clearInterval(id)
id = setInterval(frame,30)
function frame(){
if(pos == 300){
clearInterval(id)
  }
  
  else{
  pos++
  a.style.left = pos + "px"
    }
  }
}

function myMove2(){
var b = document.getElementById("animation");
var pos1 = 0;
clearInterval(id1)
id1 = setInterval(frame1,30)
function frame1(){
if(pos1 == 300){
clearInterval(id1)
  }
  
  else{
  pos1++
  b.style.left = pos1 + "px"
    }
  }
}

function myMove2(){
var a = document.getElementById("animation");
var pos = 0;
clearInterval(id)
id = setInterval(frame,30)
function frame(){
if(pos == 300){
clearInterval(id)
  }
  
  else{
  pos++
  a.style.left = pos + "px"
    }
  }
}
</script>
</head>
<body>
<h1>My Skills</h1>
<div id="container" >
<div id="animation" >
<h3 onclick = "myMove1()">Guitarist</h3>
</div><br><br>
I have some skills in pluckimg a four stringed guitar.
This skill i was taught by my brother Paul then is incurred it myself.
</div>
<br><br>
<div id="container1" >
<div id="animation1" >
<h3 onclick = "myMove2()">Guitarist</h3>
</div><br><br>
I have some skills in pluckimg a four stringed guitar.
This skill i was taught by my brother Paul then is incurred it myself.
</div>
<br><br>
<div id="container" >
<div id="animation" >
<h3 onclick = "myMove3()">Guitarist</h3>
</div><br><br>
I have some skills in pluckimg a four stringed guitar.
This skill i was taught by my brother Paul then is incurred it myself.
</div>

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
echo $row["skills"]."<br>";
  }
}
else
echo "Database connection failed";
?>
</body>
</html>