


<link rel="stylesheet"type="text/css" media="all" href="http://www.w3schools.com/lib/w3.css">

<?php
include ('config.php');//connection

session_start();
if(!isset($_SESSION['ID'])){
header('location:login.php');
}
$id=$_GET['id'];//GET the parameter passed by view.php


$res=mysqli_query($con,"SELECT * FROM person WHERE ID='$id'");//select the specific record to be edit


$row=mysqli_fetch_array($res);?>

 <body>
      <div class="body">


<div id="pageWrapper">
  <img src="https://media.giphy.com/media/LcGFscTzOn9xm/giphy.gif" width="1000" height="300">
<div id="header">
  <h1 id="blogTitle"></h1>

</div href="w3.css"> </div> 
 <div class="space"><a href="/OnlineQuiz/index.php">&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;</a>
 <a href="/contact.html">&nbsp;Contact Us&nbsp;</a>
 <a href="/index.html"> &nbsp;&nbsp;&nbsp;&nbsp; About Us &nbsp;&nbsp;&nbsp;&nbsp; </a>


 </div>  
	 
 <div class="menu">
 
 <li><a href="high.php">Highest Score</a> </li>	
 <li> <a href="Results.php"> Results </a> </li>
 <li> <a href="ViewPass.php"> Passers</a> </li>
 <li> <a href="login.php">Log-in <img src="images/icon_users.png" width="28" height="18"></a> <li>
 
 <form method="post" action="Upload_Update.php?id=<?php echo $row['ID']; ?>" enctype="multipart/form-data">
 <div class="reg">


<b><li>FIRST NAME</li></b>
<input type="text" name="fname" required value="<?php echo $row['Firstname']; ?>"/>
<b><li>LAST NAME</li></b>
<input type="text" name="lname" required value="<?php echo $row['Lastname']; ?>"/>
<b><li>MIDDLE NAME</li></b>
<input type="text" name="mname" required value="<?php echo $row['Middlename']; ?>"/><br/>



<hr/><br/></div>

<div class="head">
<b><li>ADDRESS&nbsp;&nbsp;&nbsp;&nbsp;</li></b>
<input type="text" name="address" required value="<?php echo $row['Address']; ?>"/>
<b><li>GENDER &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li></b>
<select name="gender">
<option hidden value="<?php echo $row['Gender']?>"> <?php echo $row['Gender'];?> </option>
<option value="----">----</option>
<option value="FEMALE">FEMALE</option>
<option value="MALE">MALE</option>
</select>
<b><li>AGE</li></b>
<input type="number" name="age" min="18" max="100" required value="<?php echo $row['Age']; ?>"/><br/>



<br/><hr/>
</div>
	<div class="flip3D">
  <div class="back">
 
 <font>1.)Rock and red dust made of__________ covers the surface of Mars.
</font>
<div class="res">
<li><input type="radio"name="a" value="c"/>Iron</li>
<li><input type="radio"name="a"/>Nickel</li>
<li><input type="radio"name="a"/>Clay</li>
<li><input type="radio"name="a" value="w" id="w" checked/></li>
</div>
</div> 
  <div class="front"><center>Question no.1<br/><b>MARS PLANET</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
  
</div>

<!--------------------------------->
<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>2.)Who is Mars in mythology?
</font>
<div class="res">
<li><input type="radio"name="b" value="c"/>God of war</li>
<li><input type="radio"name="b"/>God of Humanity</li>
<li><input type="radio"name="b"/>God of Love</li>
<li><input type="radio"name="b" value="w" id="w" checked/></li>

</div>
</div> 
  <div class="front"><center>Question no.2<br/><b>MARS PLANET</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>

 
<!--------------------------------->
<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>3.)Mars is _______ planet from the Sun.
</font>
<div class="res">
<li><input type="radio"name="c" value="c"/>fourth</li>
<li><input type="radio"name="c"/>second</li>
<li><input type="radio"name="c"/>fifth</li>
<li><input type="radio"name="c" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.3<br/><b>MARS PLANET</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 </center>
<!--------------------------------->

<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>4.)How many moons does Mars have?
</font>
<div class="res">
<li><input type="radio"name="d"/>3</li>
<li><input type="radio"name="d" />5</li>
<li><input type="radio"name="d" value="c"/>2</li>
<li><input type="radio"name="d" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.4<br/><b>MARS PLANET</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->

<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>5.)What is Mars sometimes called? 
</font>
<div class="res">
<li><input type="radio"name="e"/>Blue planet</li>
<li><input type="radio"name="e" />Yellow planet</li>
<li><input type="radio"name="e" value="c"/>Red planet</li>
<li><input type="radio"name="e" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.5<br/><b>MARS PLANET</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->
<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>6.)A year on Mars is ________ as long as a year on Earth.

</font>
<div class="res">
<li><input type="radio"name="f"/>One and half the</li>
<li><input type="radio"name="f"/>Half</li>
<li><input type="radio"name="f" value="c"/>Twice</li>
<li><input type="radio"name="f" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.6<br/><b>MARS PLANET</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->
<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>7.)Scientists believe Mars once had lots of ________


</font>
<div class="res">
<li><input type="radio"name="g" value="c"/>Water
</li>
<li><input type="radio"name="g"/>Oxygen</li>
<li><input type="radio"name="g"/>Life</li>
<li><input type="radio"name="g" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.7<br/><b>MARS PLANET</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->
<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>8.)Temperature on Mars get as cold as ________ degrees.

