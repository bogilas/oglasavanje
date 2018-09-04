<?php include 'app/views/_global/beforeContent.php'; ?>
        
        <!--CAROUSEL-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
            
            <article class="item">
              <img class="first-slide" src="<?php echo Configuration::BASE_URL; ?>assets/img/12a.jpg" alt="Matrix">
              <div class="container">
                <div class="carousel-caption">
                  <h2>Matrix</h2>
                  <p>A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.</p>
                  <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
                </div>
              </div>
            </article>
            <article class="item">
              <img class="second-slide" src="<?php echo Configuration::BASE_URL; ?>assets/img/10a.jpg" alt="La la land">
              <div class="container">
                <div class="carousel-caption">
                  <h2>La la land</h2>
                  <p>Two proper L.A. dreamers, a suavely charming soft-spoken jazz pianist and a brilliant vivacious playwright, while waiting for their big break, attempt to reconcile aspirations and relationship in a magical old-school romance.</p>
                  <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                </div>
              </div>
            </article>
            <article class="item active">
              <img class="third-slide" src="<?php echo Configuration::BASE_URL; ?>assets/img/9a.jpg" alt="Forest gump">
              <div class="container">
                <div class="carousel-caption">
                  <h2>Forest Gump</h2>
                  <p>While not intelligent, Forrest Gump has accidentally been present at many historic moments, but his true love, Jenny Curran, eludes him.</p>
                  <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
                </div>
              </div>
            </article>
          </div>
           
            </div>
          
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container white top">
            <div class="row dark">
                <h4 class="text-uppercase text-center">Rezervisite svoje karte</h4>
                <div class="rezi">
                    <button type="button" class="btn btn-success hvr-buzz" onclick="location.href='<?php echo Configuration::BASE_URL; ?>rezervacija'">GO</button>
                </div>
            </div>


            <h4 class="text-uppercase text-center">Nas izbor</h4>
            <hr>
            <div class="row">
                <?php
                    if (is_array($DATA['nasIzbor']))
                foreach ($DATA['nasIzbor'] as $topMovies):
                ?>
                <article class="col-xs-6 col-sm-3">
                  <div class="hover">
                        <div>
                          <img src="<?php echo Configuration::BASE_URL; ?>assets/img/<?php echo $topMovies->movie_id ?>.jpg" alt="Doslo je do greske prilikom ucitavanja slike" class="img-responsive img-thumbnail">
                        </div>
                        <div class="hover-info">
                            <div class="hover-text">
                                <h4 class="text-uppercase text-center">
                                  <strong><?php echo $topMovies->title ?></strong>
                                </h4>
                                <p><?php echo $topMovies->description ?></p>
                                <p class="text-center"><a href="<?php echo Configuration::BASE_URL;?>film/<?php echo htmlspecialchars($topMovies->movie_id);?>">Vise o filmu</a></p>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
  
    </div>
        <div class="container white marketing" id="vesti">

          <!-- START THE FEATURETTES -->
        <?php
            $var = 0;
            if (is_array($DATA['filmoviLista']))
            foreach ($DATA['filmoviLista'] as $movies):
        ?>
        <?php if($var++%2 == 0): ?>
          <article class="row featurette">
            <div class="col-md-9">
              <h3 class="featurette-heading"><?php echo $movies->title ?></h3>
              <p><p>
              <p><?php echo $movies->description ?><a href="<?php echo Configuration::BASE_URL; ?>film/<?php echo htmlspecialchars($movies->movie_id);?>"> More</a></p>
            </div>
            <div class="col-md-3">
              <img class="img-responsive center-block" alt="Doslo je do greske prilikom ucitavanja slike" src="<?php echo Configuration::BASE_URL; ?>assets/img/<?php echo $movies->movie_id ?>.jpg">
            </div>
          </article>
          
          <hr class="featurette-divider">
        <?php else: ?>
          <article class="row featurette">
            <div class="col-md-3">
              <img class="img-responsive center-block" alt="Doslo je do greske prilikom ucitavanja slike" src="<?php echo Configuration::BASE_URL; ?>assets/img/<?php echo $movies->movie_id ?>.jpg">
            </div>
            <div class="col-md-9">
              <h3 class="featurette-heading"><?php echo $movies->title ?></h3>
              <p><p>
              <p><?php echo $movies->description ?><a href="<?php echo Configuration::BASE_URL; ?>film/<?php echo htmlspecialchars($movies->movie_id);?>"> More</a></p>
            </div>
          </article>
          
          <hr class="featurette-divider">
        <?php endif; ?>
        
        
        <?php endforeach; ?>
        </div>

<?php include 'app/views/_global/afterContent.php'; ?>