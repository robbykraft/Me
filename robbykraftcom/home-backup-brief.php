<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style>
body{
	padding:7vmin;
	font-family: 'Montserrat', sans-serif;
	color:#FFF;
	background-color: #F08;
	text-align:left;
}
h1{ font-size: 12vmin; }
h2{ font-size: 9vmin; }
ul{ 
	padding:0;
	margin:0;
	list-style: none;
	font-size: 9vmin;
}
a, a:hover, a:active, a:visited{ color:#FFF; }
</style>
<h1>Robby Kraft</h1>
<h2>artist, engineer, educator</h2>
<ul>
	<li><a href="/origami/">work</a></li>
	<li><a href="/press/">press</a></li>
</ul>
<h2><a href="//instagram.com/gridpaper">instagram</a> <a href="//twitter.com/robbykraft">twitter</a><br><span onmouseover="replaceEmail(true)" onmouseout="replaceEmail(false)" id="emailAddress">email</span></h2>
<script>
function replaceEmail(show){
	if(show){
		var prefix = "robbykraft";
		var suffix = "gmail.com";
		document.getElementById("emailAddress").innerHTML = prefix + "@" + suffix; 
	}
	else { document.getElementById("emailAddress").innerHTML = "email"; }
}
</script>