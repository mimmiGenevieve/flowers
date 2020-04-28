<!DOCTYPE html>
<html lang="sv-SE">
<head>
         <meta charset="UTF-8">
         <meta name="description" content="Din Blomsterflicka">
         <title><?php wp_title(); ?></title>
         
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
         <link rel="stylesheet" href="https://use.typekit.net/uhd8fla.css">
         <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
    </head>
<body>

<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'navigation-main' ) );