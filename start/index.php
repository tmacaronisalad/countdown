<?php
define('TITLE', 'Countdown - Game');

require('../constant.php');

include('../header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main>
				<h1 class="h1_title wow fadeIn">Mechanics</h1>
				<div class="main-entry">
					<p class="p1 wow slideInLeft">The game will be played for <mark class="danger">3 rounds</mark>, each round composing for <mark class="info">4 games</mark></p>
					<p class="p2 wow slideInLeft">Games 1 & 2 are <mark class="success">The Letter Segment</mark></p>
					<p class="p3 wow slideInLeft">Game 3 <mark class="success">The Numbers Segment</mark></p>
					<p class="p4 wow slideInLeft">Game 4 <mark class="success">The Conundrum Segment</mark></p>
					<a href="round1/letters1" class="wow flipInX">Let's Play</a>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../footer.php'); ?>
