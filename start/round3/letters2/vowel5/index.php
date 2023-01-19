<?php
define('TITLE', 'Countdown - Round 3 - Game 2 - 5 Vowels');

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
						<li class="l1 wow bounceInDown">O</li>
						<li class="l2 wow bounceInDown">I</li>
						<li class="l3 wow bounceInDown">T</li>
						<li class="l4 wow bounceInDown">A</li>
						<li class="l5 wow bounceInDown">I</li>
						<li class="l6 wow bounceInDown">M</li>
						<li class="l7 wow bounceInDown">V</li>
						<li class="l8 wow bounceInDown">E</li>
						<li class="l9 wow bounceInDown">F</li>
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
