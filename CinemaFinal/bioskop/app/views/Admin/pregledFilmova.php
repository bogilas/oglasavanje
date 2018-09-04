<?php include 'app/views/_global/beforeContent.php'; ?>
            <div class="container white">
                <br clear="all" />
                <span class="taglineAdd">Pregled filma</span>
                <table class="viewMovie">
                    <thead>
                        <tr>
                            <th>Naslov filma</th>
                            <th>Reziser</th>
                            <th>Glavni glumci</th>
                            <th>Opis filma</th>
                            <th>Trajanje</th>
                            <th>Trejler</th>
                            <th>Zanr</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if (is_array($DATA['filmovi']))
                            foreach ($DATA['filmovi'] as $filmovi):
                        ?>
                            <tr>
                                <td><?php echo $filmovi->title ?></td>
                                <td><?php echo $filmovi->director ?></td>
                                <td><?php echo $filmovi->actors ?></td>
                                <td><?php echo $filmovi->description ?></td>
                                <td><?php echo $filmovi->duration ?></td>
                                <td>
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe class="embed-responsive-item" src="<?php echo $filmovi->trailer ?>" allowfullscreen></iframe>
                                    </div>
                                </td>
                                <td><?php echo $filmovi->genre ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
<?php include 'app/views/_global/afterContent.php'; ?>
