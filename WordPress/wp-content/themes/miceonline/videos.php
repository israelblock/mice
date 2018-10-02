<div class="container-fluid">
    <div class="container">
        <section id="videos">
            <h1>Ultimos vídeos</h1>
            <div class="row"><?php
                $query = new WP_Query(array("post_type"=>"videos"));
                if($query->have_posts()):while($query->have_posts()):$query->the_post();

                    $iframe = get_field('video_incorporado');
                    // use preg_match to find iframe src
                    preg_match('/src="(.+?)"/', $iframe, $matches);
                    $src = $matches[1];
                    // add extra params to iframe src
                    $params = array(
                        'controls'    => 0,
                        'hd'        => 1,
                        'autohide'    => 1
                    );
                    $new_src = add_query_arg($params, $src);
                    $iframe = str_replace($src, $new_src, $iframe);
                    // add extra attributes to iframe html
                    $attributes = 'frameborder="0"';
                    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
                    ?>
                    <div class="col-md-6">
                        <div class="video-home"><?php echo $iframe; ?>
                            <h2><?php  the_title(); ?></h2>
                            <div class="date"><?php the_time("d.m.Y"); ?></div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
            <div class="hr">
                    <span style="text-align: center; display:block; margin:-20px;">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/more.png" alt="More" class="more">
                    </span>
            </div>
        </section>
    </div>
</div>