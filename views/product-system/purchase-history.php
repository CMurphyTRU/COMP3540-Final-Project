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

        .sunken-box {
            background: rgba(255, 255, 255, 0); 
            box-shadow: inset 0px 3px 6px rgba(0, 0, 0, 0.15), inset 0px -1px 0px rgba(255, 255, 255, 0.6);
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            height: auto;
        }

        

        .recentPurchases {
            margin: 30px 25px;
        }

        .recentPurchases h1 {
            font-size: 48px;
            color: #A44200;
            margin: 0 0 20px 0;
            padding-bottom: 12px;
            
        }

        .purchase-card {
            display: flex;
            align-items: center;
            gap: 25px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .purchase-card img {
            width: 100px;
            height: 140px;
            object-fit: cover;
            border-radius: 5px;
        }

        .purchase-info {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .purchase-info h2 {
            margin: 0;
            font-size: 24px;
            color:#F2F3AE;
        }

        .purchase-info p {
            margin: 0;
            font-size: 18px;
            color:#D58936;
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

        .viewCodeButton {
            margin-left: auto;
        }

        .viewCodeButton button {
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

        .viewCodeButton button:hover
        {
            transform: translateY(-2px);
            box-shadow: 0 10px 1px #A44200;
        }

        .viewCodeButton button:active
        {
            transform: translateY(6px);
            box-shadow: 0 2px 1px #A44200;
        }

        #RPHR {
            transform: translateY(-50%);
            height: 6px;
            background: #D58936;
            box-shadow: 0 2px 8px rgba(213, 136, 54, 0.49);
            border: none;
            border-radius: 3px;
        }

        
        

        
      </style>
      
      <div class="scroll-container">
        <div class="glasscard">
            <div class="purchaseHistoryContainer">
                <div class="recentPurchases">
                        <div class="RPHeader">
                            <h1>Recent Purchases</h1>
                            <hr id="RPHR">
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