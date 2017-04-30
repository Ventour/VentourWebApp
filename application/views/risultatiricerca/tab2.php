<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//require 'facebook.php';

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
//echo '<pre>'.htmlspecialchars(print_r($e, true)).'</pre>';
        $user = null;
    }

}
if ($user) { ?>
    <?php //print htmlspecialchars(print_r($user_profile, true)) ;
    $nome = $user_profile['name'];
    $id_facebook = 0;
    $id_facebook = $user_profile['id'];

    //print $user_profile['age_range'];
    ?>
<?php } else { ?>
    <!--<fb:login-button></fb:login-button>-->
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
            //window.location.reload();
            return false;
        });
        FB.Event.subscribe('auth.logout', function (response) {
            //window.location.reload();
            return false;
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
<div class="well risultati_tab_well" style="background-color: rgba(255,255,255,0.80);">
    <table style="width:100%">
        <tr>
            <td colspan="3" class="risultati_tab">
                <!--<h3 class="risultati_tab_titolo"><?php //echo $titolo; ?></h3>-->
                <?php
                echo "<form action='/activity' method='post'>";
                echo "<input type='hidden' name='id_att' value='$id'>";
                echo "<input type='submit' class='btn btn-link risultati_tab_titolo' value='$titolo'/>";
                echo "</form>";
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="3" class="risultati_tab">
                <p>at <?php echo $luogo; ?></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" class="risultati_tab">
                <p>on <?php echo $data_attivita; ?></p>
            </td>
        </tr>
        <tr>
            <td colspan="3"><p>with <?php
                    $numeroPersone = count($array_foto);
                    if ($numeroPersone == 0) echo "no one. Be the first!";
                    else if ($numeroPersone == 1) echo "one person:";
                    else echo "$numeroPersone people:";
                    ?></p></td>
        </tr>
        <?php
        echo "<tr>";
        $max6 = 6;
        if (count($array_foto) < 6) $max6 = count($array_foto);
        for ($i = 0; $i < $max6; $i++) {
            echo "<td class=\"risultati_tab_immagine\">";
            echo "<form action='/user' method='post'>";
            echo "<input type='hidden' name='id_fb' value='$array_foto[$i]'>";
            echo "<input type='image' class='circolare' src=\"https://graph.facebook.com/$array_foto[$i]/picture\" alt=\" ... \" height=\"50\" />";
            echo "</form>";
            echo "</td>";
            if ($i == 2) {
                echo "</tr>";
                echo "<tr>";
            }
        }
        echo "</tr>";
        ?>
        <tr>
            <td colspan="3" class="risultati_tab">
                <form method="POST" action="/join">
                    <input type="hidden" name="idattivita" value="<?php echo $id; ?>">
                    <input type="hidden" name="idfacebook" value="<?php if (isset($id_facebook)) echo $id_facebook; ?>">
                    <input type="submit" name="join" value="Join!" class="btn btn-block button_cerca_home"
                           style="vertical-align: bottom;">
                </form>
            </td>
        </tr>
    </table>
</div>
