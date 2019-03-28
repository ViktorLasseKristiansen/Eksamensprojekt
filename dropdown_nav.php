<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 250px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

.active {
  background-color: silver;
  color: black;
}

.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

.fa-caret-down {
  float: right;
  padding-right: 8px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <button class="dropdown-btn">Personer
    <i class="fa fa-caret-down"></i>
      </button>
        <div class="dropdown-container">
          <button class="dropdown-btn">Anders
            <i class="fa fa-caret-down"></i>
              </button>
                <div class="dropdown-container">
                  <a href="#">Skema</a>
                  <a href="#">Hold</a>
                  <a href="#">Besked</a>
                </div>
          <button class="dropdown-btn">Viktor
            <i class="fa fa-caret-down"></i>
              </button>
                <div class="dropdown-container">
                  <a href="#">Skema</a>
                  <a href="#">Hold</a>
                  <a href="#">Besked</a>
                </div>
        </div>
  <button class="dropdown-btn">Hold
    <i class="fa fa-caret-down"></i>
      </button>
        <div class="dropdown-container">
          <button class="dropdown-btn">Hold 1 - Planlægning
            <i class="fa fa-caret-down"></i>
              </button>
                <div class="dropdown-container">
                  <a href="#">Kontakt</a>
                  <a href="#">Information</a>
                </div>
          <button class="dropdown-btn">Hold 2 - Udvikling
            <i class="fa fa-caret-down"></i>
              </button>
                <div class="dropdown-container">
                  <a href="#">Kontakt</a>
                  <a href="#">Information</a>
                </div>
        </div>
</div>

<div class="main">
  <!-- text -->
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

</body>
</html>
