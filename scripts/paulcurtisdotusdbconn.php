<?php
$pcdusdbHost = "localhost";
$pcdusdbUserName = "root";
$pcdusdbPass = "";
$paulcurtisdotusdb = "paulcurtisdotusdb";
$dbCon = mysqli_connect($pcdusdbHost, $pcdusdbUserName, $pcdusdbPass, $paulcurtisdotusdb);
if (! $dbCon) {
    echo "Conenction Fail";
}
mysqli_select_db($dbCon, $paulcurtisdotusdb);
$qry = "SELECT * FROM blog_entry;";
$QryResult = mysqli_query($dbCon, $qry);
$BlogEntry = mysqli_fetch_row($QryResult);
var_dump($BlogEntry);
// I AM HERE
mysqli_close($dbCon);
?>