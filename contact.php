<?php
/**
 * Template Name: contact
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
    <!-- contents 3/3 : contact -->
    <section class="container">
      <div>
        <div>
          <div>
            <h2 class="title"></h2>
            <p class="text"></p>
          </div>
        </div>
       
      </div>
      <div>
      <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
      ?>

　　　　　　<div>
            <h2 class="title"><?php the_title(); ?></h2>
            <p class="text"></p>
          </div>
      <div class="blog-single">
      
         
              <?php if (has_post_thumbnail()) : ?>
                 <?php the_post_thumbnail(array(300,200)); ?>
               <?php else : ?> 
                
              <?php endif; ?>
            <p class="article-paragraph"><?php the_content(); ?></p>
      
      </div>

      <?php
          endwhile;
          else :
      ?>

        <p>記事はありません。</p>

      <?php
        endif;
      ?>
      </div>
    </section>
    
    <!-- footer -->
    <?php get_footer(); ?>


   