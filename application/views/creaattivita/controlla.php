<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="col-sm-12">
        <div class="row">
            <h2 style="text-align: center;">Create your activity</h2>
        </div>
    </div>
    <div class="well">
        <div class="row">
            <div class="col-xs-12">
                <?php if($successo) echo "<h1>Activity created with success!</h1>"; else echo "<h1>Missing some infos...</h1>"; ?>
            </div>
        </div>
    </div>
</div>