<?php
define('TITLE', 'Countdown - Round 1 - Game 3 - 1 Large');

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
						<li class="l1 wow bounceInDown"><mark class="warning">100</mark> + <mark class="warning">8</mark> = 108</li>
						<li class="l2 wow bounceInDown">108 / <mark class="warning">2</mark> = 54</li>
						<li class="l3 wow bounceInDown">54 x <mark class="warning">7</mark> = <mark class="success">378</mark></li>
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
