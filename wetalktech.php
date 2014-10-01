<?php 
	$talk = array();
	$talk['theme'] = "We Start Tech";
	$talk['date'] = "March 12th, 2014 6:00pm-8:00p.m.";
	$talk['location'] = "Volta Labs (5415 Spring Garden Rd)";
	$talk['keynote'] = "Sreejata Chatterjee (Co-founder and CPO, Leadsift)";
	$talk['present'] = "Sage Franch (Lead Technical Evangelist Intern, Microsoft)";

	$sponsors = array(
		array('name' => 'Computer Science Faculty', 'img' => 'FCS.png'),
		array('name' => 'Computer Science Society', 'img' => 'CSS.png')
	);
?>
<!DOCTYPE html>
<html lang="en">
	<?php include('head.php') ?>
	<body>
		<?php $wetalktech = true ?>
		<?php include('navbar.php') ?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>We Talk Tech</h1>
			</div>
			
			<img src="images/WTT.jpg" class="thumbnail" alt="We Talk Tech">

			<h2>What is it?</h2>
			<p>
				We Talk Tech is a networking event for people in IT from industry and academia. It is a great way to connect with each other and discuss issues centralized on women in tech.
			</p>

			<h2>When is the next We Talk Tech?</h2>
			<p>
				<label>Theme:</label>
				<?php echo $talk['theme']; ?>
			</p>
			<p>
				<label>Date:</label>
				<?php echo $talk['date']; ?>
			</p>
			<p>
				<label>Location:</label>
				<?php echo $talk['location']; ?>
			</p>
			<p>
				<label>Keynote Speaker:</label>
				<?php echo $talk['keynote']; ?>
			</p>
			<p>
				<label>Presentations by:</label>
				<?php echo $talk['present']; ?>
			</p>

			<h2>Sponsors</h2>
			<?php foreach ($sponsors as $sponsor) : ?>
				<img src="images/<?php echo $sponsor['img'] ?>" class="thumbnail" alt="<?php echo $sponsor['name'] ?>">
			<?php endforeach; ?>
			
		</div>

		<?php include('footer.php') ?>
		<?php include('javascript.php') ?>
	</body>
</html>
