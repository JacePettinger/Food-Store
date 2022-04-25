 <header id="Header">
     <div id="Top_bar">
         <div class="container">
             <div class="column one">
                 <div class="top_bar_left clearfix">
                     <!-- Logo -->
                     <div class="logo">
                         <a id="logo" href="<?php echo URLROOT; ?>index" title="BeEcoFood - BeTheme" data-height="100" data-padding="20">
                             <img class="logo-main scale-with-grid" src="<?php echo URLROOT; ?>images/logo_white_@1x.png" data-retina="<?php echo URLROOT; ?>images/logo_white_@2x.png" data-height="117" data-no-retina alt="" />
                             <img class="logo-sticky scale-with-grid" src="<?php echo URLROOT; ?>images/logo-sticky.png" data-retina="<?php echo URLROOT; ?>images/logo-sticky-retina.png" data-height="27" data-no-retina alt="" />
                             <img class="logo-mobile scale-with-grid" src="<?php echo URLROOT; ?>images/logo-sticky.png" data-retina="<?php echo URLROOT; ?>images/logo-sticky-retina.png" data-height="27" data-no-retina alt="" />
                             <img class="logo-mobile-sticky scale-with-grid" src="<?php echo URLROOT; ?>images/logo-sticky.png" data-retina="<?php echo URLROOT; ?>images/logo-sticky-retina.png" data-height="27" data-no-retina alt="" />
                         </a>
                     </div>
                     <div class="menu_wrapper">
                         <nav id="menu">
                             <ul id="menu-menu" class="menu menu-main">
                                 <li class="<?php echo ($data["title"] == "home") ?  'class="current-menu-item"' : "" ?>>
                                     <a href=" <?php echo URLROOT; ?>pages/index"><span>Home</span></a>
                                 </li>
                                 <li class="<?php echo ($data["title"] == "about") ?  'class="current-menu-item"' : "" ?>>
                                     <a href=" <?php echo URLROOT; ?>pages/about"><span>About us</span></a>
                                 </li>
                                 <li class="<?php echo ($data["title"] == "products") ?  'class="current-menu-item"' : "" ?>>
                                     <a href=" <?php echo URLROOT; ?>pages/products"><span>Products</span></a>
                                 </li>
                             </ul>
                         </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 </div>