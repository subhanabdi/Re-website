<script type="text/javascript" src="assets/js/layout.js"></script>
      <script type="text/javascript" src="assets/js/intlTelInput.js"></script>
      <script type="text/javascript" src="assets/js/custom.js"></script>
     
      <script>
         $('.countrylist').change( function(){
            
             var thisval = $(this).val(); 
             var thiscode = $(this).attr('data-abbr');
             $('input[name="countrycode"]').val('+'+thisval);
             
             if (thiscode == 'CA') {
                 $(this).siblings('span').removeClass();
                 $(this).siblings('span').addClass('fgca');
             } else {
                 $(this).siblings('span').removeClass();
                 $(this).siblings('span').addClass('fg' + thisval);
             }
             
         });
         $(document).ready(function(){
         $('.openthispopup').on('click', function(e){
           e.preventDefault();
           $('#popup-offer').fadeIn();
           $('.popup-layout').addClass('lockupgrade');
           $('input[name="addons-included"]').val('none');
         });
         })
         
         $('.popup-close').on('click', function() {
           $('.popup-layout').fadeOut();
         });
         
         
      </script>
     
      <script>
         wow = new WOW(
           {
             animateClass: 'animated',
             offset:       100,
             callback:     function(box) {
               console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
             }
           }
         );
         wow.init();
      </script>
      <script type="text/javascript">
         $(document).ready( function(){
         var ip ="43.245.205.212";
         $.getJSON("https://cors-anywhere.herokuapp.com/http://www.geoplugin.net/json.gp?ip=" + ip, function(response) {
          thecountrycode = response.geoplugin_countryCode;
         var thecountry = $('[data-abbr="'+thecountrycode+'"]').val();
         
         if(thecountry==1){
         //   $('#homeformcountry [data-abbr="US"]').prop('selected', true);
         //   $('#homeformcountry').trigger( "change" );
         //  $('#popupformcountry').val(thecountry).trigger( "change" );
            
             
         } else {
         $('#homeformcountry').val(thecountry).trigger( "change" );
         $('.countrylist').val(thecountry).trigger( "change" );
         $('#popupformcountry').val(thecountry).trigger( "change" );
         }
         
         
         
         });
         });
      </script>


       <!--  Start of Zendesk Widget script  -->
        <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=3f306751-2147-4aa9-b9a1-7313ae4cfbea"> </script>
        <script>
            $zopim(function() {
              $zopim.livechat.theme.setColor('#0057e8');
              $zopim.livechat.theme.setColor('#0057e8', 'badge');
           });
           
           function setButtonURL(){ 
              $zopim.livechat.window.show() 
           } 
        </script> 
        <!--   End of Zendesk Widget script  -->










      