<?php 
	// Remove unwanted files
	$ignore = array('.','..','.DS_Store');
	$semesters = array_diff(scandir('minutes'),$ignore);

	usort($semesters, function($a, $b) {
		// $a = array("Semester", "Year") after the following statement
		$a = explode(" ", $a);
		$b = explode(" ", $b);

		// Compare by year
		if (strcmp($b[1],$a[1]) == 0)
			// Compare by semester if year is the same
			return strcmp($a[0],$b[0]);
		return strcmp($b[1],$a[1]);
	});

	$minutes = array();
	// Scan each semester folder for minutes files
	foreach ($semesters as $semester)
		$minutes[$semester] = array_reverse(array_diff(scandir('minutes/'.$semester),$ignore));

?>
<!DOCTYPE html>
<html lang="en">
	<?php include('head.php') ?>
	<body>
		<?php $minutes_page = true ?>
		<?php include('navbar.php') ?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>Meeting Minutes</h1>
			</div>
			<div class="row">
			
				<?php foreach ($semesters as $semester) : ?>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<h3><?php echo $semester ?></h3>
						<ul>
							<?php if ($minutes[$semester]) : ?>
								<?php foreach ($minutes[$semester] as $meeting_minutes) :?>
									<li><a href="minutes/<?php echo $semester.'/'.$meeting_minutes; ?>"><?php echo $meeting_minutes; ?></a></li>
								<?php endforeach; ?>
							<?php else: ?>
								<li>There are no meetings minutes yet!</li>
							<?php endif; ?>
						</ul>
					</div>
				<?php endforeach; ?>
			</div>
			
		</div>

		<?php include('footer.php') ?>
		<?php include('javascript.php') ?>
	</body>
</html>
