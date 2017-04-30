<style type="text/css">
.circolare {
	border-radius:999em;   
	-moz-border-radius:999em; 
	-webkit-border-radius:999em;
	-o-border-radius: 999em;  
}
</style>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><div class="container">
    <div class="col-sm-12" style="margin-top: 25%;">
        <h1 class="title_home">What do you want to do?</h1>
        <h1 class="title_home"><?php 
		//while($test!=''){
//		$this->load->database();
//		$query = $this->db->query("SELECT * FROM Attivita");
//		$value = $query->row();
//		$data["test"] = $value->Titolo;
//		
//		foreach($query->result_array() as $row)
//		{
//			echo $row['Titolo'];
//			echo $row['Attivita'];		
//		}
			echo "prova $titolo $categoria prova";
		//}	
		?></h1>        
        <?php

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
      Your user profile is
      <pre>
        <?php print htmlspecialchars(print_r($user_profile, true)) ;
		print $user_profile['name'];
		$foto= $user_profile['id'];
		echo "<img class='circolare' src=\"https://graph.facebook.com/$foto/picture\" alt=\" ... \" height=\"50\" />";
		//print $user_profile['age_range'];
		?>
     <?php print htmlspecialchars(print_r($user_profile2, true)) ;
		//print $user_profile['age_range'];
		?>
      </pre>
    <?php } else { ?>
      <fb:login-button></fb:login-button>
    <?php } ?>
    <div id="fb-root"></div>
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

    </div>
    <?php
    // get latitude, longitude and formatted address
    $data_arr = geocode($_POST['address']);
 
    // if able to geocode the address
    if($data_arr){
         
        $latitude = $data_arr[0];
        $longitude = $data_arr[1];
        $formatted_address = $data_arr[2];
                     
    ?>
 
    <!-- google map will be shown here -->
    <div id="gmap_canvas">Loading map...</div>
    <div id='map-label'>Map shows approximate location.</div>
 
    <!-- JavaScript to show google map -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>    
    <script type="text/javascript">
        function init_map() {
            var myOptions = {
                zoom: 14,
                center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
            marker = new google.maps.Marker({
                map: map,
                position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>)
            });
            infowindow = new google.maps.InfoWindow({
                content: "<?php echo $formatted_address; ?>"
            });
            google.maps.event.addListener(marker, "click", function () {
                infowindow.open(map, marker);
            });
            infowindow.open(map, marker);
        }
        google.maps.event.addDomListener(window, 'load', init_map);
    </script>
 
    <?php
 
    // if unable to geocode the address
    }else{
        echo "No map found.";
    }

// function to geocode address, it will return false if unable to geocode address
function geocode($address){
 
    // url encode the address
    $address = urlencode($address);
     
    // google map geocode api url
    $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";
 
    // get the json response
    $resp_json = file_get_contents($url);
     
    // decode the json
    $resp = json_decode($resp_json, true);
 
    // response status will be 'OK', if able to geocode given address 
    if($resp['status']=='OK'){
 
        // get the important data
        $lati = $resp['results'][0]['geometry']['location']['lat'];
        $longi = $resp['results'][0]['geometry']['location']['lng'];
        $formatted_address = $resp['results'][0]['formatted_address'];
         
        // verify if data is complete
        if($lati && $longi && $formatted_address){
         
            // put the data in the array
            $data_arr = array();            
             
            array_push(
                $data_arr, 
                    $lati, 
                    $longi, 
                    $formatted_address
                );
             
            return $data_arr;
             
        }else{
            return false;
        }
         
    }else{
        return false;
    }
}
?>

    
    
    <div class="row">
        <div class="col-sm-12">
            <div class="well" style="background-color: rgba(255,255,255,0.80);">
                <form action="" method="post">
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
                                <option selected>Today</option>
                                <option>Tomorrow</option>
                                <option>This week</option>
                                <option>This weekend</option>
                                <option>Next Week</option>
                                <option>Next Month</option>
                            </select>
                        </div>
                        <div class="col-sm-3 col-xs-4">
                            <input type="submit" name="invia" value="Search" class="btn btn-block button_cerca_home" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>