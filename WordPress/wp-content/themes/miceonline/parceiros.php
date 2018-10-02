<div class="container-fluid">
    <div class="container">
        <section id="partners">
            <h1>Nossos Parceiros</h1>
            <div class="partners-slick">
                <div class="row"><?php
                    $args = array("post_type" => "parceiro");
                    $parceiros = new WP_Query( $args );
                    if($parceiros->have_posts()):
                        while($parceiros->have_posts()):
                            $parceiros->the_post();
                            $logo = get_field("logo");
                            ?>
                            <div class="col-md-2">
                            <div class="partner-item"><img src="<?php echo $logo["url"] ?>" alt="<?php echo get_the_title() ?>" style="width: 100%"></div>
                            </div><?php
                        endwhile;
                        wp_reset_postdata();

                    endif;
                    ?>
                </div>
            </div>
        </section>
    </div>
</div>