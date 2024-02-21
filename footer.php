
      </div>

      <footer id="colophon">
         <div class="container text-center">
            <div class="col-12">
               test
               <img src="" alt="">
            </div>
         </div>
         <div class="container">
            <div class="inner-wrap">
               <?php get_sidebar( 'footer' ); ?>

               <div class="footer-bottom clearfix">
                  <div class="row">
                     <div class="col-6">
                        <p>© 2024 Krupp KI & Web. Alle Rechte vorbehalten.</p>
                     </div>
                     <div class="col-6">
                        <div class="footer-nav">
                           <?php
                              if ( has_nav_menu( 'footer' ) ) {
                                 wp_nav_menu( array( 'theme_location' => 'footer', 'depth' => -1 ) );
                              }
                           ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <a href="#masthead" id="scroll-up"><i class="fa fa-angle-up"></i></a>
   </div><!-- #page -->
   <?php wp_footer(); ?>
</body>
</html>