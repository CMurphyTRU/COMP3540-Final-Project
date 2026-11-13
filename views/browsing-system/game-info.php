<!DOCTYPE html>
<html>
    <head>
        <title>Game Page</title>
        <style>
            html
            {
                /*https://www.w3schools.com/cssref/pr_background-attachment.php*/
                /*background-attachment: scroll|fixed|local|initial|inherit;*/
                background: #3C1518 center / cover no-repeat fixed;
            }

            .page-container
            {
                max-width: 1200px;
                margin: 40px auto;
                display: flex;
                flex-direction: column;
                gap: 20px;
                padding: 0 20px;
            }

            .banner
            {
                position: relative;
                background-color: #2a2a2a;
                border-radius: 15px;
                width: 100%;
                height: 350px;
                overflow: hidden;
                display: flex;
                align-items: flex-end;
            }

            .banner img
            {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                z-index: 1;
            }

            .banner-text
            {
                display: flex;
                flex-direction: column;
                padding: 20px;
                z-index: 2;
                text-shadow: 0 3px 3px rgba(0, 0, 0, 0.8), 0 1px 1px rgba(242, 243, 174, 0.12);
                font-family: Georgia, serif;
            }

            .category-tag   
            {
                background-color: #69140E;  
                color: #F2F3AE;
                border-radius: 20px;
                width: fit-content;
                padding: 3px 5px;
                text-transform: uppercase;
                font-weight: bold;
            }

            .game-name
            {
                margin-top: 0px;
                margin-bottom: 2px;
                color: #F2F3AE;
                font-weight: bold;
                text-transform: uppercase;
                font-size: 50px;
            }

            .info-pay-container
            {
                display: flex;
                flex-direction: row;
                gap: 20px;
            }

            .information
            {
                background-color: #2a2a2a;
                border-radius: 15px;
                padding: 20px;
                flex: 2;
            }

            .information h2
            {
                color: #F2F3AE; 
                font-family: Georgia, serif;
            }

            .game-description
            {   
                color: #e9e9e9;
                font-family: Arial, Helvetica, sans-serif;
            }

            .border-bar
            {
                height: 5px;
                border: none;
                border-radius: 2px;
                background: linear-gradient(90deg, #A44200 15%, #D58936 40%, #D58936 60%, #A44200 85%);
                box-shadow: 0 2px 8px rgba(213, 136, 54, 0.49);
                margin: 20px 0;
            }

            .screenshot-container
            {
                display: flex;
                flex-wrap: wrap;
                gap: 12px;
                justify-content: flex-start;
                width: 100%;
            }

            .screenshot
            {
                background-color: #1a1a1a;
                border-radius: 15px;
                flex: 0 0 calc((100% - 24px) / 3);
                aspect-ratio: 11 / 6;
                overflow: hidden;
                box-shadow: 0 4px 1px #A44200;
            }

            .screenshot img
            {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }

            .payment-container
            {
                display: flex;
                flex-direction: column;
                flex: 1;
            }

            .payment
            {
                background-color: #2a2a2a;
                border-radius: 15px;
                padding: 20px;
                display: flex;
                flex-direction: column;
            }

            .empty
            {
                flex: 1;
            }

            .price
            {
                color: #4ade80;
                font-family: Arial, Helvetica, sans-serif;
            }

            .add-to-cart-button
            {
                background: #D58936;
                color: #F2F3AE; 
                text-transform: uppercase;
                font-weight: bold;
                font-size: 20px;
                border-radius: 8px;
                height: 40px;
                box-shadow: 0 8px 1px #A44200;
                border: none;
                margin-bottom: 30px;
                transition: transform 0.2s ease, box-shadow 0.2s ease;
                cursor: pointer;  
                font-family: Georgia, serif;
            }

            .add-to-cart-button:hover
            {
                transform: translateY(-2px);
                box-shadow: 0 10px 1px #A44200;
            }

            .add-to-cart-button:active
            {
                transform: translateY(6px);
                box-shadow: 0 2px 1px #A44200;
            }

            .platform-title, .release-title, .delivery-title
            {
                display: inline-block;
                width: 100px;
                font-size: 20px;
                color: #D58936;
                margin-bottom: 3px;
                font-family: Arial, Helvetica, sans-serif;
            }

            .platform, .release, .delivery
            {
                color: #e9e9e9;
                padding-left: 15px;
                font-family: Arial, Helvetica, sans-serif;
            }

            .banner, .information, .payment
            {
                background-color: #2a2a2a;
                border-radius: 15px;
                box-shadow: 0 10px 24px rgba(0, 0, 0, 0.63);
            }
        </style>
        <script>
            const backgrounds = ['bg-6-cartridges.svg', 'bg-7-retro-sunset.svg', 'bg-8-racetrack.svg', 'bg-9-rolling-waves.svg', 'bg-10-crowns.svg'];

            const pick = backgrounds[Math.floor(Math.random() * backgrounds.length)];
            document.documentElement.style.backgroundImage = "url(/images/" + pick + ")";
        </script>
    </head>
    <body>
        <div class="page-container">
            <div class="banner">
                <img src="https://pbs.twimg.com/profile_banners/821102114/1792665983" alt="banner-image">
                <div class="banner-text">
                    <span class="category-tag">RPG</span>
                    <h1 class="game-name">Name of game</h1>
                </div>
            </div>
            <div class="info-pay-container">
                <div class="information">
                    <h2>About this game</h2>
                    <span class="game-description">bla bla bla incert text here etc...</span>
                    <hr class="border-bar">
                    <h2>Screenshots</h2>
                    <div class="screenshot-container">
                        <!-- screenshot injection code below -->
                        <div class="screenshot">
                            <img src="" alt="screenshot">
                        </div>
                        <div class="screenshot">
                            <img src="" alt="screenshot">
                        </div>
                        <div class="screenshot">
                            <img src="" alt="screenshot">
                        </div>
                        <div class="screenshot">
                            <img src="" alt="screenshot">
                        </div>
                    </div>
                </div>
                <div class="payment-container">
                    <div class="payment">
                        <h1 class="price">$0.00</h1>
                        <button class="add-to-cart-button">Add to Cart</button>
                        <div><span class="platform-title">Platform </span><span class="platform">filler</span></div>
                        <div><span class="release-title">Released </span><span class="release">year</span></div>
                        <div><span class="delivery-title">Delivery </span><span class="delivery">key method</span></div>  
                    </div>
                    <div class="empty"></div>
                </div>
            </div>
        </div>
    </body>
</html>