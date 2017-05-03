<section id="home0" class="sectores_ambiotec">
    <h1>Sectores</h1>
    <div class="titulos-carrusel-sectores slider">
        <ul class="titulo-sectores">
            <?php $i = 0; ?>
            <?php foreach ($sectores as $sec): ?>
                <li>
                    <a data-slide-index="<?php print $i; ?>" href="">
                        <h2><?php print $sec->title; ?></h2>
                    </a>
                </li>
                <?php $i++; ?>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="carrusel-sectores slider">
        <ul class="slider-sectores">
            <?php foreach ($sectores as $sec): ?>
                <li>
                    <a href="/contenido/<?php print $sec->url_seo.'/'.$sec->nid; ?>">
                        <?php print obtiene_style_img('alta', $sec->field_imagen_principal['und'][0]['uri']); ?>
                        <h2><?php print $sec->title; ?></h2>
                        <p><?php print $sec->body['und'][0]['value']; ?></p>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <script type="text/javascript" src="/sites/all/themes/custom/ambiotec/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" charset="utf-8">
            jQuery('.slider-sectores').bxSlider({
                pagerCustom: '.titulo-sectores',
                mode: 'fade'
            });
            jQuery('.titulo-sectores').bxSlider({
                slideWidth: 90,
                minSlides: 5,
                maxSlides: 5,
                moveSlides: 1,
                slideMargin: 18,
                pager: false,
                infiniteLoop: false,
                responsive: true
            });
    </script>
</section>
<section id="home1" class="servicios_ambiotec">
    <h1>Servicios</h1>
    <?php $i = 0;?>
    <?php foreach ($servicios as $ser): ?>
        <div class="servicio-home">
            <?php
            if ($i % 2 == 0):
                print '<a href="/contenido/' . $ser->url_seo.'/'.$ser->nid . '">';
                print obtiene_style_img('media', $ser->field_imagen_principal['und'][0]['uri']);
                print '</a>';
            endif;
            ?>
            <h2><a href="/contenido/<?php print $ser->url_seo.'/'.$ser->nid; ?>"><?php print $ser->title; ?></a></h2>
            <p><a><?php print $ser->body['und'][0]['value']; ?></a></p>
            <?php
            if ($i % 2 != 0):
                print '<a href="/contenido/' . $ser->url_seo.'/'.$ser->nid . '">';
                print obtiene_style_img('media', $ser->field_imagen_principal['und'][0]['uri']);
                print '</a>';
            endif;
            ?>
        </div>
        <?php $i++; ?>
    <?php endforeach; ?>
</section>
<section id="home2" class="clientes_ambiotec">
    <h1>Clientes</h1>
    <ul>
        <?php
        $i = 0;
        foreach ($clientes['nid_sectores'] as $nids):
            ?>
            <li><a onclick="cambiar_cliente(<?php print $i; ?>);"><?php print $clientes['n_clientes'][$i] ?></a></li>
            <?php
            $i++;
        endforeach;
        ?>
    </ul>
    <div class="grilla-clientes">
        <?php
        $i = 0;
        foreach ($clientes['nid_sectores'] as $nids):
            $clase = '';
            if ($i == 0):
                $clase = 'activo';
            endif;
            ?>
            <ul class="<?php print $clase; ?>" id="clientes_<?php print $i; ?>">
                <?php
                foreach ($clientes['clientes'][$nids] as $cliente):
                    ?>
                    <li><?php print obtiene_style_img('clientes', $cliente->field_imagen_principal['und'][0]['uri']); ?></li>
                    <?php
                endforeach;
                ?>
            </ul>
            <?php
            $i++;
        endforeach;
        ?>
    </div>
