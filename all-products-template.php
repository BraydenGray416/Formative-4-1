<?php
/*
Template Name: All Products Template
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container">
    <div class="row my-3">
        <div class="col">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post();  ?>
                    <div class="card h-100">
                        <h2 class="card-header text-center"><?php the_title(); ?></h2>
                        <div class="card-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php
    $args = array(
        'post_type' => 'product'
    );
    $allProducts = new WP_Query($args);
    ?>

    <?php if ($allProducts->have_posts()): ?>
        <div class="row">
            <?php while ($allProducts->have_posts()): $allProducts->the_post(); ?>
                <div class="col-12 col-sm-3">
                    <div class="card p-3">
                        <h4><?php the_title(); ?></h4>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>



</div>

<?php get_footer(); ?>
