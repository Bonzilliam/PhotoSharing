<?php

include("top.php");

?>

    <!-- login form directs to "login.php" -->
    <div class="width400">
        <form action="login.php" method="post">
            <p class="mainFont"><br>Email</p>
            <input type="text" class="inputField" id="userlogin" name="email">
            <p class="mainFont">Password</p>
            <input type="password" class="inputField" name="password">
            <p></p>
            <input type="image" class="maxWidth200 center" src="images/login.png">
            <p><br></p>
        </form>
    </div>

    <h1 class="mainFont titleFont textCenter">or</h1>

    <!-- Sign up form directs to "signup.php" -->
    <div class="width400">
        <form action="signup.php" method="post">
            <p class="mainFont"><br>First Name*</p>
            <input type="text" class="inputField" name="fname">
            <p class="mainFont">Last Name*</p>
            <input type="text" class="inputField" name="lname">
            <p class="mainFont">Email*</p>
            <input type="text" class="inputField" name="email">
            <p class="mainFont">Mobile Number (optional)</p>
            <input type="text" class="inputField" name="number">
            <p class="mainFont">Password*</p>
            <input type="password" class="inputField" name="password">
            <p></p>
            <input type="image" class="maxWidth200 center" src="images/signup.png">
            <p><br></p>
        </form>
    </div>

<?php

include("bottom.php");

?>