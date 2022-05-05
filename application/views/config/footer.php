<footer class="footr_area">


        <div class="footer_copyright">
            <div class="container">
                <div class="float-sm-left">
                    <h5 class="text-white">
                        
                        Copyright ©
                        <script>
                            document.write(getFullYear());
                        </script>2021 All rights reserved sammyjoe | developed by <a href="https://parallelbox.ng" target="_blank">parallelboxng</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </h5>
                </div>
                <div class="float-sm-right">
                    <ul>
                        <li><a href="#" class="text-white"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" class="text-white"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="text-white"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="text-white"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#" class="text-white"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#" class="text-white"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    
<div id="WAButton" style="z-index:99999999999;"></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>/asset/js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/asset/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
    <!-- Rev slider js -->
    <script src="<?php echo base_url(); ?>/asset/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <!-- Extra plugin css -->
    <script src="<?php echo base_url(); ?>/asset/vendors/counterup/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/vendors/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/vendors/counterup/apear.js"></script>
    <script src="<?php echo base_url(); ?>/asset/vendors/counterup/countto.js"></script>
    <script src="<?php echo base_url(); ?>/asset/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/smoothscroll.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/swiper.min.js"></script>

    <script src="<?php echo base_url(); ?>/asset/js/theme.js"></script>
    <script src="<?php echo base_url(); ?>/asset/js/main.js"></script>

<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
<script>

$(function() {
  $('#WAButton').floatingWhatsApp({
    phone: '+2348130048542', //WhatsApp Business phone number International format-
    //Get it with Toky at https://toky.co/en/features/whatsapp.
    headerTitle: 'Chat with customer service !', //Popup Title
    popupMessage: 'Hello, how can we help you', //Popup Message
    showPopup: true, //Enables popup display
    buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
    //headerColor: 'crimson', //Custom header color
    //backgroundColor: 'crimson', //Custom background button color
    position: "right"    
  });
});
</script>
  <script>
  if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('service-worker.js')
      .then(function(reg){
        console.log("Yes, it did.");
      }).catch(function(err) {
        console.log("No it didn't. This happened: ", err)
      });
  }
</script>
<script>
   if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js', {
            scope: '.' // THIS IS REQUIRED FOR RUNNING A PROGRESSIVE WEB APP FROM A NON_ROOT PATH
        }).then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    }
</script><script src="<?php echo base_url();?>service-worker.js">
        // Service worker for Progressive Web App
 
</body>

</html>