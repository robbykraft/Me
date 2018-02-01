<link rel="stylesheet" href="/css/device-mockups.min.css">
<link rel="stylesheet" href="/css/github.css">
<style>
[class^="ios-projects"]{
	display: grid;
	grid-column-gap: 20px;
	grid-row-gap: 20px;
	justify-items: stretch;
	align-items: stretch;
	margin: 4em 5% 4em 5%;
}
.ios-projects-left{  grid-template-columns: 1fr 2fr; }
.ios-projects-right{ grid-template-columns: 2fr 1fr; }
.ios-badge-container{
	width:100%;
	display:flex;
	align-items: center;
	justify-content: center;
	margin:auto;
}
.markdown-body img.ios-badge{
	margin:auto;
	max-width: 120px;
}

.markdown-body pre{ max-width: 50vw; }

@media only screen and (max-width: 700px){
	.ios-projects-left{  grid-template-columns: 1fr; }
	.ios-projects-right{ grid-template-columns: 1fr; }
	.markdown-body pre{ max-width: 75vw; }
}
h1,h2,h3,h4,h5{text-transform: none;}
h1{border-bottom: solid 3px black; }
h1.welcome{border-bottom: none;}
pre, code{
	white-space: pre-wrap;	
}
</style>

<h1 class="welcome">Hello 👋</h1>

<p>Being an iOS developer these past 6 years has been a front row seat to incredible transformations in human-computer interaction and I see so much of the runway ahead of us still. <b>Below are a few of my projects.</b> I aim to continue building apps that are inclusive and conscious of social, economic, and bandwidth limitations.</p>

<div class="ios-projects-left" id="pollen">
	<div class="device-container">
		<div class="device-mockup iphone6 portrait white">
			<div class="device">
				<div class="screen"><img src="/images/austin-pollen-screen-1.png" class="img-responsive" alt=""></div>
				<div class="button"></div>
			</div>
		</div>
	</div>
	<div class="markdown-body">
		<h1>Austin Texas Pollen</h1>
		<p>Doctors at the Allergy &amp; Asthma Associates center in Austin Texas sample the pollen count and deliver the allergy report to the greater Austin area. This app connects you directly to these reports as they get released. Personalize the app for a curated allergy report based on specific plants that trigger your allergies.</p>
		<h2>Tech Specs</h2>
		<pre><code>* Firebase backend
* web admin panel to input the pollen-reading
* custom CALayer charts and graphs</code></pre>
		<h2>Project</h2>
		<ul>
			<li>project consists of 1 iOS app and 1 small web admin portal</li>
			<li>Users should be able to interface with the data, for example: filter by relevant plant species without encountering confusion</li>
		</ul>
		<h2>Version 2 (in progress)</h2>
		<ul>
			<li>Version 1 was a simple proof of concept</li>
			<li>Version 2 includes daily data collection of personal allergy response</li>
			<li>optimized for rapid survey data collection, includes new custom CALayer charts</li>
		</ul>
		<div id="ios-badge-container">
			<a href="https://itunes.apple.com/us/app/austin-texas-pollen/id1229265676?mt=8">
			<img class="ios-badge" src="/images/ios-app-store.svg">
			</a>
		</div>
	</div>
</div>

<div class="ios-projects-left" id="domekit">
	<div class="device-container">
		<div class="device-mockup iphone6 portrait white">
			<div class="device">
				<div class="screen"><img src="/images/domekit-screen.png" class="img-responsive" alt=""></div>
				<div class="button"></div>
			</div>
		</div>
	</div>
	<div class="markdown-body">
		<h1>Domekit</h1>
		<p>Domekit is a parametric design tool for making geodesic structures of human-scale proportion. The user is able to customize the dome frequency, sphere-to-dome slice location, and the size of the dome based on the dimensions of the floor, height, or construction materials. The app generates a construction diagram and parts list.</p>
		<h2>Tech Specs</h2>
		<pre><code>* geodesic geometry backend <b><a href="//github.com/robbykraft/Geodesic/">CODE ON GITHUB</a></b>
* custom opengl rendering and animations
* 8-digit floating point architectural measurement accuracy</code></pre>
		<h2>Project</h2>
		<p>Following a successful <a href="https://www.kickstarter.com/projects/effalo/domekitcc-domes-for-all">Kickstarter</a> by Michael Felix to distribute easily-assemblable domes to the public, I joined the project to build a geodesic dome calculator with a successful first release in 2013. In 2015, I rebuilt the app from the ground up with a new geodesic geometry engine capable of a higher level of precision.</p>
		<div id="ios-badge-container">
			<a href="https://itunes.apple.com/us/app/domekit/id617768136?mt=8">
			<img class="ios-badge" src="/images/ios-app-store.svg">
			</a>
		</div>
	</div>
