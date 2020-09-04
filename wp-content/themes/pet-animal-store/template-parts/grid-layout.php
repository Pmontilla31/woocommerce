<?php
/**
 * The template part for displaying slider
 *
 * @package Pet Animal Store
 * @subpackage pet_animal_store
 * @since Pet Animal Store 1.0
 */
?>
<div class="col-lg-4 col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="services-box">
      <?php if(has_post_thumbnail()) { ?>
        <div class="service-image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php }?>
      <div class="service-text">
        <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html(the_title()); ?><span class="screen-reader-text"><?php esc_html(the_title()); ?></span></a></h2>
        <?php if(get_the_excerpt()) { ?>
          <p><?php $excerpt = get_the_excerpt(); echo esc_html( pet_animal_store_string_limit_words( $excerpt, esc_attr(get_theme_mod('pet_animal_store_post_excerpt_length','20')))); ?><?php echo esc_html( get_theme_mod('pet_animal_store_button_excerpt_suffix','[...]') ); ?></p>
        <?php }?>
        <?php if ( get_theme_mod('pet_animal_store_post_button_text','Read More') != '' ) {?>
          <div class="service-btn">
            <a href="<?php esc_url(the_permalink()); ?>" ><?php echo esc_html( get_theme_mod('pet_animal_store_post_button_text',__( 'Read More','pet-animal-store' )) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('pet_animal_store_post_button_text',__( 'Read More','pet-animal-store' )) ); ?></span></a>  
          </div> 
        <?php }?>
      </div>
    </div>
  </article>
</div>