</section>
<section id="home3" class="noticias_ambiotec">
    <h1>Noticias</h1>
    <div class="slider-noticias">
        <ul class="slider-notas">
            <?php
            foreach ($noticias as $notas):
                ?>
                <li>
                    <a target="_blank" href="<?php print $notas->field_enlace['und'][0]['value']; ?>">
                        <p><?php print $notas->title; ?><p>
                            <span class="credito-nota"><?php print $notas->field_credito['und'][0]['value']; ?></span>
                    </a>
                </li>
                <?php
            endforeach;
            ?>
        </ul>
    </div>
    <script type="text/javascript">
        jQuery('.slider-notas').bxSlider({
            mode: 'fade'
        });
    </script>
</section>
<section id="home4" class="contacto_ambiotec">
    <h1>Cont&aacute;ctenos</h1>
    <div class="informacion-contacto">
        <div class="colombia">
            <span class="ubicacion">
                <span class="pais">Colombia</span>
                <span class="ciudad">Bogot&aacute;</span>
            </span>
            <div class="direccion">Calle 103 No 14a - 53 oficina 302</div>
            <div class="telefono">57-1 623 33 10</div>
        </div>
        <div class="peru">
            <span class="ubicacion">
                <span class="pais">Peru</span>
                <span class="ciudad">Lima</span>
            </span>
            <div class="direccion">Calle Alca Flores 761 1781</div>
            <div class="telefono">511 242 17 10</div>
        </div>
    </div>
    <div class="formularios-ambiotec">
        <div class="left">
            <h2>escr&iacute;banos</h2>
            <?php print drupal_render(drupal_get_form('form_formulario_contacto_form')); ?>
        </div>
        <div class="right">
            <h2>trabaje con nosotros</h2>
            <?php print drupal_render(drupal_get_form('form_formulario_trabaje_form')); ?>
        </div>
    </div>
</section>

<section class="intro_ambiotec">
    <div class="logo-2" id="logo_ambiotec_30" onclick="ver_mas();">
        AMBIOTEC 30 años
    </div>
    <!--<div class="texto-intro-1">
        Estamos dedicados a mejorar la calidad de vida de todas las comunidades involucradas en el desarrollo
        de grandes proyectos de desarrollo as&iacute; como a contribuir con cada proyecto a la formaci&oacute;n de un mejor pa&iacute;s.
        <span onclick="ver_mas();" class="ver-mas-intro">leer m&aacute;s</span>
    </div>-->

    <div class="texto-intro-completo">
        <?php $textos = obtiene_textos_inicio(); ?>
        <h1 class="logo-descripcion"></h1>
        <?php print obtiene_style_img('intro', $textos->field_imagen_principal['und'][0]['uri']); ?>
        <p><?php print $textos->body['und'][0]['value'] ?></p>
        <div class="mision">
            <h2>Misi&oacute;n</h2>
            <p><?php print $textos->field_misi_n['und'][0]['value']; ?></p>
        </div>
        <div class="vision">
            <h2>Visi&oacute;n</h2>
            <p><?php print $textos->field_visi_n['und'][0]['value']; ?></p>
        </div>
    </div>
</section>
<script type="text/javascript">
    function cambiar_cliente(id) {
        jQuery('ul[id*=clientes_]').removeClass('activo');
        jQuery('#clientes_' + id).addClass('activo');
    }
    function ver_mas() {
        if(jQuery('.texto-intro-completo').hasClass('activo')){
            jQuery('#logo_ambiotec_30').removeClass('active');
            //jQuery('#logo_ambiotec_30').addClass('logo-2');
            jQuery('.texto-intro-completo').removeClass('activo');
        }
        else{
            //jQuery('#logo_ambiotec_30').addClass('logo-3');
            jQuery('#logo_ambiotec_30').addClass('active');
            jQuery('.texto-intro-completo').addClass('activo');
        }
    }
    jQuery(document).ready(function() {
        jQuery('a.anclas').click(function(e) {
            e.preventDefault();
            enlace = jQuery(this).attr('href');
            jQuery('html, body').animate({
                scrollTop: jQuery(enlace).offset().top
            }, 1000);
        });
    });
</script>

