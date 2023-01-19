<?php
define('TITLE', 'Countdown - How to Play - Numbers');

require('../../constant.php');

include('../../header.php');
?>
<!-- Main -->
<div id="main_area">
	<div class="wrapper">
		<div class="main_con">
			<main>
				<h1 class="h1_title wow fadeIn">The Number Segment:</h1>
				<div class="main-entry wow fadeInDown">
					<p>Players will have <mark class="danger">30 seconds</mark> to work a sequence of calculations using only the <mark class="warning">four basic operations</mark>, with a selection of <mark class="info">6</mark> large and small numbers.</p>
					<p>After getting the 6 numbers they will be given a <mark class="warning">target number</mark> that is solvable using the 6 numbers given but they can only use each number <mark class="danger">once</mark>.</p>
					<p>If the participants are able to get the target number with the right calculation gets <mark class="success">10 points</mark>. If the number tne participants get is <mark class="warning">10 or below</mark> they will still get a point base on how near they are to the target number <mark class="success">(if the target number is <mark class="info">692</mark> and the number a participant got is <mark class="info">691</mark> or <mark class="info">693</mark> both are 1 off, the participant will 9 points)</mark>. If the number they get is <mark class="warning">more than 10</mark>, there will be <mark class="danger">no point</mark>.</p>
					<p>Each player will be asked how many large numbers they wanted to work with <mark class="success">(Minimum of 1 and Maximum of 5 large numbers)</mark>.</p>
					<a href="example.php">Next</a>
				</div>
			</main>
		</div>

	<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php include('../../footer.php'); ?>
