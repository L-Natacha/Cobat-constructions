<?php
// Ce fichier est requis par WordPress pour les thèmes.
// Les pages utilisent les templates dans /templates/
get_header();
if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
endif;
get_footer();
