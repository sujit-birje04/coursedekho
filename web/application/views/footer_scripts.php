

        <!-- Javascripts -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    	<script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/leaflet.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.fitvids.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.sequence-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.bxslider.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main-menu.js"></script>
    	<script src="<?php echo base_url(); ?>assets/js/template.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/facebook.js"></script>
        <script src="https://apis.google.com/js/client:platform.js" async defer></script>

        <script src="<?php echo base_url(); ?>assets/js/google.js"></script>


          <?php
            if($this->router->fetch_class() == 'home'){
          ?>
            <script>      
                    $(document).on('click', 'a.page-scroll', function(event){
                        $('html, body').animate({scrollTop : $('#feature').offset().top},800);
                    });
                  
                    $('.bxslider').bxSlider({
                      adaptiveHeight: true,
                      mode: 'fade'
                    });
                    
                    $(window).load(function(){
                        $(window).scroll();
                    })
                    
                    $(document).ready(function(){
                        $(window).scroll();
                        $(window).scroll(function(){
                            //console.log($(this).scrollTop()+65);
                            //console.log('----'+$('#feature').position().top);
                            if($(this).scrollTop()+65 >= $('#feature').position().top)
                            {
                                //console.log('in')
                                $('.cd_homeFixedNav').addClass('cd_blackNav')
                            }
                            else{
                                //console.log('out')
                                                $('.cd_homeFixedNav').removeClass('cd_blackNav')

                            }
                        });
                   
                        //Check to see if the window is top if not then display button
                        $(window).scroll(function(){
                            if ($(this).scrollTop() > 100) {
                                $('.scrollToTop').fadeIn();
                            } else {
                                $('.scrollToTop').fadeOut();
                            }
                        });
                        
                        //Click event to scroll to top
                        $('.scrollToTop').click(function(){
                            $('html, body').animate({scrollTop : 0},800);
                            return false;
                        });
                      
                    });
            </script>
            
            <script>
                  $(document).ready(function(){
                    // Add smooth scrolling to all links in navbar + footer link
                    $(".navbar a, footer a[href='#myPage'], .overlay-detail a").on('click', function(event) {

                    // Prevent default anchor click behavior
                   // event.preventDefault();

                    // Store hash
                    var hash = this.hash;
                    
                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                      //scrollTop: $(hash).offset().top
                    }, 900, function(){

                      // Add hash (#) to URL when done scrolling (default click behavior)
                      window.location.hash = hash;
                      });
                    });
                  })
            </script>

            <script>
                $(window).load(function(){
                    $('#cd_MyLocation').modal('show');
                })
            </script>
        <?php
            }
        ?>


    </body>
</html>