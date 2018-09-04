<?php include 'app/views/_global/beforeContent.php'; ?>
        <div class="container white">
                <br clear="all" />
                <span class="taglineAdd">Pregled rezervacija</span>
                <table class="viewReservation">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Naziv filma</th>
                            <th>Broj sedita</th>
                            <th>Naziv sale</th>
                            <th>Datum &amp; Vreme</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if (is_array($DATA['rezervacije']))
                            foreach ($DATA['rezervacije'] as $rezervacije):
                        ?>
                            <tr>
                                <td><?php echo $rezervacije->email ?></td>
                                <td><?php echo $rezervacije->title ?></td>
                                <td><?php echo $rezervacije->seat_num ?></td>
                                <td><?php echo $rezervacije->name ?></td>
                                <td><?php echo $rezervacije->date_time ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
<?php include 'app/views/_global/afterContent.php'; ?>
