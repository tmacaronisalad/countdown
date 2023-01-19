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
				<h1 class="h1_title wow fadeIn">Result</h1>
				<div class="main-entry">
					<ul>
						<li class="l1 wow bounceInDown"><mark class="warning">8</mark> x <mark class="warning">75</mark> = 600</li>
						<li class="l2 wow bounceInDown">600 + <mark class="warning">25</mark> = 625</li>
						<li class="l3 wow bounceInDown">625 + <mark class="warning">3</mark> = <mark class="success">628</mark></li>
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
