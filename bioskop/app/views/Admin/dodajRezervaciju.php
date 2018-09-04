<?php include 'app/views/_global/beforeContent.php'; ?>
<div class="container white">
    <br clear="all" />
    <span class="taglineAdd">Dodavanje rezervacije</span>
    <form method="post">
        <select id="film">
            <option selected="selected" disabled="disabled" value="-- Bilo koji --">-- Bilo koji --</option>
            <?php
            if (is_array($DATA['filmovi']))
                foreach ($DATA['filmovi'] as $filmovi):
                    ?>
                    <option value="<?php echo $filmovi->movie_id ?>">
                        <?php echo $filmovi->title ?>
                    </option>
                <?php endforeach; ?>
        </select>
    </form>
    <?php if (isset($DATA['message'])): ?>
        <p><?php echo htmlspecialchars($DATA['message']); ?></p>   
    <?php endif; ?>
</div>
<?php include 'app/views/_global/afterContent.php'; ?>