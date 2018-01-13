<?php
$page_title = "Location Main";

$as_json = false;
if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
  $as_json = true;
  ob_start();
} else {
  ?>
<!doctype html>
<html>
<head>
<?php
	require("head.php");
?>
</head>

<body>
<?php require("navigation.php"); ?>

<div id="ajax-content">
<?php } ?>
	<div class="container" id="main">
    <br><br>
    <h2>You can find information about the following by clicking the links</h2>
		<p><a class="ajax-nav" href="day">The Ceremony (Daytime)</a></p>
		 <!--Links to all "location" pages-->
		<p><a class="ajax-nav" href="night">The Reception (Nighttime)</a></p>
    <p><a class="ajax-nav" href="wheretostay">Where to Stay</a></p>
    <p><a class="ajax-nav" href="liverpool">Liverpool</a></p>
	</div>

<?php
	if ($as_json) {
		echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
	} else {
?>
</div>

<?php require("footer.php"); ?>
<?php
	echo "\n</body>\n</html>";
    }
?>
