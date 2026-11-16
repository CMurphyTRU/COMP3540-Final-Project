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