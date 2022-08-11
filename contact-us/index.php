<!DOCTYPE html>
<html>
   <head>
      <?php include("../includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Resume Online Pro</title>
      <?php include("../includes/style.php"); ?>
   </head>
   <body>

      <?php include("../includes/header.php"); ?>

      <?php include("../includes/header-inner.php"); ?>

      <section class="innerBanner" style="background-image: url(assets/images/inner-pages/banner/bg-contact.jpg);">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h4><span class="smpls">Contact Us</span></h4>
                  <h5>Let’s Devise Job-Search Strategy For Broader Opportunities  </h5>
                  <!--  <a class="btn-primary loginUp" href="#">Let’s Get Started</a> -->
               </div>
            </div>
         </div>
      </section>
      
      <section class="contact-form">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-8">
                  <div class="headingstyle1">
                     <h2>Get In Touch With Us</h2>
                  </div>
                  <div class="form-sec">
                     <form action="" method="post">
                        <div class="row">
                           <div class="col-md-6 pad-right-7">
                              <div class="field">
                                 <input type="text" name="name" placeholder="Your Name">
                              </div>
                           </div>
                           <div class="col-md-6 pad-left-7">
                              <div class="field">
                                 <input type="email" name="email" placeholder="Email Address">
                              </div>
                           </div>
                           <div class="col-md-6 pad-right-7">
                              <div class="field">
                                 <input type="text" name="phone" placeholder="Phone Number">
                              </div>
                           </div>
                           <div class="col-md-6 pad-left-7">
                              <div class="field">
                                 <input type="text" name="subject" placeholder="Subject">
                                 <input type="hidden" name="thepackage" value="Contact Us">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="field">
                                 <textarea placeholder="Write Message" name="message"></textarea>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="field">
                                 <button type="submit">Submit</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="contact-details">
                     <p>We are here to accommodate to all your resume writing requirements. One of our customer support representatives will get in touch with you shortly.</p>
                     <ul class="phn-eml">
                        <li>
                           <strong>Phone :</strong>
                           <a href="tel:(800) 861-8851"><i class="fa fa-phone" aria-hidden="true"></i> (800) 861-8851</a>
                        </li>
                        <li>
                           <strong>Email :</strong>
                           <a href="mailto:info@resumeonlinepro.com"><i class="fa fa-envelope" aria-hidden="true"></i> info@resumeonlinepro.com</a>
                        </li>
                        <li>
                           <strong>Address :</strong>
                           <a href="javascript:;"><i class="fa fa-map-marker" aria-hidden="true"></i> 110 Plaza West, 3031 Tisch Way, San Jose, CA 95128 </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php include("../includes/footer.php"); ?>

      <?php include("../includes/popup.php"); ?>

      <?php include("../includes/script.php"); ?>
   </body>
</html>