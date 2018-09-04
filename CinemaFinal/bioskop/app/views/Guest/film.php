<?php include 'app/views/_global/beforeContent.php'; ?>
<!--BREADCRUMB-->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo Configuration::BASE_URL; ?>">Naslovna</a></li>
        <li><a href="<?php echo Configuration::BASE_URL; ?>repertoar">Repertoar</a></li>
        <li class="active">Film</li>
    </ol>
</div>
<div class="container white marketing">
    <?php
    if (is_array($DATA['film']))
        foreach ($DATA['film'] as $film):
            ?>
            <!-- START THE FEATURETTES -->
            <div class="row featurette">


                <div class="col-md-5">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="<?php echo $film->trailer ?>" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-7">
                    <h3 class="featurette-heading tager"><?php echo $film->title ?></h3>
                    <p class="desc"><?php echo $film->description ?></p>

                    <dl class="dl-horizontal extraDLDT">
                        <dt>Originalni naslov:</dt>
                        <dd><?php echo $film->title ?></dd>

                        <dt>Dužina trajanja :</dt>
                        <dd><?php echo $film->duration ?></dd>

                        <dt>Žanr:</dt>
                        <dd><?php echo $film->genre ?></dd>

                        <dt>Glumci:</dt>
                        <dd><?php echo $film->actors ?></dd>

                        <dt>Režiser:</dt>
                        <dd><?php echo $film->director ?></dd>
                    </dl>
                </div>

            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-12">
                    <h3 class="featurette-heading" style="margin-top: 0;">SADRŽAJ</h3>
                    <p class="desc"><?php echo $film->description ?></p>
                </div>
            </div>              
        <?php endforeach; ?>
    <!-- /END THE FEATURETTES -->
</div>
<?php include 'app/views/_global/afterContent.php'; ?>
