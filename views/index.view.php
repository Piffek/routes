<?php require 'partials/nav.php'; ?>
	<form action="/contact" method="GET">
		<input name='name'>
		<button type='submit'>Wy�lij</button>
	</form>
	
	<?php
		$params = [2,43,3,1,5];
		foreach($params as $param)
		{

			//lub dla czytelno�ci
			echo ($param*$param < 26) ? $param : '';
		}
	?>