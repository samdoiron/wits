<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">WiTS</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li <?php if (isset($home)) echo 'class="active"'; ?>><a href="index.php">Home</a></li>
				<li <?php if (isset($news)) echo 'class="active"'; ?>><a href="news.php">News</a></li>
				<li <?php if (isset($minutes_page)) echo 'class="active"'; ?>><a href="minutes.php">Meeting Minutes</a></li>
				<li <?php if (isset($events)) echo 'class="active"'; ?>><a href="events.php">Events</a></li>
				<li <?php if (isset($members)) echo 'class="active"'; ?>><a href="members.php">Members</a></li>
				<li <?php if (isset($contact)) echo 'class="active"'; ?>><a href="#">Contact</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>