<?php
	require_once'header.php';
	if(isset($_SESSION["id"])){
		include("main.php");
	}else{
?>
<main>
		<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="check.php" method="post">
					<span class="login100-form-title">
						<img src="../images/logouc-footer.png" alt="">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text"  id="id" name="regcode" placeholder="Login" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
						
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
								<input type="submit" name="submit" value="Войти" style="background: none"> 
						</button>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
								<a href="../" class="main_link">На главную</a>  
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
<?php
	}
?>
