<?php
/*
The MIT License (MIT)
Copyright (c) 2015 Antoine Subit
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
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
