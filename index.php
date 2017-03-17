<?php

set_include_path('./php-includes'.PATH_SEPARATOR.'./functions');
require_once 'head.inc.php';

?>

<body>
	<?php require_once 'navigation.inc.php' ?>;
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div id="slider-main" class="carousel slide" data-ride="carousel">
					<!-- Wskaźniki w postaci kropek -->
					<ol class="carousel-indicators">
					  <li data-target="#slider-main" data-slide-to="0" class="active"></li>
					  <li data-target="#slider-main" data-slide-to="1"></li>
					  <li data-target="#slider-main" data-slide-to="2"></li>
					  <li data-target="#slider-main" data-slide-to="3"></li>
					  <li data-target="#slider-main" data-slide-to="4"></li>
					  <li data-target="#slider-main" data-slide-to="5"></li>
					</ol>
					<!-- Slajdy -->
					<div class="carousel-inner">
						<div class="item active">
							 <img src="/photos/big/IMG_0061.jpg" alt="">
								<!-- Opis slajdu -->
							<div class="carousel-caption">
								<h3>Karkonosze</h3>
								<p>Cała rodzinka:-)</p>
							</div>
						</div>
						<div class="item">
							 <img src="/photos/big/IMG_0094.jpg" alt="">
								<!-- Opis slajdu -->
							<div class="carousel-caption">
								<h3>Karkonosze</h3>
								<p>Mamusia:-)</p>
							</div>
						</div>
						<div class="item">
							 <img src="/photos/big/IMG_0066.jpg" alt="">
								<!-- Opis slajdu -->
							<div class="carousel-caption">
								<h3>Gorce</h3>
								<p>Zuzia</p>
							</div>
						</div>
						<div class="item">
							 <img src="/photos/big/IMG_0983.jpg" alt="">
								<!-- Opis slajdu -->
							<div class="carousel-caption">
								<h3>Tatry</h3>
								<p>Dolina Lodowa</p>
							</div>
						</div>
						<div class="item">
							 <img src="/photos/big/IMG_0815.jpg" alt="">
								<!-- Opis slajdu -->
							<div class="carousel-caption">
								<h3>Tatry</h3>
								<p>Widok na Rysy</p>
							</div>
						</div>
						<div class="item">
							 <img src="/photos/big/IMG_0895.jpg" alt="">
								<!-- Opis slajdu -->
							<div class="carousel-caption">
								<h3>Tatry</h3>
								<p>Chata Teriego</p>
							</div>
						</div>
					</div>
					<!-- Strzałki do przewijania -->
					<a class="left carousel-control" href="#slider-main" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#slider-main" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php require_once 'footer.inc.php' ?>;
</body>
</html>



