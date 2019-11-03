<?php get_header(); ?>
<div class="container">

            <div class="row">
                <div class="col">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>
                            <div class="card mt-2">
                                <h5 class="card-header"><?php the_title(); ?></h5>
                                <div class="card-body">
                                    <div>
                                        <?php if (!is_singular()): ?>
                                            <?php if (has_post_thumbnail()): ?>
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                                                    </div>
                                                    <div class="col-8">
                                                        <?php the_excerpt(); ?>
                                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                                <?php the_excerpt(); ?>
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                                            <div>
                                                <?php the_content(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>


<?php get_footer(); ?>
