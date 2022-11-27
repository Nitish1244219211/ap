<main>
  <br>
  <div class= "container">
            <!--Forms........form-->
    <form action="login.php"  method="post">
  <div class="col-md-12">
    <label for="Email" class="form-label"><strong>Username</strong></label>
    <input type="email" class="form-control" name= "Usr"id="email" aria-describedby="emailHelp" placeholder = "Enter your Username"required>
    <div id="emailHelp" class="form-text"><b>Note: </b>Your Email ID is your Username.</div>
  </div>
  <div class="col-md-12">
    <label for="Password" class="form-label"><strong>Password</strong></label>
    <input type="password" class="form-control" name= "Pwd"id="password" placeholder= "Enter your Password" required>
  <div id="emailHelp" class="form-text"><b>Note: </b> Never share your Password with anyone. </div>
  </div>
      <br>
  </div>
  <!--
      checkbox haa

      <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
      -->
    <div class= "form-text container" align= "right" id="fgt">
    <a style="text-decoration: none" href="#">Forgot password?</a>
    </div>
      
    <div class= "container">
      <br>
<button type="submit" class="btn btn-primary container" name= "sbt">Login</button>
      </div>
      <br>
      <div class = "form-text container" align = "center">
        Didn't have an account?
          Create one
        <a href= "#" style= "text-decoration:none">
         <strong>Signup</strong>
        </a>
</form>
  </div>
</main>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{include "Lgetusrdt.php";}
  ?>
