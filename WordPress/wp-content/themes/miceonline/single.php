<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<?php while(have_posts()):the_post();
?>
<div class="container-fluid bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" style="width: 100%; margin-top: 50px;" alt="<?php the_title(); ?>" />
            </div>
        </div>

    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="categoria"><?php

                ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="title"><h1><?php
                        the_title();
                    ?></h1></div>
            </div>
            <div class="col-12">
                <div class="date"><?php the_time("d.m.Y"); ?></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-single"><?php
                    the_content();
                    ?></div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php include("areadeanunciante.php"); ?>
<?php include("noticias.php"); ?>
<?php include("parceiros.php"); ?>
<?php get_footer(); ?>
