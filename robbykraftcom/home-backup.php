<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style>
p{
	padding:7vmin;
	font-family: 'Montserrat', sans-serif;
	color:#FFF;
	background-color: #F08;
	text-align:left;
	font-size: 120%;
}
a, a:hover, a:active, a:visited{
	color:#FFF;
}
::selection {
	color:#000;
	background: #F09;
}
::-moz-selection {
	color:#000;
	background: #F09;
}
</style>
<div class="row">
	<div class="column">
		<p>hello, i'm robby<br><br>i like to think about big questions that don't have easy answers<br><br>i <a href="/projects/">make things</a> and <a href="/teach/">teach</a> and <a href="/research/">research</a> and <a href="/code/">code</a> to satisfy my curiosity<br><br>while you're here, check out my <a href="http://instagram.com/gridpaper">origami</a><br><br> and stay in touch!<br><br><a href="http://twitter.com/robbykraft/">twitter</a> <a href="http://instagram.com/gridpaper">instagram</a> <a href="http://github.com/robbykraft/">github</a> <span onmousedown="didPress=true;" onmouseover="replaceEmail(true)" onmouseout="replaceEmail(false)" id="emailAddress" style="text-decoration:underline">email</span><br><a href="/press/">press</a></p>
	</div>
</div>
<script>
var didPress = false;
function replaceEmail(show){
	if(didPress && !show){ return; }
	if(show){
		var prefix = "robbykraft";
		var suffix = "gmail.com";
		document.getElementById("emailAddress").innerHTML = prefix + "@" + suffix; 
	}
	else {
		document.getElementById("emailAddress").innerHTML = "email";
	}
}
</script>