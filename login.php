<?php
session_start();
$error=0;
$invaliddetail='';
$errormsg=$errormsg1='';
 if(isset($_POST['submit'])){
	 
	 
			//echo '<pre>';print_r($_POST);exit;
			$emailid = $_POST['emailid'];
			$password = $_POST['password'];
			if($emailid=='')
			{
				$errormsg="please enter the valid email id";
				$error=1;
			}				
			if($password=='')
			{
				$errormsg1="please enter password";
				$error=1;
			}
			
			
			if($error==0)
			{
			$con=mysql_connect("localhost","root","");
			mysql_select_db("spc",$con);

			// email & password combination 
			$query ="SELECT * FROM `registration` WHERE emailid ='".$emailid."' AND password='". $password."'";
			//SELECT * FROM `registration` WHERE emailid = deva@gmail.com AND password= 1323456		
			//echo $query;exit;
			$res=mysql_query($query,$con);
			//echo $res;exit;
			$rows = mysql_fetch_assoc($res);
			//echo  '<pre>';print_r($rows);exit;
 
					   if($rows > 0) 
						    { 
						//echo "successfull login ";
						header('location:profile.php');
						//header('location:profile.php?emailid="'.$rows['emailid'].'"');
						 $_SESSION['emailid'] = $rows['emailid'];
						 
						 $_SESSION['password'] = $rows['password'];
						 $_SESSION['nameuesr'] = $rows['nameuesr'];
						 $_SESSION['mobile'] = $rows['mobile'];
						 $_SESSION['image'] = $rows['image'];
						 
						 $_SESSION['sno'] = $rows['sno'];
						
						  }else{
							  $invaliddetail='<span style="color:red">please enter valid details</span>';
						  }
						 
						  mysql_close($con); 
					  }
				}
?>

<?php include('header.php');?> 
<html>
    <head>
		
    </head>
         <title>login</title>
    <body>
		<center>
		
		<form action="" method="POST" >
		<table>
		<h1> LOGIN FORM</h1>
		
		<?php  if($invaliddetail){if($invaliddetail!=''){echo $invaliddetail;}}?>
		<tr>
			<td>USERNAME/EMAIL</td>
				<td><input type="email" name="emailid" value="<?php echo isset($_POST['emailid']) ? $_POST['emailid']:''?>" id="email"><?php if($error=1){ echo $errormsg;} ?>
			</td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			   <td><input type="password" name="password" value="" id="password"><?php if($error=1){ echo $errormsg1;} ?>
			</td>
		</tr>
		<tr>
			  <td><input type="submit" name="submit" value="login">
		</tr>

		</table>
		<a href="forgotpassword.php">Forgot password</a>
		</form>
		</center>
   </body>
</html>
     <?php include('footer.php');?> 

<script type="text/javascript">
		function validation()
		   {
				var email=document.getElementById("email").value;
				   if(email=='')
					  {
					  alert('enter a valid emai id');
					   return false;
					   }
				var email=document.getElementById("email").value;
					if(email=='')
						{
							alert('enter a valid emai id');
							return false;
						}

			 }	
		</script>