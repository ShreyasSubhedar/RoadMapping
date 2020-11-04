
<?php
$db['db_host']='aay8bavrnx3ao5.csap6kq18yvn.ap-south-1.rds.amazonaws.com:3306';
$db['db_user']='root';
$db['db_pass']='12345678';
$db['db_name']='roadmapping';
foreach($db as $key=>$value){
    define(strtoupper($key),$value);
}
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
?>