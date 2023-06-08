<DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width = device-width, initial-scale = 1.0" >
<style type="text/css">
.fyd{
background-color:#eee;
padding:10px;
opacity:0.9;
}
#hsty {
text-shadow:2px 1px 0 hotpink;
}
body{
background:repeating-radial-gradient(cyan,green 10%,yellow 15%);
}
#progress{
width:100%;
background-color:silver;
}

#bar{
width:0%;
background-color:green;
height:30px;
text-align:center;
line-height:30px;
color:white;
}
</style>
</head>
<body>
<div class = "fyd">
<h1 id="hsty" >My Projects</h1>
<p id = "details" onclick="projectDetails()">Guitar plucking......</p>
<script type="text/javascript">
function projectDetails(){
  var a = document.getElementById("details").innerHTML = "For some years i have been \
  involved in guitar plucking. It all started in 2015 while i was in standard 8 with the\
   influence of my brother Paul till 2022 i got some expertise in guitar plucking. Shut outs go\
    to brother paul for making me to be a guitarist at some moment.";
}
</script>

<p id ="web" onclick ="webDesign()">Web design projects......</p>
<script type="text/javascript">
function webDesign(){
  var a = document.getElementById("web").innerHTML = "It all started in August 2022 at my first\
   semester holiday at Mzuni. I was interested in programming, by that moment i wanted to go further with\
    C programming language but coming across HTML i priortised it than complex and hard to undrstand C"
}
</script>

<p id ="farm" onclick="farming()">Farming experience......</p>
<script type="text/javascript">
function farming(){
  var a = document.getElementById("farm").innerHTML = "Originally i come from a native family whose occupation is\
   farming. As such i cannot run away from farming. My dad and mam brougt me up the life of farming. I am very \
    interested in farming and my dream of being a commercial farmer still lingers in my mind."
}
</script>
<h3>JavaScript progress bar</h3>
<div id="progress" >
<div id="bar" ></div>
</div>
<br>
<button onclick="move()">CLICK ME</button>
<p>Click button above to see my level of project completion</p>
<script type="text/javascript">
var i = 0;
function move(){
  if(i == 0){
  i = 1;
  }
  var j = document.getElementById("bar");
  var width = 1;
  var id = setInterval(frame,50)
  function frame(){
  if(width>=63){
  clearInterval(id)
  i = 0
  }
  
  else{
  width++
  j.style.width = width + "%"
  j.innerHTML = width + "%"
  }
  
  }
}
</script>
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
echo $row["projects"]."<br>";
  }
}
else
echo "Database connection failed";
?>
</body>
</html>
