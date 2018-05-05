<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			Khareed lo - Sign up
		</title>
		<style>


		.login {
		float: left;
		margin: 20px;
		padding:100px;
		width: 300px;
		height: 300px;
		border: 1px solid black;
		color:white;
		} 


        .style1 {color: #000000}
        .style2 {float: left; margin: 20px; padding: 100px; width: 300px; height: 300px; border: 1px solid black; color: #000000; }
		
		

		
        </style>
		
		
		<script language="JavaScript" type="text/JavaScript">
		
		


  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '824735717623004',
      xfbml      : true,
      version    : 'v2.3'
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }




















		function validLogin()
		{
			if(document.getElementById('username').value == "")
			{alert("Username is empty");
				return false;}
				
			if(document.getElementById('password').value == "")
			{alert("Password cannot be empty");
			return false;}
		}
		
		function validate()
		{
		
		if(document.getElementById('usname').value == "")
			{alert("Username is empty");
				return false;}
		
		if(document.getElementById('psw').value == "")
		{alert("Password cannot be empty");
		return false;}
		
		if(document.getElementById('mail').value == "")
		{alert("Enter email address");
		return false;}
		
		if (!document.customer.r1[0].checked && !document.customer.r1[1].checked)
		{
		alert("Please choose gender");
		return false;
		}
		
		if(document.getElementById('fname').value == "")
			{alert("Enter first name");
				return false;}
		
		if(document.getElementById('lname').value == "")
			{alert("Enter last name");
				return false;}
				
		if(!document.getElementById('cb').checked)
		{
			alert("Please accept terms and condition");
			return false;
		}
		
		document.customer.submit();		
		}
		
		</script>
		
		
		
	</head>
	
	<body background="http://localhost:8080/khareedLo/Images\colorful-shopping-bags.jpg" style=background-size:100%>
	<a href="http://localhost:8080/khareedLo/index.php/Welcome/index" target="_self"><img src="http://localhost:8080/khareedLo/Images\Untitled.png" width="218" height="136" /></a><h1 id="h">Online Shopping In Pakistan</h1>
	<h3> Experience the lifestyle</h3>
	<form name=customer id="customer" method='post' action="http://localhost:8080/khareedLo/index.php/Welcome/signUp" enctype="multipart/form-data"  onSubmit="return validate()">
		<div id="section">
	<div class="login">
	<strong><span style="color: #000000"><a style="font-size:140%"> I am a new customer </a> </span></strong>
	<span class="style1"><br>
	<br>
	First Name:<br>
	  <input type=text id="fname" name='fname'/>
	  <br>
	  Last Name:<br>
	  <input type=text id="lname" name='lname'/>
	  <br>
	Username:<br>
	<input type=text name=usname id="usname" />
	<br>
	Password:<br>
	<input type=password name=psw id="psw"/>
	<br>
	Email:<br>
	<input type=email name=mail id="mail"/>
	<br>
	
	  
	  Date Of Birth:<br>
	  <input type=date id="dob" name=dob />
	  <br>
	  <input type=checkbox id="cb" name='cb' />
	  I have read the terms and conditions.<br>
	  <br>
	  </span>
	<input type='submit' value='Sign up'/> 
	</div>
	</form>
	<div class="style2">
		
		
		
	<form name=log id="log" method='post' action="http://localhost:8080/khareedLo/index.php/Welcome/Login"  enctype="multipart/form-data"  onSubmit="return validLogin()">
	<strong><a style="font-size:140%"> I already have an account here </a> </strong>
	<br><br><br><br><br><strong>Username:</strong><input type="text" id="username" name=username />
	<br><br><strong>Password:</strong><input type="password" id="password" name=password />
	<br><span style="padding-right:150px"></span><a href="www.google.com" target="_self">Forgot Password?</a>
	<br><br><span style="padding-right:200px"></span><input type='submit' value='Login'/><fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>


<p>
                &copy; 2015 Khareed Lo. All Rights Reserved. Designed by <a href="https://www.facebook.com/ahsan.mughal.7771"
                    target="_blank" title="Khareed lo.pk">B & M Developers)</a></p>


	</div>

	</div>


	</form>
	

	</body>
</html>