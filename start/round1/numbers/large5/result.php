<?php
define('TITLE', 'Countdown - Round 1 - Game 3 - 5 Large');

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
						<li class="l1 wow bounceInDown"><mark class="warning">45</mark> - <mark class="warning">20</mark> = 25</li>
						<li class="l2 wow bounceInDown">25 x <mark class="warning">54</mark> = 1,350</li>
						<li class="l3 wow bounceInDown">1,350 / <mark class="warning">2</mark> = <mark class="success">675</mark></li>
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
