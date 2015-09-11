<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">


	table,td{
		font-size: 1.1em;
		border: 1px solid black;
		border-collapse: collapse;
		border

	}
	</style>
</head>
<body>

<!-- List all the contents of the server variable -->
<table>
<?php foreach ($_SERVER as $key => $value): ?>
	<tr>
		<td> <?php echo $key ?></td>
		<td><?php echo $value ?></td>
	</tr>
<?php endforeach ?>
</table>



</body>
</html>