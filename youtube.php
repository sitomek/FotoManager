<?php

set_include_path('./php-includes'.PATH_SEPARATOR.'./functions');
require_once 'head.inc.php';

?>

<body>
	<?php require_once 'navigation.inc.php' ?>;
	<div class="container-fluid youtube">
		<div class="panel panel-primary">
			<div class="panel-heading">Ulubione na YouTube</div>
				<div class="panel-body youtube">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="embed-responsive embed-responsive-4by3">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/bPrQk7FSgbE?list=PLZ0tdmPujSmum-2gQgW4j0rcXCjoFzqBn" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="embed-responsive embed-responsive-4by3">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/m8Ax2lKNtDc?list=PLZ0tdmPujSmum-2gQgW4j0rcXCjoFzqBn" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="embed-responsive embed-responsive-4by3">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/Rm3dto4q98M?list=PLZ0tdmPujSmum-2gQgW4j0rcXCjoFzqBn" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once 'footer.inc.php' ?>;
</body>
</html>



