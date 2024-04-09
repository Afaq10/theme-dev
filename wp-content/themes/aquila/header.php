<?php
/**
 * Header template.
 * 
 * @package Aquila
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!-- language attributes function used for dynammic language values i.e. if your site is multilingual -->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"> <!--bloginfo function retrieves the information about current site if you read the function there many values that can be passed and based on those values information will be provided -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> <!-- It loads the scripts and stylsheets in the head tag instead of linking stylesheet like: <link rel="stylesheet" href=""> we use wp_head(); to load the stylesheets and scripts for our head -->
</head>
<body <?php body_class(); ?>> <!-- body_class() funtion adds a bunch of classes for every page, you can even add more classes by pass it as arguments 'additional-class' -->

<?php wp_body_open(); ?> <!-- It Enable to inset asynchronous javascript code right after the opening body tag i.e useful to inject GMT or Pixel code -->

<header>Header</header>

  
