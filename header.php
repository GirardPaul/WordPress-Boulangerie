<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
    <link rel="shortcut icon" href="images/logo-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="wp-content/themes/boulangerie/style.css">
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    <title>Boulangerie Bakery</title>
</head>

<body>
    <header id="carouselExampleSlidesOnly" class="carousel slide header" data-ride="carousel">
        <div class="carousel-inner">
            <div class="try">
                <div class="container">
                    <div class="row no-gutters">

                        <div class="col-6 w-50">
                            <div class="row pos-relative">
                                <div class="col-6 pos-logo">

                                <?php if ( is_active_sidebar( 'logo-header' ) ) : ?>
	                    <?php dynamic_sidebar( 'logo-header' ); ?>
                        <?php endif; ?>

                            </div>

                                
                                <?php if ( is_active_sidebar( 'adress' ) ) : ?>
	                            <?php dynamic_sidebar( 'adress' ); ?>
                                <?php endif; ?>
                            
                                
                                <?php if ( is_active_sidebar( 'tel' ) ) : ?>
	                            <?php dynamic_sidebar( 'tel' ); ?>
                                <?php endif; ?>
                               
                            </div>
                        </div>

                        <div class="col-6 w-50 pos-menu pos-relative">
                            <div>
                                <input class="checkInput" type="checkbox" name="check-input" id="check">

                                <label for="check" class="check">
                                    <!-- <div class="span-menu">MENU</div> -->
                                    <span class="span-1"></span>
                                    <span class="span-2"></span>
                                    <span class="span-3"></span>
                                </label>

                                <nav class="nav-style">

                                <?php if ( is_active_sidebar( 'menu-burger' ) ) : ?>
	                            <?php dynamic_sidebar( 'menu-burger' ); ?>
                                <?php endif; ?>
                                    <!-- <ul class="list-style">

                                        <li class="li-style">
                                            <label for="check">
                                                <a class="link-style" id="link-style1"
                                                    href="#presentation">Présentation</a>
                                            </label>
                                        </li>
                                        <li class="li-style">
                                            <label class="" for="check">
                                                <a class="link-style" id="link-style2"
                                                    href="#prestation">Prestations</a>
                                            </label>

                                        </li>
                                        <li class="li-style">
                                            <label class="" for="check">
                                                <a class="link-style" id="link-style3" href="#contact">Contact</a>
                                            </label>

                                        </li>
                                    </ul> -->
                                </nav>
                                <div class="bgc">
                                </div>
                            </div>
                            <nav class="nav-header">

                            <?php wp_nav_menu( 
                            array( 
                            'nav' => 'header', 
                            'container' => 'ul', 
                            'menu_class' => 'list-nav d-flex white-space list-style',
                            ));
                            ?>                       
                            </nav>
                        </div>
                        <?php if ( is_active_sidebar( 'slogan' ) ) : ?>
	                            <?php dynamic_sidebar( 'slogan' ); ?>
                                <?php endif; ?>
                    </div>
                </div>
            </div>

            

            <?php if ( is_active_sidebar( 'slide-1' ) ) : ?>
	                            <?php dynamic_sidebar( 'slide-1' ); ?>
                                <?php endif; ?>


            <?php if ( is_active_sidebar( 'slide-2' ) ) : ?>
	                            <?php dynamic_sidebar( 'slide-2' ); ?>
                                <?php endif; ?>

       
                                <?php if ( is_active_sidebar( 'slide-3' ) ) : ?>
	                            <?php dynamic_sidebar( 'slide-3' ); ?>
                                <?php endif; ?>
        </div>
    </header>

    <script>
        let linkstyle1 = document.querySelector('#link-style1');
        let linkstyle2 = document.querySelector('#link-style2');
        let linkstyle3 = document.querySelector('#link-style3');
        let bgc = document.querySelector('.bgc');
        let inputCheck = document.querySelector('#check');

        linkstyle1.addEventListener('click', function () {
            inputCheck.checked = false;
        })
        linkstyle2.addEventListener('click', function () {
            inputCheck.checked = false;
        })
        linkstyle3.addEventListener('click', function () {
            inputCheck.checked = false;
        })
    </script>