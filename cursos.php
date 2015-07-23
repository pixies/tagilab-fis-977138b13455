<?php
/**
 * Template Name: Cursos
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>


<div class="parallax-container slider"><!-- Slide prioncipal -->
     <ul class="slides">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cursos/<?php global $post; echo $post->post_name; ?>.png"> <!-- random image -->
        <div class="caption center-align"></div>
      </li>
      
      </li>
    </ul>
</div><!-- FIM Slide prioncipal -->


<div class="section no-pad-bot">


    <div class="row"><!-- Linha area de conteudo principal -->
      <div class="col s12 amarelo margem"><!-- BG Amarelo conteudo principal -->
        <div class="col l8 s12 white  z-depth-1 borda" style="min-height:532px;  margin-top: 8px;"><!-- Conteudo dos Cursos -->          
            <div id="<?php echo $page->ID; ?>" class="col s12 m12 l9">
              <h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php global $post; echo $post->post_title; ?></a></h2>
              <div class="entry"></div>
            </div>


<?php
              if ( have_posts() ) {
                while ( have_posts() ) {

                  the_post(); ?>

                  <?php the_content(); ?>

                <?php }
              }
            ?>

    </div><!-- FIM BG Amarelo conteudo principal -->
</div><!-- FIM Linha area de conteudo principal -->


 </div><!-- FIM linha4 -->

<?php
get_footer();
