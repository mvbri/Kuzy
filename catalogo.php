<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include "_partials/config.php" ?>
        <?php include "_partials/head.php" ?>

        <meta property="og:title" content="👠✨ Kuzy.pe ✨ 👞 Catálogo de calzados">
        <meta name="twitter:title" content="👠✨ Kuzy.pe ✨ 👞 Catálogo de calzados">
        <meta name="dcterms.title" content="👠✨ Kuzy.pe ✨ 👞 Catálogo de calzados">
        <meta name="DC.title" content="👠✨ Kuzy.pe ✨ 👞 Catálogo de calzados">
        <meta name="application-name" content="👠✨ Kuzy.pe ✨ 👞 Catálogo de calzados">
        <meta name="title" content="👠✨ Kuzy.pe ✨ 👞 Catálogo de calzados">
        <title>👠✨ Kuzy.pe ✨ 👞 Catálogo de calzados</title>

        <link href="https://fonts.googleapis.com/css2?family=Exo+2" rel="stylesheet">
        <link rel="stylesheet" href="_private/css/pages/core.css">
        <link rel="stylesheet" href="_private/css/pages/home.css">

    </head>

    <body id="site" class="site">

        <?php include "_partials/tagmanager.php" ?>

        <header id="site-header" class="site-header site-header-categorias cleaner">
            <div class="contenedor contenedor-principal">
                <div class="group group-principal group-principal-categorias">
                    <a href="/">
                        <img src="_private/img/logo-2.svg" alt="Logo de Kuzy.pe">
                    </a>
                </div>
            </div>
            <a
                href="https://api.whatsapp.com/send?phone=51992166412"
                class="contenedor-social-whatsapp button-basic button-quaternary"
                target="_blank">
                <img src="_private/img/icons/icon-whatsapp.svg" class="icon-whatsapp">
                <span class="icon-whatsapp-text color-secondary">+51 992166412</span>
            </a>
        </header>
        <main id="site-main" class="site-main cleaner">
            <section class="seccion seccion-2">
                <div class="contenedor contenedor-principal-modelos">
                    <div class="group group-secundario">
                        <div class="contenedor-general">
                            <h2 class="font-size-xl color-primary">Mira todos nuestros<br class="salto">
                                modelos</h2>
                            <span class="line-pink line-pink-circle-categoria-1 line-pink-width-2"></span>
                        </div>
                        <div class="contenedor contenedor-filtra-categorias">
                            <h3 class="font-size-md color-septenary bold">Filtra el según lo que deseas</h3>
                            <div class="contenedor-button-terciary">
                                <a
                                    href="javascript:void(0)"
                                    class="button-basic-2 button-terciary font-size-xs-two color-quinary">Categoría</a>
                                <a
                                    href="javascript:void(0)"
                                    class="button-basic-2 button-terciary font-size-xs-two color-quinary">Categoría</a>
                                <a
                                    href="javascript:void(0)"
                                    class="button-basic-2 button-terciary font-size-xs-two color-quinary">Categoría</a>
                                <a
                                    href="javascript:void(0)"
                                    class="button-basic-2 button-terciary font-size-xs-two color-quinary">Categoría</a>
                                <a
                                    href="javascript:void(0)"
                                    class="button-basic-2 button-terciary font-size-xs-two color-quinary">Categoría</a>
                                <a
                                    href="javascript:void(0)"
                                    class="button-basic-2 button-terciary font-size-xs-two color-quinary">Categoría</a>
                            </div>
                        </div>
                    </div>
                    <div class="container-categorias">
                        <div id="filter_group" class="button-group filters-button-group">
                            <button class="button" data-filter="*">Todos</button>
                            <button class="button is-checked" data-filter=".dama">Dama</button>
                            <button class="button" data-filter=".caballero">Caballero</button>
                            <button class="button" data-filter=".girl">Niña</button>
                            <button class="button" data-filter=".school">Colegio</button>
                        </div>
                        <div class="grid my-tabs">
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-1">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-1/modelo-1.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-1');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-2">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-2/modelo-2.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-2');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item grid-item--width2 dama" data-category="dama">
                                <a href="#modelo-3">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-3/modelo-3.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-3');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-4">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-4/modelo-4.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-4');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item grid-item--height2 graphics" data-category="dama">
                                <a href="#modelo-5">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-5/modelo-5.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-5');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-6">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-6/modelo-6.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-6');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-7">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-7/modelo-7.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-7');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-8">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-8/modelo-8.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-8');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-9">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-9/modelo-9.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-9');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-10">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-10/modelo-10.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-10');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-11">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-11/modelo-11.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-11');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-12">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-12/modelo-12.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-12');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-13">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-13/modelo-13.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-13');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-14">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-14/modelo-14.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-14');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-15">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-15/modelo-15.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-15');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-16">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-16/modelo-16.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-16');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-17">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-17/modelo-17.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-17');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-18">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-18/modelo-18.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-18');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-19">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-19/modelo-19.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-19');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-20">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-20/modelo-20.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-20');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-21">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-21/modelo-21.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-21');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-22">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-22/modelo-22.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-22');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-23">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-23/modelo-23.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-23');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-24">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-24/modelo-24.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-24');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-25">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-25/modelo-25.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-25');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-26">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-26/modelo-26.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-26');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-27">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-27/modelo-27.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-27');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-28">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-28/modelo-28.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-28');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-29">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-29/modelo-29.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-29');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-30">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-30/modelo-30.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-30');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-31">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-31/modelo-31.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-31');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-32">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-32/modelo-32.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-32');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-33">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-33/modelo-33.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-33');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-34">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-34/modelo-34.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-34');"
                                        class="galeria-img
                                     hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-35">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-35/modelo-35.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-35');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-36">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-36/modelo-36.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-36');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-37">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-37/modelo-37.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-37');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-38">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-38/modelo-38.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-38');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-39">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-39/modelo-39.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-39');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-40">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-40/modelo-40.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-40');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-41">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-41/modelo-41.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-41');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-42">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-42/modelo-42.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-42');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-43">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-43/modelo-43.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-43');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-44">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-44/modelo-44.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-44');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-45">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-45/modelo-45.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-45');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-46">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-46/modelo-46.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-46');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-48">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-47/modelo-47.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-47');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-48">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-48/modelo-48.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-48');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-49">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-49/modelo-49.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-49');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-50">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-50/modelo-50.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-50');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item school" data-category="school">
                                <a href="#modelo-51">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-51/modelo-51.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-51');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-52">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-52/modelo-52.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-52');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-53">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-53/modelo-53.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-53');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-54">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-54/modelo-54.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-54');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-55">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-55/modelo-55.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-55');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-56">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-56/modelo-56.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-56');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-57">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-57/modelo-57.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-57');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-58">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-58/modelo-58.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-58');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-59">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-59/modelo-59.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-59');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-60">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-60/modelo-60.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-60');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-61">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-61/modelo-61.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-61');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-62">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-62/modelo-62.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-62');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-63">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-63/modelo-63.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-63');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-64">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-64/modelo-64.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-64');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-65">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-65/modelo-65.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-65');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-66">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-66/modelo-66.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-66');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-67">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-67/modelo-67.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-67');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-68">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-68/modelo-68.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-68');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-69">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-69/modelo-69.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-69');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-70">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-70/modelo-70.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-70');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-71">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-71/modelo-71.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-71');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-72">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-72/modelo-72.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-72');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-73">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-73/modelo-73.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-73');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-74">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-74/modelo-74.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-74');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-75">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-75/modelo-75.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-75');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-76">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-76/modelo-76.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-76');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-77">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-77/modelo-77.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-77');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-78">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-78/modelo-78.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-78');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-79">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-79/modelo-79.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-79');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-80">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-80/modelo-80.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-80');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-81">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-81/modelo-81.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-81');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-82">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-82/modelo-82.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-82');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-83">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-83/modelo-83.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-83');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-84">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-84/modelo-84.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-84');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-85">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-85/modelo-85.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-85');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-86">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-86/modelo-86.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-86');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-87">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-87/modelo-87.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-87');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-88">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-88/modelo-88.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-88');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-89">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-89/modelo-89.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-89');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-90">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-90/modelo-90.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-90');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-91">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-91/modelo-91.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-91');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-92">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-92/modelo-92.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-92');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-93">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-93/modelo-93.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-93');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item dama" data-category="dama">
                                <a href="#modelo-94">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-94/modelo-94.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-94');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item girl" data-category="girl">
                                <a href="#modelo-95">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-95/modelo-95.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-95');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-96">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-96/modelo-96.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-96');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-97">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-97/modelo-97.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-97');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-98">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-98/modelo-98.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-98');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-98">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-99/modelo-99.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-99');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-100">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-100/modelo-100.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-100');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-101">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-102/modelo-102.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-102');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-102">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-103/modelo-103.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-103');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-104">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-104/modelo-104.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-104');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-105">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-105/modelo-105.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-105');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-106">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-106/modelo-106.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-106');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-107">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-107/modelo-107.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-107');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-108">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-108/modelo-108.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-108');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-109">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-109/modelo-109.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-109');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                            <div class="element-item caballero" data-category="caballero">
                                <a href="#modelo-110">
                                    <img
                                        src="<?php echo $modelos_path; ?>/modelo-110/modelo-110.1.jpg"
                                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-110');"
                                        class="galeria-img hover-shadow"
                                        alt="">
                                </a>
                            </div>
                        </div>

                        <!-- <div class="galeria-item galeria-item-2"> <img src="<?php echo
                        $modelos_path; ?>/modelo-1/modelo-1.1.jpg" onclick="openModal('<?php echo
                        $modelos_path; ?>','modelo-1');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-2/modelo-2.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-2');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-3/modelo-3.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-3');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-4/modelo-4.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-4');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-5/modelo-5.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-5');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-6/modelo-6.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-6');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-9/modelo-9.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-9');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-10/modelo-10.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-10');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-11/modelo-11.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-11');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-12/modelo-12.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-12');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-13/modelo-13.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-13');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-14/modelo-14.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-14');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-15/modelo-15.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-15');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-17/modelo-17.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-17');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-19/modelo-19.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-19');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-21/modelo-21.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-21');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-16/modelo-16.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-16');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-20/modelo-20.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-20');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-18/modelo-18.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-18');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-22/modelo-22.2.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-22');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-23/modelo-23.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-23');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-24/modelo-24.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-24');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-66/modelo-66.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-66');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-26/modelo-26.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-26');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-27/modelo-27.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-27');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-28/modelo-28.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-28');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-29/modelo-29.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-29');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-30/modelo-30.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-30');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-31/modelo-31.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-31');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-32/modelo-32.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-32');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-71/modelo-71.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-71');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-34/modelo-34.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-34');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-35/modelo-35.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-35');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-36/modelo-36.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-36');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-37/modelo-37.1.JPG" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-37');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-38/modelo-38.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-38');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-39/modelo-39.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-39');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-40/modelo-40.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-40');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-41/modelo-41.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-41');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-42/modelo-42.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-42');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-25/modelo-25.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-25');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-63/modelo-63.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-63');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-45/modelo-45.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-45');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-46/modelo-46.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-46');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-47/modelo-47.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-47');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-48/modelo-48.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-48');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-49/modelo-49.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-49');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-50/modelo-50.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-50');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-54/modelo-54.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-54');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-52/modelo-52.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-52');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-51/modelo-51.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-51');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-53/modelo-53.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-53');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-55/modelo-55.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-55');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-56/modelo-56.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-56');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-57/modelo-57.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-57');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-58/modelo-58.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-58');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-59/modelo-59.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-59');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-61/modelo-61.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-61');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-60/modelo-60.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-60');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-62/modelo-62.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-62');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-44/modelo-44.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-44');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-64/modelo-64.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-64');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-65/modelo-65.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-65');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-43/modelo-43.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-43');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-67/modelo-67.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-67');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-68/modelo-68.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-68');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-69/modelo-69.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-69');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-70/modelo-70.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-70');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-33/modelo-33.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-33');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-72/modelo-72.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-72');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-73/modelo-73.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-73');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-74/modelo-74.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-74');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-75/modelo-75.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-75');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-76-1/modelo-76.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-76-1');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-77/modelo-77.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-77');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-78/modelo-78.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-78');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-79/modelo-79.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-79');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-80/modelo-80.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-80');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-82/modelo-82.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-82');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-83/modelo-83.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-83');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-84/modelo-84.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-84');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-85/modelo-85.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-85');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-86/modelo-86.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-86');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-87/modelo-87.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-87');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-88/modelo-88.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-88');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-89/modelo-89.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-89');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-90/modelo-90.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-90');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-91/modelo-91.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-91');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-92/modelo-92.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-92');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-93/modelo-93.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-93');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-2"> <img src="<?php echo $modelos_path;
                        ?>/modelo-94/modelo-94.1.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-94');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> <div class="galeria-item galeria-item-2">
                        <img src="<?php echo $modelos_path; ?>/modelo-95/modelo-95.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-95');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item-dos"> <div class="galeria-item galeria-item-doble"> <img
                        src="<?php echo $modelos_path; ?>/modelo-5/modelo-5.1.jpg"
                        onclick="openModal('<?php echo $modelos_path; ?>','modelo-5');"
                        class="galeria-img hover-shadow" alt=""> <a class="contenedor-icon-heart"
                        href="javascript:void(0)"> <span class="icon-heart"></span> </a> </div> <div
                        class="galeria-item galeria-item-doble"> <img src="<?php echo $modelos_path;
                        ?>/modelo-45/modelo-45.2.jpg" onclick="openModal('<?php echo $modelos_path;
                        ?>','modelo-45');" class="galeria-img hover-shadow" alt=""> <a
                        class="contenedor-icon-heart" href="javascript:void(0)"> <span
                        class="icon-heart"></span> </a> </div> </div> -->
                    </div>

                    <!-- The Modal/Lightbox -->
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close cursor" onclick="closeModal()">&times;</span>
                            <div class="mySlides">
                                <img id="modalDisplay" src="" style="width:100%">
                            </div>

                            <!-- Thumbnail image controls -->
                            <div class="contenedor-img-control">
                                <div class="contenedor-img-demo">
                                    <img
                                        class="demo"
                                        src="<?php echo $modelos_path; ?>/modelo-1/modelo-1.1.jpg"
                                        onclick="currentSlide(1)"
                                        alt="modelos">
                                </div>

                                <div class="contenedor-img-demo">
                                    <img
                                        class="demo"
                                        src="<?php echo $modelos_path; ?>/modelo-1/modelo-1.2.jpg"
                                        onclick="currentSlide(2)"
                                        alt="modelos">
                                </div>

                                <div class="contenedor-img-demo">
                                    <img
                                        class="demo"
                                        src="<?php echo $modelos_path; ?>/modelo-1/modelo-1.3.jpg"
                                        onclick="currentSlide(3)"
                                        alt="modelos">
                                </div>

                                <div class="contenedor-img-demo">
                                    <img
                                        class="demo"
                                        src="<?php echo $modelos_path; ?>/modelo-1/modelo-1.4.jpg"
                                        onclick="currentSlide(4)"
                                        alt="modelos">
                                </div>
                                <a class="prev" onclick="prevSlide()">
                                    <img src="_private/img/arrow-left-modal.svg" alt="">
                                </a>
                                <a class="next" onclick="nextSlide()">
                                    <img src="_private/img/arrow-right-modal.svg" alt="">
                                </a>
                            </div>
                            <a
                                href="https://api.whatsapp.com/send?phone=51992166412"
                                target="_blank"
                                class="button-basic button-primary button-modal background-quaternary color-secondary font-size-xs button-decoration-line">Pedir ahora</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="seccion seccion-3">
                <div class="contenedor contenedor-principal-info">
                    <div class="group group-secundario">
                        <div class="contenedor-general">
                            <h2 class="font-size-xl color-primary">¿Comó hacer mi pedido?</h2>
                            <span class="line-pink line-pink-circle-2 line-pink-width-2"></span>
                        </div>
                    </div>
                    <div class="contenedor contenedor-info contenedor-info-movil-2">
                        <div class="group-contenido pedido-info-1">
                            <div class="fondo-circle fondo-circle-1 font-size-md"></div>
                            <h3 class="color-terciary font-size-lg">Elegir modelo</h3>
                            <hr class="line-pink line-pink-circle-3 line-pink-width-3 line-pink-left-3">
                            <p class="font-size-xs color-terciary">
                                Corta descripción<br>
                                del beneficio
                            </p>
                        </div>
                        <div class="group-contenido pedido-flechas"></div>
                        <div class="group-contenido pedido-info-2">
                            <div class="fondo-circle fondo-circle-2 font-size-md"></div>
                            <div class="contenedor-general">
                                <h3 class="color-terciary font-size-lg">Contactar</h3>
                                <span class="line-pink line-pink-circle-3 line-pink-width-2"></span>
                            </div>
                            <p class="font-size-xs color-terciary">
                                Corta descripción<br>
                                del beneficio
                            </p>
                        </div>
                        <div class="group-contenido pedido-flechas"></div>
                        <div class="group-contenido pedido-info-3">
                            <div class="fondo-circle fondo-circle-3 font-size-md"></div>
                            <h3 class="color-terciary font-size-lg">Recoger pedido</h3>
                            <hr class="line-pink line-pink-circle-3 line-pink-width-3 line-pink-left-3">
                            <p class="font-size-xs color-terciary">
                                Corta descripción<br>
                                del beneficio
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="seccion seccion-4">
                <div class="contenedor contenedor-principal-info">
                    <div class="group group-secundario">
                        <div class="contenedor-general">
                            <h2 class="font-size-xl color-primary">Aprovecha nuestras
                                <br class="salto-3">
                                promociones</h2>
                            <span class="line-pink line-pink-circle-2 line-pink-width-2"></span>
                        </div>
                    </div>
                    <div class="contenedor contenedor-info contenedor-promo">
                        <div class="contenedor-fondo-gris contenedor-fondo-gris-promo">
                            <div class="text-center text-promo">
                                <img src="<?php echo $modelos_path; ?>/modelo-28/modelo-28.2.jpg" alt="">
                            </div>
                        </div>
                        <div class="contenedor-fondo-gris contenedor-fondo-gris-promo">
                            <div class="text-center text-promo">
                                <img src="<?php echo $modelos_path; ?>/modelo-23/modelo-23.1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer id="site-footer" class="site-footer">
            <?php include "_partials/footer.php" ?>
        </footer>

        <script src="_private/vendors/jquery.min.js"></script>
        <script src="_private/vendors/owl/owl.carousel.min.js"></script>
        <script src="_private/vendors/owl/owl.animate.js"></script>
        <script src="_private/vendors/isotope/isotope.js"></script>
        <script src="_private/js/pages/home.js"></script>
    </body>
</html>