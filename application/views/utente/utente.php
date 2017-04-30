<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-sm-3 col-lg-3"></div>
<div class="col-lg-6 col-sm-6">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="<?php echo $imm; ?>">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="<?php echo $imm; ?>">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $nome . " " . $cognome; ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary bottone_navbar" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                <div class="hidden-xs">General</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-text-size" aria-hidden="true"></span>
                <div class="hidden-xs">Info</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <a id="following" class="btn btn-default" href="<?php echo $url; ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">FB Profile</div>
            </a>
        </div>
    </div>

    <div class="well">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1">
                <h3><?php $q = floor(count($att_part)/2); echo $q; ?> activit<?php if ($q==1) echo "y"; else echo "ies"; ?> joined:</h3><br>
                <?php
                for ($i = 0; $i < count($att_part); $i += 2) {
                    echo "<form action='" . base_url("/activity") . "' method='post'>";
                    echo "<input type='hidden' name='id_att' value='" . $att_part[$i+1] . "'>";
                    echo "<button type='submit' class='btn btn-link bottone_persona_pagina_attivita'>";
                    echo $att_part[$i+0];
                    echo "</button>";
                    echo "</form><br>";
                }
                ?>
            </div>
            <div class="tab-pane fade in" id="tab2">
                <h3>Info</h3>
                <p><b>Name: </b><?php echo $nome . " " . $cognome; ?></p><br>
                <p><b>Age: </b><?php echo $data_nascita; ?></p><br>
                <p><b>Sex: </b><?php if($sesso == 'm')echo 'male'; else echo 'female'; ?></p><br>
                <p><b>City: </b><?php echo $citta; ?></p><br>
                <p><b>Sign Up: </b><?php echo $data_iscr; ?></p>

            </div>
            <div class="tab-pane fade in" id="tab3">
                <h3>Informazioni tab 3</h3>
            </div>
        </div>
    </div>

</div>
<div class="col-sm-3 col-lg-3"></div>

