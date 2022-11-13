<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

<!-- Footer Start -->
<footer class="footer-area">
    <div class="main-footer">
        <div class="container">
            <div class="row">
				<!-- Column -1 -->
				<div class="col-lg-4 col-md-6">
                    <div class="single-widget pr-60">
                        <div class="footer-logo pb-25">
							<?php if ( has_custom_logo() ) : ?>
								<div class=""><?php the_custom_logo(); ?></div>
							<?php endif; ?>
								<!-- <a href="index.html"><img src="img/logo/logo.png" alt="eduhome" style="width: 30%;"></a> -->
						</div>
                        <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and give you a coete account of the system. </p>
                    </div>
                </div>

				<!-- Column -2 -->
				<div class="col-lg-2 col-md-6 pt-4 pt-lg-0">
                    <div class="single-widget">
                        <h3>useful links</h3>
						<?php if ( has_nav_menu( 'footer' ) ) : ?>
							<ul class="">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'footer',
										'items_wrap'     => '%3$s',
										'container'      => false,
										'depth'          => 1,
										// 'link_before'    => '<span>',
										// 'link_after'     => '</span>',
										'fallback_cb'    => false,
									)
								);
								?>
							</ul><!-- .footer-navigation-wrapper -->
						<?php endif; ?>
					</div>
				</div>
				
				<!-- Column -3 -->
				<div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>activities</h3>
                        <div class="fround">
						  <p>I must explain to you how all this mistaken idea of denoung pleure</p>
						  <h4>12oct 2022</h4>
						</div>
						<div class="fround">
						  <p>I must explain to you how all this mistaken idea of denoung pleure</p>
						  <h4>12oct 2022</h4>
						</div>
						<div class="fround">
						  <p>I must explain to you how all this mistaken idea of denoung pleure</p>
						  <h4>12oct 2022</h4>
						</div>
						
                    </div>
                </div>
				
				<!-- Column -4 -->
				<div class="col-lg-3 col-md-6 pt-4 pt-lg-0">
                    <div class="single-widget">
                        <h3>CONTACT US</h3>
						 <h5 style="width:53%; float:left; text-align:center; color:#fff; padding:6px; background-color:#00a9eb; border-radius:3px;">BOYS CAMPUS - </h5><br><br>
                        <p style="COLOR:#FFF;">Mission Road, Rangamatia Railgate,<br>Malda - 732128</p>
                        						 <h5 style="width:53%; float:left; text-align:center; color:#fff; padding:6px; background-color:#00a9eb; border-radius:3px;">GIRLS CAMPUS - </h5><br><br>
                        <p style="COLOR:#FFF;">Mangalbari, Ghoshpara Bulbulchandi Road,Malda, 732142</p>
												 <h5 style="width:54%; float:left; text-align:center; color:#fff; padding:6px; background-color:#00a9eb; border-radius:3px;">OFFICE ADDRESS - </h5><br><br>
                        <p style="COLOR:#FFF;">Mangalbari, Sadarghat,<br>Jorakalithan more, Malda 732142k</p>
                    </div>
                </div>
			</div>
        </div>
    </div>   
	

	<div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- <p>Copyright © 2022. All Right Reserved</p> -->
					<p>
						<?php
						printf(
							esc_html__( 'Copyright %s.', 'twentytwentyone' ),
							'© 2022. <a href="' . esc_url( __( 'www.nbpschool.org', 'twentytwentyone' ) ) . '"> North Bengal Public School </a> All Right Reserved'
						);
						?>
					</p>
                </div> 
            </div>
        </div>    
    </div>

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
