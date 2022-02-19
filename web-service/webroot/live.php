<!DOCTYPE html>
<html lang="de">

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset='utf-8'>
		<title>Gottesdienst Livestream</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
		<link rel="stylesheet" type="text/css" href="styles/player.css" />
		<link rel="stylesheet" href="styles/video-js.min.css" />
		<!-- external script required to use the fontawsome icon pack (ver. 5) --> 
		<script src="https://kit.fontawesome.com/48d181da71.js" crossorigin="anonymous"></script>
	</head>
	
	<body>
		<p><a href="php/backToList.php">Zurück zu den Aufnahmen</a></p>

		<center>
		<H1> Gottesdienst Live Stream </H1>
		<H4>Zuschauerzahl: <span id="viewerCount">...</span></H4>
		
		<!-- the box capsels the live stream video player (videoJS) --> 
		<div id="player-box">
			<?php 
				require_once 'php/config.php';

				// Only show video player when live stream is active (detected by an existing HLS playlist file .m3u8)
				if(EnvGlobals::isLive() == true) {
					// show a loading spinner until the actual video player shows up
					echo "<i id='loadingSpinner' class='fas fa-spinner' style='color:#089bcc;font-size:115px;'></i>";
				} else {
					// tell the user that the live stream is offline at the moment
					echo "<H1>Sendepause</H1>";
				}
			?>
		</div>

		<!-- include footer with impressum link and more -->
		<?php require_once 'php/footer.php'; ?>

		</center>
		
		<!-- execute scripts for dynamic content update functionality and the videoJS lib -->
		<script src="video.min.js"></script>
		<script src="js/status.js"></script>

	</body>
	
</html>
