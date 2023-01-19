<?php
define('TITLE', 'Countdown - How to Play - Letters');

require('../../constant.php');

include('../../header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main class="example">
				<h1 class="h1_title wow fadeIn">Example:</h1>
				<div class="main-entry">
					<ul>
						<li class="l1 wow bounceInDown">A</li>
						<li class="l2 wow bounceInDown">D</li>
						<li class="l3 wow bounceInDown">E</li>
						<li class="l4 wow bounceInDown">L</li>
						<li class="l5 wow bounceInDown">O</li>
						<li class="l6 wow bounceInDown">D</li>
						<li class="l7 wow bounceInDown">O</li>
						<li class="l8 wow bounceInDown">M</li>
						<li class="l9 wow bounceInDown">O</li>
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
<?php include('../../footer.php'); ?>
