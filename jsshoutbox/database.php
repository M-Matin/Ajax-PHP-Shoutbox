<?php
//conect to MySQL
//($) sign used to make a variable in php
//mysql_connect is a fuction and always used to connect to MSQL
$con = mysqli_connect(
//the first parameter "localhost" is the host name, in most cases has the same name
"localhost",
// second parameter "root" is database username
"root",
//parameter "root" is mysql password
"root",
//4th parameter is the name of the actual database
"jsshoutbox");
//to test the connection, needs an if statment with the fuction for error
/////////
if (mysqli_connect_errno()){
//if it doesn't connect it should echo fail to connect
//in PHP concatinate is (. dot) and bellow erroe message is concatinate with the fuction to show what is exactly wrong with connection
  echo "fail to connect:" . mysqli_connect_error();
}
