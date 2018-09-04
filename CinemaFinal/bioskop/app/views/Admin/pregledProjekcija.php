<?php include 'app/views/_global/beforeContent.php'; ?>
<div class="container white">
    <br clear="all" />
    <span class="taglineAdd">Pregled projekcija</span>
    <table class="viewProjection">
        <thead>
            <tr>
                <th>Naziv filma</th>
                <th>Datum &amp; Vreme</th>
                <th>Naziv sale</th>
                <th>Cena</th>
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
                        <td><?php echo $projekcije->name ?></td>
                        <td><?php echo $projekcije->price ?></td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include 'app/views/_global/afterContent.php'; ?>