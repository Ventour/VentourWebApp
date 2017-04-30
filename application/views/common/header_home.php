<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<?php $this->load->helper('url'); ?>
<head>
    <meta charset="utf-8">
    <title>Ventour - Your next experience is closer than ever</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <!--<link rel="stylesheet" href="<?php //echo base_url("assets/css/fuelux.css"); ?>" />-->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
</head>
<body class="fuelux">
<div class="fullscreen-bg">
    <video loop muted autoplay poster="<?php echo base_url("/assets/images/test1.jpg") ?>" class="fullscreen-bg__video">
        <source src="<?php echo base_url("/assets/videos/343014810.mp4") ?>" type="video/mp4">
    </video>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<!--<script type="text/javascript" src="<?php //echo base_url("assets/js/fuelux.js"); ?>"></script>-->