<?php
define('TITLE', 'Countdown - How to Play - Letters');

require('../../constant.php');

include('../../header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main class="result">
				<h1 class="h1_title wow fadeIn">Result <span>Longest Word (6 letters)</span></h1>
				<div class="main-entry">
					<ul>
						<li class="l1 wow bounceInDown">MOLDED</li>
						<li class="l2 wow bounceInDown">DOOMED</li>
						<li class="l3 wow bounceInDown">LOAMED</li>
						<li class="l4 wow bounceInDown">LOOMED</li>
						<li class="l5 wow bounceInDown">DOODLE</li>
						<li class="l6 wow bounceInDown">LADDOO</li>
						<li class="l7 wow bounceInDown">LOADED</li>
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
