<h1>Apparent positions of Jupiter's moons</h1>

<p>This project is an implementation of the trigonometric ephemeris approximations of Jupiter's 4 largest moons with respect to time. The program visualizes each moon's apparent position with respect to Jupiter as seen from Earth. The source material was Jean Meeus's Astronomical Algorithms.</p>

<div class="row">
	<div class="column">
		<img src="/images/astroalgorithms1.png">
		<p class="quote">from "Astronomical Algorithms" by Jean Meeus</p>
	</div>
</div>

<h1>Twitter bot</h1>

<p>One product of this program is a <a href="//twitter.com/jupiternow">twitter bot</a> that generates and tweets an image representing the current location of the moons. Every 6 hours the bot tweets an animation of the path of the moons over the next 6 hours.</p>

<div class="row">
	<div class="column">
		<img src="/images/jupiter-moons.gif">
		<p class="quote">one 6 hour period</p>
	</div>
</div>

<div class="row">
	<div class="column">
		<div style="margin-left:25%; margin-right:25%; color:#fff; background-color:#666; padding:1em; text-align:center;">
			@jupiternow 499152060
		</div>
		<p class="quote">tweet @ the bot</p>
	</div>
	<div class="column">
		<img src="/images/jupitertwitterreply.png">
		<p class="quote">the bot's reply</p>
	</div>
</div>

<p>Compose a tweet with</p>
<ul>
	<li>the bot's name (@jupiternow)</li>
	<li>a <a href="https://www.epochconverter.com/">unix timestamp</a></li>
</ul>
<p>and the bot will reply to your tweet with a rendering of the positions of the moons at that exact time.</p>

<p><a href="//twitter.com/jupiternow">Jupiter's moons on twitter</a><br><a href="https://github.com/robbykraft/Jupiter">source code on github</a><br>
ephemeris from <a href="http://www.willbell.com/math/mc1.htm">Astronomical Algorithms</a></p>
