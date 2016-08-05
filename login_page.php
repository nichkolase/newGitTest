
<?php
session_start();
if(isset($_SESSION['customer_id'])){
	echo '<div style="background-color:#EEEEEE; text-align:left; font-size:18px; font-weight: bold; width: 30%; text-transform: uppercase; border-style: solid; padding: 5px 10px;">';
	echo "You are logged as \"".$_SESSION['customer']."\"<br>";
	echo '</div>';
	
	//echo '<form action="logout.php" method="POST"><input type="submit" value="Logout"></form>';
	echo '<form action="index.php" method="POST"><input type="submit" value="Continue"></form>';
}
else{
	echo '
		<link rel="stylesheet" href="css/main.css">
		<div class="row">
			<div class="col-md-6">
				<img src="images/login_word.jpg" alt="login_word" width="390px" >
				<form role="form" class="btn-margin-left">
					<div class="form-group about-font">
						<p>帳號</p>
						<input type="email" class="form-control" id="account">
						<p class="about-lower-font">&#x2731請輸入註冊時的手機號碼</p>
						<!--點點點區隔線-->
		          		<hr class="dotted" />

		          		<p>密碼</p>
		   				<input type="password" class="form-control" id="pwd">
		   				<p class="news-date"><a href="#">忘記密碼&quest;</a></p>
		   				<!--點點點區隔線-->
		          		<hr class="dotted" />
		          		<form action="customer_login_validate.php" method="POST">
		   					<button type="button" class="btn btn-lg btn-danger btn-align-center">登入</button>
						</form>

						<form action="customer_login_validate.php" method="POST">
							<table width="40%" cellspacing="0" cellpadding="4" border="0">
								<tr>	
									<td width="40%" align="left"><b>Your username</b></td>
									<td width="60%">
										<input type="text" name="customer_id" size="24" maxlength="20">
									</td>
								</tr>		 
								<tr>	
									<td width="40%" aligh="left"><b>Password</b></td>
									<td width="60%">
										<input type="password" name="customer_pw" size="24" maxlength="20">
									</td>
								</tr>
								<tr>
									<td align="right">
										<input type="submit" value="Login">
										<input type="reset" value="Reset">
									</td>	
								</tr>
							</table>
						</form>
					</div>					
				</form>
				
			</div>
			<div class="col-md-6">
					<div class="thumbnail">
						<img class="img-responsive" src="images/login_product.jpg" alt="login_product">
						<div class="about-font">
							<p>還沒有<font color="#ff0000">帳號</font>？</p>
							<p >立即加入會員，享受尊榮呵護與優惠吧！</p>
							<!--點點點區隔線-->
		          			<hr class="dotted" />
		          			<form action="registration.php" method="POST">
		          				<button type="submit" class="btn btn-lg btn-danger btn-align-center">註冊會員</button>
		          			</form>
						</div>
					</div>
			</div>
				
		</div>
	';
}
?>