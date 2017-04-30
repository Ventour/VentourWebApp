<img src="http://ventour.sicuroweb.com/assets/images/logo_big.png" height="100" alt="Mia Immagine"> <br>  <br>
<h1>Ventour</h1>
Ventour is designed to let end users meet each other and share their passions. <br>
In Ventour there are activities organized by end users. <br>
On Ventour users can create their activies, or join them. Amateur actvites of all kinds. For example: <br>
• Want to look for people joining you in a horse riding on the beach? Create an actvity on Ventour and see if anyone is interested.<br>
• Want to go out for a montain excursion, see on Ventour if someone has organized a similar trip and join them.
<hr>
<h2><a href="https://docs.google.com/forms/d/e/1FAIpQLScYIHKRi8NIOKMgBBogwFJn2aGNvppBokbAni-Es5e0RFHxww/viewform?c=0&w=1">Survey</a><br></h2>
<h2>Milestone 1</h2>
• <a href="http://ventour.sicuroweb.com/assets/Slide-Ventour-M1-Final.pdf">Presentation Milestone 1</a><br>
• <a href="http://ventour.altervista.org">Demo</a>


<h2>Milestone 2</h2>
• <a href="http://ventour.sicuroweb.com/assets/milestone2_finale.pdf">Presentation Milestone 2</a><br>
• <a href="http://ventour.sicuroweb.com">Demo</a>


<h2>Milestone 3</h2>
• <a href="http://ventour.sicuroweb.com/assets/milestone3.pdf">Presentation Milestone 3</a><br>
• <a href="http://ventour.sicuroweb.com">Demo</a>


<h2>Documentation</h2>
• <a href="http://ventour.sicuroweb.com/assets/docs.pdf">Docs of the last version!</a><br>


<h2>Installation instructions</h2>
1) Download or Clone Ventour from the original repository (master branch recommended) available at https://github.com/Ventour/VentourWebApp<br>
2) Open /application/config/database.php and edit the following lines with your own database settings:<br>
	'hostname' => 'YOUR_HOST',<br>
	'username' => 'YOUR_DB_USER',<br>
	'password' => 'USER_PASSWORD',<br>
	'database' => 'DATABASE_NAME',<br>
3) Open /application/config/config.php and edit the following line with your own website base url:<br>
	$config['base_url'] = 'http://example.com/';<br>
4) Upload all the content to your website's FTP.<br>
5) Setup your database importing the "install.sql" configuration file (tested on PhpMyAdmin).<br>
6) You are ready to go!<br>