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
    <p><h1>Order of the day</h1></p>
            <ul class="carpark">
              <li>3pm Wedding Ceremony</li>
              <li>3.45pm Coaches arrive to take us to Oh Me Oh My</li>
              <li>4pm Fizz and canapes</li>
              <li>5pm Speeches</li>
              <li>5:30pm Wedding Breakfast</li>
              <li>8pm Party time!</li>
              <li>8:30pm First dance</li>
              <li>9:30pm Late Night Bites</li>
              <li>12:45pm Last orders</li>
              <li>1am Home time!</li>
            </ul>
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
