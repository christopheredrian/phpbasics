<?php 
/**
* Returns false if str is not set
*/
function getRequest($str, $emptyAllowed=false, $numeric=false){
	if (!isset($_POST[$str])){
		return false;
	}
	// Returns false if $str is an empty string
	if($emptyAllowed) {
		return !empty($str);
	}
	// Returns false if $str is not a number
	if($numeric){
		return is_numeric($str);
	}
	// stripslashes - removes backslashes
	return $_POST[stripcslashes($str)];
}

	$name = getRequest('name');
	$email = getRequest('email');
	$gender = getRequest('gender');  // Returns false 
	switch ($gender) {
		case 'M':
			$gender_msg = "Sir";
			break;
		case 'F':
			$gender_msg = "Madam";
			break;
		default:
			$gender_msg = "";
			break;
	}
	$age	= getRequest('age');
	$comments = getRequest('comments');

	$displayThankYou = true;
	if(!$name || !$email || !$gender || !$comments){
		$displayThankYou = false;
	}
	echo $displayThankYou == NULL;
 ?>

<!-- names: name, email, gender[radio], age[select], comments,  -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	.error{
		color: red;
	}
	</style>
</head>
<body>

<?php if ($displayThankYou): ?>
	<p>Thank you for the following comments <br>
	<?php echo $comments ?>. We will reply to you at <em><?php echo $email ?>.</em>
	</p>
	<p>Good Day, <?php echo !is_null($gender_msg) ?  $gender_msg : ' ' ?>!</p>
<?php endif ?>

<?php if (!$name): ?>
	<p class="error">
		You forgot to enter your name!
	</p>
<?php endif ?>
<?php if (!$email): ?>
	<p class="error">
		You forgot to enter your email!
	</p>
<?php endif ?>
<?php if (!$gender): ?>
	<p class="error">
		Please choose a gender!
	</p>
<?php endif ?>
<?php if (!$gender): ?>
	<p class="error">
		You have not entered a feedback message!
	</p>
<?php endif ?>
<pre><p>Printing the POST global variable:</p>
	<?php print_r($_POST) ?>
</pre>

</body>
</html>