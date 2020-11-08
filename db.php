
<?php
$db['db_host']=$RDS_HOSTNAME;
$db['db_user']=$RDS_USERNAME;
$db['db_pass']=$RDS_PASSWORD;
$db['db_name']=$RDS_DB_NAME;

foreach($db as $key=>$value){
    define(strtoupper($key),$value);
}
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
?>
