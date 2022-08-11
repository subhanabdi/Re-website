<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payment Link</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://backofficeprofs.com/assets/css/layout.css?var=1213"/>
	<link href="css/layout.css" rel="stylesheet" type="text/css"/>
	<link href="css/style_step.css" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="/favico.png" type="image/x-icon">
	<style>
		.payment-link {
			border: 1px solid #ccc;
			padding: 25px;
			margin-top: 20px;
			background: #f7f7f7;
			text-align: center;
		}
	}
	.payment-link h5 {
		margin-bottom: 12px;
	}
	.alert-copy {
		margin-top: 10px;
		font-size: 16px;
		font-weight: 700;
		color: green;
	}
	.payment-link h6 {
		color: red;
		font-size: 14px;
		line-height: 18px;
		cursor: pointer;
	}
	.payment-link h6 a {
		color: #fff;
		text-transform: uppercase;
		font-weight: 600;
		font-size: 16px;
		padding: 11px 28px;
		border-radius: 2px;
		text-decoration: none;
		margin-left: 0;
		transition: .3s;
		width: auto;
		border: none;
		cursor: pointer;
		background: green;
		font-family: 'Open Sans', sans-serif;
		outline: none;
		margin-top: 5px;
		display: inline-block;
	}
</style>
</head>
<body class="hompg">
	<header class="fixed sticky">
		<div class="main-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-12 text-center">
						<a href="javascript:;" class="logo">
							<img class="simple" src="https://www.resumeonlinepro.com/assets/images/logo.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="main-lgo-requiremnts-sec">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<form action="#" method="POST" id="frm2" class="has-form">
						<div class="row justify-content-center">
							<div class="col-md-10">
								<div class="bsnuss-heading">
									<h2 class="main-cnt-heading">Payment Generation Form</h2>
									<p class="main-cnt-para para-wdth">
									Please fill out the following information for generated link</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="">
									<div class="infrm-inpts">
										<span>Customer Name</span>
										<input type="text" name="customerName">
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="">
									<div class="infrm-inpts">
										<span>Customer Email</span>
										<input type="email" name="customerEmail">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div>
									<div class="infrm-inpts">
										<span>Customer Contact Number</span>
										<input type="text" name="contactNumber">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div>
									<div class="infrm-inpts">
										<span>Amount</span>
										<input type="text" name="amount" required>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div>
									<div class="infrm-inpts">
										<span>Package Name</span>
										<input type="text" name="pkg" required>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="">
									<div class="infrm-inpts">
										<span>Brand Name</span>
										<select name="Brand" required>
											<option disabled="disabled" selected>Select Brand</option>
											<option value="resumeonlinepro.com">Resume Online Pro</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div>
									<div class="infrm-inpts">
										<span>Brand Service</span>
										<select name="Service" required>
											<option disabled="disabled" selected>Service Type</option>
											<option value="Resume Writing">Resume Writing</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div>
									<div class="infrm-inpts">
										<span>Description</span>
										<textarea name="description"></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-12 text-center mt-4">
								<div class="sbmt_btn">
									<input type="submit" name="submit" value="Generate Link">
								</div>
							</div>
						</div>
					</form>
					<?php

					if (isset($_POST['submit'])) {
						if (!empty($_POST['Service'])) {
							$Service = $_POST['Service'];
						}
						$Amount = $_POST['amount'];
						$Package = $_POST['pkg'];
						$customerName = $_POST['customerName'];
						$customerEmail = $_POST['customerEmail'];
						$contactNumber = $_POST['contactNumber'];
						if (!empty($_POST['Brand'])) {
							$Brand = $_POST['Brand'];
						}
						$description = $_POST['description'];
						$key = rand(111111111,999999999);
						
						define('DBHOST', 'localhost');
                        define('DBUSER', 'interons_ronline');
                        define('DBPASS', '4o8^PYO],=pH');
                        define('DBNAME', 'interons_ronlinepro');
                        define('DEBUG', true);
                        $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or custom_die('Database Connection Error', mysqli_connect_error());
                    
						if ($connection->connect_error) {
							die("Connection failed: " . $connection->connect_error);
						}else{
						    $sql = "INSERT INTO payments (generated_id, amount, package, customer_name, customer_email, customer_number, brand, brand_service, description) VALUES ('$key', '$Amount', '$Package', '$customerName', '$customerEmail', '$contactNumber', '$Brand', '$Service', '$description')";
							if($connection->query( $sql ) == TRUE)
							{ ?>
							    <div class="payment-link">
										<h5>Your Payment Link</h5>
										<h6><a href="<?php echo "https://resumeonlinepro.com/stripe-pay-secure/?gen_id=" . $key ?>" target="_blank">
											Click Here For Payment Link
										</a>
									</h6>
								</div>
								<div class="alert-copy"></div>
							<?php }
						    
						       
						}
				}
				?>
			</div>
		</div>
	</div>
</section>
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<p>Copyright © 2021 | All rights reserved.</p>
			</div>
		</div>
	</div>
</div>
<script src="js/plugin.js"></script>
<script>
	function copy(that) {
		var inp = document.createElement('input');
		document.body.appendChild(inp)
		inp.value = that.textContent
		inp.select();
		document.execCommand('copy', false);
		inp.remove();
		$('.alert-copy').text('Link Copied');
	}
	
</script>
</body>
</html>