<script src="assets/js/jquery.js"></script>
      <script src="assets/js/custom.js"></script>
     
      <script>
         Conclave.auto();
         new WOW().init();
         
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
         $('.countrylist').change(function() {
          var thisval = $(this).children('option:selected').val();
          var thiscode = $(this).children('option:selected').attr('data-abbr');
          $('#popupcountrycode').val("+" + thisval);
          if (thiscode == 'CA') {
              $(this).siblings('span').removeClass();
              $(this).siblings('span').addClass('fgca');
          } else {
              $(this).siblings('span').removeClass();
              $(this).siblings('span').addClass('fg' + thisval);
          }
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









      