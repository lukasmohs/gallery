<?php
    require_once("../res/templates/header.php");
?>

<div id="content">
    <h1> 
        <?php
        echo($_GET["alb"]);
        ?>
    </h1>
    <?php
        $files = scandir('img/' . $_GET["alb"]);
        foreach($files as $file) {
            if(is_file('img/' . $_GET["alb"] .'/'. $file)) {
                for($i=0;$i<10;$i++){
                    echo('<div class="col-md-6"> <img class="lazy" data-original=img/' . $_GET["alb"] .'/'. $file . '/></div>');
                }
            }
        }

    ?>
</div>



<?php
    require_once("../res/templates/footer.php");
?>