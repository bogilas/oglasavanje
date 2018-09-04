<?php include 'app/views/_global/beforeContent.php'; ?>
<div class="container white">
    <br clear="all" />
    <span class="taglineAdd">Dodavanje filma</span>
    <form method="post">
        <input type="text" name="naziv" />
        <textarea name="opis" style="resize: none;" rows="5"></textarea>
        <input type="text" name="glumci" />
        <input type="text" name="reziser" />
        <input type="text" name="trajanje" />
        <input type="text" name="trejler" />
        <select>
            <option value="-- Izaberite zanr --" disabled="disabled" selected>-- Izaberite zanr --</option>
            <?php
            if (is_array($DATA['zanrovi']))
                foreach ($DATA['zanrovi'] as $zanrovi):
                    ?>
                    <option value="<?php echo $zanrovi->genre_id ?>">
                        <?php echo $zanrovi->name ?>
                    </option>
                <?php endforeach; ?>
        </select>
        <input type="submit" value="DODAJ FILM" />
    </form>
    <?php if (isset($DATA['message'])): ?>
        <p><?php echo htmlspecialchars($DATA['message']); ?></p>   
    <?php endif; ?>
</div>
<?php include 'app/views/_global/afterContent.php'; ?>