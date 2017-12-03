<!doctype html>
<html>
<body>
	<form action= "http://localhost:1234/upload_file.php" method= "post" enctype="multipart/form-data">
		
    	<b>Codon</b>&nbsp;<input type= "text" id= "codon" name= "codon" /><br /><br />
		<b>WTAA3</b>&nbsp;<input type= "text" id= "wtaa3" name= "wtaa3" /><br /><br />
		<b>MutantAA3</b>&nbsp;<input type= "text" id= "mutantaa3" name= "mutantaa3" /><br /><br />
		<b>Wt Codon</b>&nbsp;<input type= "text" id= "wtcodon" name= "wtcodon" /><br /><br />
		<b>Mutant Codon</b>&nbsp;<input type= "text" id= "mutantcodon" name= "mutantcodon" /><br /><br />
		<b>Mutational_event</b>&nbsp;<input type= "text" id= "mutationalevent" name= "mutationalevent" /><br /><br />
		<b>Type</b>&nbsp;<input type= "text" id= "type" name= "type" /><br /><br />
		<b>Mutational Type</b>&nbsp;<input type= "text" id= "mutanttype" name= "mutanttype" /><br /><br />
		<!-- <b>Upload MATLAB script</b><input type="file" name="fileToUpload" id="fileToUpload" /><br /><br /> -->
		<input type= "submit" name= "submit" id= "submit" value= "Submit" /><br /><br />
		
	</form>
</body>
</html>