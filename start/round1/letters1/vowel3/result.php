<?php
define('TITLE', 'Countdown - Round 1 - Game 1 - 3 Vowels');

require('../../../../constant.php');

include('../../../../header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main class="result">
				<h1 class="h1_title wow fadeIn">Result <span>Longest Word (9 letters)</span></h1>
				<div class="main-entry">
					<h2 class="wow bounceInDown">HAPPINESS</h2>
					<a href="<?= BASE_URL ?>/start/round1/letters2" class="btn_result wow flipInX">Next Game</a>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../../../footer.php'); ?>
