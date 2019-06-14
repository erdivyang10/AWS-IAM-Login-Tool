
<?php 
#Author: Divyang Goswami
#Description: Insert the username of your created User at IAM (Identity and Access Management) at AWS and this tool
#directly redirect you to the IAM console. You only need to insert the password to logged in.

#@copyright: IAM Tool by Divyang Goswami 2019


?>



<html>
<head> 
<title> AWS IAM Account Login</title>
</head>

<body>
<center> 
<h3> AWS IAM Account Login </h3>	
<tr>
	<form method="get">
	<td>https://</td>
	<td>
		<input type="text", name="url", placeholder="Insert AWS User Name">
	</td>
	
	<td>.signin.aws.amazon.com/console</td>
	<td><input type="submit" name="submit" value="GO"></td>
    </form>
</tr>

<?php

if(isset($_GET['submit']))
	
{
   	$url = $_GET['url'];
    header("Location:https://$url.signin.aws.amazon.com/console");
}

?>
</center>
</body>
</html>