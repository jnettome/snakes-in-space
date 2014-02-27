<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/snake.css">
	<title>Snakes In Space – HTML5 Canvas Game</title>
	<script src="scripts/jquery.js"></script>
	<script src="scripts/modernizr.js"></script>
	<script src="scripts/snake.js"></script>
	<script type="text/javascript" src="http://use.typekit.com/iee1szx.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>
	<div id="snake-bg">
		<header>
			<h1 id="title">Snakes</h1>
			<h2 id="subtitle">In Space</h2>
		</header>
		<img src="images/snake_bg.png" alt=""/>
		<section id="game-wrapper">
			<div id="intro">
				<h2>Before you Depart</h2>
				<h3>A few things you should know....</h3>
				<div id="instructions">
					<div id="key-directions">Use Arrow Keys to Navigate Snake</div>
					<ul>
						<li><img src="images/snake-food.png" alt="" height="20px" width="20px" /><span>Space Rodents – 20 points</span></li>
						<li><img src="images/jetpack-straps.png" alt="" /><span>Jet Pack – Score Multiplier</span></li>
						<li><img src="images/milk-shake.png" alt="" /><span>Milk Shake – Yumm! 100 points</span></li>
					</ul>
				</div>
			<div id="user-name">
				<fieldset>
					<input id="name" name="name" type="text" maxlength="25" placeholder="Enter Name..." autocomplete="off"/>
					<button id="start" type="submit">To Space!</button>
				</fieldset>
			</div>
			</div>
			<canvas id="game-area" height="500" width="800"></canvas>
			<div id="game-over">
				<div class="left">
					<h2>Game Over</h2>
					<h3><span id="end-game-score">0</span> points?</h3>
					<h4>You can do better than that <span id="end-game-name"></span>...</h4>
					<div id="space-ship"><img src="images/space-ship.png" alt="" /></div>
					<button id="try-again">Try Again!</button>
				</div>
			</div>
			<div id="score">
				<div id="score-label">Score</div>
				<div id="current-score">0</div>
			</div>
			<div id="multiplier">
				<div id="score-label">Multiplier</div>
				<div id="current-multiplier">x 1</div>
			</div>
		</section>
		<footer class="clearfix">
			<p id="copyright">A HTML5 canvas game | Handcrafted HTML, CSS, and jQuery by <a href="http://www.williamcsete.com">William Csete</a> and <a href="http://madebymufffin.com" target="_blank">Tyler Smith</a></p>
		</footer>
	</div>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-18419850-7']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>