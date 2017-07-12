<?php
$username=$_POST['username'];
$password=$_POST['password'];
//insert password and username checking here
$sql="SELECT COUNT(*) FROM accounts WHERE username='".$username." AND password='".$password."';";
?>