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
    <?php wp_head(); ?> <!-- It leads the scripts and stylsheets in the head tag instead of linking stylesheet like: <link rel="stylesheet" href=""> we use wp_head(); to load the stylesheets and scripts for our head -->
</head>
<body>
  <header>Header</header>
