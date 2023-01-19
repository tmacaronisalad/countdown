<?php
define('TITLE', 'Countdown - Round 3 - Game 4 - Conundrum');

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
						<li class="l1 wow bounceInDown">K</li>
						<li class="l2 wow bounceInDown">E</li>
						<li class="l3 wow bounceInDown">Y</li>
						<li class="l4 wow bounceInDown">B</li>
						<li class="l5 wow bounceInDown">O</li>
						<li class="l6 wow bounceInDown">A</li>
						<li class="l7 wow bounceInDown">R</li>
						<li class="l8 wow bounceInDown">D</li>
					</ul>
					<a href="<?= BASE_URL ?>/result.php" class="btn_result wow flipInX">Result</a>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../../footer.php'); ?>
