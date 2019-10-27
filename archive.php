<?php get_header() ?>

    <header>
        <div class="heading">
            <h1>Stomatologická ordinace dentální hygienistky</h1>
            <h4>Jana Růžičková, DiS.</h4>
        </div>
        <a href="#archive" arial-label="link to news">
            <i class="fas fa-chevron-down"></i>
        </a>
    </header>

    <section id="archive">
    <?php

    $ourCurrentPage = get_query_var( 'paged' );
    $postArchive = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => '2',
        'paged' => $ourCurrentPage
    ));

    while ($postArchive->have_posts()) {
        $postArchive->the_post();
    ?>
    <div class="post-excerpt">
        <div class="the-content">
        <?php
            if (has_post_thumbnail()) {
        ?>
            <div class="the-thumbnail">
                <?php the_post_thumbnail('small-thumbnail'); ?>
            </div>
        <?php
        }
        ?>
            <div class="the-text">
                <h3><?php the_title(); ?></h3>
                <i><?php the_date(); echo " "; the_time(); echo " | "; the_author(); ?></i>
                <p><?php the_post(); ?></p>
            </div>
        </div>
    </div>

    <?php
    } ?>
    <div class="pagination">
        <?php echo paginate_links(); ?>
    </div>
    </section>


<?php get_footer() ?>
