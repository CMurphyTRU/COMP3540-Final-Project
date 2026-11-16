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
            background-image: url('../../public/images/bg-10-crowns.svg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .glasscard
        {
            /* From https://css.glass */
            position: relative;
            
            width: 50vw;
            height: auto;

            top: auto;
            margin: 20px 20px;
            flex-shrink: 0;
            
            
            background: rgba(255, 255, 255, 0);
            border-radius: 16px;
            
            box-shadow: 0 4px 30px rgba(0, 0, 0, 1);
            
            backdrop-filter: blur(13.6px);
            -webkit-backdrop-filter: blur(13.6px);
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

        .sunken-box {
            background: rgba(255, 255, 255, 0); 
            box-shadow: inset 0px 3px 6px rgba(0, 0, 0, 0.15), inset 0px -1px 0px rgba(255, 255, 255, 0.6);
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            height: auto;
        }

        .signup-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .signup-container h1 {
            font-size: 32px;
            color: #D58936;
            margin: 0 0 20px 0;
            padding-bottom: 12px;
            padding-top: 32px;
            border-bottom: 3px solid #A44200;
        }

        .signup-container .sunken-box {
            width: 80%;
        }

        #loginPrompt {
            display: block;
            margin: 50px auto;
            color: #D58936;
            text-align: center;
        }

        #loginPrompt a {
            text-decoration: none;
            color:#a44200;
        }

        #loginPrompt a:hover {
            text-decoration: underline;
            opacity: 80%;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            margin-top: 30px;
            margin-bottom: 30px;
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

        .signin-button
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

        .signin-button:hover
        {
            transform: translateY(-2px);
            box-shadow: 0 10px 1px #A44200;
        }

        .signin-button:active
        {
            transform: translateY(6px);
            box-shadow: 0 2px 1px #A44200;
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
                        <button type="submit" class="signin-button">Sign Up</button>
                    </form>

                    <h2 id="loginPrompt">Already have an account? <a href="login.php">Log in</a></h2>
                </div>
            </div>
        </div>
      </div>
      
      
      
  </body>
</html>