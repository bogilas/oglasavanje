<?php include 'app/views/_global/beforeContent.php'; ?>
    <div class="container white">
        <ul>
            <?php
            if (is_array($DATA['adminPodaci']))
                foreach ($DATA['adminPodaci'] as $w):
           ?>
            <li><?php $w->admin_id ?></li>
             <?php endforeach; ?>
        </ul>
    </div>
<?php include 'app/views/_global/afterContent.php'; ?>
