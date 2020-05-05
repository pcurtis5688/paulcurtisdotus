<?php
$pcdusdbHost = "localhost";
$pcdusdbUserName = "root";
$pcdusdbPass = "";
$paulcurtisdotusdb = "paulcurtisdotusdb";
$dbCon = mysqli_connect($pcdusdbHost, $pcdusdbUserName, $pcdusdbPass,
        $paulcurtisdotusdb);
if (! $dbCon) {
    echo "Conenction Fail";
}
mysqli_select_db($dbCon, $paulcurtisdotusdb);
$qry = "SELECT * FROM blog_entry;";
$qryresponse = mysqli_query($dbCon, $qry);
echo mysqli_fetch_row($qryresponse)[1];
// I AM HERE
mysqli_close($dbCon);
?>