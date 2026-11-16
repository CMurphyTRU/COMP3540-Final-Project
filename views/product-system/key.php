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
            
            width: 80%;
            height: auto;

            top: auto;
            margin: 20px 0;
            flex-shrink: 0;
            
            
            background: rgba(255, 255, 255, 0);
            border-radius: 16px;
            
            box-shadow: 0 4px 30px rgba(0, 0, 0, 1);
            
            backdrop-filter: blur(13.6px);
            -webkit-backdrop-filter: blur(13.6px);
        }

        .gameKeyContainer {
            margin: 100px;
        }

        #gameKey {
            font-size: 40px;
            
            font-family: monospace;
            letter-spacing: 1px;
        }

        .keyView {
            display: flex;
            flex-direction: column;
            
        }

        .gameKeyContainer {
            display: flex;
            flex-direction: row;
            
            align-items: center;
            justify-content: center;
        }

        .gameKeyContainer label {
            font-size: 26px;
            font-weight: bold;
            color: #D58936;
            margin-bottom: 10px;
            
        }

        .gameKeyContainer input {
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

            pointer-events: none;
        }

        .gameKeyContainer input:hover {
            background: rgba(255, 255, 255, 0.55);
            border-color: #a44200;
        }

        .gameKeyContainer input:focus {
            background: rgba(255, 255, 255, 0.7);
            border-color: #a44200;

            box-shadow: 0 0 0 4px rgba(164, 66, 0, 0.15);
        }

        .viewButton {
            
            display: flex;
            align-items: center;
            margin-top: 40px;
            margin-left: 30px;
            
        }

        

        #showKey 
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
            width: 100px;
            margin-bottom: 5px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            cursor: pointer;  
            font-family: Georgia, serif;
        }

        #showKey:hover
        {
            transform: translateY(-2px);
            box-shadow: 0 10px 1px #A44200;
        }

        #showKey:active
        {
            transform: translateY(6px);
            box-shadow: 0 2px 1px #A44200;
        }
      </style>
      
      <div class="scroll-container">
        <div class="glasscard">
            <div class="gameKeyContainer">
                <div class="keyView">
                    <label for="gameKey">View your game key</label>
                    <input type="password" name="gameKey" id="gameKey" value="A7K9P-M3X8Q-L2V5R" readonly></input>
                </div>

                <div class="viewButton">
                    <button type="button" id="showKey">View</button>
                </div>
            </div>
        </div>
      </div>

      <script>

        const gameKey = document.getElementById("gameKey");
        const showKey = document.getElementById("showKey");

        showKey.addEventListener("click", function() {
            if (gameKey.type === "password") {
                gameKey.type = "text";
                showKey.textContent = "Hide";
            } else {
                gameKey.type = "password";
                showKey.textContent = "View";
            }
        });

      </script>
  </body>
</html>