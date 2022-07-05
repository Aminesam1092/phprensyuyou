<?php get_header(); ?>
<section class="content">
    <ul class="categories">
    <?php 
    $args = array(
        'title_li' => ''
    );
    wp_list_categories($args);
    ?>
    </ul>
</section>
<?php get_footer(); ?>