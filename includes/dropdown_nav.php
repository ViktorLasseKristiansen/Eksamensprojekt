<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style_navbar.css">


<?php
  include "includes/db.php";
  $user_id=4;
  $stmt = $conn->prepare("select * from user where user_id=?");
  $stmt->bind_param("s",$user_id);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
 ?>

</head>
<body>

<div class="sidenav">
  <button class="dropdown-btn">Personer
    <i></i>
      </button>
        <div class="dropdown-container">
          <button class="dropdown-btn">Anders
            <i></i>
              </button>
                <div class="dropdown-container">
                  <a href="#">Skema</a>
                  <a href="information.php">Information</a>
                  <a href="JavaScript:newPopup('outbox.php');">Besked</a>
                </div>
          <button class="dropdown-btn">Viktor
            <i></i>
              </button>
                <div class="dropdown-container">
                  <a href="#">Skema</a>
                  <a href="#">Information</a>
                  <a href="JavaScript:newPopup('outbox.php');">Besked</a>
                </div>
        </div>
  <button class="dropdown-btn">Klasse
    <i></i>
      </button>
        <div class="dropdown-container">
          <button class="dropdown-btn">3.3
            <i class="fa fa-caret-down"></i>
              </button>
                <div class="dropdown-container">
                  <a href="#">Skema</a>
                  <a href="#">Information</a>
                  <a href="JavaScript:newPopup('outbox.php');">Besked</a>
                </div>
          <button class="dropdown-btn">3.4
            <i></i>
              </button>
                <div class="dropdown-container">
                  <a href="#">Skema</a>
                  <a href="#">Information</a>
                  <a href="JavaScript:newPopup('outbox.php');">Besked</a>
                </div>
        </div>
</div>


<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

<script>
  function newPopup(url) {
  	popupWindow = window.open(
  		url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
  }
  </script>

</body>
</html>
