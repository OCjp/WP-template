<?php
/**
 * Template Name: single
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
    <h4 class="pan">Blog > topic</h4>
    <div class="inner">
      <!-- main article   -->
  
    
     
      <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
      ?>
      <div class="blog-single">
          <h2 class="article-title"><?php the_title(); ?></h2>
          <h3><?php echo get_the_date(); ?></h3>
          <h4>【 <?php the_category('/'); ?> 】</h4>
              <?php if (has_post_thumbnail()) : ?>
                 <?php the_post_thumbnail(array(300,200)); ?>
               <?php else : ?> 
                 <img class="single-img" src="<?php get_template_directory_uri(); ?>/images/e-katyou.png" alt="Eye-Catch">
              <?php endif; ?>
            <p class="article-paragraph"><?php the_content(); ?></p>
      
      </div>

      <?php
          endwhile; ?>

          <?php  else :
      ?>

        <p>記事はありません。</p>

      <?php
        endif;
      ?>
      <!-- sidebar -->
      
      <div class="sidebar-origin">   
        <?php get_sidebar(); ?>
   　 </div>
      <!-- finised sideber -->   
  
    </div><!--the end of a class="inner"-->
    <!-- footer -->
    <?php get_footer(); ?>
    


 