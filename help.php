<?php
		include 'includes/header1.php';
		include 'includes/left-bar.php';
		include 'config/database.php';
?>; 
	<div class="col-md-6" style="background: url('images/11.jpg') no-repeat ;min-width:200px;min-height:550px;">
		<br/>
		<br/><br/>
		
        <div class="row centered-form">
			<center><h1><u>Frequently Asked Questions</u></h1></center>
			<?php
			$res=mysqli_query($link,"select * from feedback where faq='1'")or die(mysql_error());
			while($arr1=mysqli_fetch_row($res))
			{
					echo "<h3>$arr1[3]</h3>";
					echo "<h5>$arr1[7]</h5>";
			}
			?>
			<br/><br/><br/><br/>
		
		</div>
			
    	
    </div>
	<div class="col-md-4" style="background: url('images/marriage6.jpg') no-repeat;background-size: 100%;min-height:570px;">
	
	</div>
	</div><br><br><br>
	</div><br><br><br>
<?php include 'includes/footer.php'?>						

