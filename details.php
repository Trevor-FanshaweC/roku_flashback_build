<?php require_once('admin/scripts/config.php');
if(isset($_GET['id'])){
	$tbl = 'tbl_movies';
	$col = 'movies_id';
	$value = $_GET['id'];
	$results = getSingle($tbl, $col, $value);
}else{
	
}
?>

<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Movie Reviews</title>
</head>
<body>
	<?php include('templates/header.html'); ?>
	<h1>This is the movie site</h1>
	<div>
	<?php while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
		<h2><?php echo $row['movies_title'];?></h2>
	<?php endwhile;?>
	</div>

	<?php include('templates/footer.html');?>
</body>
</html>