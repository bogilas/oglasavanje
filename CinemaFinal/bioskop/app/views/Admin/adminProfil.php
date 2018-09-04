<?php include 'app/views/_global/beforeContent.php'; ?>
<div class="container white">
    <br clear="all" />
    <div class="row">
        <article class="col-xs-6 hvr-wobble-to-top-right">
            <div class="goTo">
                <h5 class="tagNameDo">-- PROJEKCIJE --</h5>
                <span>
                    <a href="<?php echo Configuration::BASE_URL; ?>pregledProjekcija" class="hvr-buzz">PREGLED</a>
                    <a href="<?php echo Configuration::BASE_URL; ?>dodajProjekciju" class="hvr-buzz">DODAJ</a>
                </span>
            </div>
        </article>
        <article class="col-xs-6 hvr-wobble-to-bottom-right">
            <div class="goTo">
                <h5 class="tagNameDo">-- SALE --</h5>
                <span>
                    <a href="<?php echo Configuration::BASE_URL; ?>pregledSala" class="hvr-buzz">PREGLED</a>
                    <a href="<?php echo Configuration::BASE_URL; ?>dodajSalu" class="hvr-buzz">DODAJ</a>
                </span>
            </div>
        </article>
        <article class="col-xs-6 hvr-wobble-to-bottom-right">
            <div class="goTo">
                <h5 class="tagNameDo">-- REZERVACIJE --</h5>
                <span>
                    <a href="<?php echo Configuration::BASE_URL; ?>pregledRezervacija" class="hvr-buzz">PREGLED</a>
                    <a href="<?php echo Configuration::BASE_URL; ?>dodajRezervaciju" class="hvr-buzz">DODAJ</a>
                </span>
            </div>
        </article>
        <article class="col-xs-6 hvr-wobble-to-top-right">
            <div class="goTo">
                <h5 class="tagNameDo">-- FILMOVI --</h5>
                <span>
                    <a href="<?php echo Configuration::BASE_URL; ?>pregledFilmova" class="hvr-buzz">PREGLED</a>
                    <a href="<?php echo Configuration::BASE_URL; ?>dodajFilm" class="hvr-buzz">DODAJ</a>
                </span>
            </div>
        </article>
    </div>
</div>
<?php include 'app/views/_global/afterContent.php'; ?>