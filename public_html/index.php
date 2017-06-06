<?php
    require_once("../res/templates/header.php");
?>



<div id="content">
    <h1> Welcome </h1>
    <?php
        $files = scandir('img/');
        foreach($files as $file) {
            echo('file: ' + $file);
        }
    ?>
</div>



<?php
    require_once("../res/templates/footer.php");
?>