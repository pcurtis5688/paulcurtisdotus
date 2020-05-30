<!DOCTYPE html>
<html lang="en">
<head>
    <title>PaulCurtis.US || Home</title>
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/mdb.min.css">
    <link rel="stylesheet" href="resources/css/pcdus-style.css">
</head>
<meta charset="utf-8">
<meta name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<body>
<!------------------- HEADER INCLUDE--------------------------->
<?php include_once('pcdus_header.php'); ?>
<!------------------- PAGE CONTENT------------------------------->
<div class="view full-page-intro"
     style="text-align: center; vertical-align: middle;
     background-image: url('external_resources/img/78.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container" style="margin-top: 5em; min-height:100%;">
            <!--Grid row-->
            <div class="row wow fadeIn text-center">
                <!--Grid column-->
                <div id="pageContent" class="white-text text-center" style="width: 100%; background-size:100%;">
                    <?php require_once('pcdus_homecontent.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------------- FOOTER INCLUDE ---------------------------->
<?php include_once('pcdus_footer.php');
$jquerypath = '/external_resources/js/jquery-3.4.1.min.js';
echo '<script type="text/javascript" src="' . $jquerypath . '" ></script>';
$popperPath = '/external_resources/js/popper.min.js';
echo '<script type="text/javascript" src="' . $popperPath . '" ></script>';
$bootstrapPath = '/external_resources/js/bootstrap.min.js';
echo '<script type="text/javascript" src="' . $bootstrapPath . '" />';
$mdbPath = '/external_resources/js/mdb.min.js';
echo '<script type="text/javascript" src="' . $mdbPath . '" ></script>';
$pcdusScriptPath = '/pcdus_customresources/phpscript/pcdus-script.js';
echo '<script type="text/javascript" src="' . $pcdusScriptPath . '" ></script>';
?>
</body>
</html>