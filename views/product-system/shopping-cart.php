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
            <div class="shoppingCartContainer">
                <h1>Your cart</h1>
                
                <div class="sunken-box">
                <?php 
                $cart = [
                    [
                        "title" => "Cyberpunk 2077",
                        "image" => "../../public/images/cyberpunk2077.jpg",
                        "price" => 79.99,
                    ],
                    [
                        "title" => "Elden Ring",
                        "image" => "../../public/images/eldenring.jpg",
                        "price" => 79.99,   
                    ]
                ];

                foreach ($cart as $item) {
                    require 'cart-item.php';
                }
                ?>
                </div>

                <div class="purchaseInformationContainer">
                    <div class="purchaseInformation">
                        <p>Subtotal: $159.98</p>
                        <p>Taxes: $19.20</p>
                    </div>
                </div>
                    
                <hr/>
                <div class="totalAndCheckout">
                    <h2>Total: $179.18</h2>
                    <button type="button" id="checkoutButton">Checkout</button>
                </div>
                
                    
                
            </div>
        </div>
    </div>
  </body>
</html>