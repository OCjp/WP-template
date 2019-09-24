<?php
/**
 * Template Name: single-works
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage CC Art Station.Ver2
 * @since CC Art Station.Ver2 1.0
 */
?>

<?php get_header(); ?>
    <!-- main part -->
    <br><br><br><br>
    <h2 class="title">OUR ACTIVITES</h2>
    <h4 class="pan1">OUR ACTIVITIES > topic</h4>
    <div class="single-1">
      <!-- main article   -->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       
       <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(300,200)); ?></a>
          <?php else : ?>    
            <img class="banar-img2" src="<?php get_template_directory_uri(); ?>/images/condo/4.jpg" alt="Eye-Catch"> 
        <?php endif; ?> 
                 
      <div class="works-single">
          <h2 class="article-title"><?php the_title(); ?></h2>
          <h3><?php echo get_the_date(); ?></h3>
          <br>
          <h3><?php the_category('/'); ?></h3>
           
            <p class="article-paragraph"><?php the_content(); ?></p>
      
      </div>
    </div>
    
    <?php endwhile; ?>
    <?php else : //記事が無い場合 ?>
        <li><p>記事はまだありません。</p></li>
    <?php endif;    ?>
    <!-- footer -->
    <?php get_footer(); ?>