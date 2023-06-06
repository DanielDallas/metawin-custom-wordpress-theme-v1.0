<?php
//The template for displaying the footer
?> <div class="footer-section">
  <div class="footer-logo">
    <img style="width:103px; height: 103px;" src="http://thedanieldallas.com/metawin-theme-in-action/wp-content/uploads/2023/05/logo.png" alt="Casino Hotel">
  </div>
  <nav class="footer-nav"> <?php // Display the menu from Primary Menu location
   wp_nav_menu([
    "theme_location" => "primary_menu",
   ]); ?> </nav>
  <div style"display: flex; justify-content: center; align-items: center;">
    <hr>
  </div>
  <div class="footer-image-18">
    <img style="width:120px; height;25px; filter: brightness(0) invert(1);" src="http://thedanieldallas.com/metawin-theme-in-action/wp-content/uploads/2023/06/begambleaware.png" alt="BeGamblAaware 18+">
  </div>
  <div class="footer-copyright">
    <p> &copy; <?php echo date("Y"); ?> Top 10 Casinos Worldwide. All rights reserved. </p>
  </div>
</div>
</body>

</html>