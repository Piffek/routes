<?php require 'partials/nav.php'; ?>

<body>
	<center>
		<div id="head">
			<img src="routes/public/header.jpg" id="header_image" style="width:60%; height:100%">
		</div>
	</center>
		<article>
		<div  id="artykul">
				<center>
					<form>
					    <input  type="textarea" name="message" id="user_input">
	  				</form>
					
					 <input type="submit" onclick="showInput();"><br/>
					  <label>Pokaż formatowanie </label>
					  <p><span id='display'></span></p>
		
				</center>
				
 </div>
		</article>
		<script type="text/javascript">

		    function showInput() {
		        document.getElementById('display').innerHTML = 
		                    document.getElementById("user_input").value;
		    }
	
		</script>
</body>
</html>