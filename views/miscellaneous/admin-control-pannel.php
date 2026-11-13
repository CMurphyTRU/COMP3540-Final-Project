<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <style>
            html, body
            {
                margin: 0;
                height: 100%;
            }

            body
            {
                font-family: Arial, Helvetica, sans-serif;
            }
            
            .admin-container
            {
                display: flex;
                flex-direction: row;
                width: 100%;
                height: 100%;
            }

            .admin-navigation-bar
            {
                position: relative;
                flex: 0 0 15%;
                min-width: 240px;
                background-color: #3C1518;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                box-shadow: 0 10px 24px rgba(0, 0, 0, 0.63);
            }

            .titles
            {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 20px 10px 0;
                text-align: center;
            }

            .navigation-title
            {
                font-size: 28px;
                color: #F2F3AE;
                margin-bottom: 0;
                font-family: Georgia, serif;
            }

            .sub-title
            {
                margin-top: 0;
                font-size: 18px;
                color: #D58936;
                font-family: Georgia, serif;
            }

            .dashboard-button
            {
                margin-top: 40px;
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

            .dashboard-button:hover
            {
                transform: translateY(-2px);
                box-shadow: 0 6px 1px #A44200;
            }

            .dashboard-button:active
            {
                transform: translateY(4px);
                box-shadow: 0 1px 1px #A44200;
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

            .dashboard-container
            {
                flex: 1;
                min-width: 0;
                background-color: rgb(90, 21, 24);
                overflow-x: hidden;
                overflow-y: auto;
            }

            .push-over
            {
                width: 90%;
                margin: 0 auto;
                padding-bottom: 40px;
            }

            .dashboard-header
            {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }

            .logout-button
            {
                background: #D58936;
                color: #F2F3AE; 
                text-transform: uppercase;
                font-weight: bold;
                width: 150px;
                font-size: 20px;
                border-radius: 10px;
                height: 50px;
                box-shadow: 0 4px 1px #A44200;
                border: none;
                transition: transform 0.2s ease, box-shadow 0.2s ease;
                cursor: pointer;  
                font-family: Georgia, serif;
            }

            .logout-button:hover
            {
                transform: translateY(-2px);
                box-shadow: 0 6px 1px #A44200;
            }

            .logout-button:active
            {
                transform: translateY(4px);
                box-shadow: 0 1px 1px #A44200;
            }

            .dashboard-title
            {
                color: #F2F3AE; 
                font-size: 36px;
                font-family: Georgia, serif;
            }

            .border-bar
            {
                height: 6px;
                width: 100%;
                border: none;
                border-radius: 3px;
                background: #D58936;
                box-shadow: 0 2px 8px rgba(213, 136, 54, 0.49);
                margin: 20px 0;
            }

            .total-data
            {
                display: flex;
                flex-direction: row;
                justify-content: center;
                width: 100%;
                gap: 40px;
            }

            .total-revenue, .total-orders, .total-keys, .total-customers
            {
                background-color: #2a2a2a;
                flex: 1;
                min-width: 0;
                border-radius: 15px;
                padding: 30px;
                display: flex;
                flex-direction: column;
                box-shadow: 0 10px 24px rgba(0, 0, 0, 0.63);
            }

            .revenue-title, .order-title, .keys-title, .customer-title
            {
                color: #D58936;
                text-transform: uppercase;
                font-weight: bold;
                font-size: 20px;
                font-family: Georgia, serif;
            }

            .money, .orders, .keys, .customers
            {
                color: #F2F3AE; 
                text-transform: uppercase;
                font-weight: bold;
                font-size: 36px; 
            }

            .general-information-container
            {
                margin-top: 40px;
                display: flex;
                flex-direction: row;
                align-items: flex-start;
                gap: 40px;
                width: 100%;
            }

            .recent-orders
            {
                box-shadow: 0 10px 24px rgba(0, 0, 0, 0.63);
                background-color: #2a2a2a;
                flex: 7;
                min-width: 0;
                display: flex;
                flex-direction: column;
                border-radius: 15px;
                padding: 0 30px 20px;
            }

            .recent-orders-title
            {
                font-size: 36px;
                color: #F2F3AE; 
                font-family: Georgia, serif;
            }

            .orders-grid
            {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .grid-header, .order-row
            {
                display: grid;
                grid-template-columns: 90px 1fr 100px 100px;
                align-items: center;
                padding: 12px 8px;
                width: 100%;
            }

            .grid-header
            {
                font-size: 14px;
                text-transform: uppercase;
                letter-spacing: 3px;
                color: #F2F3AE;
                border-bottom: 2px solid #69140E;
            }

            .order-row
            {
                font-size: 14px;
                border-bottom: 2px solid #3b3b3b;
                transition: background-color 0.2s ease;
                color: #e9e9e9;
            }

            .order-row:last-child 
            {
                border-bottom: none;
            }

            .order-row:hover 
            {
                background-color: #3b3b3b;  
            }

            .order-status
            {
                padding: 4px 10px;
                font-size: 14px;
                font-weight: 500;
                text-align: center;
                width: fit-content;
            }

            .order-status.paid 
            {
                color: #4ade80;
            }

            .order-status.pending 
            {
                color: #facc15;
            }

            .order-status.refunded 
            {
                color: #f87171;
            }

            .low-key-indicatior
            {
                box-shadow: 0 10px 24px rgba(0, 0, 0, 0.63);
                background-color: #2a2a2a;
                flex: 4;
                min-width: 0;
                border-radius: 15px;
                padding: 0 30px 20px;
            }

            .low-key-title
            {
                font-size: 36px;
                color: #F2F3AE; 
                font-family: Georgia, serif;
            }

            .low-key-grid
            {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .low-key-header, .low-key-row
            {
                display: grid;
                grid-template-columns: 1fr 100px;
                align-items: center;
                padding: 12px 8px;
                width: 100%;
            }

            .low-key-header
            {
                font-size: 14px;
                text-transform: uppercase;
                letter-spacing: 3px;
                color: #F2F3AE;
                border-bottom: 2px solid #69140E;
            }

            .low-key-row
            {
                font-size: 14px;
                border-bottom: 2px solid #3b3b3b;
                transition: background-color 0.2s ease;
                color: #e9e9e9;
            }

            .low-key-row:last-child 
            {
                border-bottom: none;
            }

            .low-key-row:hover 
            {
                background-color: #3b3b3b;  
            }

            .low-key-status
            {
                padding: 4px 10px;
                font-size: 14px;
                font-weight: 500;
                text-align: center;
                width: fit-content;
            }

            .low-key-status.low 
            {
                color: #facc15;
            }

            .low-key-status.out 
            {
                color: #f87171;            
            }
        </style>
    </head>
    <body>
        <div class="admin-container">
            <div class="admin-navigation-bar">
                <div class="titles">
                    <h1 class="navigation-title">Cartridge Kings</h1>
                    <h2 class="sub-title">Admin control panel</h2>
                </div>
                <button class="dashboard-button">Dashboard</button>
                <button class="keys-button">Keys</button>
            </div>
            <div class="dashboard-container">
                <div class="push-over">
                    <div class="dashboard-header">
                        <h1 class="dashboard-title">Dashboard</h1>
                        <button class="logout-button">Log out</button>
                    </div>
                    <hr class="border-bar">
                    <div class="total-data">
                        <div class="total-revenue">
                            <span class="revenue-title">Revenue today</span>
                            <span class="money">#</span>
                        </div>
                        <div class="total-orders">
                            <span class="order-title">Orders today</span>
                            <span class="orders">#</span>
                        </div>
                        <div class="total-keys">
                            <span class="keys-title">Keys in stock</span>
                            <span class="keys">#</span>
                        </div>
                        <div class="total-customers">
                            <span class="customer-title">New customers</span>
                            <span class="customers">#</span>
                        </div>
                    </div>
                    <div class="general-information-container">
                        <div class="recent-orders">
                            <h2 class="recent-orders-title">Recent Orders</h2>
                            <div class="orders-grid">
                                <div class="grid-header">
                                    <span>Order</span>
                                    <span>Game</span>
                                    <span>Total</span>
                                    <span>Status</span>
                                </div>
                                <div class="order-row">
                                    <span class="order-id">#0001</span>
                                    <span class="order-game">Cyber Punk</span>
                                    <span class="order-total">$59.99</span>
                                    <span class="order-status paid">Paid</span>
                                </div>
                                <div class="order-row">
                                    <span class="order-id">#0002</span>
                                    <span class="order-game">Retro Racer</span>
                                    <span class="order-total">$29.99</span>
                                    <span class="order-status pending">Pending</span>
                                </div>
                                <div class="order-row">
                                    <span class="order-id">#0003</span>
                                    <span class="order-game">Pixel Dungeon</span>
                                    <span class="order-total">$19.99</span>
                                    <span class="order-status refunded">Refunded</span>
                                </div>
                                <div class="order-row">
                                    <span class="order-id">#0004</span>
                                    <span class="order-game">Minecraft</span>
                                    <span class="order-total">$39.99</span>
                                    <span class="order-status paid">Paid</span>
                                </div>
                            </div>
                        </div>
                        <div class="low-key-indicatior">
                            <h2 class="low-key-title">Low on keys</h2>
                            <div class="low-key-grid">
                                <div class="low-key-header">
                                    <span>Game</span>
                                    <span>Stock</span>
                                </div>
                                <div class="low-key-row">
                                    <span class="low-key-game">Cyber Punk</span>
                                    <span class="low-key-status low">5 left</span>
                                </div>
                                <div class="low-key-row">
                                    <span class="low-key-game">Retro Racer</span>
                                    <span class="low-key-status low">2 left</span>
                                </div>
                                <div class="low-key-row">
                                    <span class="low-key-game">Pixel Dungeon</span>
                                    <span class="low-key-status out">0 left</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>