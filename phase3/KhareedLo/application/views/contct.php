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
      <li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/#" target="_self">CONTACT US</a></li>
      <li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/loginn" target="_self">LOGIN/REGISTER</a></li>

	 
	  </ul>
  </div>
<body>
<table width="100%" class="styled">
<tr>
<td colspan="2">
<h2>Your message</h2>
</td>
</tr>
<form action = "contact.jsp" method = "post">
<tr>
<th width="250">Your name</th>
<td><input type="text" name="name" value=""  maxlength="100" /></td>
</tr>

<tr>
<th>Your email address</th>
<td><input type="email" name="email" value=""  maxlength="100"  /></td>
</tr>

<tr>
<th>Your telephone number</th>
<td><input type="text" name="tel" value=""  maxlength="100"  /></td>
</tr>

<tr>
<th>Message subject</th>
<td><input type="text" name="subject" value=""  maxlength="100" /></td>
</tr>

<tr>
<th>Your message</th>
<td><textarea name="message" cols="50" rows="10"></textarea> 
<input type="submit" value="Send" name="sendmessage" /> 
</td>
</tr>
</form>

</table>
</body>
<head>
</head>

<p>
                &copy; 2015 Khareed Lo. All Rights Reserved. Designed by <a href="https://www.facebook.com/ahsan.mughal.7771"
                    target="_blank" title="Khareed lo.pk">(B & M Developers)</a></p>

</html>