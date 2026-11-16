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
            background-image: url('../../public/images/bg-10-crowns.svg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .scroll-container {
            position: fixed;

            top: 0px;
            bottom: 0;
            left: 0;
            right: 0;

            overflow-y: auto;
            overflow-x: hidden;

            display: flex;
            flex-direction: column;
            align-items: center;

            padding-top: 150px;
            box-sizing: border-box;

            scrollbar-width: none;
            
        }

        .glasscard
        {
            /* From https://css.glass */
            position: relative;
            
            width: 50%;
            height: auto;

            top: auto;
            margin: 10px 0;
            flex-shrink: 0;
            
            
            background: rgba(255, 255, 255, 0);
            border-radius: 16px;
            
            box-shadow: 0 4px 30px rgba(0, 0, 0, 1);
            
            backdrop-filter: blur(13.6px);
            -webkit-backdrop-filter: blur(13.6px);
        }

        .sunken-box {
            background: rgba(255, 255, 255, 0); 
            box-shadow: inset 0px 3px 6px rgba(0, 0, 0, 0.15), inset 0px -1px 0px rgba(255, 255, 255, 0.6);
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            height: auto;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-container h1 {
            font-size: 42px;
            color: #D58936;
            margin: 0 0 20px 0;
            
            padding-top: 32px;
            border-bottom: 3px solid #A44200;
        }

        .login-container .sunken-box {
            width: 80%;
            display: flex;
            justify-content: center;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            margin-top: 30px;
            margin-bottom: 30px;
            width: 100%;
        }

        .input-group label {
            font-size: 26px;
            font-weight: bold;
            color: #D58936;
            margin-bottom: 10px;
            
        }

        .input-group input {
            width: 100%;
            box-sizing: border-box;
            height: 80px;
            font-size: 40px;
            padding-left: 5px;

            background: rgba(255, 255, 255, 0.4);
            color: #3C1518;

            border: 2px solid rgba(105, 20, 14, 0.2);
            border-radius: 12px;

            outline: none;

            transition: all 0.25s ease;
        }

        .input-group input:hover {
            background: rgba(255, 255, 255, 0.55);
            border-color: #a44200;
        }

        .input-group input:focus {
            background: rgba(255, 255, 255, 0.7);
            border-color: #a44200;

            box-shadow: 0 0 0 4px rgba(164, 66, 0, 0.15);
        }

        .input-group input::placeholder {
            color: rgba(60, 21, 24, 0.55);
            font-size: 40px;
        }

        .login-button
        {
            background: #D58936;
            color: #F2F3AE; 
            text-transform: uppercase;
            font-weight: bold;
            font-size: 20px;
            border-radius: 8px;
            height: 60px;
            box-shadow: 0 8px 1px #A44200;
            border: none;
            width: 100%;
            margin-bottom: 5px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            cursor: pointer;  
            font-family: Georgia, serif;
        }

        .login-button:hover
        {
            transform: translateY(-2px);
            box-shadow: 0 10px 1px #A44200;
        }

        .login-button:active
        {
            transform: translateY(6px);
            box-shadow: 0 2px 1px #A44200;
        }

        #signupPrompt {
            display: block;
            margin: 50px auto;
            color: #D58936;
            text-align: center;
        }

        #signupPrompt a {
            color: #a44200;
            text-decoration: none;
        }

        #signupPrompt a:hover {
            text-decoration: underline;
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