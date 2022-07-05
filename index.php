<?php get_header(); ?>
<div id="cursor" class="cursor">

<section class="content">
      <h3>
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/images/topsp.png" media="(max-width:414px)">
          <img src="<?php echo get_theme_file_uri(); ?>/images/top.png" alt="">
        </picture>
      </h3>
      <ul>
        <?php
          if( have_posts() ) : while( have_posts() ) : the_post();
        ?>
        <li>
          <section class="items">
            <h4>
              <figure>
                <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_post_thumbnail('medium_large'); ?></a>
                <figcaption>
                  <?php
                    $cat = get_the_category();
                    echo $cat[0]->name;//単一のカテゴリー名を出力
                  ?>
                </figcaption>
              </figure>
            </h4>
            <p class="itemtitle"><?php the_title(); ?></p>
            <p class="itemtags">
              <?php the_tags('<span>','</span><span>','</span>'); ?>
            </p>
            <p class="itemdate"><time datetime="<?php echo get_the_date('Y/m/d'); ?>"><?php echo get_the_date('Y/m/d'); ?></time></p>
          </section>
        </li>
        <?php
          endwhile; else :
        ?>
          <li>記事はありません</li>
        <?php
          endif;
        ?>  
      </ul>
    </section>
    <section class="update">
      <h3>Update</h3>
      <?php 
      //ざぷループを設定
      $args = array(
        'post_type' => 'post',//通常投稿を取得
        'posts_per_page' => '3',//取得したい投稿数を指定
      );
      $posts_array = get_posts($args);//必要なデータをget_posts()で取得
      ?>
      <dl>
        <?php foreach($posts_array as $post) : setup_postdata($post); ?>
        <dt><?php echo get_the_date('Y/m/d'); ?></dt>
        <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?>についてアップ</dd>
        <?php endforeach; wp_reset_postdata(); ?>
      </dl>
    </section>
<?php get_footer(); ?>    
