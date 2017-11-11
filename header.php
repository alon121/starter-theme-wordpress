
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
</head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <meta charset="UTF-8">
    <title> 
<?php
wp_title('|', true, 'right' );
bloginfo('name');
?>

    </title>
    <?php wp_head(); ?>
</head>
 <body <?php body_class();  ?> >
<div class="row">
<nav class="navbar navbar-default navbar-static-top" id="top-same">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="<?php bloginfo('name') ?>" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'menu_class' => 'nav navbar-nav', 'container' => 'ul' ) ); ?>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>