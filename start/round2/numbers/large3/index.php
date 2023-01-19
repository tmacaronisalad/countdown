<?php
define('TITLE', 'Countdown - Round 2 - Game 3 - 3 Large');

require('../../../../constant.php');

include('../../../../header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main>
				<h1 class="h1_title wow fadeIn">The Numbers Are:</h1>
				<div class="main-entry">
					<ul>
						<li class="l1 wow bounceInDown">40</li>
						<li class="l2 wow bounceInDown">20</li>
						<li class="l3 wow bounceInDown">55</li>
						<li class="l4 wow bounceInDown">2</li>
						<li class="l5 wow bounceInDown">2</li>
						<li class="l6 wow bounceInDown">6</li>
					</ul>
					<h3 class="wow flipInY">455</h3>
					<a href="javascript:;" class="btn_start wow flipInX">Start</a>
				</div>
				<div class="timer">
					<h2 class="countdown">30</h2>
					<a href="result.php" class="btn_result wow flipInX">Result</a>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../../../footer.php'); ?>
