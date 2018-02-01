<link href="https://fonts.googleapis.com/css?family=Cormorant:300" rel="stylesheet">
<style>
html,body,h1,h2,h3,h4,h5,p,ul,li{
	margin:0;
	padding:0;
}
html,body{
	font-size: 100%;
	background-color: #333;
}
html{
	display:flex;
	align-items: center;
	justify-content: center;
}
body{
	margin:5em;
	padding:1em;
	border: 1px solid #ded221;
	max-width: 500px;
}
h1{ font-size: 190%; }
h2{ font-size: 170%; }
h3{ font-size: 150%; }
h4{ font-size: 130%; }
h5{ font-size: 110%; }
p{ font-size: 110%; }
ul{ font-size: 100%; }
li{ font-size: 110%; }
h1, h2, h3, h4, h5, p, ul, li{
	font-family:'Cormorant', serif;
	font-weight: 300;
	color:#eee;
	margin-top:.25em;
	margin-bottom:.25em;
	text-transform: none;
}
ul, li{
	padding-left:.33em;
	margin:0;
	list-style: none;
}
a, a:hover, a:active, a:visited{
	color:#ded221;
	text-decoration:none;
}
h1{
	border-bottom-color: #888;
	border-bottom-style: solid;
	border-bottom-width: 1px;
}
::selection {
	color:#000;
	background: #ebdb0d;
}
::-moz-selection {
	color:#000;
	background: #ebdb0d;
}
@media (hover: none) {
	body{
		margin:2em;
	}
}
</style>
<h1>Robby Kraft</h1>
<h3>instructor of code &amp; design, Parsons school of design, School for Poetic Computation</h3>
<h3>origami art and design, software engineer</h3>
<p><a href="/projects/">work and research</a></p>
<p>lives in Brooklyn, New York, and on these websites:</p>
<ul>
	<li><a href="//instagram.com/gridpaper">instagram</a></li>
	<li><a href="//twitter.com/robbykraft">twitter</a></li>
	<li><a href="//github.com/robbykraft">github</a></li>
</ul>
<p>contact by email <span style="color:#ded221" id="emailAddress"></span></p>
<p><a href="/cv.html">curriculum vitae</a></p>
<script>
var prefix = "robbykraft";
var suffix = "gmail.com";
document.getElementById("emailAddress").innerHTML = prefix + "@" + suffix; 
</script>
