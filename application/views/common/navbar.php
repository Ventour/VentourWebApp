
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->helper('url'); ?>
<nav class="navbar navbar-default" style="margin-bottom:0px;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"
                    aria-expanded="false"><span class="sr-only">Toggle navigation</span><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand logo_navbar" href="#"><img
                        src="<?php echo base_url('assets/images/logo.png'); ?>"></a></div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="defaultNavbar1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?
                    require 'facebook.php';

                    $facebook = new Facebook(array(
                        'appId' => '1588972924451715',
                        'secret' => 'de0fa2c1019525abfaca1568bc656828',
                    ));

                    // See if there is a user from a cookie
                    $user = $facebook->getUser();

                    if ($user) {
                        try {
                            // Proceed knowing you have a logged in user who's authenticated.
                            $user_profile = $facebook->api('/me');
                            $user_profile2 = $facebook->api('/me?fields=name,birthday,email,cover,verified,timezone,gender,age_range,picture,locale');
                        } catch (FacebookApiException $e) {
                            //echo '<pre>' . htmlspecialchars(print_r($e, true)) . '</pre>';
                            $user = null;
                        }

                    }


                    ?>
                    <?php if ($user) { ?>
                        <?php //print htmlspecialchars(print_r($user_profile, true)) ;
                        $nome = $user_profile['name'];
                        echo "Hello, $nome &nbsp";
                        $foto = $user_profile['id'];
                        echo "<img class='circolare' src=\"https://graph.facebook.com/$foto/picture\" alt=\" ... \" height=\"50\" />";
                        //print $user_profile['age_range'];
                        ?>
                    <?php } else { ?>
                        <fb:login-button></fb:login-button>
                    <?php } ?>
                    <div id="fb-root"></div>
                    <script>
                        window.fbAsyncInit = function () {
                            FB.init({
                                appId: '<?php echo $facebook->getAppID() ?>',
                                cookie: true,
                                xfbml: true,
                                oauth: true
                            });
                            FB.Event.subscribe('auth.login', function (response) {
                                window.location.reload();
                            });
                            FB.Event.subscribe('auth.logout', function (response) {
                                window.location.reload();
                            });
                        };
                        (function () {
                            var e = document.createElement('script');
                            e.async = true;
                            e.src = document.location.protocol +
                                '//connect.facebook.net/en_US/all.js';
                            document.getElementById('fb-root').appendChild(e);
                        }());
                    </script>
                </li>
                <li><a href="<?php echo base_url("/create"); ?>">Create your activity</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>