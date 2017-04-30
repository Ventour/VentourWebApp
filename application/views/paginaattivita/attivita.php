<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-sm-3 col-lg-3"></div>
<div class="col-lg-6 col-sm-6">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="<?php echo base_url("/assets/images/mountain.jpg"); ?>">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <!--<div class="useravatar">
            <img alt="" src="<?php //echo $imm; ?>">
        </div>-->
        <div class="card-info"> <span class="card-title"><?php echo $titolo; ?></span>

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

    </div>

    <div class="well">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1">
                <h3><?php $q = floor(count($iscritti)/5); echo $q; ?> user<?php if ($q != 1) echo "s"; ?> joined this activity:</h3><br>
                <?php
                if ($errore_iscr_att == true) echo "<p>No users joined this activity. Be the first!</p>";
                else {
                    for ($i = 0; $i < count($iscritti); $i += 5) {
                        //echo "<a href='" . base_url("/") . "'>";

                        echo "<form action='" . base_url("/user") . "' method='post'>";

                        echo "<input type='hidden' name='id_fb' value='" . $iscritti[$i+2] . "'>";
                        //echo "<input type='submit' value='" . $iscritti[0] . " " . $iscritti[0] . "' class='btn btn-link bottone_persona_pagina_attivita' style='background: #f0f0f0 url(" . $iscritti[0] . ");'>";
                        echo "<button type='submit' class='btn btn-link bottone_persona_pagina_attivita'>";
                        echo "<img src='" . $iscritti[$i+3] . "' class='circolare'>";
                        echo " " . $iscritti[$i+0] . " " . $iscritti[$i+1];
                        echo "</button>";

                        echo "</form><br>";


                    }
                }
                ?>

            </div>
            <div class="tab-pane fade in" id="tab2">
                <h3>Info</h3>
                <p><b>Category: </b><?php echo $categoria; ?></p><br>
                <p><b>Description: </b><?php echo $descrizione; ?></p><br>
                <p><b>Place: </b><?php echo $luogo; ?></p><br>
                <p><b>Date: </b><?php echo $data_attivita; ?></p><br>
                <p><b>Duration: </b><?php echo $durata; ?></p><br>
                <p><b>Places: </b><?php echo $posti_max; ?></p><br>
                <p><b>Last modified: </b><?php echo $data_inserimento; ?></p><br>
            </div>
            <div class="tab-pane fade in" id="tab3">
                <h3>Informazioni tab 3</h3>
            </div>
        </div>
    </div>

</div>
<div class="col-sm-3 col-lg-3"></div>

