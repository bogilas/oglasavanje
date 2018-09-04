<?php include 'app/views/_global/beforeContent.php'; ?>
<!--BREADCRUMB-->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo Configuration::BASE_URL; ?>">Naslovna</a></li>
        <li class="active">Uskoro</li>
    </ol>
</div>
<div class="container white marketing">

    <!-- START THE FEATURETTES -->
    <div class="row featurette"> 
        <?php
            if (is_array($DATA['uskoro']))
                foreach ($DATA['uskoro'] as $uskoro):
                    ?>
                <article class="col-md-4">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item frameSpecialBorder" src="<?php echo $uskoro->trailer?>" allowfullscreen=""></iframe>
            </div>
            <h4 class="text-uppercase text-center"><?php echo $uskoro->title?></h4>
        </article>
            <?php endforeach; ?>
    </div>

    <hr class="featurette-divider">
<!--
    <div class="row featurette">
        <article class="col-md-4">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hfby7XwoBl0" allowfullscreen=""></iframe>
            </div>
            <h4 class="text-uppercase text-center">Pritajeno zlo: Konačno poglavlje</h4>
        </article>
        <article class="col-md-4">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MQEFmHsseaU" allowfullscreen=""></iframe>
            </div>
            <h4 class="text-uppercase text-center">xXx - Povratak Zendera Kejdža</h4>
        </article>
        <article class="col-md-4">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hfby7XwoBl0" allowfullscreen=""></iframe>
            </div>
            <h4 class="text-uppercase text-center">Pritajeno zlo: Konačno poglavlje</h4>
        </article>
    </div>-->

    <!-- /END THE FEATURETTES -->
</div>
<?php include 'app/views/_global/afterContent.php'; ?>