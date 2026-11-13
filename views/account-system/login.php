<!DOCTYPE html>
<html>
  <head>
    <title>Log in</title>
    
    <link rel="stylesheet" href="../../public/CSS/styles.css">

    <?php require_once '../miscellaneous/navigation-bar.php'; ?>
  </head>
  <body>
      <style>
        body {
            background-image: url("../../public/images/bg-7-retro-sunset.svg");
        }
      </style>
      
      <div class="scroll-container">
        <div class="glasscard">
            <div class="login-container">
                <h1>Welcome to Cartridge Kings!</h1>

                <div class="sunken-box">
                    <form action="login.php" method="POST">
                        <div class="input-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="enter your email" required>
                        </div>

                        <div class="input-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="enter your password" required>
                        </div>

                        <button type="submit" class="login-button">Log In</button>
                        <h2 id="signupPrompt">Don't have an account? <a href="signup.php">Sign up</a></h2>
                    </form>
                </div>
            </div>
        </div>
      </div>
  </body>
</html>