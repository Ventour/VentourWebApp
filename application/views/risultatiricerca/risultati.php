<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <?php
    for($i=0;$i<$numris;$i++){
        if(i % 4 == 0){
            echo '<div class="row">';
        }
        echo '<div class="col-sm-3">';
        echo "CODICE TABELLA";
        echo '</div>';
        if(i % 4 == 0){
            echo '</div>';
        }
    }
    ?>
</div>