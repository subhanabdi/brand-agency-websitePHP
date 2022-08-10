<script src="assets/js/vendor/vendor.min.js"></script>
      <script src="assets/js/plugins/plugins.min.js"></script>
      <script src="assets/js/ajax-contact.js"></script>
      <script src="assets/js/plugins/aos.js"></script>
      <script src="assets/js/plugins/waypoints.js"></script>
      <script src="assets/js/plugins/jquery.selectric.min.js"></script>
      <script src="assets/js/main.min.js"></script>


<script>
   $(document).ready(function() {
    $('.popup-open').click(function() {
        $('.popupMain').fadeIn();
        $('.overlay').fadeIn();
    });

    $('.closePop,.overlay').click(function() {
        $('.popupMain').fadeOut();
        $('.overlay').fadeOut();
    });

     /* Tab */
     $('[data-targetit]').on('click', function(e) {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
        var target = $(this).data('targetit');
        $('.' + target).siblings('[class^="box-"]').hide();
        $('.' + target).fadeIn();
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





      