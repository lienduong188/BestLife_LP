<?php
// ********************************************
//
// 固定ページ取得・表示
//
// ********************************************
?>

<?php $query = new WP_Query(array(
  'post_type' => 'page',
  'order'   => 'ASC',
)); ?>

<?php if($query->have_posts()) : ?>
<?php while ($query->have_posts()) : $query->the_post(); ?>
    <div class="c_main_contents">
        <h1 id="<?php the_permalink(); ?>"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
<?php endwhile; wp_reset_postdata(); ?>
<?php else : ?>
    <div>記事がありませんでした。</div>
<?php endif; 