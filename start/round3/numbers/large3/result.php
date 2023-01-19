<?php
define('TITLE', 'Countdown - Round 3 - Game 3 - 3 Large');

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
						<li class="l1 wow bounceInDown"><mark class="warning">150</mark> x <mark class="warning">5</mark> = 750</li>
						<li class="l2 wow bounceInDown">750 + <mark class="warning">2</mark> = <mark class="success">752</mark></li>
					</ul>
					<a href="<?= BASE_URL ?>/start/round3/conundrum" class="btn_result wow flipInX">Next Game</a>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../../../footer.php'); ?>
