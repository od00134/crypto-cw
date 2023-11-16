<!DOCTYPE html>
<html>

	<?php include "includes/css_header.php" ?>
	
    <body style="background-color:#2F3235 !important">
        
    <?php include "includes/header_prelogin.php" ?>

    	<div id="main_body" class="container">
            <?php 
                if(isset($_GET['msg']))
                {
                    if($_GET['msg']=='2')
                    {
                        echo "<h3 class='text-center text-white margin-top50'><i>User Email Already Taken!</i></h3>";
                    }
                }
             ?>
    		<div class="row">
    			

    			<div class="col-md-4 margin-top50">
    				<h2 class="text-white text-center"> <b>Create an Account here</b> </h2>
    				<form class="form" action="register_user.php" method="POST">
                        <label class="text-white">First Name:</label>
                        <input type="Name" class="form-control" placeholder="Enter your Name" name="user_name" pattern="[A-Za-z]{3,12}" title="Must contain at least 3 letters and not more than 12 letters and an uppercase letter" required><br>
    					<label class="text-white">Email:</label>
    					<input type="email" class="form-control" placeholder="Enter your Email" name="user_email" required><br>
    					<label class="text-white">Password:</label>
    					<input type="password" class="form-control" placeholder="Password" name="user_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
    					<input type="submit" class="btn btn-danger btn-lg btn-block" value="Register" name=""><br>
    				</form>
    				<p class="text-white"><i>Already a member? <a href="index.php">Login Here</a></i></p>
    			</div>
    		</div>
    	</div>
	</body>
</html>