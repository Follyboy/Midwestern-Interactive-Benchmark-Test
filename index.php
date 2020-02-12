<!DOCTYPE html>
<html>
<head>
<title>Midwestern Interactive</title>
<link rel="stylesheet" href="CSS/mw_styles.css">
</head>
<body>
<center>
<img src="Image/mw_logo.png" alt="Midwestern Logo" width="45%">
<hr>
</center>
<div style="padding-left:50px; padding-right:50px;">
<h1><u>HEADING ONE</u></h1>
</div>
<div style="padding-left:40px; padding-right:40px;">
<div class="row">
  <div class="column">
    <img src="Image/mw_box.png" alt="Midwestern Box" width="100%">
    <h2>Heading 2</h2>
    <p>
    This is a paragraph text that is meant to flex and wrap to a new line
    based on the number of characters in this container.<span id="dots">..</span><span id="show">
    Please make sure this is looking pretty based on the amount of characters this is taking up.</span>
    </p>
    <button class="button button1" onclick="myFunction()" id="myBtn">Read more</button>
  </div>
  <div class="column">
    <img src="Image/mw_box.png" alt="Midwestern Box" width="100%">
    <h2>Heading 2</h2>
    <p>
    This is a paragraph text that is meant to flex and wrap to a new line
    based on the number of characters in this container.<span id="dots_two">..</span><span id="show_two">
    Please make sure this is looking pretty based on the amount of characters this is taking up.</span>
    </p>
    <button class="button button1" onclick="myFunction_two()" id="myBtn_two">Read more</button>
  </div>
  <div class="column">
    <img src="Image/mw_box.png" alt="Midwestern Box" width="100%">
    <h2>Heading 2</h2>
    <p>
    This is a paragraph text that is meant to flex and wrap to a new line
    based on the number of characters in this container.<span id="dots_three">..</span><span id="show_three">
    Please make sure this is looking pretty based on the amount of characters this is taking up.</span>
    </p>
    <button class="button button1" onclick="myFunction_three()" id="myBtn_three">Read more</button>
  </div>
</div>
</div>
<?php
$emailErr = $subjectErr = $messageErr = "";
$email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Must use a valid email.";
    }
  }
    
  if (empty($_POST["subject"])) {
    $subjectErr = "Subject is required";
  } else {
    $subect = test_input($_POST["subject"]);
  }

  if (empty($_POST["message"])) {
    $messageErr = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div style="background-color:#c3c3c3;color:white;">
<div class="row">
<div class="column_three">
</div>
<div class="column_two">

<center><h3>CONTACT</h3></center>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <p style="color:white;">Email<span class="error" style="font-size:80%;float:right;"><?php echo $emailErr;?></span><br>
  <input type="text" name="email" value="<?php echo $email;?>">
  <br><br>
  Subject<span class="error" style="font-size:80%;float:right;"><?php echo $subjectErr;?></span><br>
  <input type="text" name="subject" value="<?php echo $subject;?>">
  <br><br>
  Message<span class="error" style="font-size:80%;float:right;"><?php echo $messageErr;?></span><br>
  <textarea name="message" rows="10%" cols="53%"><?php echo $message;?></textarea>
  <br><br>
  <button  class="button button1" type="submit" name="submit" value="Submit"> Submit </button>  
  </p>
</form>

</div>

  <div class="column_three">
  </div>
  </div>
  </div>
  
<div style="padding-left:50px; padding-right:50px;">  
  <h1><u>HEADING ONE</u></h1>
        <p style="color:black;">Remove the duplicates in 2 Javascript objects and output the list of distinct names in an unordered list when this
		<button class="button button2" onclick="removeDuplicates()">link is clicked</button>
		,if the operation has been completed already notify the user that this has already been done.</p>
		<h3><u><div id="header"></div></u></h3>
		<div id="result"></div>
</div>

<footer>
<p>Thanks for taking the Midwestern Interactive Benchmark Test.</p>
<footer>		
   
<script src="JS/mw_javascript.js"></script>
</body>
</html>