<?php

set_include_path('./php-includes'.PATH_SEPARATOR.'./functions');
require_once 'head.inc.php';

?>

<body>
	<?php require_once 'navigation.inc.php' ?>
	
	<form id="formWoj"onsubmit="return false;">
		<div>
			Województwo :
			<input id="woj" type="text" autocomplete="off">
			<div id="suggestBoxField">
			
			</div>
		</div>
	</form>
	<div id="tekst">
		
	</div>
	
	<?php require_once 'footer.inc.php' ?>
</body>
</html>



