<?php
/* PaulCurtis.us Database Connection Credentials... */
$pcdusdbHost = "localhost";
$pcdusdbUserName = "root";
$pcdusdbPass = "";
$paulcurtisdotusdb = "paulcurtisdotusdb";
/* Attempt the connection... */
$dbCon = mysqli_connect($pcdusdbHost, $pcdusdbUserName, $pcdusdbPass,
        $paulcurtisdotusdb);
/* Handle any connection issues for user... */
if (! $dbCon) {
    // TODO: More elaborate exception handling
    echo "Connection Fail";
} else {
    /* If connection is successful, select DB given the DB name string */
    mysqli_select_db($dbCon, $paulcurtisdotusdb);
    $qry = "SELECT `blog_entry`.`blog_id`,`blog_entry`.`blog_author`,`blog_entry`.`blog_entry_title`, `blog_entry`.`blog_entry_text`, `blog_entry`.`blog_entry_timestamp` FROM `blog_entry`";
    $qryresponse = mysqli_query($dbCon, $qry);
    $result_array = mysqli_fetch_row($qryresponse);
    $result_blog_id = $result_array[0]; echo $result_array[0];
    $result_blog_auth = $result_array[1]; echo $result_array[1];
    $result_blog_title = $result_array[2]; echo $result_array[2];
    $result_blog_text = $result_array[3]; echo $result_array[3];
}
/* No matter if conn successful, close out remaining asset */
mysqli_close($dbCon);
?>