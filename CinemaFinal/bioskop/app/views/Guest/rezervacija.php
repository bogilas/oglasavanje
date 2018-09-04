<?php include 'app/views/_global/beforeContent.php'; ?>
<div class="container white">
    <table class="table">
        <thead>
            <tr>
                <th>Naziv filma</th>
                <th>Datum &amp; Vreme</th>
                <th>Nastavi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (is_array($DATA['projekcije']))
                foreach ($DATA['projekcije'] as $projekcije):
                    ?>
                    <tr>
                        <td><?php echo $projekcije->title ?></td>
                        <td><?php echo $projekcije->date_time ?></td>
                        <td><a href="<?php echo Configuration::BASE_URL; ?>rezervacija/sedista/<?php echo htmlspecialchars($projekcije->projection_id);?>">Odabir sedista</a></td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include 'app/views/_global/afterContent.php'; ?>