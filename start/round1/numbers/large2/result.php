<?php
define('TITLE', 'Countdown - Round 1 - Game 3 - 2 Large');

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
						<li class="l1 wow bounceInDown"><mark class="warning">30</mark> x <mark class="warning">5</mark> = 150</li>
						<li class="l2 wow bounceInDown">150 x <mark class="warning">7</mark> = 1,050</li>
						<li class="l3 wow bounceInDown">1,050 - <mark class="warning">95</mark> = <mark class="success">955</mark></li>
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
