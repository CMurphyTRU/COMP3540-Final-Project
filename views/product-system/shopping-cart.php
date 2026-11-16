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

        .sunken-box {
            background: rgba(255, 255, 255, 0); 
            box-shadow: inset 0px 3px 6px rgba(0, 0, 0, 0.15), inset 0px -1px 0px rgba(255, 255, 255, 0.6);
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            height: auto;
        }

        .shoppingCartContainer h1 {
            font-size: 40px;
            margin: 25px;
            color: #A44200;
        }

        .shoppingCartContainer hr {
            margin-left: 20px;
            margin-right: 20px;
            border: none;              
            height: 2px;               
            background-color: #F2F3AE;
            opacity: 1; 
        }

        .cart-items {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
        }


        .cart-item {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
            width: 100%;
            padding: 15px 20px;
            box-sizing: border-box;

            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;

        }



        .cart-image {
            width: 85px;
            height: 115px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
        }

        .cart-info {
            flex: 1;
            min-width: 0;
        }

        .cart-info h2 {
            font-size: 20px;
            margin: 0 0 10px 0;
            color:#D58936;
        }

        .cart-info p {
            font-size: 15px;
            margin: 0;
            opacity: 0.75;
        }

        .cart-price {
            display: flex;
            flex-direction: row;
            align-items: center;
            
            flex-shrink: 0;
            text-align: right;
            color:#F2F3AE;
            
        }

        .cart-price p {
            font-size: 36px;
            font-weight: bold;
            margin: 0;
        }

        .cart-price img {
            padding: 10px;
            width: 40px;
            height: 40px;
        }

        .cart-price img:hover {
            color: red;
        }

        .totalAndCheckout {
            display: flex;
            flex-direction: column;
            align-items: end;
            margin-right: 40px;
            
        }

        .totalAndCheckout h2 {
            color:#F2F3AE;
            font-weight: bold;
            margin-right: 10px;
            font-size: 40px;
        }

        .totalAndCheckout button {
            background: #D58936;
            color: #F2F3AE; 
            text-transform: uppercase;
            font-weight: bold;
            font-size: 20px;
            border-radius: 8px;
            height: 60px;
            box-shadow: 0 8px 1px #A44200;
            border: none;
            width: 10%;
            margin-bottom: 50px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            cursor: pointer;  
            font-family: Georgia, serif;
        }

        .totalAndCheckout button:hover
        {
            transform: translateY(-2px);
            box-shadow: 0 10px 1px #A44200;
        }

        .totalAndCheckout button:active
        {
            transform: translateY(6px);
            box-shadow: 0 2px 1px #A44200;
        }

        .purchaseInformation {
            display: flex;
            flex-direction: column;
            align-items: start;
            margin-right: 40px;
            
        }
        .purchaseInformation p {
            color:#D58936;
            font-weight: bold;
            
            font-size: 33px;
        }

        .purchaseInformationContainer {
            display: flex;
            flex-direction: row;
            justify-content: end;
        }

        #RPHR {
            transform: translateY(-50%);
            height: 6px;
            background: #D58936;
            box-shadow: 0 2px 8px rgba(213, 136, 54, 0.49);
            border: none;
            border-radius: 3px;
        }

        .deleteBtn {
            background-color: transparent;
            border: none;
        }

        .deleteBtn svg {
            width: 40px;
            height: 40px;
            margin: 10px;
        }

        .deleteBtn:hover {
            color: red;
            pointer-events: all;
        }

        .deleteBtn:hover svg {
            transform: scale(1.1);
        }
    </style>
      
    <div class="scroll-container">
        <div class="glasscard">
            <div class="shoppingCartContainer">
                <h1>Your cart</h1>
                <hr id="RPHR">
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