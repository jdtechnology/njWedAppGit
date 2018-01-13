<?php
$page_title = "Night";

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
    <br>
		<p>Our wedding reception is being held at Oh Me Oh My! A lovely little venue opposite the Liver Building. You will enter via the front entrance on the main road- The Strand. There are plenty of on-street parking options on the surrounding streets and two public carparks a short walk away on The Strand:
                                            <ul class="carpark">
                                              <li>The Capital Building Carpark, The Strand, L3 9DL.</li>
                                              <li>Q-park Liverpool ONE, The Strand, L1 8LT.</li>
                                            </ul>
                                          </p>
		<!--Update maps iframe to my style of embed.-->
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<iframe id="gMaps" width="90%" height="auto" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Oh%20me%20oh%20my%20&key=AIzaSyAuNKVFmfHJn_tU3kLHkU0YlNEamCE-gx0" allowfullscreen></iframe>
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
