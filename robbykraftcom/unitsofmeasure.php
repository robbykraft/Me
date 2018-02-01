<style>
.quote{
	padding-left:2em; 
	padding-right:2em;
}
</style>

<div class="container">

<h2>talk proposal for Strange Loop 2017</h2>
<hr>
<h1>Units of Measure in languages</h1>
<h4>or, lol-these comments:</h4>
<pre><code>var temperature // celsius (288.15 in K)
var pressure    // psi  (101325 N/m^2) or (1013.25 hPa)
var density     // kg/m^3
var gravity     // m/sec^2
var speed_sound // m/sec
</code></pre>

<h2>talk in 3 parts</h2>
<ol>
<li>the utopian dream language of numbers+units, or, if physical scientists were language designers at Bell Labs</li>
<li>solutions: clojure, F#, astro py, how does this look in c-type languages</li>
<li>a new solution: Swift</li>
</ol>

<h2 class="quote"><em>high school level physics and chemistry 101 teaches that numbers are meaningless without units</em></h2>
<p></p>

<h2>desirable outcome</h2>
<pre><code>velocity = myAcceleration / myMinutes   // units of "velocity" are automatically derived</code></pre>
<h2>how far can we take it?</h2>

<pre><code>mouse + cat</code></pre>

<p>(maybe! try hard. think about it..) cat eats mouse-like a children story? DNA combination?</p>

<p>what about</p>

<pre><code>Carbon + Oxygen</code></pre>

<p>(chemical or nuclear bond?) We talking Carbon Monoxide, or Silicon 14?</p>

<h2>catalog</h2>

<p>we are beginning to see the need for
<ul>
	<li>a system of agreed upon behaviors (chemical or nuclear bond?)</li>
	<li>a master catalog of units and their definitions. this is fine! every unit of measure is carefully defined in the real world too.</li>
</ul>

<h2>syntax is everything</h2>
<p>if we're going to build something, it has to feel good</p>

<h4>good</h4>
<pre><code>velocity = accel / time</code></pre>
<h4>UGHHH</h4>
<pre><code>var accel = {value: 5.0, units:{numerator:["meter"], denominator:["second","second"]}};
var time = {value:30.0, units:{numerator:["second"]}};
var velocity = divideNumbers(accel, time);</code></pre>

<h2>Solutions (lit-review)</h2>

<p>how close to the utopian dream?</p>

<h4>Clojure</h4>
<a href="https://github.com/martintrojer/frinj">https://github.com/martintrojer/frinj</a>

<h4>F#</h4>
<a href="https://docs.microsoft.com/en-us/dotnet/articles/fsharp/language-reference/units-of-measure">https://docs.microsoft.com/en-us/dotnet/articles/fsharp/language-reference/units-of-measure</a>

<h4>Astropy</h4>
<a href="https://github.com/astropy/astropy/tree/master/astropy/units">https://github.com/astropy/astropy/tree/master/astropy/units</a>

</div>
