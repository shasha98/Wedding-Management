<script language="javascript">
    function validate()
	{
	   var uname=document.reg.uname.value;
	   var pass=document.reg.pass.value;

		if(uname=='')
		  {
			window.alert("Please Enter Username!");
			document.reg.uname.focus();
			return false;
		 }
		if(pass=='')
		  {
			window.alert("Please Enter Password!");
			document.reg.pass.focus();
			return false;
		 }
}
</script>
<?php
		include 'includes/header1.php';
		if(isset($_SESSION['suname']))
		{
			header("Location: http://localhost/wedding/index.php");
		}
		include 'includes/left-bar.php';
?>
	<div class="col-md-10" style="background: url('images/a.gif') ;background-size: 100%;min-height:720px;min-width:700px;">
		<br/><br/><br/><br/><br/>
		<center>
		<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
			    <h3 class="panel-title" style="color:black;font-weight:bold;">Welcome To Happy-Wedding</small></h3>
		  </div>
			  <div class="panel-body" style="background-color:#F6DDCC">
				<form action="user/loginHandler.php" name="reg" onSubmit="return validate()"><br>
					<p><input type="text" required name="uname" style="color:black;font-weight:bold;" placeholder="Username or Email"></p><br>
					<p><input type="password" required name="pass" style="color:black;font-weight:bold;" placeholder="Password"></p>
					<p class="remember_me">
					<a href="register.php">
					<p class="submit"><input class="btn btn1" type="submit" name="commit" style="color:black;font-weight:bold;" value="Login"></p>
				<!--	<label>
						<h3 style="font-color: pink; font-weight: bold;">Don't have an account!! Sign Up Here</h3>
					</label>  -->
					</a>
					</p>
				</form>
			   </div>
	    </div>
    	</div>	
    	</div>
	  </center>
	</div>
	</div>
<?php include 'includes/footer.php' ?>			
