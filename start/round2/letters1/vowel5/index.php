<?php
define('TITLE', 'Countdown - Round 2 - Game 1 - 5 Vowels');

require('../../../../constant.php');

include('../../../../header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main>
				<h1 class="h1_title wow fadeIn">The Letters Are:</h1>
				<div class="main-entry">
					<ul>
						<li class="l1 wow bounceInDown">I</li>
						<li class="l2 wow bounceInDown">U</li>
						<li class="l3 wow bounceInDown">A</li>
						<li class="l4 wow bounceInDown">R</li>
						<li class="l5 wow bounceInDown">C</li>
						<li class="l6 wow bounceInDown">E</li>
						<li class="l7 wow bounceInDown">G</li>
						<li class="l8 wow bounceInDown">O</li>
						<li class="l9 wow bounceInDown">W</li>
					</ul>
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
