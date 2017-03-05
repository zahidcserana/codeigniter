<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
</head>
<body>

<p>This is home page!</p>

<?php foreach($records as $row): ?>
	<h1><?php echo $row->title; ?></h1>
<?php endforeach; ?>

</body>
</html>
