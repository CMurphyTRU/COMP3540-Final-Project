<!DOCTYPE html>
<html>
    <head>
        <title>Gallery Page</title>
        <style>
            html
            {
                /*https://www.w3schools.com/cssref/pr_background-attachment.php*/
                /*background-attachment: scroll|fixed|local|initial|inherit;*/
                background: #3C1518 center / cover no-repeat fixed;
            }
            
            .filter-bar
            {
                display: flex;
                gap: 28px;
                max-width: 1200px;
                margin: 0 auto 30px auto;
                border-bottom: 1px solid #69140E;
                background-color: #3C1518;
                border-radius: 10px;
                padding-left: 30px;
                padding-right: 30px;
                box-shadow: 0 8px 12px -6px rgba(0, 0, 0, 0.7);
            }

            .filter-button
            {
                background: none;
                border: none;
                border-bottom: 2px solid transparent;
                color: #2B1012;
                font-family: Georgia, serif;
                font-size: 15px;
                font-weight: bold;
                letter-spacing: 1px;
                text-transform: uppercase;
                text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.8), 0 1px 1px rgba(242, 243, 174, 0.12);
                padding: 12px 4px;
                cursor: pointer;
                white-space: nowrap;
                transition: color 0.3s ease, text-shadow 0.3s ease;
                margin-bottom: -1px;
            }

            .filter-button:not(.active):hover 
            {
                color: #F2F3AE;

                text-shadow: 0 0 3px #F2F3AE, 0 0 8px rgba(242, 243, 174, 0.8), 0 0 15px rgba(242, 243, 174, 0.5);
            }

            .filter-button.active 
            {
                color: #69140E;
                border-bottom-width: 3px;
                border-bottom-color: #69140E;
                background: linear-gradient(to top, #69140E 0%, transparent 15%);
            }

            .store-grid
            {
                display: flex;
                flex-wrap: wrap;
                gap: 24px;
                max-width: 1200px;
                margin: 0 auto;
            }

            .game-card
            {
                flex: 1 1 250px;
                max-width: 280px;
                background-color: #1e1e1e;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
                cursor: pointer;
                text-decoration: none;
                font-family: Arial, Helvetica, sans-serif;
            }

            .game-card:hover
            {
                transform: translateY(-6px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.8);
            }

            .image-container
            {
                position: relative;
                width: 100%;
                aspect-ratio: 3/4;
                background-color: #2a2a2a;
            }

            .image-container img
            {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }

            .price-tag
            {
                position: absolute;
                bottom: 10px;
                right: 10px;
                background-color: rgba(15, 15, 15, 0.9);
                color: #4ade80;
                front-weight: bold;
                font-size: 15px;
                padding: 6px 12px;
                border-radius: 4px;
                border: 1px solid #333;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.8);
            }

            .price-tag.free
            {
                color: #38bdf8;
            }

            .game-info
            {
                color: #F2F3AE;
                padding: 14px;
            }

            .game-title
            {
                font-size: 1.05rem;
                font-weight: 600;
                margin-bottom: 4px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .game-genre 
            {
                font-size: 0.85rem;
                color: #9ca3af;
            }
        </style>
        <script>
            const backgrounds = ['bg-1-controller-symbols.svg', 'bg-2-edge-stripes.svg', 'bg-3-sunburst.svg', 'bg-4-corner-arches.svg', 'bg-5-pixel-matrix.svg'];

            const pick = backgrounds[Math.floor(Math.random() * backgrounds.length)];
            document.documentElement.style.backgroundImage = "url(/images/" + pick + ")";
        </script>
    </head>
    <body>
        <nav class="filter-bar">
            <button class="filter-button active" data-filter="all">All Games</button>
            <button class="filter-button" data-filter="rpg">RPG</button>
            <button class="filter-button" data-filter="action">Action</button>
            <button class="filter-button" data-filter="strategy">Strategy</button>
            <button class="filter-button" data-filter="racing">Racing</button>
        </nav>
        <main class="store-grid" id="game-gird">
            <!-- Attach the game-cards to the data base and inject using php from database -->
            <a href="#" class="game-card" data-category="rpg">
                <div class="image-container">
                    <img src="https://cdn2.steamgriddb.com/thumb/c1b25edc06ffae57f9472050d7997405.jpg" alt="Cyber Odyssey 2099">
                    <span class="price-tag">$59.99</span>
                </div>
                <div class="game-info">
                    <h2 class="game-title">Cyber Punk</h2>
                    <p class="game-genre">This is information about the game</p>
                </div>
            </a>
        </main>
    </body>
</html>