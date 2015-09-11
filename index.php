<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
</style>
</body>

	<form action="handle_form.php" method="post">
	<!-- names: name, email, gender[radio], age[select], comments,  -->
		<fieldset>
			<legend>Enter your information in the form below:</legend>
			<p><label>Name: <input type="text" name="name" size="20" maxlength="40"></label></p>
			<p><label>Email Address: <input type="email" name="email" size="40" maxlength="60"></label></p>
			<p><label><input type="radio" name="gender" value="M" >Male</label></p>
			<p><label><input type="radio" name="gender" value="F">Female</label></p>
			<p><label>
				<select name="age">
					<option value="0-29">Under 30</option>
					<option value="30-60">Between 30 and 60</option>
					<option value="60+">Over 60</option>
				</select>
			</label></p>
			<p><label>Comments: <textarea name="comments" row="3" cols="40"></textarea></label></p>
		</fieldset>
		<p align="center"><input type="submit" name="submit" value="Submit my Information"></p>
	</form>

</html>