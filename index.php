<?php get_header(); ?>
 <!-- custom header -->
          <?php $header_image = get_header_image();
            if ( ! empty( $header_image ) ) : ?>
                <div id="header_img">
                    <a href="<?php echo home_url(); ?>"><img id="hero" src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>"  /></a>
                </div>
           <?php endif;?>
           <div id="heroText">
      <h1>CC Art Station</h1>
      <h3>Let's try wright your thought artly</h3>
    </div>
    <!-- contents 1/3 : blog -->
    <div class="bg1">
      <h2 class="title">BLOG</h2>
      <?php query_posts('posts_per_page=3'); ?>
      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
      ?>
      
          <div class="blogNest">
            
              <div>
                  <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(array(300,200)); ?>
                    <?php else: ?>
                      <img src="<?php get_template_directory_uri(); ?>/images/e-katyou.png" alt="blog1-img">
                  <?php endif; ?>
              </div>
              
              <div class="blog-list">
                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                <h5><?php echo get_the_date(); ?>　【<?php the_category(','); ?>】</h5>
                <?php the_excerpt(); ?>
              </div>
            
          </div>
      <?php  
          endwhile;
        else:
      ?>

      <P>記事はありません！</P> 

      <?php 
      endif;      
      ?>


      <div class="center">
    
        <a class="button" href="<?php echo get_permalink(99); ?>">See More!</a>
        
      </div>
    </div>
    <!-- contents 2/3 : works -->
    <div id="work">
      <br><br><br>
      <h2 class="title">OUR ACTIVITIES</h2>
      <ul class="works">
        <?php $args = array(
                  'numberposts' => 3,                //表示（取得）する記事の数
                  'post_type' => 'Works'    //投稿タイプの指定
               );
                  $posts = get_posts( $args );
            if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); 
        ?>
             
        <li class="workOne">

          <div>
          <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(300,200)); ?></a>
                      <?php else : ?>    
                        <img class="workImg" src="<?php get_template_directory_uri(); ?>/images/condo/4.jpg" alt="picture"> 
                    <?php endif; ?>
    
                    <div class="work-list">
                        <h3 class="work-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_excerpt(); ?>
                    </div> 

                </div>
              </li>
                

          <?php endforeach; ?>
          <?php else : //記事が無い場合 ?>
              <li><p>記事はまだありません。</p></li>
          <?php endif;
            wp_reset_postdata(); //クエリのリセット ?>
        
      </ul>
      <div class="center">
         <a href="<?php echo get_post_type_archive_link('works'); ?>" class="button">See More!</a> 
      </div>
      <!-- <input type="button" onclick="works.php()" value="See More!" > これ失敗。。-->
    </div>
    <!-- contents 3/3 : contact -->
    <section class="center">
      <br><br><br>
      <h2 class="title">CONTACT</h2>
      <p class="text">If you have a interest to join a lesson, let's contant us!! <br>We'are wating for joining you!!! </p>
      <br>
      <p class="text">書道教室以外にも、フライヤーやロゴ等、各種デザインを行っておりますので、<br>お気軽にお問い合わせください。お待ちしております。</p>     
            
      <a class="button" href="<?php echo get_permalink( 129 ); ?>">Contact Us</a>
    </section>
    
    <!-- footer -->
    <?php get_footer(); ?>
   