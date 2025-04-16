<?php
// connect to the database
// create a connection using myswli_connect (host,user,password and database)
$connection = mysqli_connect('db','mariadb','mariadb','ProGearHub');
if( !$connection){

    echo "database connection failed";
}
?>