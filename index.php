
<!DOCTYPE html>
<html lang="en">
	<?php include('head.php') ?>
	<body>
    <link rel="stylesheet" href="css/slick.css" />
		<?php $home = true ?>
		<?php include('navbar.php') ?>

		<!-- Begin page content -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="text-center">
            <div id="carousel" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                 <li data-target="#carousel" data-slide-to="0" class="active"></li>
                 <li data-target="#carousel" data-slide-to="1"></li>
                 <li data-target="#carousel" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <img src="images/slider_one.jpg">
                </div>
                <div class="item">
                  <img src="images/slider_two.jpg">
                </div>
                <div class="item">
                  <img src="images/slider_three.jpg">
                </div>
              </div>
              <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
          </div>
						<h1>
							PROMOTING <b>YOUND WOMEN</b><br>
							<small>TO CONSIDER A CAREER IN TECHNOLOGY</small>
						</h1>
					</div>	
				</div>
			</div>

			<hr>

			<div class="content">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">
						<p class="lead">
							The Dalhousie Women in Technology Society (WiTS) works towards
							the promotion and support of women in computer science and technology
							related disciplines.
						</p>
						<p>
							We are a group female and male students meet, host events, organize lectures,
							and reach out to groups in the community for technology related projects.
							You can find us having our breakfast meetings every other week in the Atrium
							or in a designated room in the CS building.
						</p>

						
					</div>
				</div>

				<hr>

				<div class="row text-center">
					<div class="col-xs-12 quote-text">
						<h1>
							&ldquo;We need more women in the field. They provide balance to the IT culture.
							Our work is more about building and leveraging working relationships with our multitudes of clients.&rdquo;
						</h1>
					</div>
					<div class="col-xs-12">
						<h3>
							Dwight Fischer <br>
							<small>Assistant Vice-President of Information Technology Services at Dalhousie University</small>
						</h3>
					</div>
				</div>
			</div>
			

			<hr>

			<div class="row">
				<div class="col-xs-4">
					<img src="images/FCS.png" class="img-responsive" alt="Faculty of Computer Science">
				</div>
				<div class="col-xs-4">
					<img src="images/CanWIT.png" class="img-responsive" alt="Canadian Women in Technology">
				</div>
				<div class="col-xs-4">
					<img src="images/CSS.png" class="img-responsive" alt="Computer Science Society">
				</div>
			</div>
		</div>

		<?php include('footer.php') ?>
		<?php include('javascript.php') ?>
	</body>
</html>
