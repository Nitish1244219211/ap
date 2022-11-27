<html>
<head>
<link href= "HLnavbar.css" rel= "stylesheet">
</head>
<body>
<nav class="navbar bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.gcdhaliara.in/"><strong class= "navbar-brand">GC Dhaliara</strong></a>
      <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    </div>
</nav>
  <br>
  <br>
  
  
  
<div class="offcanvas  offcanvas-start offcanvas-container " data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <br>
  <br>
  <br>
  <div class="offcanvas-header flex">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Back</h5>
    <button type="button" class="btn-close ccbtn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    
  </div>
  <hr class="hr hr-light">
  <div class = "offcanvas-body  " aria-orientation="vertical">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><span><h4>Home</h4></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signup.php"><span>Signup</span></a>

<?php
if(isset($L)||($L)){
  echo'
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><span>Logout</span></a>
        </li>';
}
else{
echo  '<li class="nav-item">
          <a class="nav-link" href="login.php"><span>Login</span></a>
        </li>';
}
  ?>

<!--        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><span>Login</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="welcome.php"><span>Logout</span></a>
        </li>
-->
<!--
        dropdown menu 3 da haa

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Signup</a></li>
            <li><a class="dropdown-item" href="#">Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        -->
    </ul>
    </div>
    </div>
  </div>
</div>
</body>
</html>
