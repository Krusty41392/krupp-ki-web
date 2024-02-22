
      </div>

      <footer id="colophon">
         <div class="container text-center">
            
         </div>
         <div class="container">
            <div class="inner-wrap">
               <?php get_sidebar( 'footer' ); ?>

               <div class="footer-bottom clearfix">
                  <div class="row">
                     <div class="col-4">
                        <h5>Krupp Ki & Web</h5>
                        <p>Industriering 44 <br>
                           41751 Viersen <br>
                           Telefon: <a href="tel:017634587278">0176/34587278</a> <br>
                           E-Mail: <a href="mailto:r.krupp151276@outlook.de">r.krupp151276@outlook.de</a>
                        </p>
                        <p class="copyright">2024 Krupp KI & Web. Alle Rechte vorbehalten.</p>
                     </div>
                     <div class="col-4">
                        <div class="footer-nav">
                           <?php
                              if ( has_nav_menu( 'footer' ) ) {
                                 wp_nav_menu( array( 'theme_location' => 'footer', 'depth' => -1 ) );
                              }
                           ?>
                     </div>
                     <div class="col-4">

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