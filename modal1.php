
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" style="margin-top: -18px;">&times;</span>
      <h2 style="font-size: 23px;">Please Sign In To Buy Tickets</h2>
    </div>

    <div class="login">
      <form action="tour(cor).php" method="POST">
        <div class="head">
          <h1 style="color: black;"><b>Sign In</b></h1>
        </div>
        <div class="bd1">
          <label for="login">Email</label>
          <input type="email" name="mai" id="login" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" required="Enter Username" placeholder="Enter Email ID" value="<?php 

              if (isset($_COOKIE['mail']) && isset($_COOKIE['password'])) {
                echo $_COOKIE['mail'];
              }
              else
              {
                echo "";
              }

            ?>">
          <label for="password">Password</label>
          <input type="password" name="pwd" id="password" placeholder="Enter Password" class="form-control form-control input-block" tabindex="2" required="Enter Password" value="<?php 

              if (isset($_COOKIE['mail']) && isset($_COOKIE['password'])) {
                echo $_COOKIE['password'];
              }
              else
              {
                echo "";
              }

            ?>">
          <input type="submit" name="commit" value="Sign in" tabindex="3" class="btn btn-primary btn-block" data-disable-with="Signing in…">
        </div>
      </form>
      <p class="new" id="p">
        "New to site"<i>
        <a data-ga-click="Sign in, switch to sign up" href="Signup.php" id="a" style="color: #2675ae;">Create an account</a></i>
      </p>
    </div>

  </div>

</div>