</div>



<div class="ios-projects-left" id="characterdaily">
	<div class="device-container">
		<div class="device-mockup iphone6 portrait white">
			<div class="device">
				<div class="screen"><img src="/images/character-daily-screen.jpg" class="img-responsive" alt=""></div>
				<div class="button"></div>
			</div>
		</div>
	</div>
	<div class="markdown-body">
		<h1>Character Daily</h1>
		<p>Character Daily is a content delivery system to teachers offering brief lessons, quotes, activities, and classroom senarios. Teachers can track their progress and with which material their students find most engaging.</p>
		<h2>Tech Specs</h2>
		<pre><code>* Firebase backend: database, storage, and user auth
* website admin portal for lesson creation/management
* custom scheduling system and lesson calendar</code></pre>
		<h2>Project</h2>
		The contract consists of 1 medium-sized iOS app (~30 screens) and 1 web admin portal. The app was built for a private school system and the groundwork was laid for a monetized subscription model for a wider school district release.
		<h3><a href="http://characterdaily.com/">characterdaily.com</a></h3>
		<div id="ios-badge-container">
			<a href="https://itunes.apple.com/us/app/character-daily/id1149441685?mt=8">
			<img class="ios-badge" src="/images/ios-app-store.svg">
			</a>
		</div>
	</div>
</div>



<div class="ios-projects-left" id="hoverpad">
	<div class="video-container">
		<iframe src="https://www.youtube.com/embed/OgOK-j4iwpA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
	<div class="markdown-body">
		<h1>Hoverpad</h1>
		<p>Hoverpad turns an iOS device into a wireless gamepad, appearing to a computer as a Generic HID Gamepad device with a direcitonal-pad (up down left right) mapped to the device tilt from the orientation hardware.</p>
		<h2>Tech Specs</h2>
		<pre><code>* BLE communication between iOS and Mac when BLE was still new
* pushed boundaries of possible BLE communication bandwidth
* integration with a 3rd party virtual USB HID gamepad device library</code></pre>
		<h3><a href="http://hoverpad.wtf/">hoverpad.wtf</a></h3>
		<div id="ios-badge-container">
			<a href="https://itunes.apple.com/us/app/hoverpad-wireless-gamepad/id934530321?mt=8">
			<img class="ios-badge" src="/images/ios-app-store.svg">
			</a>
		</div>
	</div>
</div>


<div class="ios-projects-left" id="domekit">
	<div class="device-container">
		<div class="device-mockup iphone6 portrait white">
			<div class="device">
				<div class="screen"><img src="/images/double-agent.gif" class="img-responsive" alt=""></div>
				<div class="button"></div>
			</div>
		</div>
	</div>
	<div class="markdown-body">
		<h1>Double Agent</h1>
		<p>Double Agent was a multiplayer <a href="https://en.wikipedia.org/wiki/Mafia_(party_game)">Mafia</a>-style game. Each round the group was sent the same gesture to perform ("touch your nose"). One uninformed party had to inconspicuously watch everyone else to mimic the gesture with little delay. After 3 rounds, the group guessed at who was the uninformed party, the double agent.</p>
		<h2>Tech Specs</h2>
		<pre><code>* time-sensitive synchronized command delivery across WIFI
* cross-platform (Android, iOS), built with openframeworks</code></pre>
		<h2>Project</h2>
		<p>This was a project of Chroma Games for our client Intel. I was the primary driver for both conception and execution.</p>
	</div>
</div>

<h1>Libraries</h1>

<div class="ios-projects-left" id="hoverpad">
	<div class="video-container">
		<img src="https://camo.githubusercontent.com/1fbd3326ce4545d47ab6ff40d4f653a8592aa468/68747470733a2f2f36382e6d656469612e74756d626c722e636f6d2f62656663373664666534376332313264316166333065386265663837363732612f74756d626c725f6f64356b64675a304976317666713136386f315f3530302e676966">
	</div>
	<div class="markdown-body">
		<h1>360&deg; Spherical Panorama View</h1>
		<h3><a href="https://github.com/robbykraft/Panorama#360-spherical-panorama-view">code on Github</a></h3>
		<p>This is a GLKView (UIView) which immerses the user inside panorama images with controls including using device sensors to look around, finger panning to look, touch responsive callbacks with coordinates in image-pixel units or world space 3D vectors.</p>
		<p>A lot of work went into making implementation as simple as possible (< 10 lines), as well as establishing a strict coordinate space with methods to rapidly familiarize onself in the world-space.</p>
		<h3><a href="https://cocoapods.org/pods/PanoramaView">available on CocoaPods</a></h3>
	</div>
</div>
