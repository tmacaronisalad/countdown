<?php
define('TITLE', 'Countdown - Result');

require('constant.php');
require('score.php');

include('header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main class="result">
				<h1 class="h1_title wow zoomIn">CONGRATULATIONS</h1>
				<div class="main-entry main-result">
<?php
	function cmp($a, $b)
	{
	    return $b['score'] - $a['score'];
	}


	usort($players, "cmp");

	foreach($players as $key=>$player) {
?>
					<div class="flexbox flex<?= $key ?> wow bounceInDown">
						<div class="col1"><?= $player['name'] ?></div>
						<div class="col2"><?= $player['score'] ?></div>
					</div>
<?php
	}
?>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<figure class="celebration1"><img src="images/partying_face.gif" alt="Partying Face"/></figure>
<figure class="celebration2"><img src="images/partying_face.gif" alt="Partying Face"/></figure>
<!-- End Main -->
<?php include('footer.php'); ?>
