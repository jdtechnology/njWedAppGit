<?php
$page_title = "Natalie and James wedding Home";

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
    <h1>Here are some hotel suggestion (tripadvisor)</h1>
        <iframe src="https://www.tripadvisor.co.uk/Hotels-g186337-Liverpool_Merseyside_England-Hotels.html" id="tripadvisor" width="80%" height="900px">
  <br><br>
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
