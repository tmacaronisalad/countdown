<?php
define('TITLE', 'Countdown - How to Play - Numbers');

require('../../constant.php');

include('../../header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main class="result">
				<h1 class="h1_title wow fadeIn">Result:</h1>
				<div class="main-entry">
					<ul>
						<li class="l1 wow bounceInDown">P</li>
						<li class="l2 wow bounceInDown">O</li>
						<li class="l3 wow bounceInDown">O</li>
						<li class="l4 wow bounceInDown">L</li>
						<li class="l5 wow bounceInDown">S</li>
						<li class="l6 wow bounceInDown">I</li>
						<li class="l7 wow bounceInDown">D</li>
						<li class="l8 wow bounceInDown">E</li>
					</ul>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<a href="<?= BASE_URL ?>/tutorial/continuation.php" class="exit">X</a>
<?php include('../../footer.php'); ?>
