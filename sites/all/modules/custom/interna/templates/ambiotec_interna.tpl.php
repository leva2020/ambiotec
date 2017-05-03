<section class="interna">
    <h1><span><?php print $nodo->title;?></span></h1>
    <?php print obtiene_style_img('alta', $nodo->field_imagen_principal['und'][0]['uri']);?>
    <p><?php print $nodo->body['und'][0]['value'];?></p>
</section>

<section class="proyectos">
    <?php if(count($proyectos) > 0): ?>
        <h1><span>Proyectos</span></h1>
        <div class="wrapper-proyectos">
            <?php foreach($proyectos as $pro):?>
                <div class="proyecto">
                    <h2><?php print $pro->title;?></h2>
                    <p><?php print $pro->body['und'][0]['value'];?></p>
                </div>
            <?php endforeach;?>
        </div>
    <?php endif;?>
</section>

<section class="otros">
    <h1><?php print $titulo; ?></h1>
    <?php foreach($otros as $otro):?>
        <?php if($otro->nid != $nodo->nid): ?>
            <div class="info-otro">
                <a href="/contenido/<?php print $otro->url_seo.'/'.$otro->nid; ?>">
                    <?php print obtiene_style_img('baja', $otro->field_imagen_secundaria['und'][0]['uri']);?>
                    <h3><?php print $otro->title;?></h3>
                </a>
            </div>
        <?php endif;?>
    <?php endforeach;?>
</section>