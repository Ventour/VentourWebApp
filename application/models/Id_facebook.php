<?php defined('BASEPATH') OR exit('No direct script access allowed');
class inserisci_attivita extends CI_Model {
        public function __construct()
        {
                parent::__construct();
				$this->load->database();
                // Your own constructor code
        }

        public function get_idfb()
        {
			
require 'facebook.php';

$facebook = new Facebook(array(
  'appId'  => '1588972924451715',
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
    echo '<pre>'.htmlspecialchars(print_r($e, true)).'</pre>';
    $user = null;
  }
}
		
?>
       <?php if ($user) { ?>
        <?php //print htmlspecialchars(print_r($user_profile, true)) ;
		$nome=$user_profile['name'];
	//	echo "Hello, $nome &nbsp";
		$foto= $user_profile['id'];
	//	echo "<img class='circolare' src=\"https://graph.facebook.com/$foto/picture\" alt=\" ... \" height=\"50\" />";
		//print $user_profile['age_range'];
		?>
    <?php } else { ?>
      <fb:login-button></fb:login-button>
    <?php } ?>
    <div id="fb-root"></div>
    ?>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId: '<?php echo $facebook->getAppID() ?>',
          cookie: true,
          xfbml: true,
          oauth: true
        });
        FB.Event.subscribe('auth.login', function(response) {
          window.location.reload();
        });
        FB.Event.subscribe('auth.logout', function(response) {
          window.location.reload();
        });
      };
      (function() {
        var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol +
          '//connect.facebook.net/en_US/all.js';
        document.getElementById('fb-root').appendChild(e);
      }());
    </script>
<?
		return $foto;
        }
		
}
?>