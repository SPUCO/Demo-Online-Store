<?php
include('layouts/header.php');
//if user has already logged in then take user to product details page
if(isset($_SESSION['logged_in'])){
  header('location: productdetails.php?fldproductid=1');
  exit;
}
include('server/getproductreviewslogin.php');
?>
  </div>
</div>
		
<!--------- Product Reviews Login Page ------------>
<section class="my-5 py-5">
	<div class="container text-center mt-3 pt-5">
		<hr class="max-auto">
	</div>
	<div class="max-auto container">
		
		<div class="formcontainer">
			<img src="assets/images/Vintage blue1.jpg" alt="Snow" height="100px" alt="Snow" style="width: 20%">
			<form id="loginform" method="POST" action="productreviewslogin.php">
				<p style="color: red" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
				<p style="color: green" class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message']; }?></p>
				<div class="form-group">
					<label>Email
					  <input type="text" class="form-control" id="loginemail" name="fldproductreviewsemail" placeholder="Email" required/>
					</label><br>
				</div>
				<div class="form-group">
					<label>Password
						<input type="password" class="form-control" id="loginpassword" name="fldproductreviewspassword" placeholder="Password" required/>
					</label><br>
				</div>
				<div class="form-group">
					<button type="submit" name="productreviewsloginbtn" class="btn" id="loginbtn" required>Login</button>
					<a id="forgotpasswordurl" href="resetpassword.php">Forgot password</a><br>
					<a id="registerurl" href="registration.php">Don't have account? Register</a>
				</div>
			</form>
		</div>
	</div>
</section>
<?php
include('layouts/footer.php');
?>