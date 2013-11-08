<?php 
	include "connect_MySQL.php";
	require_once('/usr/local/lib/Smarty-3.1.14/libs/Smarty.class.php');
	
	$smarty = new Smarty();
	$smarty->setTemplateDir('/var/www/templates/');
	$smarty->setCompileDir('/var/www/templates_c/');
	$smarty->setConfigDir('/var/www/configs/');
	$smarty->setCacheDir('/var/www/cache/');
	
	$selectquery = "SELECT * FROM Knowledge";	
	$selectsql = mysqli_query($link, $selectquery);
	$knowledgelist = array();
	//mysqli_fetch_all($selectsql, MYSQLI_NUM);
	
	while($row = mysqli_fetch_array($selectsql, MYSQLI_NUM)){
		$knowledgelist[] = $row;

	}
	/*
	while(1)
	{
		$row = mysqli_fetch_array($selectsql, MYSQLI_NUM);
		if($row != NULL){
			$chapterlist $row;
			//foreach($row as $key=>$value)
			//	echo "<th>$value</th>";
		}else{
			break;
		}
	}*/
	$smarty->assign('knowledgelist', $knowledgelist);

	
	if ($_POST['kname'])
	{
		//$kno = $_POST['kno'];
		$name = $_POST['kname'];
		$insertquery = "INSERT INTO Knowledge (Kno, Kname) VALUES (NULL, '$name')";
		$insertsql = mysqli_query($link, $insertquery);

		//printf("error %s\n", mysqli_error($link));
	
		$err = mysqli_error($link); 
		if ($err)
			echo "error$err";
		else
			echo "<meta http-equiv=\"refresh\" content=\"1;url=addKnowledge.php\">"; 
	}

	//$flag = 	mysql_affected_rows();
	//echo "\n$flag";
	
	$smarty->display('addKnowledge.tpl');
?>
