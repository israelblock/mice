<div class="container-fluid">
    <div class="container">
        <section id="services">
            <h1>Conheça Nossos Serviços</h1>
            <div class="container">
                <div class="row"><?php $query = new WP_Query(array(
                        "post_type"=>"servicos",
                        "post_per_page"=>"4"
                    ));
                    if($query->have_posts()): while($query->have_posts()): $query->the_post();
                        $image = get_field("imagem_de_destaque");
                        $link = get_field("url_de_destino");
                        ?>
                        <div class="col-md-3">
                        <a href="<?php the_permalink(); ?>"><div class="services-posts">
                                <figure class="img-service">
                                    <img src="<?php echo $image["url"]; ?>"  alt="">
                                </figure>
                                <h2><?php the_title(); ?></h2>
                                <span style="text-align: center; display:block"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/more.png" alt="More" class="more"></span>
                            </div></a>
                        </div><?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>
        </section>
    </div>
</div>