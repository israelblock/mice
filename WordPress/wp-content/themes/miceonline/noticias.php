<div class="container-fluid">
    <div class="container single-noticias">
        <section id="lasted-posts">
            <div class="row">
                <h1>MAIS NOTÍCIAS</h1>
            </div>
            <div class="row"><?php
                $query = new WP_Query(array('posts_per_page' => 4));
                if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post();
                        ?>
                        <div class="col-md-3">
                        <a href="<?php the_permalink(); ?>" class="link">
                            <div class="posts-more-image d-inline-block">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>" />
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/more.png" alt="More" class="more" />
                            </div>
                        </a>
                        <a href="<?php the_permalink(); ?>" class="link">
                            <strong><h2><?php the_title(); ?></h2></strong>
                        </a>
                        <a href="<?php the_permalink(); ?>" class="link">
                            <div class="date"><?php the_time("d.m.Y"); ?></div>
                        </a>
                        <a href="<?php the_permalink(); ?>" class="link">
                            <div class="resumo"><?php the_excerpt(); ?></div>
                        </a>
                        </div><?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </section>
    </div>
</div>