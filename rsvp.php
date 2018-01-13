<?php

$page_title = "RSVP for our Big Day!";

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

	<!-- <div class="container" id="main"> -->
    <br>
    <div id="form-main">
      <div id="form-div">
        <form class="form" id="form1" method="post" action="success.php">

          <p class="name">
            <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="First Name" id="name" />
          </p>
          <p class="name">
            <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Last Name" id="name" />
          </p>

          <p class="email">
            <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
          </p>

          <p class="attending">
    				<select name="attending" class="field-select" required>
    				<option value="placeholder" disabled selected>Will you be attending...</option>
    				<option value="yesboth">We/I will attend</option>
    				<option value="notattending">We/I are unable to attend</option>
    				</select>
          </p>

          <p class="text">
            <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Additional"></textarea>
          </p>


          <div class="submit">
            <input type="submit" value="SEND" id="button-blue"/>
            <div class="ease"></div>
          </div>
        </form>
      </div>
    <br><br>
	<!-- </div> -->

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
