<?php

// Zeigt den Header an
get_header(); 


if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
     
        <main class="entry-content">
            <?php the_content(); ?>
        </main>
     
    <?php endwhile; 
 endif; 

// Zeigt den Footer an
get_footer(); ?>