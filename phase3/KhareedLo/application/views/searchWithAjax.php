
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
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


.style1 {color: #FFFFFF}


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


</style>

</head>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript">

window.onload = function(){ 
	//Get submit button
	var submitbutton = document.getElementById("input");
	//Add listener to submit button
	// if(submitbutton.addEventListener){
	// 	submitbutton.addEventListener("click", function() {
	// 		if (submitbutton.value == 'Search your item'){//Customize this text string to whatever you want
	// 			submitbutton.value = '';
	// 		}
	// 	});
	// }
}

function searchAjax()
{
	var Title = document.getElementById('title').value;
	var Category = document.getElementById('category').value;
	var priceFrom = document.getElementById('from').value;
	var priceTo = document.getElementById('to').value;
	var Location1 = document.getElementById('location').value;


	//alert(Category);

	var controllerName = "Welcome";
	//var base_url = '<?php echo site_url(); ?>';
	var base_url = "/khareedLo/index.php";
	//alert(base_url+'/'+controllerName+'/searchWithAjax');

	$.ajax({

		'url':base_url +'/' + controllerName +'/searchWithAjax',
		'type' : 'GET',
		'data': {t1:Title,c1:Category,fromPrice:priceFrom,toPrice:priceTo,location:Location1,},
		success:function(response)
		{
			//alert(response);
			document.getElementById("results").innerHTML = response;
		}

	});
	
	// var xmlhttp;

	// if(window.XMLHttpRequest)
	// {
	// 	xmlhttp= new XMLHttpRequest(); 

	// }
	// else
	// {
	// 	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	// }
	// xmlhttp.onreadystatechange=function()
	// {
	// 	if(xmlhttp.readyState==4 && xmlhttp.status==200)
	// 	{

	// 	}	
	// }

	// xmlhttp.open("GET","http://localhost:8080/khareedLo/index.php/Welcome/searchWithAjax",true);
	// xmlhttp.send();

}

// function searchCheck() {
//     var val = document.getElementById('input').value;
//     if (val == 'mobiles') {
//         window.location = "mobile.html";
//     }
//     else if (val == 'laptops') {
//         window.location = "mobile.html";
//     }
//     else if (val == 'vehicles') {
//         window.location = "vehicle.html";
//     }
//     else if (val == 'electronics') {
//         window.location = "electronic.html";
//     }
//     else if (val == 'clothes') {
//         window.location = "clothing.html";
//     }
//     else if (val == 'animals') {
//         window.location = "animal.html";
//     }
//     else if (val == 'accessories') {
//         window.location = "accessories.html";
//     }
//     else {
//         window.alert("No such item found, Try again!");
//     }
//     return false;
// };
</script>
<!-- CSS styles for standard search box with placeholder text-->
<!--style type="text/css">
	#tfheader{
		background-color:#c3dfef;
	}
	#tfnewsearch{
		float:right;
		padding:20px;
	}
	.tftextinput2{
		margin: 0;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		color:#666;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;
	}
	.tfbutton2 {
		margin: 0;
		padding: 5px 7px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		font-weight:bold;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
	}
	.tfbutton2:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton2::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
</style-->
<title>Experience the lifestyle</title>
</head>

<body background="http://localhost:8080/khareedLo/Images\colorful-shopping-bags.jpg" style=background-size:100%>
	<!-- HTML for SEARCH BAR -->
	
<!--/body-->
<!--/html-->



<div id="header">
  <ul id='a'>
  <li><div align="left"><a href="http://localhost:8080/khareedLo/index.php/Welcome/index" target="_self"><img src="http://localhost:8080/khareedLo/Images\Untitled.png" width="218" height="136" /></a></li>
  
		<li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/index" target="_self">HOME</a></li>
      <li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/viewAllItems" target="_self">View All Items</a></li>
<li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/#" target="_self">SEARCH</a></li>
<li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/ad" target="_self">POST AD</a></li>
      <li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/contact" target="_self">CONTACT US</a></li>
      <li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/loginn" target="_self">LOGIN/REGISTER</a></li>

	 
	  </ul>
  </div>
<br><br>
<h1 style=color:brown ><br><br><span style="padding-right:500px;"></span><marquee behavior=alternate > Search Your Item </marquee></h1>

<form method='get'>
  title: <input type="text" name="title" id="title" /> <br>
  category: <select name="category" id="category" style = "font-size : 15px;color:Black;margin-left:80px;margin-top:-20px;"><br>
     <option>Select Option</option>
	<option>Mobile</option>
	<option> Vehicles</option>
	<option> Animals</option>
	<option> Electronics</option>
	<option> Others</option>	
	</select><br>
	Price Range &nbsp &nbsp &nbsp &nbsp 
	From <input type="text" name="from" id="from"/> &nbsp &nbsp &nbsp &nbsp 
	To <input type="text" name="to" id="to"/><br>	

	Location: <input type="text" name="location" id="location"/>
  <input type="button" value="Search" onclick="searchAjax()">
</form>

<br><br>
<br><br>
<br><br>
<br><br>


<div id="results">

</div>
	




            <p>
                &copy; 2015 Khad Lo. All Rights Reserved. Designed by <a href="https://www.facebook.com/ahsan.mughal.7771"
                    target="_blank" tireetle="Khareed lo.pk">(B & M Developers)</a></p>

	

</body> 
</html>

