<?php
$page_title = "Site Under Construction";

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
<?php // require("navigation.php"); ?>

<div id="ajax-content">
<?php } ?>

	<div class="container" id="main">
		<h2>The mobile site is currently underconstruction.</h2>
		<img id="mainimg" src="includes/images/construction.jpeg" alt="Man coding">
		<center><form class="container" method="post" action="verify.php">
			<input name="password" type="password" placeholder="password" />
			<input type="submit" value="Reveal" />
		</form></center>
	</div>

<?php //End AJAX Content.
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