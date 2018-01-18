<?php
if(isset($_COOKIE['fname']) && isset($_COOKIE['lname']) && isset($_COOKIE["attending"])) {
	if($_COOKIE["attending"] < 4) {
?>
  <div class="container" id="main">
	<p>Thank you for responding, <?php echo $_COOKIE['fname'] . " " . $_COOKIE['lname']; ?>!</p><br>
	<p>We really look forward to seeing you on the day! Don't forget to check out the <a href="information">location</a>, or the <a href="registry">registry</a></p>
  </div>
<?php
} elseif($_COOKIE["attending"] >= 4) {

?>

  <div class="container" id="main">
	<p>Thank you for responding, <?php echo $_COOKIE['fname'] . " " . $_COOKIE['lname']; ?>!</p><br>
	<p>We are really sad that you won't be coming, but you can still see our <a href="registry">registry</a> if you'd like.</p>
  </div>
<?php
	}
} else {
?>

<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1" method="post" action="success.php">

      <p class="name">
        <input name="firstname" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="First Name(s)" id="name" required>
      </p>
      <p class="name">
        <input name="lastname" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Last Name" id="name" required>
      </p>

      <p class="email">
        <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" required>
      </p>

      <p class="attending">
        <select name="attending" class="field-select" required>
        <option value="placeholder" disabled selected>Will you be attending...</option>
        <option value="yesboth">We/I will attend</option>
        <option value="notattending">We/I are unable to attend</option>
        </select>
      </p>

      <p class="text">
        <textarea name="additional" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Additional"></textarea>
      </p>


      <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
<?php } ?>
