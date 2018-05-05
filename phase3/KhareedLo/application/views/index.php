<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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

/*#ct_img {
position:absolute;
        right: 100px;
    width: 300px;
    background-color: #b0e0e6;
}*/
div.widget
{
position:absolute;
        right: 100px;
    width: 100px;
    background-color: white;
}


</div>


</style>

<script>
function closeAd(){
	document.getElementById('adwidget').style.display = "none";
}



function closeAd1() {
    document.getElementById('adwidget1').style.display = "none";
}
</script>
<div class="widget">
<div class="Ad_widget" id="adwidget"><img id="Images\ct_img" src="http://localhost:8080/khareedLo/Images\ct.jpg" alt="Add Widget" style="width:50px;height:50px" >
	<div class="crossIcon" onclick="closeAd()"><img src="Images\cross.jpg" alt="Cross Icon" style="width:12px;height:15px"></div>
</div>
    <div class="Ad_widget" id="adwidget1"><img id="kk_img" src="http://localhost:8080/khareedLo/Images\kk.jpg" alt="Add Widget" style="width:50px;height:40px" >
	<div class="crossIcon" onclick="closeAd1()"><img src="http://localhost:8080/khareedLo/Images\cross.jpg" alt="Images\Cross Icon" style="width:12px;height:15px"></div>
</div>
    </div>


<title>Experience the lifestyle</title>
</head>
<body background="http://localhost:8080/khareedLo/Images\colorful-shopping-bags.jpg" style=background-size:100%>

<div id="header">
  <ul id='a'>
  <li><div align="left"><a href="#" target="_self"><img src="http://localhost:8080/khareedLo/Images\Untitled.png" width="218" height="136" /></a></li>
  
		<li><a id='h' style="color:BLACK;text-decoration:none" href="#" target="_self">HOME</a></li>
<li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/viewAllItems" target="_self">View All Items</a></li>
<li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/srch" target="_self">SEARCH</a></li>
<li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/ad" target="_self">POST AD</a></li>   
      <li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/contact" target="_self">CONTACT US</a></li>
      <li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/loginn" target="_self">LOGIN/REGISTER</a></li>
	   
	 

	 
	  </ul>
  </div>

<br><br>

<h1 style=color:brown ><br><br><span style="padding-right:500px;"></span><marquee behavior=alternate >Select Your Category</marquee></h1>
<div id="section">
<div class="cat" >
	<a href="<?php echo base_url();?>Welcome/mobile" target="_self"><img src="http://localhost:8080/khareedLo/Images\5.jpg" style="width:100%;height:100%;border:0"/></a>	</div>
	
	<div class="cat">
	
	<a href="<?php echo base_url();?>Welcome/vehicle" target="_self"><img src="http://localhost:8080/khareedLo/Images\v.jpg" style="width:100%;height:100%;border:0"/></a>	
	</div>
	
	
	<div class="cat">
	
	<a href="<?php echo base_url();?>Welcome/electronics" target="_self"><img src="http://localhost:8080/khareedLo/Images\el.jpg" style="width:100%;height:100%;border:0"/></a>	
	</div>



<br>

<span style="padding-right:140px;"></span><strong><a style="font-size:140%"> Mobiles/Laptops </a> </strong>

<span style="padding-right:400px;"></span><strong><a style="font-size:140%"> Vehicles </a> </strong>

<span style="padding-right:300px;"></span><strong><a style="font-size:140%"> Electronics </a> </strong>



<div id="section">
<div class="cat" >
	<a href="<?php echo base_url();?>Welcome/cloth" ><img src="http://localhost:8080/khareedLo/Images\clo.jpg" style="width:100%;height:100%;border:0"/></a>	</div>
	</div>
	<div class="cat">

	<a href="<?php echo base_url();?>Welcome/animal"  target="_self"><img src="http://localhost:8080/khareedLo/Images\an.jpg" style="width:100%;height:100%;border:0"/></a>	
	</div>
	
	
	<div class="cat">
	
	<a href="<?php echo base_url();?>Welcome/otherAccess" target="_self"><img src="http://localhost:8080/khareedLo/Images\ass.jpg" style="width:100%;height:100%;border:0"/></a>	
	</div>

</div>
<br>

<span style="padding-right:140px;"></span><strong><a style="font-size:140%"> Clothes </a> </strong>

<span style="padding-right:400px;"></span><strong><a style="font-size:140%"> Animals </a> </strong>

<span style="padding-right:300px;"></span><strong><a style="font-size:140%"> OTHER ACCESSORIES </a> </strong>

<br><br>
<br><br>
<br><br>
<br>


	<div id="footer">
	
	<br><span style="padding-right:500px"></span><span class="style1"><strong>New to this website? </strong><br> 
	<span style="padding-right:500px"></span>Subscribe to our newsletter to receive special offers and latest news..</span><br>
	<span style="padding-right:500px"></span><input type="text"/>
	<input value="Subscribe" type="Submit"/>
	
	<br>
	<span class="style1"><br>
	<br>
	<span style="padding-right:250px"></span>Customer Service
	<span style="padding-right:150px"></span>ABOUT US
	<span style="padding-right:135px"></span>International Sale
	<span style="padding-right:90px"></span>JOIN US ON <br> 
	</span><br>
	<span style="padding-right:250px"></span><a style=color:WHITE href="https://www.google.com" target="_self">Contact Us</a><span style="padding-right:150px"></span><a style=color:WHITE href="https://www.google.com" target="_self">Terms & Conditions</a><span style="padding-right:135px"></span>
	<a style=color:WHITE href="https://www.google.com" target="_self">America</a><span style="padding-right:150px"></span>
<a href="https://www.facebook.com"><img src="http://localhost:8080/khareedLo/Images\fb.jpg" style="width:20px;height:20px;border:0"></a>
<a href="https://twitter.com/?lang=en"><img src="http://localhost:8080/khareedLo/Images\tw.jpg" style="width:20px;height:20px;border:0"></a>
<a href="https://www.google.com"><img src="http://localhost:8080/khareedLo/Images\gg.png" style="width:20px;height:20px;border:0"></a><br>
	<span style="padding-right:250px"></span><a style=color:WHITE href="https://www.google.com" target="_self">How To Shop</a><span style="padding-right:132px"></span><a style=color:WHITE href="https://www.google.com" target="_self">Privacy Agreement</a>
	<span style="padding-right:147px"></span><a style=color:WHITE href="https://www.google.com" target="_self">England </a><br><span style="padding-right:743px"></span><a style=color:WHITE href="https://www.google.com" target="_self">India</a><br><span style="padding-right:743px"></span><a style=color:WHITE href="https://www.google.com" target="_self">China</a><br><br>
	</div> 


            <p>
                &copy; 2015 Khareed Lo. All Rights Reserved. Designed by <a href="https://www.facebook.com/ahsan.mughal.7771"
                    target="_blank" title="Khareed lo.pk">(B & M Developers)</a></p>





	

</body> 
</html>
