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
            <div class="col-md-2 hidden-sm"></div>
            <div class="col-sm-12 col-md-8">
                <form action="" name="crea" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="titolo_attivita" class="control-label col-sm-2">Activity title:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="titolo_attivita"
                                   placeholder="Title of the activity" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="categoria" class="control-label col-sm-2">Category:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="categoria" placeholder="Select a category" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="luogo" class="control-label col-sm-2">Place:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="luogo"
                                   placeholder="Select the place of the activity" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inizio" class="control-label col-sm-2">Start:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inizio" placeholder="Enter the activity start time" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="durata" class="control-label col-sm-2">Duration:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="durata" placeholder="Enter the activity duration">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="posti" class="control-label col-sm-2">Available places:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="posti" placeholder="Enter the number of available places" min="1" max="20" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pagamento" class="control-label col-sm-2">Payment:</label>
                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label><input type="checkbox" value=""> Not implemented yet</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descrizione" class="col-sm-2">Description:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="descrizione"
                                      placeholder="Insert here a description of your activity"></textarea>
                        </div>
                    </div>
                    <input type="submit" name="invia" value="Create" class="btn btn-block button_cerca_home" />
                </form>
            </div>
            <div class="col-md-2 hidden-sm"></div>

        </div>
    </div>
</div>