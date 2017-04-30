<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->helper('url'); ?> <nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
                    <!--<div class="col-md-2"></div>
                    <div class="col-md-8"></div>
                    <div class="col-md-2"></div>-->
                    <form action="/search" method="post" class="navbar-form navbar-left">
                        <div class="form-group">
                                <!--<label for="email">Email address:</label>-->
                                <input type="text" name="attivita" class="form-control" id="cat" placeholder="Activity or category">
                        </div>
                            <!--<label for="pwd">Password:</label>-->
                        <div class="form-group">
                            <input type="text" name="luogo" class="form-control" id="loc" placeholder="Place"
                                   value="Rome, Italy"></div>
                        <div class="form-group">
                            <select class="form-control" name="quando"  id="sel">
                                    <option value="notselected" selected hidden disabled>When?</option>
                                    <option value="today">Today</option>
                                    <option value="tomorrow">Tomorrow</option>
                                    <option value="week">This week</option>
                                    <option value="weekend">This weekend</option>
                                    <option value="nextweek">Next Week</option>
                                    <option value="nextmonth">Next Month</option>
                            </select></div>
                        <div class="form-group">
                            <input type="submit" name="invia" value="Search" class="btn btn-default bottone_navbar" />
                        </div>
                                <!--<br>
                                <a href="#ricerca_avanzata" data-toggle="collapse">Ricerca avanzata</a>-->
                </div>
            </form>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>