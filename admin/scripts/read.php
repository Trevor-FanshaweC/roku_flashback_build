<?php 

function getAll($tbl){
	include('connect.php');

	//TODO: fill the following variable with a SQL query
	// that fetching all info from the given table $tbl
	$queryAll = 'SELECT * FROM '.$tbl;

	$runAll = $pdo->query($queryAll);

	if($runAll){
		return $runAll;
	}else{
		$error = 'There was a problem accessing this info';
		return $error;
	}
}


function getSingle($tbl, $col, $value){
	include('connect.php');
	$querySingle = 'SELECT * FROM '.$tbl.' WHERE '.$col.' = '.$value;

	$runSingle = $pdo->query($querySingle);
	if($runSingle){
		return $runSingle;
	}else{
		$error = 'There was a problem';
		return $error;
	}
}

function filterResults($tbl,$tbl_2,$tbl_3,$col,$col_2,$col_3,$filter){
	include('connect.php');
	/*
	SELECT
	    *
	FROM
	    tbl_movies AS a,
	    tbl_genre AS b,
	    tbl_mov_genre AS c
	WHERE
	    a.movies_id = c.movies_id AND b.genre_id = c.genre_id AND b.genre_name = "action"
	*/
	$filterQuery = 'SELECT * FROM '.$tbl.' as a, ';
	$filterQuery.= $tbl_2.' as b, ';
	$filterQuery.= $tbl_3.' as c ';
	$filterQuery.= 'WHERE a.'.$col.' = c.'.$col;
	$filterQuery.= ' AND b.'.$col_2.' = c.'.$col_2;
	$filterQuery.= ' AND b.'.$col_3.'= "'. $filter.'"';

	$runQuery = $pdo->query($filterQuery);
	if($runQuery){
		return $runQuery;
	}else{
		$error = 'There was a problem';
		return $error;
	}
}