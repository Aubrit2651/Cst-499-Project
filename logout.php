<?php
session_start();
session_unset();
session_destroy();

setcookie("username", "", time() - 3600);

?> 
 <p>"You successfully logged out.</p>
	 
	  '<script>
			alert("You have been successfully logged out")
			window.location.href = "Index.php";
				
		</script>';