<?php require 'partials/nav.php'; ?>
	<form action="/contact" method="GET">
		<input name='name'>
		<button type='submit'>Wyœlij</button>
	</form>
	
	<?php
		$params = [2,43,3,1,5];
		foreach($params as $param)
		{

			//lub dla czytelnoœci
			echo ($param*$param < 26) ? $param : '';
		}
	?>