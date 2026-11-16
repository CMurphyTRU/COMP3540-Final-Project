
<div class="cart-item">
    <img src="<?php echo htmlspecialchars($item['image']); ?>"
         alt="Game Cover"
         class="cart-image">

    <div class="cart-info">
        <h2><?php echo htmlspecialchars($item['title']); ?></h2>
        
    </div>


    <div class="cart-price">
        <p>$<?php echo number_format($item['price'], 2); ?></p>
    </div>
</div>
