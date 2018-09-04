<?php include 'app/views/_global/beforeContent.php'; ?>
<!--BREADCRUMB-->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo Configuration::BASE_URL; ?>">Naslovna</a></li>
        <li class="active">Repertoar</li>
    </ol>
</div>
<div class="container white">
    <div class="filter">
        <form method="post">
            <div class="row">
                <div class="col-xs-6 col-sm-3 form-group">
                    <label for="film">Izaberite žanr</label>
                    <select id="film" class="form-control" name='zanr_id'>
                        <option selected="selected" disabled="disabled" value="-- Bilo koji --">-- Bilo koji --</option>
                        <?php
                        if (is_array($DATA['zanrovi']))
                            foreach ($DATA['zanrovi'] as $zanrovi):
                                ?>
                                <option value="<?php echo $zanrovi->genre_id ?>">
                                    <?php echo $zanrovi->name ?>
                                </option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-xs-6 col-sm-3 form-group">
                    <button type="submit" class="btn btn-success searcher">Pretrazi</button>
                </div>
            </div>
        </form>
        <?php if (isset($DATA['message'])): ?>
            <p><?php echo htmlspecialchars($DATA['message']); ?></p>   
        <?php endif; ?>
    </div>
</div>

<div class="container white marketing">
    <!-- START THE FEATURETTES -->
    <?php
    if (is_array($DATA['repertoar']))
        foreach ($DATA['repertoar'] as $repertoar):
            ?>
            <article class="row featurette">
                <div class="col-md-3">
                    <img class="img-responsive center-block" alt="Doslo je do greske prilikom ucitavanja slike" src="<?php echo Configuration::BASE_URL; ?>assets/img/<?php echo $repertoar->movie_id ?>.jpg">
                </div>
                <div class="col-md-9">
                    <h3 class="featurette-heading"><?php echo $repertoar->title ?></h3>
                    <p>
                        <?php echo $repertoar->description ?>
                    </p>
                    <p>
                        <span><?php echo $repertoar->genre ?></span>
                        <span class="glyphicon glyphicon-time"></span>
                        <span><?php echo $repertoar->duration ?> min.</span>
                    </p>
                    <p><a href="<?php echo Configuration::BASE_URL; ?>film/<?php echo htmlspecialchars($repertoar->movie_id); ?>" class="btn btn-primary">Više o filmu</a></p>
                </div> 
            </article>

            <hr class="featurette-divider">
        <?php endforeach; ?>
    <!-- /END THE FEATURETTES -->
</div>
<?php include 'app/views/_global/afterContent.php'; ?>