<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Desafio Villa Pescados">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
    <meta name="author" content="Carlos Santos web developer">

    <title>
        <?php bloginfo('name');?>
    </title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
    
</head>

<body <?php body_class();?> >

    <header>
        <nav id="navbar">
            <div class="logo">
                <a href="<?php echo get_site_url(); ?>"> <h1>VILLA B2C</h1> </a>
            </div>
            <div class="menu">
                <div class="lines">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>
                <div>
                    <ul>
                        <li><a href="#home">Home</a> </li>
                        <li><a href="#about">Sobre a VillaB2C</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#plans">Planos</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    