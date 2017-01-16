<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>
<body>
<?php 
   if( isset($_POST) ) {
         //Let's assume sanitation and validation on input is done in the function
         authenticateUser($_POST['txtUsername'], $_POST['txtPassword']);
   }
    function authenticateUser($username,$password)
        {
        //Code to check the user's credentials
    }
?>
<form id="form1" name="form1" method="post" action="">
<input name="txtUsername" type="text" id="txtUsername" size="30" maxlength="100" />
<input name="txtPassword" type="password" id="txtPassword" size="30" maxlength="100" />
<input type="submit" name="btnLogin" id="btnLogin" value="Log In" />
</form>