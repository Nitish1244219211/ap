<main>
  <br>
  <div class= "container">
            <!--Forms........form-->
    <form action="signup.php"  method="post">
  <div class="col-md-12">
    <label for="Email" class="form-label"><strong>Username</strong></label>
    <input type="email" class="form-control" name= "Usr"id="email" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">Enter your email id as Username 4 ur convenience</div>
  </div>
  <div class="col-md-12">
    <label for="Password" class="form-label"><strong>Password</strong></label>
    <input type="password" class="form-control" name= "Pwd"id="password">
  <div id="emailHelp" class="form-text">Enter a really strong password to secure ur account</div>
  </div>
      <div class="col-md-12">
    <label for="CPassword" class="form-label"><strong>Confirm Password</strong></label>
    <input type="password" class="form-control" name= "CPwd"id="cpassword">
  <div id="emailHelp" class="form-text">Re-enter the same password entered above</div>
      </div>
  </div>
  <!--
      checkbox haa

      <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
      -->

    <div class= "container">
<button type="submit" class="btn btn-primary" name= "sbt">Signup</button>
      </div>
</form>
  </div>
</main>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{include "getusrdt.php";}

  ?>