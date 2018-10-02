<div class="container-fluid">
    <div class="container">
        <section id="events">
            <h1>Agenda de eventos</h1>
            <div class="row"><?php
                $query = new WP_Query(array(
                    "post_type"=>"evento"
                ));
                if($query->have_posts()):while($query->have_posts()):$query->the_post();
                    $local = get_field("local_do_evento");
                    $conteudo = get_field("conteudo");
                    $datahora = get_field("detalhes_do_evento");
                    $edata = explode(" ", $datahora["data_evento"]);
                    $dia = $edata[0];
                    $mes = $edata[1];
                    ?>
                    <div class="col-md-6 container-event">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="event-cover text-center">
                                <span class="superupper-event"><?php echo $dia; ?></span>
                                <span class="upper-event"><?php echo $mes; ?></span>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content-event">
                                <h3 class="title-event"><?php the_title(); ?></h3>
                                <div class="local"><?php echo $local["cidade"]." - ". $local["estado"]; ?>
                                </div>
                                <div class="cat-events">
                                    <span class="upper-event cat"><?php $sizes = get_the_terms( $post->ID, 'categoria_evento' ) ;
                                        if($sizes):
                                            foreach($sizes as $term){
                                                echo $term->name;
                                            }
                                        endif; ?>
                                    </span>
                                </div>
                                <span><?php echo $conteudo["resumo"]; ?></span>
                            </div>
                        </div>
                    </div>
                    </div><?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
            <div class="hr">
                    <span style="text-align: center; display:block; margin:-20px;">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/more.png" alt="More" class="more">
                    </span>
            </div>
        </section>
    </div>
</div>