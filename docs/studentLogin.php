<?php 
	include "connect_MySQL.php";
	require_once('/usr/local/lib/Smarty-3.1.14/libs/Smarty.class.php');
	session_start();
	
	/*
	$smarty = new Smarty();
	$smarty->setTemplateDir('/var/www/templates/');
	$smarty->setCompileDir('/var/www/templates_c/');
	$smarty->setConfigDir('/var/www/configs/');
	$smarty->setCacheDir('/var/www/cache/');
	*/
	/*$selectquery = "SELECT * FROM User";	
	$selectsql = mysqli_query($link, $selectquery);
	$userlist = array();
        while($row = mysqli_fetch_array($selectsql, MYSQLI_NUM)){
		$userlist[] = $row;

	    }
         $smarty->assign('userlist', $userlist);*/
      
         
         if($_POST['username'] AND $_POST['password'])
         {
           $uid=$_POST['username'];
           $selectquery = "SELECT Upassword FROM User 
where UID=$uid";	
	   $selectsql = mysqli_query($link, $selectquery);
           $row = mysqli_fetch_array($selectsql, MYSQLI_NUM);
           //echo strcmp($_POST['Upassword'],$row[0]);
           if(strcmp($_POST['password'],$row[0])){
		echo '<script type="text/javascript">
				alert("帐号或密码错误！");
				</script>';
               echo "<meta http-equiv=\"refresh\" content=\"1;url= http://211.66.138.51/index.htm\">";
		
           }else{
		$_SESSION['uid']=$uid;//保存会话
	       echo "<meta http-equiv=\"refresh\" content=\"1;url= showSelfInformation.php\">";
           }
         }
         // $smarty->display('login.tpl');
?>
                  




