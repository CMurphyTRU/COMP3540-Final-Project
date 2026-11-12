<div class="purchase-card">
    <img src="<?php echo htmlspecialchars($purchase['image']); ?>"
         alt="Game Cover">

    <div class="purchase-info">
        <h2><?php echo htmlspecialchars($purchase['title']); ?></h2>
        <p>Purchased: <?php echo htmlspecialchars($purchase['date']); ?></p>
        <p>Price: $<?php echo number_format($purchase['price'], 2); ?></p>
    </div>

    <div class="viewCodeButton">
        <button id="viewCodeBtn">View Code</button>
    </div>
</div>