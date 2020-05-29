<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PaulCurtis.us || Home</title>
    <!-- Material Design Bootstrap Core CSS & Custom Style Sheets, Font Awesome CSS -->
    <?php $btstrpMinPath = '/external_resources/css/bootstrap.min.css';
    echo '<link href="' . $btstrpMinPath . '" rel="stylesheet" type="text/javascript"'; ?>
    <link href="./external_resources/css/mdb.min.css" type="text/javascript"
          rel="stylesheet">
    <link href="/pcdus_customresources/style/pcdus-style.css"
          type="text/javascript" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
</head>
<body>
<!------------------- HEADER INCLUDE--------------------------->
<?php include_once('viewfragments/pcdus_header.php'); ?>
<!------------------- PAGE CONTENT------------------------------->
<div class="view full-page-intro"
     style="text-align: center; vertical-align: middle;
     background-image: url('external_resources/img/78.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container" style="margin-top: 5em;">
            <!--Grid row-->
            <div class="row wow fadeIn text-center">
                <!--Grid column-->
                <div id="pageContent" class="white-text text-center" style="width: 100%;">
                    <?php require_once('viewfragments/content_home.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------------- FOOTER INCLUDE ---------------------------->
<?php include_once('viewfragments/pcdus_footer.php');
$jquerypath = '/external_resources/js/jquery-3.4.1.min.js';
echo '<script type="text/javascript" src="' . $jquerypath . '" ></script>';
$popperPath = '/external_resources/js/popper.min.js';
echo '<script type="text/javascript" src="' . $popperPath . '" ></script>';
$bootstrapPath = '/external_resources/js/bootstrap.min.js';
echo '<script type="text/javascript" src="' . $bootstrapPath . '" />';
$mdbPath = '/external_resources/js/mdb.min.js';
echo '<script type="text/javascript" src="' . $mdbPath . '" ></script>';
$pcdusScriptPath = '/pcdus_customresources/script/pcdus-script.js';
echo '<script type="text/javascript" src="' . $pcdusScriptPath . '" ></script>';
?>
</body>
</html>