<?php

set_include_path('./php-includes'.PATH_SEPARATOR.'./functions');
require_once 'head.inc.php';

?>

<body>
	<?php require_once 'navigation.inc.php' ?>;
	<div class="container-fluid">
		<div class="container-fluid">
			<div class="row regulacja">
				<div class="col-md-2 col-md-offset-10">
					<div class="btn-group">
						<button type="button" class="btn btn-info maly">
							<span class="glyphicon glyphicon-th" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-info duzy">
							<span class="glyphicon glyphicon-th-large " aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-info lista">
							<span class="glyphicon glyphicon-th-list " aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-primary klucz">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</button>
					</div>
					
					
					
					
				</div>
			</div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">
					Przeglądanie zdjęć :
			</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12 col-md-3">
							<div class="thumbnail">
								<img src="photos/small/IMG_0055.jpg" alt="...">
								<div class="caption">
									<h3>Plik1</h3>
									<p>Opis</p>
									<p><a href="#" class="btn btn-primary" role="button">Powiększ</a></p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div class="thumbnail">
								<img src="photos/small/IMG_0061.jpg" alt="...">
								<div class="caption">
									<h3>Plik1</h3>
									<p>Opis</p>
									<p><a href="#" class="btn btn-primary" role="button">Powiększ</a></p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div class="thumbnail">
								<img src="photos/small/IMG_0815.jpg" alt="...">
								<div class="caption">
									<h3>Plik1</h3>
									<p>Opis</p>
									<p><a href="#" class="btn btn-primary" role="button">Powiększ</a></p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div class="thumbnail">
								<img src="photos/small/IMG_0895.jpg" alt="...">
								<div class="caption">
									<h3>Plik1</h3>
									<p>Opis</p>
									<p><a href="#" class="btn btn-primary" role="button">Powiększ</a></p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div class="thumbnail">
								<img src="photos/small/IMG_0066.jpg" alt="...">
								<div class="caption">
									<h3>Plik1</h3>
									<p>Opis</p>
									<p><a href="#" class="btn btn-primary" role="button">Powiększ</a></p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div class="thumbnail">
								<img src="photos/small/IMG_0094.jpg" alt="...">
								<div class="caption">
									<h3>Plik1</h3>
									<p>Opis</p>
									<p><a href="#" class="btn btn-primary" role="button">Powiększ</a></p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div class="thumbnail">
								<img src="photos/small/IMG_0983.jpg" alt="...">
								<div class="caption">
									<h3>Plik1</h3>
									<p>Opis</p>
									<p><a href="#" class="btn btn-primary" role="button">Powiększ</a></p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div class="thumbnail">
								<img src="photos/small/IMG_0069.jpg" alt="...">
								<div class="caption">
									<h3>Plik1</h3>
									<p>Opis</p>
									<p><a href="#" class="btn btn-primary" role="button">Powiększ</a></p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
		</div>
	</div>
	
	<div id="popup">
		<img src="" alt="">
	</div>
	<?php require_once 'footer.inc.php' ?>;
</body>
</html>



