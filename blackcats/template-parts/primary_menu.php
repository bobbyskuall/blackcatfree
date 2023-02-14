<input type="checkbox" id="btn-menu">
                    <!--<label for="btn-menu"><i class="fa fa-bars" aria-hidden="true"></i></label>-->
<nav class="menu-box">                    
                        <?php
                        if (has_nav_menu('primary_menu')){
                                         wp_nav_menu(array(
                                        'theme_location' => 'primary_menu',
                                        'menu_class' => 'menu-primary',
                                        'depth' => 2,
                                        )) ;
                        }
	                   ?>
</nav>