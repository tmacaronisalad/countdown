<?php
define('TITLE', 'Countdown - Round 2 - Game 3 - 2 Large');

require('../../../../constant.php');

include('../../../../header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main class="result">
				<h1 class="h1_title wow fadeIn">Result</h1>
				<div class="main-entry">
					<ul>
						<li class="l1 wow bounceInDown"><mark class="warning">100</mark> x <mark class="warning">8</mark> = 800</li>
						<li class="l2 wow bounceInDown">800 / <mark class="warning">4</mark> = <mark class="success">200</mark></li>
					</ul>
					<a href="<?= BASE_URL ?>/start/round2/conundrum" class="btn_result wow flipInX">Next Game</a>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../../../footer.php'); ?>
