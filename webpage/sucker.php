
<?php 
$file = "suckers.txt";

$name = $_POST['username'];
$section = $_POST['section'];
$cardname = $_POST['cardName'];
$creditcard = $_POST['creditCard'];
$current = "";


if ($_POST['submit']) {
	if(empty($name) || empty($section) || empty($cardname) || empty($creditcard))
	{
    	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		
		<h1>Sorry</h1>
		<p>You didn\'t fill out the form completely.  <a href="buyagrade.html">Try again?</a></p>

	</body>
</html>';
die; 
	} else {
		file_put_contents($file, PHP_EOL . implode(";", $_POST), FILE_APPEND);
		$current = file_get_contents($file);
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd>
				<?= $_POST["username"] ?>
			    
				</dd>

			<dt>Section</dt>
			<dd>
				<?= $_POST["section"] ?>
				
			</dd>

			<dt>Credit Card</dt>
			<dd>
				<?= $_POST["creditCard"] .'(' . $_POST["cardName"] . ')' ?>
				
				</dd><br>
				

				<dt>Here all the suckers who have submitted here:</dt><br>
				<dd>
		
				<code><?= nl2br($current) ?></code>

			</dd>
		</dl>
	</body>
</html> 


