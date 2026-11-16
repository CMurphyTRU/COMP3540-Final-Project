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
            <div class="purchaseHistoryContainer">
                <div class="recentPurchases">
                        <div class="RPHeader">
                            <h1>Recent Purchases</h1>
                            
                        </div>
                        
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
                            require '../account-system/purchaseCard.php';
                        }
                        ?>
                        <!-- END TEMPORARY CODE -->

                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
      </div>
  </body>
</html>