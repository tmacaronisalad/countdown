<?php
define('TITLE', 'Countdown - Round 3 - Game 2 - 5 Vowels');

require('../../../../constant.php');

include('../../../../header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main class="result">
				<h1 class="h1_title wow fadeIn">Result <span>Longest Word (6 letters)</span></h1>
				<div class="main-entry">
					<ul>
						<li class="l1 wow bounceInDown">MOTIVE</li>
						<li class="l2 wow bounceInDown">FOMITE</li>
					</ul>
					<a href="<?= BASE_URL ?>/start/round3/numbers" class="btn_result wow flipInX">Next Game</a>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../../../footer.php'); ?>
