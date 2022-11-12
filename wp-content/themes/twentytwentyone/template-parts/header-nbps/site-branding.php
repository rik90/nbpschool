<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
			<?php if ( has_custom_logo() && $show_title ) : ?>
				
					<div class="site-logo sulogo"><?php the_custom_logo(); ?></div>
				
				<?php endif; ?>
		
<!-- <div class="site-branding"> -->
	<?php if ( has_custom_logo() && ! $show_title ) : ?>
		<div class="sulogo"><?php the_custom_logo(); ?></div>
	<?php endif; ?>
	</div>
	<?php  if ( $blog_info ) : ?>
		<?php if ( is_front_page() && ! is_paged() ) : ?>
			<h1 class="<?php echo esc_attr( $header_class ); ?>"><?php echo esc_html( $blog_info ); ?></h1>
		<?php elseif ( is_front_page() && ! is_home() ) : ?>
			<h1 class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></h1>
		<?php else : ?>
			<p class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ( $description && true === get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
		<p class="site-description">
			<?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput ?>
		</p>
	<?php endif;  ?>
<!-- </div> --> <!-- .site-branding -->
<div class="col-sm-10">
	<div class="topcolorbar2">
	<div class="topcolorbar">
		<i class="fa fa-envelope"></i><p>info@gmail.com</p>
		<p><i class="fa fa-phone" style="margin: 6px 12px 10px 9px;"></i> +91 000 111 1111 </p>  
		
		<div class="myright">
		<div class="footer-social" style="">
					<!--<ul>
				 <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
					<li><a href="https://www.pinterest.com/devitemsllc/"><i class="zmdi zmdi-pinterest"></i></a></li>
					
					<li><a href="https://twitter.com/devitemsllc"><i class="zmdi zmdi-twitter"></i></a></li> 
				</ul>    -->
				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<ul class="">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'social',
								//'items_wrap'     => '%3$s',
								'container'      => false,
								'depth'          => 1,
								// 'link_before'    => '<span>',
								// 'link_after'     => '</span>',
								//'fallback_cb'    => false,
							)
						);
						?>
					</ul><!-- .footer-navigation-wrapper -->
				<?php endif; ?>
			</div>
			
			<a class="default-btn" href="#" style="float:left;     background: #f58220;"> Admission 2023-2024</a>
		</div>
		
	</div>
	</div>
