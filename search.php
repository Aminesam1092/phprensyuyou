<?php get_header(); ?>
<section class="content">
    <h3>
      <picture>
        <source srcset="images/topsp.png" media="(max-width:414px)">
        <img src="images/top.png" alt="">
      </picture>
    </h3>
    <h4 class="cattitle">検索結果</h4>
      <ul>
        <?php
          if( have_posts() ) : while( have_posts() ) : the_post();
        ?>
        <li>
          <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
        </li>
        <?php
          endwhile; else :
        ?>
          <li>該当する検索結果はありません</li>
        <?php
          endif;
        ?>  
      </ul>
    </section>
<?php get_footer(); ?>    