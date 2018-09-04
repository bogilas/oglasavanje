<?php include 'app/views/_global/beforeContent.php'; ?>
<div class="container white">
    <br clear="all" />
    <span class="taglineAdd">Dodavanje sale</span>
    <form method="post">
        <input type="text" name="naziv" placeholder="Ime sale"/>
        <textarea name="opis" rows="7" style="resize: none;"></textarea>
        <input type="submit" value="DODAJ" />
    </form>
    <?php if (isset($DATA['message'])): ?>
        <p><?php echo htmlspecialchars($DATA['message']); ?></p>   
    <?php endif; ?>
</div>
<?php include 'app/views/_global/afterContent.php'; ?>
