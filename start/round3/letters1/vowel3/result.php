<?php
define('TITLE', 'Countdown - Round 3 - Game 1 - 3 Vowels');

require('../../../../constant.php');

include('../../../../header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main class="result">
				<h1 class="h1_title wow fadeIn">Result <span>Longest Word (8 letters)</span></h1>
				<div class="main-entry">
					<ul>
						<li class="l1 wow bounceInDown">CRISPENS</li>
						<li class="l2 wow bounceInDown">INSCAPES</li>
						<li class="l3 wow bounceInDown">PRINCESS</li>
						<li class="l4 wow bounceInDown">SCRAPIES</li>
						<li class="l5 wow bounceInDown">ARCSINES</li>
						<li class="l6 wow bounceInDown">ARSENICS</li>
						<li class="l7 wow bounceInDown">RACINESS</li>
					</ul>
					<a href="<?= BASE_URL ?>/start/round3/letters2" class="btn_result wow flipInX">Next Game</a>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../../../footer.php'); ?>
