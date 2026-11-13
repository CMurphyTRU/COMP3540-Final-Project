<!DOCTYPE html>
<html>
  <head>
    <title>Sign up</title>
    
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
            <div class="signup-container">
                <h1>Welcome to Cartridge Kings!</h1>

                <div class="sunken-box">
                    <form action="signup.php" method="POST">
                        
                        <div class="input-group">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" placeholder="enter your first name" required>
                        </div>

                        <div class="input-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="lastname" placeholder="enter your last name" required>
                        </div>
                    
                        <div class="input-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="enter your email" required>
                        </div>

                        <div class="input-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="enter your password" required>
                        </div>
                        <button type="submit" class="login-button">Log In</button>
                    </form>

                    <h2 id="signupPrompt">Already have an account? <a href="login.php">Log in</a></h2>
                </div>
            </div>
        </div>
      </div>
      
      
      
  </body>
</html>