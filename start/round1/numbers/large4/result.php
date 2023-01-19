<?php
define('TITLE', 'Countdown - Round 1 - Game 3 - 4 Large');

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
						<li class="l1 wow bounceInDown"><mark class="warning">100</mark> x <mark class="warning">20</mark> = 2,000</li>
						<li class="l2 wow bounceInDown">2,000 / <mark class="warning">8</mark> = 250</li>
						<li class="l3 wow bounceInDown">250 + <mark class="warning">20</mark> = 270</li>
						<li class="l4 wow bounceInDown">270 - <mark class="warning">7</mark> = <mark class="success">263</mark></li>
					</ul>
					<a href="<?= BASE_URL ?>/start/round1/conundrum" class="btn_result wow flipInX">Next Game</a>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../../../footer.php'); ?>