</font>
<div class="res">
<li><input type="radio"name="h"/>-111</li>
<li><input type="radio"name="h"/>-137</li>
<li><input type="radio"name="h" value="c"/>-125</li>
<li><input type="radio"name="h" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.8<br/><b>MARS PLANET</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->
<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>9.)Mars is about ________ size of the Earth.

</font>
<div class="res">
<li><input type="radio"name="i"/>thrice the</li>
<li><input type="radio"name="i"/>same</li>
<li><input type="radio"name="i" value="c"/>half the</li>
<li><input type="radio"name="i" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.9<br/><b>MARS PLANET</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->
<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>10.)How is the temperature on Mars?

</font>
<div class="res">
<li><input type="radio"name="j"/>hot</li>
<li><input type="radio"name="j"/>cold as well as warm</li>
<li><input type="radio"name="j" value="c"/>very cold</li>
<li><input type="radio"name="j" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.10<br/><b>MARS PLANET</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->

<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>11.)What does Mars have?

</font>
<div class="res">
<li><input type="radio"name="k"/>volcanoes</li>
<li><input type="radio"name="k"/>pits</li>
<li><input type="radio"name="k" value="c"/>Huge volcanoes and crators</li>
<li><input type="radio"name="k" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.11<br/><b>MARS PLANET</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->
<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>12.)What planet did the rover visit?

</font>
<div class="res">
<li><input type="radio"name="l" value="c"/>Mars</li>
<li><input type="radio"name="l"/>Jupiter</li>
<li><input type="radio"name="l"/>Earth</li>
<li><input type="radio"name="l" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.12<br/><b>MARS ROVER</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->

<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>13.)How many cameras does the mars rover have?

</font>
<div class="res">
<li><input type="radio"name="m"/>2</li>
<li><input type="radio"name="m" value="c"/>5</li>
<li><input type="radio"name="m"/>4</li>
<li><input type="radio"name="m" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.13<br/><b>MARS ROVER</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->

<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>14.)Name any one of the camera:

</font>
<div class="res">
<li><input type="radio"name="n" value="c"/>Front Hazard Avoidance Camera</li>
<li><input type="radio"name="n"/>Satellite Camera</li>
<li><input type="radio"name="n"/>Astronomy Camera</li>
<li><input type="radio"name="n" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.14<br/><b>MARS ROVER</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->
<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>15.)When did he rover reach Mars?

</font>
<div class="res">
<li><input type="radio"name="o"/>2002</li>
<li><input type="radio"name="o" value="c"/>2003</li>
<li><input type="radio"name="o"/>2012</li>
<li><input type="radio"name="o" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.15<br/><b>MARS ROVER</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->

<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>16.)How big is the Mars Rover?

</font>
<div class="res">
<li><input type="radio"name="p"/>2 meters diameter</li>
<li><input type="radio"name="p"/>3 meters diameter</li>
<li><input type="radio"name="p" value="c"/>2.5 meters diameter</li>
<li><input type="radio"name="p" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.16<br/><b>MARS ROVER</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->

<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>17.)How many people did it take to make the mars possible?

</font>
<div class="res">
<li><input type="radio"name="q"/>A thousands of people</li>
<li><input type="radio"name="q"/>100 people</li>
<li><input type="radio"name="q" value="c"/>A few hundred people</li>
<li><input type="radio"name="q" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.17<br/><b>MARS ROVER</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->

<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>18.)What is the purpose of Rover?


</font>
<div class="res">
<li><input type="radio"name="r"/>For fuel</li>
<li><input type="radio"name="r"/>For life</li>
<li><input type="radio"name="r" value="c"/>For water</li>
<li><input type="radio"name="r" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.18<br/><b>MARS ROVER</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->
<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>19.)How does the rover get around?

</font>
<div class="res">
<li><input type="radio"name="s" value="c"/>Wheels</li>
<li><input type="radio"name="s"/>Gravity</li>
<li><input type="radio"name="s"/>Satellite</li>
<li><input type="radio"name="s" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.19<br/><b>MARS ROVER</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->
<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>20.)What is the energy source of Mars Rover?

</font>
<div class="res">
<li><input type="radio"name="t" value="c"/>Solar energy</li>
<li><input type="radio"name="t"/>Battery</li>
<li><input type="radio"name="t"/>Wind energy</li>
<li><input type="radio"name="t" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.20<br/><b>MARS ROVER</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!--------------------------------->
<!--------------------------------->
 	<div class="flip3D">
  <div class="back">
 <font>21.)How does the rover transport into the earth?


</font>
<div class="res">
<li><input type="radio"name="u"/>Gravity</li>
<li><input type="radio"name="u"/>Does not return</li>
<li><input type="radio"name="u" value="c"/> A satellite</li>
<li><input type="radio"name="u" value="w" id="w" checked/></li>
 &nbsp;
</div>
</div> 
  <div class="front"><center>Question no.21<br/><b>MARS ROVER</b></center><marquee direction="left" behavior="alternate"><marquee direction="up" width="60"><img src="images/star.gif"></marquee></marquee></div>
</div>
 &nbsp;
 
<!------------------------------>

<center><input type="submit" value="S U B M I T" name="send" id="myButton"/>&nbsp;&nbsp;&nbsp;<input type="reset" value="C L E A R" id="myButton"/></center>


	
    
	 </div>
		</form></div>
      

     </body>
     
   
