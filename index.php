<html lang="en">
 <head>
	<link href="css/style.css" rel="stylesheet" type="text/css">
 </head>
 <body>
	<div class="menu">
	<img src="images/blood copy.png" style="padding-left:51px;" height="88">
	<a class="headebutton" onclick="singnin();">Sign In</a>
	<a class="headebutton" onclick="singnup();">Sign Up</a>
	</div>
	
	<div class="heademenu">
	<ul>
	<li><a onclick="">Home</a></li>
	<li><a onclick="">Blood Camp</a></li>
	<li><a  onclick="allbloodgroup();">Blood Group Customer List</a></li>
	<li><a onclick="">About Us</a></li>
	<li><a onclick="">Contact Us</a></li>
	<li>
	<select id="searchbloodgroup" class="searchbutton" onchange="searchbloodgroup(this);">
	<option value="">Search Blood Groups</option>
	<option value="0+">0+</option>
	<option value="0-">0-</option>
	<option value="AB+">AB+</option>
	<option value="AB-">AB-</option>
	<option value="B-">B-</option>
	<option value="B+">B+</option>
	<option value="A-">A-</option>
	<option value="A+">A+</option>
	</select>
	</li>
	</ul>
	</div>
	<div class="banner" id="bannershow">
		<div class="slider">
			<ul>
				<li><img src="images/bb.png" width="1920" height="447"></li>
				<li><img src="images/slider01.jpg" width="1920" height="447"></li>
				<li><img src="images/slider02.jpg" width="1920" height="447"></li>
				<li><img src="images/slider02.jpg" width="1920" height="447"></li>
			</ul>
		</div>
	</div>
	<div class="dispaly:none" id="singnin">
		<div class="login-page">
		<div class="form">
		<form class="login-form">
		<input type="text" placeholder="username"/>
		<input type="password" placeholder="password"/>
		<button>Sign In</button>
		<p class="message">Not registered? <a href="#">Forgot password</a></p>
		</form>
		</div>
		</div>
	</div>
	<div class="dispaly:none;" id="singup">
		<div class="login-page">
		<div class="form">
		<form class="login-form">
		<input type="text" id="cusname" name="cusname" placeholder="username"/>
		<input type="password" id="password" name="password" placeholder="password"/>
		<input type="email" id="email" name="email" placeholder="Email"/>
		<input type="text" id="mobileno" name="mobileno" placeholder="Mobile Number"/>
		<select id="bloodgroup">
				<option value="">Select Blood Groups</option>
				<option value="0+">0+</option>
				<option value="0-">0-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="B-">B-</option>
				<option value="B+">B+</option>
				<option value="A-">A-</option>
				<option value="A+">A+</option>
		</select>
		<input type="text" id="adress" name="adress" placeholder="City and dist"/>
		<input style="background-color:#3a6fb9;" type="button" onclick="savecustomerdetails();" value="Sing UP"/>
		</form>
		</div>
		</div>
	</div>
	<div class="dispaly:none;" id="profiledata">
		<div class="login-page">
		<div class="form">
		<form class="login-form">
		<input type="text" id="cusname" name="cusname" value=""/>
		<input type="password" id="password" name="password"/>
		<input type="email" id="email" name="email"/>
		<input type="text" id="mobileno" name="mobileno"/>
		<select id="bloodgroup">
				<option value="">Select Blood Groups</option>
				<option value="0+">0+</option>
				<option value="0-">0-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="B-">B-</option>
				<option value="B+">B+</option>
				<option value="A-">A-</option>
				<option value="A+">A+</option>
		</select>
		<input type="text" id="adress" name="adress"/>
		<input style="background-color:#3a6fb9;" type="button" onclick="" value="Update"/>
		</form>
		</div>
		</div>
	</div>
	<div class="dispaly:none;" id="bloodgrouplist">
		<div class="divTable">
             <div class="headRow">
                <div class="divCell" align="center">Customer Name</div>
                <div  class="divCell">Customer Group</div>
                <div  class="divCell">Customer Email</div>
                <div  class="divCell">Customer Mobile</div>
                <div  class="divCell">Customer Address</div>
             </div>
            <div class="divRow">
                  <div class="divCell">001</div>
                <div class="divCell">002</div>
                <div class="divCell">003</div>
                <div class="divCell">003</div>
                <div class="divCell">003</div>
            </div>
            <div class="divRow">
                <div class="divCell">xxx</div>
                <div class="divCell">yyy</div>
                <div class="divCell">www</div>
                <div class="divCell">www</div>
                <div class="divCell">www</div>
           </div>
            <div class="divRow">
                <div class="divCell">ttt</div>
                <div class="divCell">uuu</div>
                <div class="divCell">Mkkk</div>
                <div class="divCell">Mkkk</div>
                <div class="divCell">Mkkk</div>
           </div>
		   <div class="divRow">
                <div class="divCell">ttt</div>
                <div class="divCell">uuu</div>
                <div class="divCell">Mkkk</div>
                <div class="divCell">Mkkk</div>
                <div class="divCell">Mkkk</div>
           </div>
		   <div class="divRow">
                <div class="divCell">uuu</div>
                <div class="divCell">Mkkk</div>
                <div class="divCell">Mkkk</div>
                <div class="divCell">Mkkk</div>
				<div class="divCell">kadapa ,mydukur</div>

           </div>

      </div>
	</div>
	
	<div class="footer">
	Copyright © W3Schools.com
	</div>
	<?php  include "controller/donor.php"; ?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="slider.js"></script> 
	<script type="text/javascript">
	  $(document).omSlider({
		slider: $('.slider'),
		dots: $('.dots'),
		next:$('.btn-right'),
		pre:$('.btn-left'),
		timer: 5000,
		showtime: 1000
	  });
	  function singnin(){
		  jQuery('#bannershow').hide();
		  jQuery('#singnin').show();
		  jQuery('#singup').hide();
		  jQuery('#bloodgrouplist').hide();
	  }
	  function singnup(){
		  jQuery('#bannershow').hide();
		  jQuery('#singnin').hide();
		  jQuery('#singup').show();
		  jQuery('#bloodgrouplist').hide();
	 }
	 function savecustomerdetails(){
		
        alert('hiii');
		 $.ajax({
            url : 'controller/donor/savecustomerdata',
            type: "POST",
            data: {
				form_key: window.FORM_KEY,
                name: jQuery("#cusname").val(),
                password: jQuery("#password").val(),
                email: jQuery("#email").val(),
                mobile: jQuery("#mobileno").val(),
                bgroup: jQuery("#bloodgroup").val(),
                address: jQuery("#adress").val(),
				}, //this sends the user-id to php as a post variable, in php it can be accessed as $_POST['uid']
				success: function(data){
               //alert(data.bgroup);
			   jQuery('#profiledata').show();
			   	jQuery('#bannershow').hide();
				jQuery('#bloodgrouplist').hide();
				jQuery('#singnin').hide();
				jQuery('#singup').hide();
                
            }
        });
		
	 }
	  jQuery('#profiledata').hide();
	  jQuery('#singnin').hide();
	  jQuery('#singup').hide();
	  jQuery('#bloodgrouplist').hide();
	function searchbloodgroup(){
		alert(jQuery('#searchbloodgroup').val());
		jQuery('#singnin').hide();
		jQuery('#singup').hide();
		jQuery('#bannershow').hide();
		jQuery('#bloodgrouplist').show(); $.ajax({
			url : 'controller/donor/getname',
            type: "POST",
            data: {
				form_key: window.FORM_KEY,
                bgroup:jQuery('#searchbloodgroup').val(),
				},
				success: function(data){
               //alert(data.bgroup);
			   
            }
        });
		
	}
	function allbloodgroup(){
		jQuery('#singnin').hide();
		jQuery('#singup').hide();
		jQuery('#bannershow').hide();
		jQuery('#bloodgrouplist').show(); $.ajax({
			url :'controller/alllist.php',
            type: "POST",
            data: {
				form_key: window.FORM_KEY,
                bgroup:jQuery('#searchbloodgroup').val(),
				},
				success: function(data){
               //alert(data.bgroup);
			   
            }
        });
		
	}
	  </script>
 </body>
</html>
