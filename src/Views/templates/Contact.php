<div class="contact">
    <h2>Contactez-nous</h2>
    
    <?php if ($responses): ?>
        <p class="responses"><?php echo implode('<br>', $responses); ?></p>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="name" placeholder="Votre nom" required>
        <input type="email" name="email" placeholder="Votre email" required>
        <input type="text" name="subject" placeholder="Sujet" required>
        <textarea name="msg" placeholder="Votre message" required></textarea>
        <input type="submit" value="Envoyer">
    </form>
</div>