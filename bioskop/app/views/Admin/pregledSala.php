<?php include 'app/views/_global/beforeContent.php'; ?>
        <div class="container white">
                <br clear="all" />
                <span class="taglineAdd">Pregled sale</span>
                <table class="viewHall">
                    <thead>
                        <tr>
                            <th>ID sale</th>
                            <th>Naziv sale</th>
                            <th>Kratak opis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if (is_array($DATA['sale']))
                            foreach ($DATA['sale'] as $sale):
                        ?>
                            <tr>
                                <td><?php echo $sale->hall_id ?></td>
                                <td><?php echo $sale->name ?></td>
                                <td><?php echo $sale->description ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
<?php include 'app/views/_global/afterContent.php'; ?>