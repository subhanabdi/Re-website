<?php
require_once "connection.php";
require_once "stripeConfiguration.php";
$currency = "$";
$phonenumber = "(800) 861-8851";
$phonenumber_whatsapp= "";
$email = "";
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>Resume Online Pro | Secure Payments. Globally!</title>
        <meta charset="utf-8">
        <meta name="ip2loc" content="<?php echo $ip ?>">
        <meta name="ip2loc" content="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="page_url" content="<?php echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">	<link rel="stylesheet" href="https://backofficeprofs.com/assets/css/layout.css?var=1213" />
        <link href="../logo-order/css/layout.css" rel="stylesheet" type="text/css"/>
        <link href="../logo-order/css/style_step.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
        <style>
                       img.simple {
            max-width: 250px;
        }
            .has-exp-card {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .has-exp-card input {
                width: 48%;
            }
            input#submit-btn {
                width: 100%;
                margin: 0 0 10px;
            }
            .pack-name-price h2 {
                font-size: 20px;
                font-weight: 600;
                margin: 0;
            }

            .pack-name-price h3 {
                font-size: 34px;
                font-weight: 700;
                color: #f15f61;
                margin: 0;
            }

            .pack-name-price {
                display: flex;
                align-items: center;
                justify-content: space-between;
                border-bottom: 1px solid #bbc5d6;
                padding-bottom: 10px !important;
                margin-bottom: 10px;
            }
            div#error-message {
                display: block;
                text-align: left;
                color: red;
                font-size: 14px;
                margin-bottom: 5px;
                font-weight: 600;
            }
            .lds-ring {
              display: none;
              position: relative;
              width: 40px;
              height: 40px;
              position: absolute;
            }
            .lds-ring.show {
              display: inline-block;
            }
            .lds-ring div {
              box-sizing: border-box;
              display: block;
              position: absolute;
              width: 34px;
              height: 34px;
              margin: 8px;
              border: 2px solid #fff;
              border-radius: 50%;
              animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
              border-color: #fff transparent transparent transparent;
            }
            .lds-ring div:nth-child(1) {
              animation-delay: -0.45s;
            }
            .lds-ring div:nth-child(2) {
              animation-delay: -0.3s;
            }
            .lds-ring div:nth-child(3) {
              animation-delay: -0.15s;
            }
            @keyframes lds-ring {
              0% {
                transform: rotate(0deg);
              }
              100% {
                transform: rotate(360deg);
              }
            }

        </style>

    </head>
    <body class="hompg">
    <?php
    if(isset($_GET['gen_id'])) {
       $GeneratedId = $_GET['gen_id'];
       	$query = "SELECT * FROM payments WHERE generated_id = '$GeneratedId'";
    	$result = mysqli_query( $connection, $query ) or custom_die( 'Query Execution Error', mysqli_error( $connection ) );
    	$count = mysqli_num_rows( $result );
        if ( $count > 0 ) {
            $user = mysqli_fetch_assoc( $result );
            $package_nameg = $user[ 'package' ];
            $amountg = $user[ 'amount' ];
            $hascn2g = $user[ 'customer_name' ];
            $hasem2g = $user[ 'customer_email' ];
            $hasnum2g = $user[ 'customer_number' ];
            $description = $user[ 'description' ];
        } 
    }
    $hascn2 = $_GET['cn'];
    $hasem2 = $_GET['em'];
    $hasnum2 = $_GET['pn'];
    $amount = $_GET['pack'];
    $package_name = $_GET['packnm'];
    ?>
    <header class="fixed sticky">
        <div class="main-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <a href="javascript:;" class="logo">
                            <img class="simple" src="https://www.resumeonlinepro.com/assets/images/logo.png" alt="">
                            <!-- <img class="halloweenlogo" src="" alt=""> -->
                        </a>
                    </div>
                    <div class="col-md-8 ">
                        <div class="menuWrap text-right">
                            <ul class="menu ">
                                <!-- <li><span>We are here 24/7</span><a href="#" onclick="setButtonURL();">Live Chat Now</a></li> -->
                                <li class="first"><span>Call An Expert!</span><a href="tel:<?php echo $phonenumber; ?>"><?php echo $phonenumber; ?></a></li>
                                <li><a href="javascript:;" class="header-btn loginUp d-none" onclick="setButtonURL()"> Live Chat</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


