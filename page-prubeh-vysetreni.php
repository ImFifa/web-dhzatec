<?php get_header() ?>

    <?php include('header.php'); ?>

    <header>
        <div class="heading">
            <h1>Stomatologická ordinace dentální hygienistky</h1>
            <h4>Jana Růžičková, DiS.</h4>
        </div>
        <a href="#treatment" arial-label="link to news">
            <i class="fas fa-chevron-down"></i>
        </a>
    </header>

    <section id="treatment">
        <h2>Průběh vyšetření</h2>

        <picture>
            <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/img/dental-treatment.webp">
            <source type="image/jpg" srcset="<?php echo get_template_directory_uri(); ?>/img/dental-treatment.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/img/dental-treatment.jpg" alt="Průběh vyšetření">
        </picture>

        <p>Návštěva začíná vstupním vyšetřením parodontu /závěsný aparát kolem zubů/, kdy se měří hloubka prostoru mezi zubem a dásní kalibrovanou sondou. Je-li tento prostor hlubší než 3 mm, mluvíme o parodontálním chobotu, nebo kapse a jedná se o počínající paradontózu.</p>
        <p>Parodontální kapsy (choboty) jsou plné škodlivých bakterií, které způsobují poškození závěsného aparátu a ztrátu kosti, ve které jsou zuby ukotveny.</p>
        <p>Dále se sledují projevy krvácivosti dásní, které svědčí o probíhajícím zánětu dásní.</p>
        <p>Počínající zánět dásní se projeví: dásně jsou na pohled oteklé, zarudlé a citlivé na dotyk, objeví se krvácení dásní při čistění, dochází k ústupu dásní, my nebo naše okolí cítí zápach z úst.</p>
        <p>Zjišťuje se přítomnost a množství škodlivých povlaků a hodnotí se stav ústní hygieny.</p>
        <p>Po zhodnocení stavu se vytvoří hygienický plán a pacient je podrobně informován.</p>
        <p>Hygienický léčebný plán může být sestaven s potřebou více než jednoho ošetření v závislosti na stavu a stupni onemocnění. Např. v případě parodontózy základní ošetření nestačí, provádí se hloubkové čištění většinou ve více návštěvách.</p>
        <p>Následuje profesionální čištění, při kterém se odstraňují všechny škodlivé povlaky z povrchu zubů a poddásněvého prostoru. To probíhá pomocí ručních nástrojů v kombinaci s ultrazvukovými přístroji. Dalšími přístroji, se kterými je možné se setkat v ordinaci je pískovač (Air-flow).</p>
        <p>Poté se vyčistí a vyleští povrch zubů rotačními kartáčky a kalíšky v kombinaci s čistícími a leštícími pastami.</p>
        <p>Někdy se provádí (u dětí téměř vždy) tzv. fluoridová prevence - aplikují se různé pasty a laky se zvýšeným obsahem fluoridů ke zvýšení odolnosti zubní skloviny vůči zubnímu kazu.</p>
        <p>Nedílnou součástí návštěvy je individuální volba a instruktáž techniky čištění, volba mezizubních pomůcek, popř. výběr dalších pomůcek pro domácí péči.</p>
        <p>Po ukončení počáteční hygienické fáze pacient přechází do fáze udržovací = systém pravidelných návštěv (tzv. recall). Ačkoliv interval návštěvy se stanovuje pro každého individuálně, dle odborných názorů by měl každý absolvovat dentální hygienu 2x ročně zhruba ve stejném intervalu jako zubní preventivní prohlídku u stomatologa.</p>
    </section>

<?php get_footer() ?>
