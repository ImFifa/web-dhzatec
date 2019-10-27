<?php get_header();
if (have_posts()) :
while (have_posts()) : the_post(); ?>

    <header style="min-height: 250px;">
        <div class="heading">
            <h1><?php the_title(); ?></h1>
            <h4><?php the_date(); echo " "; the_time(); ?></h4>
        </div>
    </header>

<!-- section -->
<section class="container single-post">
    <?php the_content(); ?>
    <p><a href="/"><i class="fas fa-hand-point-left"></i> Vrátit se zpět</a></p>
</section>

<?php
endwhile;
endif;
get_footer();