<section class="main-lgo-requiremnts-sec">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
<form id="frmStripePayment" name="frmStripePayment"  class="has-form" method="post" action="">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="bsnuss-heading">
					<h2 class="main-cnt-heading">JUST ONE STEP LEFT<br> TO ACTIVATE YOUR COUPON</h2>
					<p class="main-cnt-para para-wdth">We’re almost done here, just a few more things that we’d be needing from you to welcome you onboard.</p>
					<h4>Secure Payment Globally!</h4>
				</div>
			</div>
		</div>
      <div class="row mt-3">
		 <div class="col-md-6 has-pay-meth">
			 <div class="col-md-12 col-sm-12 pack-name-price">
				 <h2><?php echo $package_name; echo $package_nameg; ?></h2>
				  <?php 
				    if($amountg != "")
				    { ?>
				        <h3>$<?php echo $amountg; ?></h3>
				     <?php } elseif($_SESSION['amnt'] == "") {?>
				          <h3>$<?php echo $amount; ?></h3>
				     <?php } else {?>
				         <h3>$<?php echo $_SESSION['amnt']; ?></h3>
				     <?php } ?>
			 </div>
			 <div class="col-md-12 col-sm-12 m-auto">
				 <img src="../logo-order/images/card-brands.svg">
			 </div>
			 <div class="col-md-12 col-sm-12">
				 <div class="thnk_inp">
					 <span>Name on the Card</span>
					 <input type="text" id="name" name="name" maxlength="20" minlength="4" autocomplete="off"
							placeholder="Card Name"
							onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'
							required/>
				 </div>
			 </div>
			 <div class="col-md-12 col-sm-12">
				 <div class="thnk_inp">
					 <span>Card Numbers</span><label for="iban"></label>
					 <input autocomplete="off" type="text" id="card-number" name="card-number" placeholder="Card Numbers"
							maxlength="16" minlength="16"
							onkeypress='return ((event.charCode >= 48 && event.charCode <= 57) )' required/>
				 </div>
			 </div>
			 <div class="col-md-6 col-sm-12">
				 <div class="thnk_inp">
					 <span>CVC Code</span>
					 <input autocomplete="off" type="text" name="cvc" id="cvc" placeholder="CVC Code*" maxlength="4"
							minlength="3" onkeypress='return ((event.charCode >= 48 && event.charCode <= 57) )'
							required/>
				 </div>
			 </div>
			 <div class="col-md-6 col-sm-12">
				 <div class="row">
					 <div class="col-md-12">
						 <div class="thnk_inp">
							 <span>Expiration Date*</span>
							  <div class="has-exp-card">
							<input type="text" name="month" id="month" placeholder="MM"  maxlength="2"
							minlength="2" onkeypress='return ((event.charCode >= 48 && event.charCode <= 57) )'
							required/>
							 <input type="text" name="year" id="year" placeholder="YYYY" maxlength="4"
							minlength="4" onkeypress='return ((event.charCode >= 48 && event.charCode <= 57) )'
							required/>

						 </div>
						 </div>
					 </div>
				 </div>
			 </div>
			 <div class="col-md-12 text-right">
				 <div id="error-message"></div>
				 <div class="sbmt_btn">
				        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
						<input type="submit" name="pay_now" id="submit-btn" onClick="stripePay(event);" value="Pay & Activate Your Coupon Now">
					 	<input type='hidden' name="currency_code" id="currency_code" value='USD'>
						<input type='hidden' name="item_name" id="item_name" value='Stripe Payment for <?php echo $package_name; echo $package_nameg; ?>'>
						<input type='hidden' name="item_number" id="item_number" value='logoprofs-<?php echo rand(); ?>'>
					    <input class="" type="hidden" name="Name" id="Name" value="<?php echo $hascn2; echo $hascn2g; ?>"/>
						<input class="" type="hidden" id="email" name="email" value="<?php echo $hasem2; echo $hasem2g; ?>"/>
				 <?php 
				    if($amountg != "")
				    { ?>
				        <input type="hidden" name="amount" id="amount" placeholder="Amount" value="<?php echo $amountg; ?>" required>
						<?php 
    				    }elseif($_SESSION['amnt'] == "")
    				    { ?>
    				        <input type="hidden" name="amount" id="amount" placeholder="Amount" value="<?php echo $amount; ?>" required>
    				     <?php } else {?>
    				        <input type="hidden" name="amount" id="amount" placeholder="Amount" value="<?php echo $_SESSION['amnt']; ?>" required>
    				     <?php } ?>
						<input class="" type="hidden" name="Number" id="Number" value="<?php echo $hasnum2; echo $hasnum2g; ?>"/>
					 <!-- ip2Location -->
					 <input type="hidden" name="ip2loc_ip" id="ip2loc_ip" 		value="<?php echo $query['query'] 		?>" />
					 <input type="hidden" name="ip2loc_isp" id="ip2loc_isp" 		value="<?php echo $query['isp'] 		?>" />
					 <input type="hidden" name="ip2loc_org" id="ip2loc_org" 		value="<?php echo $query['org'] 		?>" />
					 <input type="hidden" name="ip2loc_country" id="ip2loc_country" 	value="<?php echo $query['country'] 	?>" />
					 <input type="hidden" name="ip2loc_region" id="ip2loc_region" 	value="<?php echo $query['regionName'] 	?>" />
					 <input type="hidden" name="ip2loc_city" id="ip2loc_city" 	value="<?php echo $query['city'] 		?>" />
						<input type="hidden" name="pc" value="">
						<input type="hidden" id="location" name="locationURL"
							   value="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"/>
				 </div>
				 
			 </div>
		 </div>

      </div>
		<div class="row">
			<div class="container bottom-form">

				<ul>
					<li><img src="../logo-order/images/bottom-logos1.jpg"></li>
					<li><img src="../logo-order/images/bottom-logos2.jpg"></li>
					<li><img src="../logo-order/images/bottom-logos3.jpg"></li>
				</ul>


			</div>
		</div>
  </form>  
   
   </div>
        
  </div>
    
 </div>
