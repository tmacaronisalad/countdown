<?php
define('TITLE', 'Countdown - Round 1 - Game 4 - Conundrum');

require('../../../constant.php');

include('../../../header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main class="result">
				<h1 class="h1_title wow fadeIn">Result:</h1>
				<div class="main-entry">
					<ul>
						<li class="l1 wow bounceInDown">S</li>
						<li class="l2 wow bounceInDown">T</li>
						<li class="l3 wow bounceInDown">A</li>
						<li class="l4 wow bounceInDown">R</li>
						<li class="l5 wow bounceInDown">F</li>
						<li class="l6 wow bounceInDown">I</li>
						<li class="l7 wow bounceInDown">S</li>
						<li class="l8 wow bounceInDown">H</li>
					</ul>
					<a href="<?= BASE_URL ?>/start/round2/letters1" class="btn_result wow flipInX">Next Round</a>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../../footer.php'); ?>
