
<!DOCTYPE html>
<html>
    <head>
        <title>Order Review Page</title>
        <style>
            html, body
            {
                margin: 0;
                height: 100%;
            }

            .container
            {
                display: flex;
                flex-direction: column;
                width: 100%;
                height: 100%;
            }

            .progress-bar
            {
                position: relative;
                background-color: #3C1518;
                box-shadow: 0 10px 24px rgba(0, 0, 0, 0.63);
                flex: 0 0 22%;
                min-width: 240px;
                z-index: 1;
            }

            .tracker-container
            {
                position: relative;
                width: 60%;
                margin: 0 auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .page-title
            {
                color: #F2F3AE; 
                font-size: 36px;
                font-family: Georgia, serif;
                text-shadow: 0 4px 5px rgba(0, 0, 0, 0.85);
                font-weight: bold;
                padding-left: 20px;
            }

            .border-bar
            {
                position: absolute;
                top: 13.5px;
                left: 16%;
                right: 16%;
                transform: translateY(-50%);
                height: 6px;
                background: #D58936;
                box-shadow: 0 2px 8px rgba(213, 136, 54, 0.49);
                border: none;
                border-radius: 3px;
            }

            .step
            {
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                flex: 1;
                margin: 0;
                z-index: 2;
            }

            .step .name
            {
                color: #F2F3AE;
                font-size: 14px;
                margin-top: 8px;
                font-weight: bold;  
                font-family: Arial, Helvetica, sans-serif;
                font-size: 18px;    
            }

            .active > .number
            {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 45px;
                height: 45px;
                font-size: 20px;
                font-weight: bold;
                color: #F2F3AE;
                background-color: #D58936;
                box-shadow: 0 0 10px rgba(213, 136, 54, 0.49);
                border-radius: 50%;
            }

            .non-active > .number
            {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 45px;
                height: 45px;
                font-size: 20px;
                font-weight: bold;
                color: #F2F3AE;
                background-color: #3C1518;
                border: 4px solid #D58936;
                text-shadow: 0 4px 5px rgba(0, 0, 0, 0.85);
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.85);
                border-radius: 50%;
            }

            .current > .number
            {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 45px;
                height: 45px;
                font-size: 20px;
                font-weight: bold;
                color: #F2F3AE;
                background-color: #D58936;
                box-shadow: 0 0 30px rgb(213, 136, 54);
                border-radius: 50%;
            }

            .confirmation-section
            {
                background-color: rgb(90, 21, 24);
                background-image: url("/images/bg-10-crowns.svg");
                background-repeat: repeat;
                flex: 1;
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                gap: 25px;
                padding: 50px;
                overflow-x: hidden;
                overflow-y: auto;
                min-width: 0;
            }

            .confirmation-card, .order-details
            {
                box-shadow: 0 10px 24px rgba(0, 0, 0, 0.63);
                background-color: #2a2a2a;
                border-radius: 15px;
                padding: 25px;
                min-width: 0;
            }

            .confirmation-card
            {
                flex: 1.6;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
                min-height: 320px;
            }

            .order-details
            {
                flex: 1;
            }

            .confirmation-icon
            {
                width: 85px;
                height: 85px;
                margin-bottom: 15px;
            }

            .confirmation-title
            {
                color: #F2F3AE;
                font-size: 32px;
                font-family: Georgia, serif;
                margin: 0 0 15px 0;
            }

            .confirmation-text
            {
                color: #F2F3AE;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
                margin: 0 0 18px 0;
            }

            .order-number
            {
                color: #D58936;
                font-family: Georgia, serif;
                font-size: 23px;
                font-weight: bold;
                border: 2px solid #D58936;
                border-radius: 10px;
                padding: 8px 18px;
                margin-bottom: 25px;
            }

            .confirmation-actions
            {
                display: flex;
                width: 100%;
                justify-content: center;
                gap: 20px;
            }

            .keys-button
            {
                background: #D58936;
                color: #F2F3AE; 
                text-transform: uppercase;
                font-weight: bold;
                width: 95%;
                font-size: 24px;
                border-radius: 10px;
                height: 50px;
                box-shadow: 0 4px 1px #A44200;
                border: none;
                margin-bottom: 15px;
                transition: transform 0.2s ease, box-shadow 0.2s ease;
                cursor: pointer;  
                font-family: Georgia, serif;
            }

            .keys-button:hover
            {
                transform: translateY(-2px);
                box-shadow: 0 6px 1px #A44200;
            }

            .keys-button:active
            {
                transform: translateY(4px);
                box-shadow: 0 1px 1px #A44200;
            }

            .confirmation-actions .keys-button
            {
                width: 48%;
                font-size: 17px;
            }

            .continue-button
            {
                background: #2a2a2a;
                border: 2px solid #D58936;
                box-shadow: 0 4px 1px #A44200;
            }

            .continue-button:hover
            {
                background: #3b3b3b;
            }

            .details-title
            {
                color: #F2F3AE;
                font-size: 26px;
                font-family: Georgia, serif;
                margin: 0 0 20px 0;
            }

            .details-line
            {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 10px;
                margin-bottom: 17px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 15px;
            }

            .details-label
            {
                color: #D58936;
            }

            .details-value
            {
                color: #F2F3AE;
                text-align: right;
            }

            .details-total
            {
                color: #39D98A;
                font-weight: bold;
                font-size: 18px;
            }

            .items-title
            {
                color: #F2F3AE;
                font-size: 23px;
                font-family: Georgia, serif;
                border-top: 2px solid #A44200;
                padding-top: 18px;
                margin: 15px 0;
            }

            .order-game
            {
                display: flex;
                align-items: center;
                gap: 12px;
                border-bottom: 1px solid #555555;
                padding: 10px 0 15px 0;
            }

            .order-game img
            {
                width: 90px;
                height: 65px;
                object-fit: cover;
                border-radius: 6px;
            }

            .game-info
            {
                flex: 1;
            }

            .game-name
            {
                color: #F2F3AE;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 15px;
                font-weight: bold;
            }

            .game-platform
            {
                color: #aaaaaa;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 13px;
                margin-top: 6px;
            }

            .game-price
            {
                color: #F2F3AE;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 15px;
                white-space: nowrap;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="progress-bar">
                <h1 class="page-title">Checkout</h1>
                <div class="tracker-container">
                    <hr class="border-bar">
                    <div class="step active">
                        <span class="number">1</span>
                        <span class="name">Cart</span>
                    </div>
                    <div class="step active">
                        <span class="number">2</span>
                        <span class="name">Payment</span>
                    </div>
                    <div class="step current">
                        <span class="number">3</span>
                        <span class="name">Confirmation</span>
                    </div>
                </div>
            </div>
            <div class="confirmation-section">
                <div class="confirmation-card">
                    <img class="confirmation-icon" src="/images/check-circle.svg" alt="Order Confirmed">
                    <h1 class="confirmation-title">Thank You for Your Purchase!</h1>
                    <p class="confirmation-text">Your order has been confirmed and is being processed.</p>
                    <div class="order-number">Order #0005</div>
                    <div class="confirmation-actions">
                        <button class="keys-button">VIEW MY KEYS</button>
                        <button class="keys-button continue-button">CONTINUE SHOPPING</button>
                    </div>
                </div>
                <div class="order-details">
                    <h1 class="details-title">Order Details</h1>
                    <div class="details-line">
                        <span class="details-label">Order Number</span>
                        <span class="details-value">#0005</span>
                    </div>
                    <div class="details-line">
                        <span class="details-label">Date</span>
                        <span class="details-value">Nov 14, 2026</span>
                    </div>
                    <div class="details-line">
                        <span class="details-label">Payment Method</span>
                        <span class="details-value">Card (•••• 3456)</span>
                    </div>
                    <div class="details-line">
                        <span class="details-label">Total</span>
                        <span class="details-value details-total">$62.99</span>
                    </div>
                    <h2 class="items-title">Items</h2>
                    <!-- inject php for each game from database -->
                    <div class="order-game">
                        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/1091500/library_600x900.jpg" alt="Cyberpunk 2077">
                        <div class="game-info">
                            <div class="game-name">Cyberpunk 2077</div>
                            <div class="game-platform">PC &bull; Digital Key</div>
                        </div>
                        <div class="game-price">$59.99</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
