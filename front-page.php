<?php get_header() ?>

    <header>
        <div class="heading">
            <h1>Stomatologická ordinace dentální hygienistky</h1>
            <h4>Jana Růžičková, DiS.</h4>
        </div>
        <a href="#about" arial-label="link to news">
            <i class="fas fa-chevron-down"></i>
        </a>
    </header>

    <section id="news">
        <h2>Novinky</h2>

        <div class="posts">
            <?php
            $Posts = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => '3'
            ));

            while ($Posts->have_posts()) :
                $Posts->the_post();
            ?>
            <div class="post">
                <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()) { ?>
                    <div class="image-box">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php } ?>
                    <div class="text">
                    <h3><?php the_title(); ?></h3>
                    <div class="date"><?php the_date(); ?></div>
                    <p><?php the_excerpt() ?></p>
                    </div>
                </a>
            </div>
            <?php
            endwhile; ?>
        </div>

    </section>

    <section id="about">
        <div class="text">
            <h2>Dentální hygiena</h2>
            <p class="par">Ve své podstatě je to osobní údržba a hygiena zubů. Dentální hygienou lze předejít celé řadě komplikací, tj. zubnímu kazu, zánětu dásní, parodontóze. Jak zubní kaz, tak i parodontóza vedou v konečném stádiu ke ztrátě zubů, proto, pokud Vám není Vaše zdraví lhostejné, přijďte do naší ordinace. </p>
        </div>
        <picture>
            <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/toothbrush-icon.webp">
            <source type="image/png" srcset="<?php echo get_template_directory_uri(); ?>/img/toothbrush-icon.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/toothbrush-icon.png" alt="Toothbrush">
        </picture>
    </section>
    <section id="includes">

        <div class="left">
           
        </div>
        <div class="right">
            <div class="text">
                <h2>Vyšetření zahrnuje:</h2>
                <ul>
                    <li>profesionální čištění zubů a dásní</li>
                    <li>odstranění pigmentových skvrn,&nbsp;povlaků a zubního kamene</li>
                    <li>bělení zubů</li>
                    <li>speciální péči o parodontologické pacienty a pacienty s rovnátky</li>
                    <li>výuku správné domácí péče o zuby</li>
                    <li>nácvik čistících technik</li>
                    <li>doporučení vhodných zubních kartáčků</li>
                    <li>široký výběr pomůcek pro správné čištění zubů</li>
                    <li>sestavení individuálního dentálně hygienického programu</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="banner">
        <p>Pro zachování trvale zdravých zubů je potřebná vysoká úroveň jejich hygieny, kterou zajistí jen pravidelné odborné čištění zubů.</p>
        <picture>
            <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/tooth-icon.webp">
            <source type="image/png" srcset="<?php echo get_template_directory_uri(); ?>/img/tooth-icon.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tooth-icon.png" alt="Tooth">
        </picture>
    </section>
    <section id="ordination">

        <div class="left">
            <div class="text">
                <h2>Ordinace</h2>
                <p class="par">V naší ordinaci jsou vítáni pacienti všech věkových kategorií. Hygienistka poradí a ukáže, jak čistit první zoubky. Navštěvuje MŠ a ZŠ, kde společně s dětmi cvičí správnou techniku čištění zubů.</p>
            </div>
        </div>
        <div class="right">
        </div>
    </section>
    
<?php get_footer(); ?>
