<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><div class="container">
    <div class="col-sm-12" style="margin-top: 25%;">
        <h1 class="title_home">What do you want to do?<?php if (isset($attivita)) echo $attivita; ?></h1>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="well" style="background-color: rgba(255,255,255,0.80);">
                <form action="/" method="post">
                    <div class="row">
                        <div class="col-sm-5 col-xs-8">
                            <!--<label for="email">Email address:</label>-->
                            <input type="text" name="attivita" class="input_attivita" id="cat" placeholder="Activity or category">
                        </div>
                        <!--<label for="pwd">Password:</label>-->
                        <div class="col-sm-2 hidden-xs">
                            <input type="text" name="logo" class="input_luogo" id="loc" placeholder="Place"
                                   value="Rome, Italy">
                        </div>
                        <div class="col-sm-2 hidden-xs">
                            <select class="input_quando" name="quando"  id="sel">
                                <option value="today" selected>Today</option>
                                <option value="tomorrow">Tomorrow</option>
                                <option value="week">This week</option>
                                <option value="weekend">This weekend</option>
                                <option value="nextweek">Next Week</option>
                                <option value="nextmonth">Next Month</option>
                            </select>
                        </div>
                        <div class="col-sm-3 col-xs-4">
                            <input type="submit" name="invia" value="Search" class="btn btn-block button_cerca_home" />
                            <!--<br>
                            <a href="#ricerca_avanzata" data-toggle="collapse">Ricerca avanzata</a>-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>