<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
<title>Experience the lifestyle</title>
</head>

<body background="http://localhost:8080/khareedLo/Images\colorful-shopping-bags.jpg" style=background-size:100%>

<div id="header">
  <ul id='a'>
  <li><div align="left"><a href="http://localhost:8080/khareedLo/index.php/Welcome/index" target="_self"><img src="http://localhost:8080/khareedLo/Images\Untitled.png" width="218" height="136" /></a></li>
  
		<li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/index" target="_self">HOME</a></li>
      <li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/viewAllItems" target="_self">View All Items</a></li>
<li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/srch" target="_self">SEARCH</a></li>
<li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/#" target="_self">POST AD</a></li>
      <li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/contact" target="_self">CONTACT US</a></li>
      <li><a id='h' style="color:BLACK;text-decoration:none" href="http://localhost:8080/khareedLo/index.php/Welcome/loginn" target="_self">LOGIN/REGISTER</a></li>


	 
	  </ul>
  </div>
<br><br><br>

<link rel= "stylesheet" type = "text/css" href="signup.css">
<script language="JavaScript" type="text/JavaScript">

function validate()
{
	
	if ( document.employer.model.value == "" )
		{alert("Tittle Is Empty ");
			return false;}
	if ( document.employer.model.value == "" )
		{alert("Write model!!");
			return false;}

	if(document.getElementById('password').value == "")	
	{alert("password is empty!!");

			return false;}
			if(document.employer.password.value!=document.employer.confirm_password.value)
	{
	alert("New Password and Confirm new Password doesnt match");
	document.employer.confirm_password.focus();
	return false;
	}
	if (document.employer.company.value=="")
	{alert ("Company name in empty");
	return false;
	}
	if (document.employer.color.value=="")
	{alert ("Color  in empty");
	return false;
	}
	if (document.employer.price.value=="")
	{alert ("price in empty");
	return false;
	}
	if (document.employer.condition.value=="")
	{alert ("Condition is  empty");
	return false;
	}
	if ( document.employer.phone_number.value == "" )
		{alert("Telephone is empty!!");
			return false;}
			if ( document.employer.city.value == "" )
		{alert("City is empty!!");
			return false;}

			if ( document.employer.name.value == "" )
			{alert("Panyaka Name Saly Ani da Bechy ");
				return false;}

		if(document.getElementById('password').value == "")	
		{alert("password is empty!!");

				return false;}
				if(document.employer.password.value!=document.employer.confirm_password.value)
		{
		alert("New Password and Confirm new Password doesnt match");
		document.employer.confirm_password.focus();
		return false;
		}
}
	</Script>


</head>
 <body>

		<div id ="9">
	
	<br/>
	
	<br/>
	<form id="ad" method = "POST" action="http://localhost:8080/khareedLo/index.php/Welcome/PostAd">
<br/><p class="left">Add Title <input  type="text" id = "tittle1" name="tittle1" class ="model"/></p>
	<p class="left"> Category  
	<select name="category" style = "font-size : 15px;color:Black;margin-left:80px;margin-top:-20px;"><br>
     <option>Select Option</option>
	<option>Mobile</option>
	<option> Vehicle</option>
	<option> Animal</option>
	<option> Electronic</option>
	<option> Clothe</option>
	<option> Others</option>	
	</select>
	<p class="left">Price      <input  type="text"  name="price" class ="model" />
	<p class="left">Location  <input  type="text"  name="location"  class ="model" />
	<p class="left">PhoneNumber<input type="text"  name="phone_number" class ="model" /></p>
	
	<div class="form-group">
		<label for="exampleInputFile">Image </label>
	<?php //echo form_open_multipart('upload/do_upload');?>

	    <input type="file" id="exampleInputFile" name="userfile" size="1000">
	    </div>
	<input type="hidden" name="path" id="path">


	<p class="left">email       <input  type="text" name="email" class ="model" /></p>


	
	
	<div id ="tsign_in">  <input id="add" type="submit" value="Submit Ad" class="lower_button" onclick="addPath()"></div>
	</form>
	


	

<script>

                function addPath()
                {
                //	alert("abc");
                  var path=document.forms[0]["userfile"].value;
                  var size=path.length;
                  path=path.substring(12,size);
                  
                  document.forms[0]["path"].value=path;
                  alert(path);
                  //alert (document.forms["imagePath"]["path"].value);
                  
                  //alert(path);

                  //alert (path);
                  //var pField=document.forms["imagePath"]["path"];
                  //var size=path.length;
                  //for(i=12,j=0;i<size;i++,j++)
                  //{
                    //pField.value[j]=path.value[i];
                  //}
                   //document.forms["imagePath"]["path"].value = document.forms["imagePath"]["userfile"].value;
                   //alert (document.forms["imagePath"]["path"].value[0]);
                    document.getElementById("add").type="submit";
                    document.getElementById("ad").action="http://localhost:8080/khareedLo/index.php/Welcome/PostAd";
                   //alert("kaldk")
                 }
                 <p class="left" style= "margin-left:10px">Help us protect your info<br>	
	</p>	

<p>
                &copy; 2015 Khareed Lo. All Rights Reserved. Designed by <a href="https://www.facebook.com/ahsan.mughal.7771"
                    target="_blank" title="Khareed lo.pk">(B & M Developers)</a></p>

</script>

















</body>

</html>
</html>