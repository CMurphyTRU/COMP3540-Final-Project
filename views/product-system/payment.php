
<!DOCTYPE html>
<html>
    <head>
        <title>Payment Page</title>
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

            .payment-section
            {
                background-image: url('/images/bg-10-crowns.svg');
                background-repeat: repeat;
                background-color: rgb(90, 21, 24);
                flex: 1;
                overflow-x: hidden;
                overflow-y: auto;
                min-width: 0;
            }

            .border-bar
            {
                position: absolute;
                top: 22.5px;
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

            .payment-section
            {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                padding: 50px;
                gap: 25px;
                align-items: flex-start;
            }

            .payment-method, .card-details, .order-summary
            {
                box-shadow: 0 10px 24px rgba(0, 0, 0, 0.63);
                background-color: #2a2a2a;
                border-radius: 15px;
                padding: 25px;
                min-width: 0;
            }

            .payment-method
            {
                flex: 1;
            }

            .card-details
            {
                flex: 1.2;
            }

            .order-summary
            {
                flex: 1;
            }

            .title
            {
                color: #F2F3AE; 
                font-size: 36px;
                font-family: Georgia, serif;
                font-weight: bold;
                padding-left: 20px;
            }

            .pay-card
            {
                display: flex;
                align-items: center;
                gap: 15px;
                background-color: #3b3b3b;
                border: 2px solid #555555;
                border-radius: 10px;
                padding: 12px;
                height: 70px;
                margin-bottom: 15px;
                transition: 0.2s;
            }

            .pay-card:not(.selected):hover
            {
                cursor: pointer;
                background-color: #493b30;
                border-color: #D58936;
                box-shadow: 0 0 10px rgba(213, 136, 54, 0.3);
            }

            .pay-card.selected
            {
                border-color: #D58936;
                box-shadow: 0 0 10px rgba(213, 136, 54, 0.3);
            }

            .pay-card img
            {
                width: 40px;
                height: 40px;
                object-fit: contain;
            }

            .pay-card p
            {
                color: #F2F3AE;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 16px;
                font-weight: bold;
                flex: 1;
                margin: 0;
            }

            .dot
            {
                width: 20px;
                height: 20px;
                border: 2px solid #999999;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
            }

            .dot.active
            {
                border-color: #D58936;
            }

            .dot.active::after
            {
                content: "";
                width: 10px;
                height: 10px;
                background-color: #D58936;
                border-radius: 50%;
            }

            .input-label
            {
                color: #F2F3AE;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 15px;
                margin-bottom: 8px;
            }

            .detail-input
            {
                box-sizing: border-box;
                width: 100%;
                padding: 13px;
                margin-bottom: 18px;
                background-color: #3b3b3b;
                border: 1px solid #555555;
                border-radius: 6px;
                color: #F2F3AE;
                font-size: 15px;
            }

            .detail-input:focus
            {
                outline: none;
                border-color: #D58936;
            }

            .detail-row
            {
                display: flex;
                gap: 15px;
            }

            .detail-row > div
            {
                flex: 1;
                min-width: 0;
            }

            .summary-game
            {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-bottom: 20px;
                border-bottom: 1px solid #555555;
                margin-bottom: 20px;
                gap: 10px;
            }

            .summary-game img
            {
                width: 90px;
                height: 110px;
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
                font-size: 16px;
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
                font-size: 16px;
                white-space: nowrap;
            }

            .summary-line
            {
                display: flex;
                justify-content: space-between;
                margin-bottom: 15px;
                color: #F2F3AE;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 15px;
            }

            .summary-total
            {
                display: flex;
                justify-content: space-between;
                border-top: 2px solid #A44200;
                padding-top: 18px;
                margin-top: 15px;
                color: #F2F3AE;
                font-family: Georgia, serif;
                font-size: 23px;
                font-weight: bold;
            }

            .place-order
            {
                background: #D58936;
                color: #F2F3AE; 
                text-transform: uppercase;
                font-weight: bold;
                width: 100%;
                font-size: 24px;
                margin-top: 30px;   
                border-radius: 10px;
                height: 50px;
                box-shadow: 0 4px 1px #A44200;
                border: none;
                margin-bottom: 15px;
                transition: transform 0.2s ease, box-shadow 0.2s ease;
                cursor: pointer;  
                font-family: Georgia, serif;
            }

            .place-order:hover
            {
                transform: translateY(-2px);
                box-shadow: 0 6px 1px #A44200;
            }

            .place-order:active
            {
                transform: translateY(4px);
                box-shadow: 0 1px 1px #A44200;
            }

            .secure-note
            {
                color: #aaaaaa;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                text-align: center;
                margin-top: 18px;
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
                    <div class="step current">
                        <span class="number">2</span>
                        <span class="name">Payment</span>
                    </div>
                    <div class="step non-active">
                        <span class="number">3</span>
                        <span class="name">Confirmation</span>
                    </div>
                </div>
            </div>
            <div class="payment-section">
                <div class="payment-method">
                    <h1 class="title">Payment Method</h1>
                    <div class="pay-card selected">
                        <img src="/images/card.svg" alt="Credit Card">
                        <p>Credit / Debit Card</p>
                        <div class="dot active"></div>
                    </div>
                    <div class="pay-card">
                        <img src="/images/paypal.svg" alt="PayPal">
                        <p>PayPal</p>
                        <div class="dot"></div>
                    </div>
                    <div class="pay-card">
                        <img src="/images/gift-card.svg" alt="Gift Card">
                        <p>Gift Card / Store Credit</p>
                        <div class="dot"></div>
                    </div>
                </div>
                <div class="card-details">
                    <h1 class="title">Card Details</h1>

                    <div class="input-label">Card Number</div>
                    <input class="detail-input" type="text" placeholder="1234 5678 9012 3456">

                    <div class="detail-row">
                        <div>
                            <div class="input-label">Expiration Date</div>
                            <input class="detail-input" type="text" placeholder="MM / YY">
                        </div>
                        <div>
                            <div class="input-label">CVC</div>
                            <input class="detail-input" type="text" placeholder="123">
                        </div>
                    </div>

                    <div class="input-label">Name on Card</div>
                    <input class="detail-input" type="text" placeholder="John Doe">
                </div>
                <div class="order-summary">
                    <h1 class="title">Order Summary</h1>

                    <!-- inject php for each game from database -->
                    <div class="summary-game">
                        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/1091500/library_600x900.jpg" alt="Cyberpunk 2077">

                        <div class="game-info">
                            <div class="game-name">Cyberpunk 2077</div>
                            <div class="game-platform">PC &bull; Digital Key</div>
                        </div>

                        <div class="game-price">$59.99</div>
                    </div>

                    <div class="summary-line">
                        <span>Subtotal</span>
                        <span>$59.99</span>
                    </div>
                    <div class="summary-line">
                        <span>GST (5%)</span>
                        <span>$3.00</span>
                    </div>
                    <div class="summary-total">
                        <span>Total</span>
                        <span>$62.99</span>
                    </div>
                    <button class="place-order">PLACE ORDER</button>
                    <div class="secure-note">
                        Your payment information is secure.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
