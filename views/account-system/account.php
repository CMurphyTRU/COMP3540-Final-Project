<!DOCTYPE html>
<html>
  <head>
    <title>Hello World!</title>
    
    <link rel="stylesheet" href="../../public/CSS/styles.css">
  </head>
  <body>
      <div class="t"><div class="tt"><div class="ttt"><div class="tttt"></div></div></div></div>
      
      <div class="scroll-container">
        <div class="glasscard">
            <div class="pfpandinfo">
                <div class="profilePicture">
                    <img src="pfp.avif" />
                </div>

                <div class="userInformation">
                    <h1>FirstName LastName</h1>
                    <p>Email Address</p>
                </div>
            </div>
        <div class="recentPurchases">
            <h1>Recent Purchases</h1>
            <div class="sunken-box">
                
            <!-- TEMPORARY - TO BE REPLACED WITH DATABASE CODE -->
            <?php
            $purchases = 
            [
                [
                    "title" => "Cyberpunk 2077",
                    "image" => "../../public/images/cyberpunk2077.jpg",
                    "date" => "2026-11-12",
                    "price" => 79.99
                ],
                [
                    "title" => "Elden Ring",
                    "image" => "../../public/images/eldenring.jpg",
                    "date" => "2026-11-12",
                    "price" => 79.99
                ],
                [
                    "title" => "Stardew Valley",
                    "image" => "../../public/images/stardewvalley.png",
                    "date" => "2026-11-12",
                    "price" => 39.99
                ],
                [
                    "title" => "Cyberpunk 2077",
                    "image" => "../../public/images/cyberpunk2077.jpg",
                    "date" => "2026-11-12",
                    "price" => 79.99
                ],
                [
                    "title" => "Elden Ring",
                    "image" => "../../public/images/eldenring.jpg",
                    "date" => "2026-11-12",
                    "price" => 79.99
                ],
                [
                    "title" => "Stardew Valley",
                    "image" => "../../public/images/stardewvalley.png",
                    "date" => "2026-11-12",
                    "price" => 39.99
                ],
                [
                    "title" => "Cyberpunk 2077",
                    "image" => "../../public/images/cyberpunk2077.jpg",
                    "date" => "2026-11-12",
                    "price" => 79.99
                ],
                [
                    "title" => "Elden Ring",
                    "image" => "../../public/images/eldenring.jpg",
                    "date" => "2026-11-12",
                    "price" => 79.99
                ],
                [
                    "title" => "Stardew Valley",
                    "image" => "../../public/images/stardewvalley.png",
                    "date" => "2026-11-12",
                    "price" => 39.99
                ]
            ];

            foreach ($purchases as $purchase) {
                require 'purchaseCard.php';
            }
            ?>
            <!-- END TEMPORARY CODE -->

                    </div>
                </div>
            </div>
      </div>
      
      
      
  </body>
</html>