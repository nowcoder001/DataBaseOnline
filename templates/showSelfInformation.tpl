{* Smarty *}
<html>
{include file="studenthead.tpl"}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div class="container">
<form action='showSelfInformation.php' method=POST>
<center>

<table  class="table table-bordered table-striped" border="1">
{foreach $userlist as $item}
		<tr>
        <td>用户号：</td><td>{$item[0]}</td>
		</tr>
        <tr>
		<td>姓名：</td><td> {$item[1]}</td>
		</tr> 
		<tr>
        <td>性别：</td><td> {$item[2]}</td>
		</tr>
		<tr>
        <td>年龄：</td><td> {$item[3]}</td> 
		</tr>
		<tr>		
        <td>民族：</td><td> {$item[4]}</td>	
		</tr> 
		<tr>
        <td>籍贯：</td><td> {$item[5]}</td>
		</tr> 
		<tr>
        <td>所在学校：</td><td> {$item[7]}</td> 		
		</tr>
		<tr>
        <td>电子邮件：</td><td> {$item[10]}</td> 
		</tr>
		<tr>
        <td>电话：</td><td> {$item[11]}</td> 
        <br>
		</tr>
</table>
</center>
{/foreach}
<hr>
<p style="color:red">为了您的账户安全请及时修改密码！</p>
</div>
</html>
