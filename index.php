<?php require_once('admin/scripts/read.php'); ?>

<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Movie Reviews</title>
</head>
<body>
	<?php include('templates/header.html'); ?>
	<h1>This is the movie site</h1>
	<ul>
<?php $results = getAll('tbl_movies');
while($row = $results->fetch(PDO::FETCH_ASSOC)){
	echo '<li>'.$row['movies_title'].'</li>';
}
?>
</ul>

<?php include('templates/footer.html');?>
</body>
</html>