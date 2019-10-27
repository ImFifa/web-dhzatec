<footer>
    <div class="opening-hours">
        <h2>Otevírací doba</h2>
        <p>(dle telefonické domluvy)</p>

        <table border-spacing="0">
            <tr>
                <td>Pondělí</td>
                <td>Žatec</td>
            </tr>
            <tr>
                <td>Úterý</td>
                <td>Louny</td>
            </tr>
            <tr>
                <td>Středa</td>
                <td>Žatec</td>
            </tr>
            <tr>
                <td>Čtvrtek</td>
                <td>Louny</td>
            </tr>
            <tr>
                <td>Pátek</td>
                <td>Žatec</td>
            </tr>
        </table>
        <i class="far fa-clock"></i>
    </div>

    <div class="contact">
        <div class="contact-box">
            <span class="el1"><a href="tel:+420-602-306-637" aria-label="Call dental hygienist">
            <i class="i fas fa-phone-alt"></i>
            +420 602 306 637</a></span>

            <span class="el2"><a href="mailto:dhruzickova@centrum.cz" aria-label="Send mail to dental hygienist">
            <i class="i fas fa-envelope"></i>
            dhruzickova@centrum.cz</a></span>

            <a class="el3" href="https://filipurban.cz/" target="top" aria-label="Visit author's portfolio">
            <picture>
                <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/urban-logo.webp">
                <source type="image/png" srcset="<?php echo get_template_directory_uri(); ?>/img/urban-logo.png">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/urban-logo.png" alt="Urban Webdesign">
            </picture>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>

<script>
        Modernizr.on('webp', function (result) {
            if (result) {} else {}
        });

        if(navigator.serviceWorker) {
            navigator.serviceWorker.register('service-worker.js');
        }
</script>
