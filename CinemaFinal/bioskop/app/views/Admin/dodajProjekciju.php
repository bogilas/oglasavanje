<?php include 'app/views/_global/beforeContent.php'; ?>
<div class="container white">
    <br clear="all">
    <span class="taglineAdd">Dodavanje projekcije</span>
    <form class="projectionForm" method="post">
        <select name="movie_id">
            <option selected="selected" disabled="disabled" value="Izaberite film">Izaberite film</option>
            <?php
            if (is_array($DATA['filmovi']))
                foreach ($DATA['filmovi'] as $naslovFilma):
                    ?>
                    <option value="<?php echo $naslovFilma->movie_id; ?>"><?php echo $naslovFilma->title ?></option>
                <?php endforeach; ?>
        </select>
        <select name="hall_id">
            <option selected="selected" disabled="disabled" value="Izaberite salu">Izaberite salu</option>
            <?php
            if (is_array($DATA['sale']))
                foreach ($DATA['sale'] as $sale):
                    ?>
                    <option value="<?php echo $sale->hall_id ?>"><?php echo $sale->name ?></option>
                <?php endforeach; ?>
        </select>
        <label for="dateNtime" class="projectionLabel">Datum</label>
        <input type="datetime" name="dateNtime" placeholder="YYYY-MM-DD HH:MM:SS"/>
        <input type="number" name="price" />
        <input type="submit" value="Potvrdi" />
    </form>
    <?php if (isset($DATA['message'])): ?>
        <p><?php echo htmlspecialchars($DATA['message']); ?></p>   
    <?php endif; ?>
</div>
<?php include 'app/views/_global/afterContent.php'; ?>