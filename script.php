<?php

$file="file.txt"; // File to edit name

if(isset($_POST['boutton'])) {
	unlink($file); // Delete file for put new data instead
	$open=fopen("$file","a+"); // Create the new file and open it
	fwrite($open,"$_POST[edit]"); // Write
	fclose($open); // Close the file
	echo '<h2>File edited at '.date('H:i:s').'</h2>'; // Display validation message
} else {
	echo '<h2>Edit the file '.$file.'</h2>';
}

?>
<form method="post" action="">
	<textarea name="edit" rows="10" cols="40">
	<?php
		echo file_get_contents($file); 
	?>
	</textarea>
	<br/>
	<input type="submit" name="boutton" value="Edit">
</form>
