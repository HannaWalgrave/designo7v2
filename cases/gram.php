<?php

	include '../inc/arrays/cases.php';

	// Get page name
	$pagename = basename(__FILE__, '.php');

	// Fetch corresponding member info
	$caseinfo = $cases[$pagename];

	include '../inc/head/prefix.php';
	include '../inc/head/function_browser.php';

?><!DOCTYPE html>
<html lang="en">
<head>

    <!-- GOOGLE ANALYTICS SCRIPT -->
		<?php include $prefix . 'inc/analytics/googleanalytics.php'; ?>
    <!-- END GOOGLE ANALYTICS SCRIPT -->

    <link rel="shortcut icon" type="image/x-icon" href="../img/meta/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include '../inc/head/meta_tags_case.php'; ?>
    
</head>

<body>

<?php include '../inc/logo/logo.php'; ?>
<?php include '../inc/hiddengame/hiddengame.php'; ?>

<main>

	<?php include '../inc/cases/detail'. $version . '.php'; ?>

</main>

<?php include '../inc/footer/footer.php'; ?>

<!-- SCRIPTS -->
<?php include '../inc/footer/scripts.php'; ?>
<script type="text/javascript" src="../js/case-detail.js"></script>
<!-- END SCRIPTS -->

</body>
</html>