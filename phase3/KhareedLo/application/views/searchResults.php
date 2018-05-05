
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
<h1 style=color:brown ><br><br><span style="padding-right:500px;"></span><marquee behavior=alternate >Select Your Items You Want to Purchase</marquee></h1>
<div id="section">

	
	
	<?php
	foreach($val as $row)
	{
		echo "<div class='cat'>";
	    echo " <span class='style2'>";
     	echo  $row->Title;
	
		echo"</span><a href='mobile.php' target='_self'><img src='http://localhost:8080/khareedLo/Images\iph6.jpg' style='width:100%;height:100%;border:0'/></a><span class='style2'>";

    echo $row->Price;
   
    echo"<br>";
    
    echo $row->Location;
   
    echo"<br>";
    
    echo $row->PhoneNo;
	
	echo"</span></div>";
	}
	
	
	
	?>


	
	
	
	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>




<br><br>
<br><br>
<br><br>
<br><br>





	

</body> 
</html>


<h1>success</h1>

// <?php

// foreach ($val as $row) {

// 	echo "<tr>";


// 	echo"<td>";
// 	echo $row->Title;
// 	echo "</td>";

// 	echo "<tr>";
// 	echo"<td>";
// 	echo $row->Category;
// 	echo "</td>";

// 	echo "<tr>";
// 	echo"<td>";
// 	echo $row->Price;
// 	echo "</td>";

// 	echo "<tr>";
// 	echo"<td>";
// 	echo $row->Location;
// 	echo "</td>";


// 	echo "<tr>";
// 	echo"<td>";
// 	echo $row->PhoneNo;
// 	echo "</td>";

// 	echo "<tr>";
// 	echo"<td>";
// 	echo $row->Image;
// 	echo "</td>";

// 	echo "</tr>";

// }

// ?>