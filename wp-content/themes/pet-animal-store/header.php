<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-aa">
 *
 * @package Pet Animal Store
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	<?php if(get_theme_mod('pet_animal_store_preloader_hide',true)){ ?>
	    <?php if(get_theme_mod( 'pet_animal_store_preloader_type','center-square') == 'center-square'){ ?>
		    <div class='preloader'>
			    <div class='preloader-squares'>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
			    </div>
			</div>
	    <?php }else if(get_theme_mod( 'pet_animal_store_preloader_type') == 'chasing-square') {?>    
	        <div class='preloader'>
				<div class='preloader-chasing-squares'>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
					<div class='square'></div>
				</div>
			</div>
	    <?php }?>
	<?php }?>
	<header role="banner">
		<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'pet-animal-store' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'pet-animal-store' );?></span></a>
 		<div class="topbar">
		  	<div class="container">
			  	<div class="site_header">
				  	<div class="row">
					    <div class="col-lg-3 col-md-3">
					    	<div class="logo">
						      	<?php if ( has_custom_logo() ) : ?>
					     	    	<div class="site-logo"><?php the_custom_logo(); ?></div>
					            <?php endif; ?>
					            <?php if( get_theme_mod( 'pet_animal_store_site_title',true) != '') { ?>
						            <?php $blog_info = get_bloginfo( 'name' ); ?>
						            <?php if ( ! empty( $blog_info ) ) : ?>
							            <?php if ( is_front_page() && is_home() ) : ?>
							              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							            <?php else : ?>
							              <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							            <?php endif; ?>
						            <?php endif; ?>
						        <?php }?>
						        <?php if( get_theme_mod( 'pet_animal_store_site_tagline',true) != '') { ?>
						            <?php
						            $description = get_bloginfo( 'description', 'display' );
						            if ( $description || is_customize_preview() ) :
						            ?>
						            <p class="site-description">
						              <?php echo esc_html($description); ?>
						            </p>
						            <?php endif; ?>
						        <?php }?>
						    </div>
					    </div>
					    <div class="col-lg-9 col-md-9">
						    <div class="baricon row">
						      	<div class="col-lg-4 col-md-4">
							      	<?php if( get_theme_mod( 'pet_animal_store_mail','' ) != '') { ?>
							      	<div class="mail row">
							      		<div class="col-lg-2 col-md-2 p-0">
							      			<i class="fa fa-at"></i>
							      		</div>
									    <div class="col-lg-10 col-md-10">
									      	<p class="email_title"><?php echo esc_html(get_theme_mod('pet_animal_store_mail_title','')); ?></p>
									        <p class="email icon social fb"><?php echo esc_html( get_theme_mod('pet_animal_store_mail','') ); ?></p>
									    </div>
							    	</div>
							      	<?php } ?>
						    	</div>
						        <div class="col-lg-4 col-md-4">
						      		<?php if( get_theme_mod( 'pet_animal_store_call','' ) != '') { ?>
						        	<div class="phone row">
						        		<div class="col-lg-2 col-md-2 p-0">
						        			<i class="fas fa-phone-volume"></i>
						        		</div>
						        		<div class="col-lg-10 col-md-10">
								      		<p class="call_title"><?php echo esc_html(get_theme_mod('pet_animal_store_call_title','')); ?></p>
								        	<p class="call"><?php echo esc_html( get_theme_mod('pet_animal_store_call','')); ?></p>
								        </div>
							        </div>
						      		<?php } ?>
						        </div>
							    <div class="col-lg-4 col-md-4 p-0">
							    	<div class="social-icon">
									    <?php if( get_theme_mod( 'pet_animal_store_facebook_url') != '') { ?>
									        <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','pet-animal-store' );?></span></a>
									    <?php } ?>
									    <?php if( get_theme_mod( 'pet_animal_store_twitter_url') != '') { ?>
									        <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','pet-animal-store' );?></span></a>
									    <?php } ?>
									    <?php if( get_theme_mod( 'pet_animal_store_instagram_url') != '') { ?>
									        <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_instagram_url','' ) ); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','pet-animal-store' );?></span></a>
									    <?php } ?>
									    <?php if( get_theme_mod( 'pet_animal_store_linkedin_url') != '') { ?>
									        <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','pet-animal-store' );?></span></a>
									    <?php } ?>
									</div>
							    </div>
						    </div>
					    </div>
				    </div>
				</div>
		  	</div>
			<div id="header" class="">
				<div class="container"> 
					<div class="header-slider <?php if( get_theme_mod( 'pet_animal_store_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
						<div class="row m-0">     
							<div class="col-lg-9 col-md-9 col-6 menubg">
								<div class="menubox nav">
								    <div class="toggle-menu responsive-menu">
						                <button role="tab" onclick="pet_animal_store_menu_open()"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','pet-animal-store'); ?></span></button>
						            </div>
					                <div id="menu-sidebar" class="nav side-menu">
					               		<nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'pet-animal-store' ); ?>">
					                   		<?php 
					                        wp_nav_menu( array( 
					                        'theme_location' => 'primary',
					                        'container_class' => 'main-menu-navigation clearfix' ,
					                        'menu_class' => 'clearfix',
					                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
					                        'fallback_cb' => 'wp_page_menu',
					                         ) ); 
					                        ?>
					                    	<a href="javascript:void(0)" class="closebtn responsive-menu" onclick="pet_animal_store_menu_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','pet-animal-store'); ?></span></a>
					                    </nav>
					                </div>
									<div class="clear"></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="col-lg-3 col-md-3 col-6 searchbg">
								<div class="search_form">
								  <?php get_search_form(); ?>
								</div>
							</div> 
						</div> 
					</div>
				</div>
			</div>
		</div>
	</header>