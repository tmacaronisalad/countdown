<?php
define('TITLE', 'Countdown - How to Play');

require('../constant.php');

include('../header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main class="continuation">
				<h1 class="h1_title wow fadeIn">The 3 Segments are:</h1>
				<div class="main-entry">
					<ul>
						<li><a href="letters" class="btn_letters wow rotateInUpLeft">Letters</a></li>
						<li><a href="numbers" class="btn_numbers wow flipInX">Numbers</a></li>
						<li><a href="conundrum" class="btn_conundrum wow rotateInUpRight">Conundrum</a></li>
					</ul>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<a href="<?= BASE_URL ?>" class="exit">X</a>
<?php include('../footer.php'); ?>
