<!DOCTYPE html>
<html>
	<head>
		<!-- Header. CSS includes. -->
		<meta charset="utf-8">
		<title>Copter LCARS</title>
		<link rel="icon" href="/css/trek.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<link rel="stylesheet" href="/css/leaflet.css" />
		<link rel="stylesheet" href="/css/leaflet-numbered-markers.css" />
		
	</head>
	<body>
		<!-- Body -->
		<div id="mainwindow">
			<div id="main-side"></div>
			<div id="map-canvas"></div>
			<div id="camera-main" style="display: none"></div>
			<div id="main-bottom"></div>
		</div>
		<div id="sidepanel">
			<div id="menu-button-holder">
				<button type="button" class="cbtn nav-a" onclick="allStop()">All Stop</button>
				<button type="button" class="cbtn nav-b" onclick="statusMode()">Status</button>
				<button type="button" class="cbtn nav-c" onclick="manualMode()">Manual</button>
				<button type="button" class="cbtn nav-c" onclick="autoMode()">Automatic</button>
				<button type="button" class="cbtn nav-c" onclick="trackingMode()">Tracking</button>
				<button type="button" class="cbtn nav-d" onclick="settingsMode()">Settings</button>
				
			</div>
			<div id="secondary-button-holder">
				<div id="menu-top-a">
					<div id="menu-top-b"></div>
				</div>
				
				<div id="settings-holder" style="display: none">
					<div class="headline">
						<span class="h3">Settings</span>
					</div>
					
					<button id="settings-camera" class="cbtn roundbtn" onclick="cameraMode();">Toggle Camera</button>
					<button id="settings-path" class="cbtn roundbtn" onclick="togglePath()">Toggle Flight Path</button>
				</div>
				
				<div id="status-holder" style="display: none">
					<div class="headline">
						<span class="h3">Status Report</span>
					</div>
					
					<div id="bearing" class="text"></div>
					<div id="response" class="text"></div>
				</div>
				
				<div id="manual-holder" >
					<div class="headline">
						<span class="h3">Manual Mode</span>
					</div>
					
					<button id="manual-edit" class="cbtn roundbtn" onclick="toggleMarkersEdit();">Edit Waypoints</button>
					<button id="manual-reset" class="cbtn roundbtn" onclick="clearMarkers(true)">Reset Waypoints</button>
					<button id="manual-begin" class="cbtn squarebtn" onclick="beginManual()">Begin Flight</button>
				</div>
				
				<div id="auto-holder" style="display: none">
					<div class="headline">
						<span class="h3">Automatic Mode</span>
					</div>

					<button id="auto-edit" class="cbtn roundbtn" onclick="toggleBoundsEdit()">Edit Boundaries</button>
					<button id="auto-reset" class="cbtn roundbtn" onclick="clearMarkers(true)">Reset Boundaries</button>
					<button id="auto-begin" class="cbtn squarebtn" onclick="beginAuto()">Begin Flight</button>
				</div>
				
				<div id="tracking-holder" style="display: none">
					<div class="headline">
						<span class="h3">Tracking Mode</span>
					</div>

					<button id="track-user" class="cbtn roundbtn" onclick="beginUserTracking()">Track Device</button>
					<button id="track-object" class="cbtn roundbtn disabled" onclick="beginObjectTracking(0)">Track Strafe</button>
					<button id="track-object" class="cbtn roundbtn disabled" onclick="beginObjectTracking(1)">Track Rotate</button>
				</div>
				
				<div id="information" class="text"></div>
				<div id="status" class="text"></div>
			</div>
			<div id="tertiary-holder">
				<div id="tertiary-menu-a">
				</div>
				<div id="tertiary-menu-b">
					<div id="menu-top-c">
						<div id="menu-top-d"></div>
					</div>
				</div>
				<div id="tertiary-menu-c">
				</div>
				<div id="tertiary-menu-d">
					<div id="menu-bottom-a">
						<div id="menu-bottom-b"></div>
					</div>
					<div class="headline">
						<span class="h3">Camera Feed</span>
					</div>
					<div id="camera-secondary"></div>
				</div>
			</div>
		</div>
		<div id="main-vertical"></div>
		
		<script src="/js/jquery-2.1.1.min.js"></script>
		<script src="/js/jquery-blink.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/leaflet.js"></script>
		<script src="/js/leaflet-numbered-markers.js"></script>
		<script src="/js/map.js"></script>
		<script src="/js/ajax.js"></script>
		<script src="/js/control.js"></script>
		
		
	</body>
</html>




<!-- Footer. Javascript includes. 
		<script src="/jwplayer/jwplayer.js"></script>
		<script src="/js/piCameraStream.js"></script>
		
		<div id="sidepanel_bottom">
				<object type="application/x-shockwave-flash" data="jwplayer/jwplayer.flash.swf" width="100%" height="100%" bgcolor="#000000" id="video-jwplayer" name="video-jwplayer" tabindex="0">
					<param name="allowfullscreen" value="true">
					<param name="allowscriptaccess" value="always">
					<param name="seamlesstabbing" value="true">
					<param name="wmode" value="opaque">
				</object>
				<div id="video-jwplayer_aspect" style="display: none;"></div>
				<div id="video-jwplayer_jwpsrv" style="position: absolute; top: 0px; z-index: 10;"></div>
			</div>-->		
