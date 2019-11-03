<?php get_header(); ?>

<?php if (has_header_image()): ?>
    <div class="container-fluid p-0">
        <div class="headerImage" style="background-image:url(<?php echo(get_header_image()); ?>)">
            <h1 class="display-3 headerImageText"><?php echo get_bloginfo('name'); ?></h1>
        </div>
    </div>
<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-3 headerImageText"><?php echo get_bloginfo('name'); ?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if (have_posts()): ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <?php while (have_posts()): the_post(); ?>
                <div class="col-12 col-md-4 mb-3">
                    <?php get_template_part('templates/content', get_post_format()); ?>
                </div>



            <?php endwhile; ?>
        </div>
        <?php
        $count_posts = wp_count_posts();
        $published_posts = $count_posts->publish;

        $default_posts_per_page = get_option('posts_per_page')
        ?>
        <?php if ($published_posts > $default_posts_per_page): ?>
            <?php
            $args = array(
                'type' =>  'array'
            );
            $paginataionLinks = paginate_links( $args );

            ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php foreach ($paginataionLinks as $link): ?>
                        <li class="page-item">
                            <?php echo str_replace('page-numbers', 'page-link', $link); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <nav aria-label="Page navigation example">
                <div class="pagination row">
                    <?php previous_posts_link( '« Previous' ); ?>
                    <?php next_posts_link( 'Next »'); ?>
                </div>
            </nav>

        <?php endif; ?>
        <img src="<?php echo get_theme_mod('1902_bottomImage'); ?>" alt=""style="width: 100%;">
        <h5 class="display-3 d-flex justify-content-center"><?php echo get_theme_mod('1902_bottomImageText'); ?></h5>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
