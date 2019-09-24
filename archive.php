<?php
/**
 * Template Name: Archives
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
    <!-- body blog + page nation -->
    <!-- まずは大きなくくりとしてコンテナー このDIVは結局機能していない https://tech-dig.jp/css%E3%81%A0%E3%81%91%E3%81%A7%E3%82%B5%E3%82%A4%E3%83%89%E3%83%90%E3%83%BC%E3%82%92%E5%9B%BA%E5%AE%9A%E3%83%BB%E3%82%B9%E3%82%AF%E3%83%AD%E3%83%BC%E3%83%AB%E3%81%AB%E8%BF%BD%E5%BE%93%E3%81%99/ -->
      <br><br><br><br>  
      
      <h2 class="title">BLOG</h2>
      
　　　<!--1, メインコンテンツ -->
    <div class="main-archive">　<!--display:flex　を使うため-->
    <div class="blog-article">　
      <!--ここにいくつまでの記事を載せるか決めるPHP置く-->
        <?php query_posts( array( '' => 8, 'paged' => get_query_var('paged') ) );//pagedとposts_per_pageの指定
          ?>
           <?php wp_pagenavi(); ?>
        <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
        ?>
        <ul>
            <li class="blogNest">
              <div>
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(300,200)); ?></a>
                  <?php else : ?>  
                    <img src="<?php get_template_directory_uri(); ?>/images/e-katyou.png" alt="blog1-img">
                <?php endif; ?>
              </div>
               
               <div class="blog-list">
                  <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                  </a>
                  <h5><?php echo get_the_date(); ?></h5>
                  <h5><?php the_category('/'); ?></h5>
                  <?php the_excerpt(); ?>
                </div>
            </li> 
        </ul>
     
          <?php  endwhile;  ?>
        
          <!--1-2,  page nation -->
         
            <?php wp_pagenavi(); ?>
     
        
         <?php else :  ?>

          <p>記事はありません。</p>

        <?php
          endif;   wp_reset_query();
        ?>
      </div>　<!-- blog article の閉め-->
      <!--2, side bar -->
      <div class="sidebar-origin">
          <div class="sidebar__item--fixed" >
            <?php get_sidebar(); ?>
          </div>
      </div>
      <!-- sidebar はここまで -->
    </div><!--閉め　class="main-archive"-->
    <!-- footer -->
    <?php get_footer(); ?>