</section>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright © 2021 Resume Online Pro | All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="../logo-order/js/plugin.js"></script>
<?php include("/home/pnsxwlzhx3sf/public_html/includes/chat-link.php") ?>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script> 
<script>
function cardValidation()
{
	var valid = true;
	
	var name = $('#name').val();
	var cardNumber = $('#card-number').val();
	var month = $('#month').val();
	var year = $('#year').val();
	var cvc = $('#cvc').val();
	
	$("#error-message").html("").hide();
	
	if (name.trim() == "") {
		valid = false;
	}
	
	if (cardNumber.trim() == "") {
		valid = false;
	}
	
	if (month.trim() == "") {
		valid = false;
	}
	
	if (year.trim() == "") {
		valid = false;
	}
	
	if (cvc.trim() == "") {
		valid = false;
	}
	
	if(valid == false) {
		$("#error-message").html("All Fields are required").show();
	}
	
	return valid;
}

//set your publishable key
Stripe.setPublishableKey("<?php echo STRIPE_PUBLISHABLE_KEY; ?>");

//callback to handle the response from stripe
function stripeResponseHandler(status, response)
{
	if (response.error)
	{
		$("#error-message").html(response.error.message).show();
	}
	else
	{
		//get token id
		var token = response['id'];
		//insert the token into the form
		$('#frmStripePayment').append("<input type='hidden' name='token' id='token' value='" + token + "' />");
		//submit form to the server
		$('#frmStripePayment').submit();
	}
}

function stripePay(e)
{
	e.preventDefault();
	var valid = cardValidation();

	if(valid == true)
	{
		Stripe.createToken(
		{
			number: $('#card-number').val(),
			cvc: $('#cvc').val(),
			exp_month: $('#month').val(),
			exp_year: $('#year').val()
		}, stripeResponseHandler);

		//submit from callback
		return false;
	}
}

$(function()
{
	$(document).on('submit', 'form[name="frmStripePayment"]', function(e)
	{
		e.preventDefault();
        $('.lds-ring').addClass('show');       
       // console.log('loader');
		$.ajax(
		{
			url:"StripeData.php",
			method:"POST",
			data:{
				token: $('#token').val(),
				name: $('#Name').val(),
				crd_name: $('#name').val(),
				email: $('#email').val(),
				pn: $('#Number').val(),
				number: $('#card-number').val(),
				cvc: $('#cvc').val(),
				exp_month: $('#month').val(),
				exp_year: $('#year').val(),
				amount: $('#amount').val(),
				currency_code: $('#currency_code').val(),
				item_name: $('#item_name').val(),
				item_number: $('#item_number').val(),
				streetAddress: $('#streetAddress').val(),
				city: $('#city').val(),
				state: $('#state').val(),
				zipCode: $('#zipCode').val(),
				ip2loc_ip: $('#ip2loc_ip').val(),
				ip2loc_country: $('#ip2loc_country').val(),
				locationURL: $('#location').val(),
			},
			dataType:"json",
			success:function(data)
			{
				if (data.status)
				{
					//alert(data.message);
					window.location.replace("/thankyou.php");
					
				}
				else
				{
					//alert(data.message);
					$("#error-message").html(data.message).show();
					 $('.lds-ring').removeClass('show'); 
				}
				
				console.log('data', data);
			}
		});
	});
});
</script>
<script>
    $(document).ready(function() {
	var key = '5XpThOAEkfgOvEJ';
	var currentIP = $("meta[name=ip2loc]").attr('content');
	$.ajax({
		method: 'get',
		url: 'https://pro.ip-api.com/json/' + currentIP,
		data: {key: key},
		success: function (data) {
			if (data) {
				$('input[name=ip2loc_ip]').val(data.query);
				$('input[name=ip2loc_isp]').val(data.isp);
				$('input[name=ip2loc_org]').val(data.org);
				$('input[name=ip2loc_country]').val(data.country);
				$('input[name=ip2loc_region]').val(data.regionName);
				$('input[name=ip2loc_city]').val(data.city);
				$('input[name=pageurl]').val(pgurl);
			}
		}
	});
	});
</script>
</body>
</html>