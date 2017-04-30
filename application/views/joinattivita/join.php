<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="col-sm-12">
        <div class="row">
            <h2 style="text-align: center;">Join</h2>
        </div>
    </div>
    <div class="well">
        <div class="row">
            <div class="col-xs-12">
                <?php if($successo) echo "<h1>Activity joined with success!</h1>"; else echo "<h1>the activity is full, sorry...</h1>"; ?>
            </div>
        </div>
    </div>
</div>