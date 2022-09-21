<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        wp_nav_menu( array(
            'theme_location'    => ‘primary’,
        ) );
        ?>
    </div>
</nav>
    <script>
        $('ul').removeClass().addClass('nav navbar-nav');
    	$('li').removeClass().addClass('nav-item');
    	$('a').addClass('nav-link');
    </script>
</div>