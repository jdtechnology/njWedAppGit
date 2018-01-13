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
    <p>Whilst your attendance at our wedding is all we ask, should you wish to bring a gift we kindly direct you to our gift list
          </p>
					<p>Our Gift list will open on 10th March 2018. You will then be able to use it by calling 0345 600 2202, visiting johnlewis.com or any John Lewis store.
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
