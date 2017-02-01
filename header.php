<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <title>Binary</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?> 
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?> 
        <?php wp_head(); ?>
        <link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php bloginfo('template_directory'); ?>/assets/css/meucss.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <header>
            <nav class="navbar">

                <div class="logo">
                    <h3><span style="font-weight:bolder">Binary</span> by TEMPLATED</h3>
                </div>

                <div class="botao">
                    <input type="checkbox" id="navicon">
                    <label class="botaoMenu" for="navicon"></label>
                    
                    <!--<p><i class="fa fa-reorder"></i> Menu</p>-->
                    
                    <div class="menu">
                        <ol class="opcoes">
                            <a href="./index.html"><li class="linha1">Home</li></a>
                            <a href="./news.html"><li class="linha">News</li></a>
                            <a href="./exemplo.html"><li>Exemplo</li></a>
                        </ol>
                    </div>
                </div>

            </nav>
                
            <section class="titulo">
                <h2>This is Binary, a free and fully responsive website template by TEMPLATED</h2>
                <a href="#">Continue</a>
            </section>
            <div class="clear"></div>
        </header>
