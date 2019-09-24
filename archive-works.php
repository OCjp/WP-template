<?php
/**
 * Template Name: works
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
    <!-- bady, contents -->
    <div>
      <br><br><br><br>
      <h2 class="title">WORKS</h2>
      <div class="card">
        <?php wp_pagenavi(); ?>
        <ul>
          <!-- testここから -->
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- ここにloopさせる内容を記述。fanction.phpに定義を記載して、表示可能となっている。 -->


         <li>
                <div class="workNest">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(300,200)); ?></a>
                      <?php else : ?>    
                        <img class="workImg" src="<?php get_template_directory_uri(); ?>/images/condo/4.jpg" alt="picture"> 
                    <?php endif; ?>
    
                    <div class="work-list">
                        <h3 class="work-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <h4 class="work-text">-カテゴリ：<?php the_category('/'); ?>-</h4>
                        <?php the_excerpt(); ?>
                    </div> 

                </div>
              </li>
                

            <?php endwhile; ?>
             <!--1-2,  page nation -->
           
              <?php wp_pagenavi(); ?>
        
          <?php else : //記事が無い場合 ?>
              <li><p>記事はまだありません。</p></li>
          <?php endif;
            wp_reset_postdata(); //クエリのリセット ?>
      　　<!-- testここまで -->
          
       
       </ul>
       　<br><br><br>
      </div>
    </div>
    
    <!-- footer -->
    <?php get_footer(); ?>
    