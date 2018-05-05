<?php
defined('BASEPATH') OR exit('No direct script access allowed');


?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
#header{
background-color:white;

}

#section {
}
#footer{
background-color:black
}


ul#a{
    float: left;
    width: 100%;
    padding:0;
    margin: 0;
    list-style-type: none;
}

a#h{
    float: left;
    width: 10em;
    text-decoration: none;
    color: white;
    background-color: silver;
    padding: 0.2em 0.6em;
    border-right: 1px solid white;
}

a#h:hover {
    background-color: brown;
}

li {
    display: inline;
}

.cat{
float: left;
margin: 20px;
padding:100px;
width: 200px;
height: 200px;
border: 1px solid black;
color:white;
} 


.style2 {
	color: #000000;
	font-weight: bold;
}
</style>
<title>Experience the lifestyle</title>
</head>

<body background="http://localhost:8080/khareedLo/Images\colorful-shopping-bags.jpg" style=background-size:100%>



<div id="header">
  <ul id='a'>
  <li><div align="left"><a href="http://localhost:8080/khareedLo/index.php/Welcome/index" target="_self"><img src="http://localhost:8080/khareedLo/Images\Untitled.png" width="218" height="136" /></a></li>
  
		<li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/index" target="_self">HOME</a></li>
      <li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/viewAllItems" target="_self">View All Items</a></li>
<li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/srch" target="_self">SEARCH</a></li>
<li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/ad" target="_self">POST AD</a></li>
      <li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/contact" target="_self">CONTACT US</a></li>
      <li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/loginn" target="_self">LOGIN/REGISTER</a></li>



	  </ul>
  </div>
</div>
<br><br>
<h1 style=color:brown ><br><br><span style="padding-right:500px;"></span><marquee behavior=alternate >Select Your Items You Want to Purchse</marquee></h1>
<div id="section">


<?php 

foreach($result as $row)
{
//	echo $row->Title;


?>








	<div class="cat" >
	<span class="style2">
	<?php echo $row->Title; ?>
	</span><a href="clothing.php" target="_self"><img src="http://localhost:8080/khareedLo/Images\benetton-3883-45954-1-zoom.jpg" style="width:100%;height:100%;border:0"/></a><span class="style2">
	<?php echo $row->Price;?>
	<?php echo $row->email;?>
	</span></div>
	<?php   }?>
	<!--<div class="cat" >
	<span class="style2">
	World Cup Jersey
	</span><a href="clothing.php" target="_self"><img src="Images\casports-7525-24749-1-zoom.jpg" style="width:100%;height:100%;border:0"/></a><span class="style2">
	Rs. 1,500
	</span></div>
	
	<div class="cat" >
	<span class="style2">
	Casual Shirt
	</span><a href="clothing.php" target="_self"><img src="Images\timberland-7438-39285-1-zoom.jpg" style="width:100%;height:100%;border:0"/></a><span class="style2">
	Rs. 1,300
	</span></div>
	
	<div class="cat" >
	<span class="style2">
	Casual Shirt
	</span><a href="clothing.php" target="_self"><img src="Images\cult-7924-57817-1-zoom.jpg" style="width:100%;height:100%;border:0"/></a><span class="style2">
	Rs. 1,300
	</span></div>
	
	<div class="cat" >
	<span class="style2">
	T-Shirt
	</span><a href="clothing.php" target="_self"><img src="Images\casualtees-2544-16674-1-zoom.jpg" style="width:100%;height:100%;border:0"/></a><span class="style2">
	Rs. 1,000
	</span></div>
	
	<div class="cat" >
	<span class="style2">
	Full sleeve cotton shirt
	</span><a href="clothing.php" target="_self"><img src="Images\menz-corner-1357-79065-1-zoom.jpg" style="width:100%;height:100%;border:0"/></a><span class="style2">
	Rs. 1,300
	</span></div>
	
	<div class="cat" >
	<span class="style2">
	Polo Shirt
	</span><a href="clothing.php" target="_self"><img src="Images\reborn-0932-56035-1-zoom.jpg" style="width:100%;height:100%;border:0"/></a><span class="style2">
	Rs. 1,200
	</span></div>
	
	<div class="cat" >
	<span class="style2">
	Casual Shirt
	</span><a href="clothing.php" target="_self"><img src="Images\timberland-8536-98285-1-zoom.jpg" style="width:100%;height:100%;border:0"/></a><span class="style2">
	Rs. 1,800
	</span></div>
	
	<div class="cat" >
	<span class="style2">
	Polo Shirt
	</span><a href="clothing.php" target="_self"><img src="Images\reborn-0998-05035-1-zoom.jpg" style="width:100%;height:100%;border:0"/></a><span class="style2">
	Rs. 1,200
	</span>
-->
	
	

	<p>
                &copy; 2015 Khareed Lo. All Rights Reserved. Designed by <a href="https://www.facebook.com/ahsan.mughal.7771"
                    target="_blank" title="Khareed lo.pk">(B & M Developers)</a></p>

	
	
	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>




<br><br>
<br><br>
<br><br>
<br><br>





	

</body> 
</html>
