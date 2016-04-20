<html lang="en">
 <head>
	<link href="css/style.css" rel="stylesheet" type="text/css">
 </head>
 <body>
	<div class="menu">
	<img src="images/images2222.png" width="250" height="80">
	<a class="headebutton" onclick="singnin();">Sign In</a>
	<a class="headebutton" onclick="singnup();">Sign Up</a>
	
	<select id="" class="searchbutton" onchange="searchbloodgroup();">
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
	</div>
	
	<div class="heademenu">
	<a class="button" onclick="singnin();">Sign In</a>
	<a class="button" onclick="singnup();">Sign Up</a>
	<a class="button" onclick="singnup();">Sign Up</a>
	<a class="button" onclick="singnup();">Sign Up</a>
	<a class="button" onclick="singnup();">Sign Up</a>
	</div>
	<div class="banner" id="bannershow">
		<div class="slider">
			<ul>
				<li><img src="images/bb.png" width="1920" height="447"></li>
				<li><img src="images/slider01.jpg" width="1920" height="447"></li>
				<li><img src="images/slider02.jpg" width="1920" height="447"></li>
				<li><img src="images/slider02.jpg" width="1920" height="447"></li>
			</ul>
			<div class="dots"> <a href="javascript:void(0);" rel="0" class="cur"></a> <a href="javascript:void(0);" rel="1"></a> <a href="javascript:void(0);" rel="2"></a> <a href="javascript:void(0);" rel="3"></a> </div>
			<div class="arrow"> <a href="javascript:void(0);" class="btn-left">&lt;</a> <a href="javascript:void(0);" class="btn-right">&gt;</a> </div>
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
		<input type="text" placeholder="username"/>
		<input type="password" placeholder="password"/>
		<input type="email" placeholder="Email"/>
		<input type="text" placeholder="Mobile Number"/>
		<select id="bloodgroup">
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
		<input type="text" id="adress" name="adress" placeholder="City and dist"/>
		<button>Sign Up</button>
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
	  jQuery('#singnin').hide();
	  jQuery('#singup').hide();
	  jQuery('#bloodgrouplist').hide();
	function searchbloodgroup(){
		jQuery('#singnin').hide();
		jQuery('#singup').hide();
		jQuery('#bannershow').hide();
		jQuery('#bloodgrouplist').show();
	}
	  </script>
 </body>
</html>
