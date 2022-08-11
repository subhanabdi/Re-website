<?php

if(isset($_POST['submit'])){
    $con_name = $_POST['con_name'];
    $con_email = $_POST['con_email'];
    $phone = $_POST['phone'];
    $pc = $_POST['pc'];
    $packages = $_POST['packages'];
    $con_subject = 'Resume Online Pro';
    $con_message = $_POST['con_message'];
    
}

                        define('DBHOST', 'localhost');
                        define('DBUSER', 'interons_ronline');
                        define('DBPASS', '4o8^PYO],=pH');
                        define('DBNAME', 'interons_ronlinepro');
                        define('DEBUG', true);
                        $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or custom_die('Database Connection Error', mysqli_connect_error());

						if ($connection->connect_error) {
							die("Connection failed: " . $connection->connect_error);
						}else{
							$sql = "INSERT INTO all_lead (con_name, con_email, phone, pc, packages, con_message) VALUES ('$con_name', '$con_email', '$phone', '$pc', '$packages', '$con_message')";
							if($connection->query( $sql ) == TRUE){
							    
							}
					}
    
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <title>Resume Online Pro </title>
      <meta name="keywords" content="">
      <?php include("includes/style.php"); ?>
      <style>
         .thank-you-pg {
             background-repeat: no-repeat;
             background-position: center;
             background-size: cover;
             height: 66.7vh;
             display: flex;
             align-items: center;
             padding: 50px 0;
         }
         .cont-thankyou {
             text-align: center;
             padding: 70px 0 0 0;
         }
         .cont-thankyou h1 {
             font-size: 87px;
             color: #ffffff;
             font-weight: 700;
             margin-bottom: 20px;
             text-transform: uppercase;
         }
         .cont-thankyou p {
             font-size: 20px;
             color: #ffffff;
             margin-bottom: 25px;
         }
         ul.inline-b li {
             display: inline-block;
         }
         .btn-default {
             font-size: 15px;
             font-weight: 500;
             text-transform: capitalize;
             color: #ffffff;
             border: 2px solid #ffffff;
             border-radius: 10px;
             padding: 13px 0;
             text-align: center;
             overflow: hidden;
             display: inline-block;
             position: relative;
             min-width: 190px;
             z-index: 1;
             background: transparent;
         }
         ul.inline-b li+li {
             margin-left: 20px;
         }
         @media (max-width: 1440px){
            .thank-you-pg{height: 78vh;}
         }

         @media (max-width: 824px){
            .thank-you-pg .container{width: 100%;}
            .cont-thankyou h1{font-size: 40px;}
            .cont-thankyou p br{display: none;}
            .cont-thankyou p{font-size: 18px;}
            .inline-b{padding: 0; width: 100%;}
            ul.inline-b li+li{margin-left: 15px;}
            .btn-default{min-width: 145px;}
            .thank-you-pg{height: 490px; background-position: left;}
         }
      </style>
   </head>
   <body>

      <?php include("includes/header.php"); ?>
      
      <?php include("includes/header-inner.php"); ?>

      <section class="thank-you-pg" style="background-image: url('assets/images/banner-thankyou.jpg');">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="cont-thankyou">
                     <h1>REQUEST SENT <br>SUCCESSFULLY!</h1>
                     <p>Thanks! We Have Received Your Request. Expect A Quick Reply. <br>Should You Have Any Questions Or Queries, <br> Please Feel Free To Contact Our Experts</p>
                     <ul class="inline-b">
                        <li class="first"><a class="btn-default" href="javascript:;" onclick="setButtonURL();">Live Chat</a></li>
                        <li class="last"><a class="btn-default" href="mailto:sales@resumeonlinepro.com">Email Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php include("includes/bottom-sticky-bar.php"); ?>     

      <?php include("includes/footer.php"); ?>
      
      <?php include("includes/script.php"); ?>
   </body>
</html>