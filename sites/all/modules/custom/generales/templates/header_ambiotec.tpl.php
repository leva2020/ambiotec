<?php
$path = current_path();
if($path == 'home'):
    $enlace = '#home';
else:
    $enlace = '/#home';
endif;
?>
<header>
    <div class="header-ambiotec">
        <a href="/"><h1 class="logo"></h1></a>
        <nav class="menu-ambiotec">
            <ul>
                <?php
                $i = 0;
                foreach ($data['menu'] as $menu):
                    ?>
                    <li><a class="anclas" onclick="pageView()" href="<?php print $enlace.$i; ?>"><?php print $menu['link_title']; ?></a></li>
                    <?php
                    $i++;
                endforeach;
                ?>
            </ul>
        </nav>
        <div id="icono-menu-movil" class="icono-menu">
            <span>Menu</span>
        </div>
        <div class="corporativo">
            <a target="_blank" href="login.bluehost.com/hosting/webmail">Corporativo</a>
        </div>
    </div>

    <div class="header-ambiotec-mobile">
        <a href="/"><h1 class="logo"></h1></a>
        <nav class="menu-ambiotec">
            <ul>
                <?php
                $i = 0;
                foreach ($data['menu'] as $menu):
                    ?>
                    <li><a class="anclas" onclick="pageView()" href="<?php print $enlace.$i; ?>"><?php print $menu['link_title']; ?></a></li>
                    <?php
                    $i++;
                endforeach;
                ?>
            </ul>
        </nav>
        <div class="corporativo">
            <a href="">Corporativo</a>
        </div>
    </div>
</header>

<script>
    jQuery(document).ready(function(){
        jQuery('#icono-menu-movil').click(function(){
            if(jQuery('body').hasClass('active')){
                jQuery('body').removeClass('active');
            }
            else{
                jQuery('body').addClass('active');
            }
        });
    });
    function pageView(){
        (
            function(i,s,o,g,r,a,m){
                i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            }   
        )
        (window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('send', 'pageview');
        jQuery('body').removeClass('active');
    }
</script>